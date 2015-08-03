<?php

namespace Facturacion\Timbradores;

use Facturacion\Timbradores\Cfds;

class Finkok {

    // URL del servicio de Timbrado:
    protected $url_timbrar_development = 'http://demo-facturacion.finkok.com/servicios/soap/stamp.wsdl';
    protected $url_to_cancell_development = 'http://demo-facturacion.finkok.com/servicios/soap/cancel.wsdl';
    //
    protected $url_timbrar_production = 'http://demo-facturacion.finkok.com/servicios/soap/stamp.wsdl';
    protected $url_to_cancell_production = 'http://demo-facturacion.finkok.com/servicios/soap/cancel.wsdl';
    protected $soapClient;
    protected $xmlVersion = '1.0';
    protected $metodo = 'stamp'; //stamp  //quick_stamp
    private $isTestEnvironment; // Se setea a true en el constructor
    # Username and Password, assigned by FINKOK
//    protected $username = 'jorge.l@hostdime.com.mx';
//    protected $password = 'Hostdime15#';
    //
    protected $username = 'jorgealvarez14@hotmail.com';
    protected $password = 'Hva2015#';

    /**
     * 
     */
    public function __construct($isTestEnvironment = true, $action = 'timbrar') {

        $this->isTestEnvironment = $isTestEnvironment;

        if ($this->isTestEnvironment) {
            $this->soapClient = new \SoapClient($this->url_timbrar_development); // URL para timprar en desarrollo 
        } else {
            $this->soapClient = new \SoapClient($this->url_timbrar_production, array('trace' => 1)); // URL para timprar en produccion 
        }
    }

    /**
     * Consumir web service de timbrado
     * @param  string $type [puede ser factura ]
     * @param  [type] $file [el archivo a timbrar]
     * @return [type]       [arreglo con los datos del timbrado]
     */
    public function timbrar($type = 'factura', $file) {

        $ret = false;

        switch ($type) {

            case 'factura':

                # Read the xml file and encode it on base64
                $invoice_path = $file . '.xml';
               
                $xml_file = fopen($invoice_path, "rb");
                $xml_content = fread($xml_file, filesize($invoice_path));
                fclose($xml_file);
               
                // In newer PHP versions the SoapLib class automatically converts FILE parameters to base64, so the next line is not needed, otherwise uncomment it
                //$xml_content = base64_encode($xml_content);
                # Consuming the stamp service

                $params = array(
                    "xml" => $xml_content,
                    "username" => $this->username,
                    "password" => $this->password
                );

                try {
                    
                    $response = $this->soapClient->__soapCall($this->metodo, array($params));
                  
                } catch (\Exception $e) {
                   
                    var_dump($e);
                }

               

                switch ($this->metodo) {

                    // llamada normal
                    case 'stamp':

                        if ($response->stampResult->xml) {

                            // Eliminamos el xml origina y lo reemplazamos por el timbrado por el PAC
                            if (!unlink($invoice_path))
                                echo 'Error al eliminar archivo: ' . $file;


                            // creamos el xml ya timbrado
                            $file = fopen($invoice_path, "w");
                            fwrite($file, $response->stampResult->xml);
                            fclose($file);

                             

                            $ret['version'] = $this->xmlVersion; // $response->stampResult->version; //

                            $ret['xml'] = $response->stampResult->xml;
                            $ret['uuid'] = $response->stampResult->UUID;
                            $ret['fecha'] = $response->stampResult->Fecha;
                            $ret['codEstatus'] = $response->stampResult->CodEstatus;
                            $ret['SatSeal'] = $response->stampResult->SatSeal;
                            $ret['NoCertificadoSAT'] = $response->stampResult->NoCertificadoSAT;
                            
                           
                            
                        }else {
                            // $this->pre($response);
                            if ($response->stampResult->Incidencias) {
                                $ret['error'] = '';
                                foreach ($response->stampResult->Incidencias as $incidencia) {
                                    $ret['error'] .= 'fk: ' . $incidencia->MensajeIncidencia . ' (' . $incidencia->CodigoError . ')'; //$incidencia; //
                                }
                            }
                        }

                        break;


                    // El método quick_stamp es usado para agilizar las respuestas ya que en este método el comprobante solo es validado
                    //  y timbrado y se almacena para ser enviado posteriormente al SAT
                    case 'quick_stamp':

                        if ($response->quick_stampResult->xml) {

                            // creamos el xml ya timbrado
                            $file = fopen($invoice_path, "w");
                            fwrite($file, $response->quick_stampResult->xml);
                            fclose($file);

                            $ret['version'] = $this->xmlVersion;

                            $ret['xml'] = $response->quick_stampResult->xml;
                            $ret['uuid'] = $response->quick_stampResult->UUID;
                            $ret['fecha'] = $response->quick_stampResult->Fecha;
                            $ret['codEstatus'] = $response->quick_stampResult->CodEstatus;
                            $ret['SatSeal'] = $response->quick_stampResult->SatSeal;
                            $ret['NoCertificadoSAT'] = $response->quick_stampResult->NoCertificadoSAT;
                        }
                        // else {
                        // $this->pre($response);
                        if ($response->quick_stampResult->Incidencias) {
                            $ret['error'] = '';
                            foreach ($response->quick_stampResult->Incidencias as $incidencia) {
                                $ret['error'] .= 'fk: ' . $incidencia->MensajeIncidencia . ' (' . $incidencia->CodigoError . ')'; //$incidencia; //
                            }
                        }
                        //}

                        break;
                }


                break;
        }

        // var_dump($response);

        return $ret;
    }

