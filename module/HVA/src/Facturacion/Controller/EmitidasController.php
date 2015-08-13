<?php

namespace Facturacion\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class EmitidasController extends AbstractActionController
{

    public function listarAction(){
        
        $collection =  \FacturaQuery::create()->orderByIdfactura('DESC')->filterByFacturaStatus('creada')->find();
        $arr = array();
        foreach ($collection->toArray(null,false,  \BasePeer::TYPE_FIELDNAME) as $entity){
            $fecha = new \DateTime($entity['factura_fecha']);
            $tmp['id'] = $entity['idfactura'];
            $tmp['fecha'] = $fecha->format('d-m-Y H:s');
            if(!is_null($entity['idadmision'])){
                $tmp['movimiento'] = 'ADM-'.$entity['idadmision'];
            }else if(!is_null($entity['idconsulta'])){
                $tmp['movimiento'] = 'CON-'.$entity['idconsulta'];
            }else{
                $tmp['movimiento'] = 'VP-'.$entity['idventa'];
            }
            $tmp['uuid'] = $entity['factura_cfdi'];
            $arr[] = $tmp;
        }
        
        return new ViewModel(array(
            'collection' => $arr,
            'flashErrorMessages' => $this->flashMessenger()->getErrorMessages(),
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
    }
    
    public function enviarAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            $factura = \FacturaQuery::create()->findPk($post_data['id']);
            $file = $factura->getFacturaUrlXml(); $file = explode('/tmp/xml/', $file);
            $file = explode('.', $file[1]); $file = $file[0];
            
            $xml = $file.'.xml';
            $pdf = $file.'.pdf';
            

            $mail = new \PHPMailer();
            $mail->isSMTP();   
            $mail->Host = 'smtp.gmail.com'; 
            $mail->SMTPAuth = true;
            $mail->Username = 'hva.facturacion@gmail.com';
            $mail->Password = 'Hva2015#';                          
            $mail->Port = 25;   
            
            $mail->From = 'facturacion@hospitaldelvalle.com.mx';
            $mail->FromName = 'HOSPITAL DEL VALLE DE ATEMAJAC';
            $mail->addAddress($post_data['email']);     // Add a recipient
            
            $mail->addAttachment($_SERVER['DOCUMENT_ROOT']."/tmp/xml/".$xml); 
            $mail->addAttachment($_SERVER['DOCUMENT_ROOT']."/tmp/pdf/".$pdf); 
            $mail->isHTML(true); 
            
            $mail->Subject = 'FACTURA ELECTRONICA';
            $mail->Body    = 'Buen dia, Le enviamos adjunto su factura elctronica. Saludos!';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            if(!$mail->send()) {
                return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => false, 'msg' => 'Existio un error durante el envio, por favor intentelo mas tarde')));
            } else {
               return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => true, 'msg' => 'Correo electronico enviado satisfactoriamente!')));
            }
                       
            $my_file = $pdf; // puede ser cualquier formato
            $my_path = $_SERVER['DOCUMENT_ROOT']."/tmp/pdf/";
            $my_name = "HOSPITAL DEL VALLE DE ATEMAJAC";
            $my_mail = "facturacion@hospitaldelvalle.com.mx";
            $my_replyto = "facturacion@hospitaldelvalle.com.mx";
            $my_subject = "FACTURA ELECTRONICA";
            $my_message = "";
            
            $envio = $this->mail_attachment($my_file, $my_path, $post_data['email'], $my_mail, $my_name, $my_replyto, $my_subject, $my_message);
            
            if($envio){
                return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => true, 'msg' => 'Correo electronico enviado satisfactoriamente!')));
            }else{
                return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => false, 'msg' => 'Existio un error durante el envio, por favor intentelo mas tarde')));
            }
            
        }
        
        if($this->params()->fromQuery('id')){
            $id = $this->params()->fromQuery('id');
            
            $factura = \FacturaQuery::create()->findPk($id);
            $idpaciente = $factura->getPacientefacturacion()->getPaciente()->getIdpaciente();
            
            $facturacion = \PacientefacturacionQuery::create()->filterByIdpaciente($idpaciente)->find();
            
            $emails = array();
            foreach ($facturacion as $data){
                $email = $data->getPacientefacturacionEmail();
                if(!is_null($email) && !empty($email)){
                    $emails[$data->getIdpacientefacturacion()] = $email;
                }
                
               
            }
            $viewModel = new ViewModel();
            $viewModel->setTerminal(true);
            $viewModel->setVariable('id', $id);
            $viewModel->setVariable('emails', $emails);
            return $viewModel;
            
        }
        $this->getResponse()->setStatusCode(404);
        return;
    }
    
    public function mail_attachment($filename, $path, $mailto, $from_mail, $from_name, $replyto, $subject, $message) {
       
        
        $file = $path . $filename;
        $file_size = filesize($file);
        $handle = fopen($file, "r");
        $content = fread($handle, $file_size);
        fclose($handle);
        $content = chunk_split(base64_encode($content));
        $uid = md5(uniqid(time()));
        $name = basename($file);
        $header = "From: " . $from_name . " <" . $from_mail . ">\r\n";
        $header .= "Reply-To: " . $replyto . "\r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-Type: multipart/mixed; boundary=\"" . $uid . "\"\r\n\r\n";
        $header .= "This is a multi-part message in MIME format.\r\n";
        $header .= "--" . $uid . "\r\n";
        $header .= "Content-type:text/plain; charset=iso-8859-1\r\n";
        $header .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
        $header .= $message . "\r\n\r\n";
        $header .= "--" . $uid . "\r\n";
        $header .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"\r\n"; // use different content types here
        $header .= "Content-Transfer-Encoding: base64\r\n";
        $header .= "Content-Disposition: attachment; filename=\"" . $filename . "\"\r\n\r\n";
        $header .= $content . "\r\n\r\n";
        $header .= "--" . $uid . "--";
        if (mail($mailto, $subject, "", $header)) {
            return true; // or use booleans here
        } else {
            return false;
        }
    }

}
