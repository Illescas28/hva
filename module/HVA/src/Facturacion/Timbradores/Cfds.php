<?php

namespace Facturacion\Timbradores;

use Zend\Config\Reader\Xml;

// error_reporting(E_ALL & ~(E_WARNING | E_NOTICE));

class Cfds {

    // DOF (Diario Oficial de la Federacion, al 17/02/2014 ): http://www.dof.gob.mx/nota_detalle.php?codigo=5332803&fecha=17/02/2014
    // XSD: http://www.sat.gob.mx/sitio_internet/cfd/3/cfdv32.xsd
    // XSLT: http://www.sat.gob.mx/sitio_internet/cfd/3/cadenaoriginal_3_2/cadenaoriginal_3_2.xslt

    protected $xml;
    //protected $cadena_original;
    protected $sello;
    protected $texto;
    protected $return;
    protected $root;

    //protected $arr = array();
//
    //  protected $tmpDir = '/vagrant/dev/api/module/API/tmp/';
    //=======================================
    // contructor
    public function __construct() {
        $this->xml = new \DOMDocument("1.0", "UTF-8");
    }

    //=======================================
    // satxmlsv32
    public function satxmlsv32($arr) {
        $return = false;

        if ($this->genera_xml($arr)) { //, $edidata, $dir, $nodo, $addenda  

            if ($res = $this->genera_cadena_original()) {
                
                $return['cadenaOriginal'] = $res;
                
                if ($this->sella($arr)) {

                    if ($xmlId = $this->termina($arr)) {

                        $return['xmlId'] = $xmlId;
                    } else {
                        $return['error'] = 'Error al terminar';
                    }
                } else {
                    $return['error'] = 'Error al sellar';
                }
            } else {
                $return['error'] = 'Error al generar cadena original';
            }
        } else {
            $return['error'] = 'Error al generar xml';
        }

//        var_dump($return);
//        exit();
        return $return;
    }

    //=======================================
    // genera XML
    private function genera_xml($arr) {

        //global $xml, $return;
        //$this->xml = new \DOMdocument("1.0", "UTF-8");
         
        $this->generales($arr);
        $this->emisor($arr);
        $this->receptor($arr);
        $this->conceptos($arr);
        $this->impuestos($arr);

        // $this->complemento();

        $ok = $this->valida();

        if (!$ok) {
            $this->display_xml_errors();
            die("Error al validar XSD\n");
        } else {
            //die('Ok');
            return true;
        }
        //addenda($arr, $edidata, $dir,$nodo,$addenda);
    }

    //=======================================
    // generales
    private function generales($arr) {
        $root = $this->xml->createElement("cfdi:Comprobante");
        $this->root = $this->xml->appendChild($root);

        $this->cargaAtt($this->root, array("xmlns:cfdi" => "http://www.sat.gob.mx/cfd/3",
            "xmlns:xsi" => "http://www.w3.org/2001/XMLSchema-instance",
            "xsi:schemaLocation" => "http://www.sat.gob.mx/cfd/3  http://www.sat.gob.mx/sitio_internet/cfd/3/cfdv32.xsd"
                )
        );

        $this->cargaAtt($this->root, array("version" => "3.2",
//            "serie" => $arr['serie'],
//            "folio" => $arr['folio'],
            "fecha" => $this->xml_fech($arr['fecha']),
            "sello" => "@",
            "formaDePago" => $arr['formaDePago'],
            "noCertificado" => $arr['noCertificado'],
            "certificado" => "@",
            "subTotal" => $arr['subTotal'],
            "descuento" => $arr['descuento'],
            "total" => $arr['total'],
            "tipoDeComprobante" => $arr['tipoDeComprobante'],
            "metodoDePago" => $arr['metodoDePago'],
            "LugarExpedicion" => $arr['LugarExpedicion'],
                // "NumCtaPago" => $arr['NumCtaPago'],
                // "FolioFiscalOrig" => $arr['FolioFiscalOrig'],
                // "SerieFolioFiscalOrig" => $arr['SerieFolioFiscalOrig'],
                // "FechaFolioFiscalOrig" => $this->xml_fech($arr['FechaFolioFiscalOrig']),
                // "MontoFolioFiscalOrig" => $arr['MontoFolioFiscalOrig']
                )
        );
    }