    /**
     * 
     * @param type $type
     * @param type $file
     * @return string
     */
    public function cancelaXML($documentType = 'factura', $uuids, $taxpayer_id, $cer, $key) {

        $ret = false;

        if ($this->isTestEnvironment) {
            // URL para cancellar en desarrollo 
            $this->soapClient = new \SoapClient($this->url_to_cancell_development, array('trace' => 1));
        } else {
            // URL para cancellar en produccion 
            $this->soapClient = new \SoapClient($this->url_to_cancell_production, array('trace' => 1));
        }



        switch ($documentType) {

            case 'factura':

                $params = array(
                    "username" => $this->username,
                    "password" => $this->password,
                    "UUIDS" => array('uuids' => $uuids),
                    "taxpayer_id" => $taxpayer_id,
                    "cer" => $cer,
                    "key" => $key
                );

                $response = $this->soapClient->__soapCall('cancel', array($params));

                // para ver el envelop de la peticion :O
//                var_dump($this->soapClient->__getLastRequest());
//                $this->pre($response);
//                exit();

                if (isset($response->cancelResult->Folios)) {

                    $ret['EstatusUUID'] = $response->cancelResult->Folios->Folio->EstatusUUID;
                    $ret['acuse'] = $response->cancelResult->Acuse;
                    $ret['fecha'] = $response->cancelResult->Fecha;
                    $ret['rfcEmisor'] = $response->cancelResult->RfcEmisor;
                } else {

//                    if ( isset($response->cancelResult->Folios->Folio->EstatusUUID) && $response->cancelResult->Folios->Folio->EstatusUUID != 201) {
                    $ret['error'] = '';
//                    foreach ($response->stampResult->Incidencias as $incidencia) {
//                        $ret['error'] .= 'fk: ' . $incidencia->MensajeIncidencia . ' (' . $incidencia->CodigoError . ')'; //$incidencia; //
//                    }
                    $ret['error'] .= 'fk: ' . $response->cancelResult->CodEstatus;
//                    }else
                }

                break;
        }

        return $ret;
    }

    /**
     * 
     * @param type $arr
     */
    private function pre($arr) {

        print_r('<pre>');
        print_r($arr);
        print_r('<pre>');
    }

}