    //=======================================
    // Datos del Emisor
    private function emisor($arr) {

        $emisor = $this->xml->createElement("cfdi:Emisor");
        $emisor = $this->root->appendChild($emisor);
        $this->cargaAtt($emisor, array(
            "rfc" => strtoupper( $arr['Emisor']['rfc'] ),
            "nombre" => $arr['Emisor']['nombre']
                )
        );
        $domfis = $this->xml->createElement("cfdi:DomicilioFiscal");
        $domfis = $emisor->appendChild($domfis);
//        $this->cargaAtt($domfis, array(
//            "calle" => "Lopez Mateos Sur",
//            "noExterior" => "2075",
//            "noInterior" => "z-11",
//            "colonia" => "Pasesos del Sol",
//            "municipio" => "Guadalajara",
//            "estado" => "Jalisco",
//            "pais" => "MEXICO",
//            "codigoPostal" => "55348"
//                )
//        );
        $this->cargaAtt($domfis, array(
            "calle" => $arr['Emisor']['Domicilio']['calle'],
            "noExterior" => $arr['Emisor']['Domicilio']['noExterior'],
            "noInterior" => $arr['Emisor']['Domicilio']['noInterior'],
            "colonia" => $arr['Emisor']['Domicilio']['colonia'],
            //"localidad" => $arr['Emisor']['Domicilio']['localidad'],
            "municipio" => $arr['Emisor']['Domicilio']['municipio'],
            "estado" => $arr['Emisor']['Domicilio']['estado'],
            "pais" => $arr['Emisor']['Domicilio']['pais'],
            "codigoPostal" => $arr['Emisor']['Domicilio']['codigoPostal'],
                )
        );

        $regimen = $this->xml->createElement("cfdi:RegimenFiscal");
        $expedido = $emisor->appendChild($regimen);
        $this->cargaAtt($regimen, array(
            "Regimen" => $arr['Emisor']['Regimen']
                )
        );
    }

    //=======================================
    // Datos del Receptor
    private function receptor($arr) {
        $receptor = $this->xml->createElement("cfdi:Receptor");
        $receptor = $this->root->appendChild($receptor);

        if ($arr['Receptor']['rfc'] != 'XAXX010101000') {

            $this->cargaAtt($receptor, array(
                "rfc" => $arr['Receptor']['rfc'],
                "nombre" => $arr['Receptor']['nombre']
                    )
            );
            $domicilio = $this->xml->createElement("cfdi:Domicilio");
            $domicilio = $receptor->appendChild($domicilio);
            $this->cargaAtt($domicilio, array(
                "calle" => $arr['Receptor']['Domicilio']['calle'],
                "noExterior" => $arr['Receptor']['Domicilio']['noExterior'],
                "noInterior" => $arr['Receptor']['Domicilio']['noInterior'],
                "colonia" => $arr['Receptor']['Domicilio']['colonia'],
                "localidad" => $arr['Receptor']['Domicilio']['localidad'],
                "municipio" => $arr['Receptor']['Domicilio']['municipio'],
                "estado" => $arr['Receptor']['Domicilio']['estado'],
                "pais" => $arr['Receptor']['Domicilio']['pais'],
                "codigoPostal" => $arr['Receptor']['Domicilio']['codigoPostal'],
                    )
            );
        } else {
            $this->cargaAtt($receptor, array(
                "rfc" => $arr['Receptor']['rfc'],
                    )
            );
        }
    }

    //=======================================
    // Detalle de los conceptos/productos de la factura
    private function conceptos($arr) {

        //global $root, $xml;

        $conceptos = $this->xml->createElement("cfdi:Conceptos");
        $conceptos = $this->root->appendChild($conceptos);

        //$this->pre($arr);
        //for ($i = 0; $i <= sizeof($arr['Conceptos']); $i++) {
        foreach ($arr['Conceptos'] as $item) {
            $concepto = $this->xml->createElement("cfdi:Concepto");
            $concepto = $conceptos->appendChild($concepto);
            $prun = $item['valorUnitario'];
            $this->cargaAtt($concepto, array(
                "cantidad" => $item['cantidad'],
                "unidad" => $item['unidad'],
                "descripcion" => $item['descripcion'],
                "valorUnitario" => $item['valorUnitario'],
                "importe" => $item['importe'],
                    )
            );
        }
    }

    //=======================================
    // Impuesto (IVA)
    private function impuestos($arr) {  //, $edidata, $dir,$nodo,$addenda
        // global $root, $xml;
        $impuestos = $this->xml->createElement("cfdi:Impuestos");
        $impuestos = $this->root->appendChild($impuestos);
        if (isset($arr['Traslados']['importe'])) {
            $traslados = $this->xml->createElement("cfdi:Traslados");
            $traslados = $impuestos->appendChild($traslados);
            $traslado = $this->xml->createElement("cfdi:Traslado");
            $traslado = $traslados->appendChild($traslado);
            $this->cargaAtt($traslado, array("impuesto" => $arr['Traslados']['impuesto'],
                "tasa" => $arr['Traslados']['tasa'],
                "importe" => $arr['Traslados']['importe']
                    )
            );
        }
        $impuestos->SetAttribute("totalImpuestosTrasladados", $arr['Traslados']['importe']);
    }

    //=======================================
    //  genera_cadena_original
    private function genera_cadena_original() {
        $return = false;

        $paso = new \DOMDocument("1.0", "UTF-8");
        $paso->loadXML($this->xml->saveXML());

        $xsl = new \DOMDocument("1.0", "UTF-8");
        $xsl->load(__DIR__ . "/estructuras/cadenaoriginal_3_2.xslt");
        
        $proc = new \XSLTProcessor();
        $proc->importStyleSheet($xsl);

        $this->cadena_original = $proc->transformToXML($paso);

        if ($this->cadena_original != '') {
            // $this->root->setAttribute("cadenaOriginal", $this->cadena_original);
            $return = $this->cadena_original;
        }

        return $return;
    }

    //=======================================
    // Calculo de sello
    private function sella($arr) {
        $return = false;
        //global $root, $cadena_original, $sello;
//        $noCertificado =  $arr['noCertificado'];  //
//        
//        $ruta = __DIR__ . "/certificados/";
//        
//        $file = $ruta . $noCertificado . ".key.pem";      // Ruta al archivo
        // Obtiene la llave privada del Certificado de Sello Digital (CSD),
        // Ojo , Nunca es la FIEL/FEA
        //$pkeyid = openssl_get_privatekey(file_get_contents($file));
        $pkeyid = openssl_get_privatekey($arr['keypem']);
            
        openssl_sign($this->cadena_original, $crypttext, $pkeyid, OPENSSL_ALGO_SHA1);
        openssl_free_key($pkeyid);

        $this->sello = base64_encode($crypttext);      // lo codifica en formato base64
        $this->root->setAttribute("sello", $this->sello);

        //$file = $ruta . $noCertificado . ".cer.pem";      // Ruta al archivo de Llave publica
        //$datos = explode('\r\n', $arr['cerpem']);  // file($file);


        $datos = explode('-----BEGIN CERTIFICATE-----', $arr['cerpem']);

        $datos = explode('-----END CERTIFICATE-----', $datos[1]);
//        
        $datos = explode("\n", $datos[0]);

        // $this->pre( $datos  );
//        
        $certificado = "";
        $carga = false;
        for ($i = 0; $i < sizeof($datos); $i++) {
//            if (strstr($datos[$i], "END CERTIFICATE"))
//                $carga = false;
//            if ($carga)
            $certificado .= trim($datos[$i]);
//            if (strstr($datos[$i], "BEGIN CERTIFICATE"))
//                $carga = true;
        }

//        var_dump($certificado);
//        $certificado = $datos[0];
        // El certificado como base64 lo agrega al XML para simplificar la validacion
        if ($this->root->setAttribute("certificado", $certificado))
            $return = true;

        return $return;
    }

    //=======================================
    // Termina, graba en edidata o genera archivo en el disco
    private function termina($arr) {
        //global $xml;
        $return = false;

        $this->xml->formatOutput = true;
        $todo = $this->xml->saveXML();

        $this->xml->formatOutput = true;
        $xmlId = $arr['id'];    // Junta el numero de factura   serie + folio

        $file = $_SERVER['DOCUMENT_ROOT'].'/tmp/xml/'.$xmlId . '.xml'; //__DIR__.'/xmlsxmls/' . $xmlId . ".xml";
        
        if (file_exists($file)) {
            unlink($file);
        }
                
                
         
        $this->xml->save($file);
        $return = $xmlId;

        return($return);
    }

    //=======================================
    // Funcion que carga los atributos a la etiqueta XML
    private function cargaAtt(&$nodo, $attr) {
        $quitar = array(
            'sello' => 1,
            'noCertificado' => 1,
            'certificado' => 1
        );

        foreach ($attr as $key => $val) {
            for ($i = 0; $i < strlen($val); $i++) {
                $a = substr($val, $i, 1);
                if ($a > chr(127) && $a !== chr(219) && $a !== chr(211) && $a !== chr(209)) {
                    $val = substr_replace($val, ".", $i, 1);
                }
            }
            $val = preg_replace('/\s\s+/', ' ', $val);   // Regla 5a y 5c
            $val = trim($val);                           // Regla 5b
            if (strlen($val) > 0) {                      // Regla 6
                $val = str_replace(array('"', '>', '<'), "'", $val);  // &...;
                $val = utf8_encode(str_replace("|", "/", $val)); // Regla 1
                $nodo->setAttribute($key, $val);
            }
        }

        // $this->pre($nodo);
    }

    //=======================================
    // Formateo de la fecha en el formato XML requerido (ISO)
    private function xml_fech($fech) {
        /*       $ano = substr($fech, 0, 4);
          $mes = substr($fech, 4, 2);
          $dia = substr($fech, 6, 2);
          $hor = substr($fech, 8, 2);
          $min = substr($fech, 10, 2);
          $seg = substr($fech, 12, 2);
          $aux = $ano . "-" . $mes . "-" . $dia . "T" . $hor . ":" . $min . ":" . $seg;
          if ($aux == "--T::")
          $aux = ""; */

        $aux = date('Y-m-d', strtotime($fech)) . 'T' . date('H:m:s', strtotime($fech));

        return ($aux);
    }

    //=======================================
    // valida que el xml coincida con esquema XSD
    private function valida() {
        $ok = false;

        $this->xml->formatOutput = true;

        $this->texto = $this->xml->saveXML();

        $paso = new \DOMDocument("1.0", "UTF-8");
        $paso->loadXML($this->texto);

        libxml_use_internal_errors(true);
        libxml_clear_errors();

        $file = __DIR__ . "/estructuras/cfdv32complemento.xsd";

        try {
            $ok = $paso->schemaValidate($file);
        } catch (Exception $e) {
            echo 'Excepción capturada: ', $e->getMessage(), "\n";
            echo $e->getLine();
        }

        return $ok;
    }

    //=======================================
    //  display_xml_errors
    private function display_xml_errors() {

        $lineas = explode("\n", $this->texto);
        $errors = libxml_get_errors();

        //$this->pre($lineas);

        foreach ($errors as $error) {
            echo $this->display_xml_error($error, $lineas);
        }

        libxml_clear_errors();
    }

    //=======================================
    //  display_xml_error
    private function display_xml_error($error, $lineas) {

        $return = '';

        if (isset($lineas[$error->line - 1])) {
            $return .= $lineas[$error->line - 1] . "\n<br>";
        }

        $return .= str_repeat('-', $error->column) . "^\n<br>";

        switch ($error->level) {
            case LIBXML_ERR_WARNING:
                $return .= "Warning $error->code: ";
                break;

            case LIBXML_ERR_ERROR:
                $return .= "Error $error->code: ";
                break;
            case LIBXML_ERR_FATAL:
                $return .= "Fatal Error $error->code: ";
                break;
        }

        $return .= trim($error->message) .
                "\n<br>  Linea: $error->line" .
                "\n<br>  Columna: $error->column";
        echo "$return\n\n<br>--------------------------------------------\n\n<br><br>";
    }

/// }}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{
// ===================================================================================
    /** pre * */
    public function pre($arr) {

        /*     var_dump($arr);
          printf('<pre>');
          printf($arr);
          printf('</pre>');
         */
        print_r('<pre>');
        print_r($arr);
        print_r('</pre>');
    }

}
