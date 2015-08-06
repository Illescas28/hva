<?php

namespace Facturacion\PdfGenerator;

use Facturacion\PdfGenerator\FPDF\FPDF;

class PdfGenerator extends FPDF {
    
    public $cfdi;
    public $cadena_original;
    public $qrcode;


    public function __construct($cfdi,$cadena_original,$qrcode) {
       $this->cfdi = $this->cfdiToArray($cfdi);
       $this->cadena_original = $cadena_original;
       $this->qrcode = $qrcode;
      
       parent::FPDF();
       
    }
    
    public function Header() {
        // Logo
        $this->Image($_SERVER['DOCUMENT_ROOT'].'/img/logo_factura.png', 10, 0, 43);
        //FONT
        $this->SetFont('Arial', '', 10);

        //Folio fiscal
        $this->Cell(100);
        $this->Cell(98, 5, 'FOLIO FISCAL: ' . $this->cfdi['TimbreFiscalDigital']['UUID'], 0, 0, 'R');
        $this->Ln();
        // No Certificado
        $this->Cell(100);
        $this->Cell(98, 5, 'NUMERO CERTIFICADO CSD: ' . $this->cfdi['Comprobante']['noCertificado'], 0, 0, 'R');
        $this->Ln();
        // No Lugar y fecha
        $fecha = new \DateTime($this->cfdi['Comprobante']['fecha']);
        $fecha = $fecha->format('Y-m-d H:m:s');
        $this->Cell(100);
        $this->Cell(98, 5, 'LUGAR Y FECHA: ' . $this->cfdi['Comprobante']['LugarExpedicion'] . ' ' . $fecha, 0, 0, 'R');
        $this->Ln(30);
        $this->SetLineWidth(1);
        $this->Line($this->GetX(), $this->GetY(), 200, $this->GetY());
        $this->Ln(2);
        //Emisor y Recpetor
        $this->SetFont('', 'B');
        $this->Cell(95, 5, 'EMISOR:', 0);
        $this->Cell(95, 5, 'RECEPTOR:', 0);
        $this->Ln();
        $this->SetFont('');
        $this->Cell(95, 5, $this->cfdi['Emisor']['nombre'], 0);
        $this->Cell(95, 5, $this->cfdi['Receptor']['nombre'], 0);
        $this->Ln();
        $this->Cell(95, 5, 'RFC: ' . $this->cfdi['Emisor']['rfc'], 0);
        $this->Cell(95, 5, 'RFC: ' . $this->cfdi['Receptor']['rfc'], 0);
        $this->Ln();
        $this->Cell(95, 5, $this->cfdi['Emisor']['DomicilioFiscal']['calle'] . ' ' . //Calle
                $this->cfdi['Emisor']['DomicilioFiscal']['noExterior'] . ', ' . //NUMERO
                $this->cfdi['Emisor']['DomicilioFiscal']['colonia'] . ' ' .
                'CP: ' . $this->cfdi['Emisor']['DomicilioFiscal']['codigoPostal'], 0); //COLONIA
        $this->Cell(95, 5, $this->cfdi['Receptor']['Domicilio']['calle'] . ' ' . //Calle
                $this->cfdi['Receptor']['Domicilio']['noExterior'] . ', ' . //NUMERO
                $this->cfdi['Receptor']['Domicilio']['colonia'] . ' ' .
                'CP: ' . $this->cfdi['Receptor']['Domicilio']['codigoPostal'], 0); //COLONIA
        $this->Ln(10);
    }
    
    public function FancyTable() {
        // Colores, ancho de línea y fuente en negrita
        $this->SetFillColor(0, 0, 0);
        $this->SetTextColor(255,255,255 );
        $this->SetDrawColor(255, 255, 255);
        $this->SetLineWidth(1);
        $this->SetFont('', 'B');
        // Cabecera
        $this->Cell(20, 7, 'CNT', 'L', 0, '',true);
        $this->Cell(20, 7, 'UNIDAD', 'L', 0, '',true);
        $this->Cell(80, 7, 'DESCRIPCION', 'L', 0, '',true);
        $this->Cell(40, 7, 'PRECIO UNITARIO', 'L', 0, 'R',true);
        $this->Cell(30, 7, 'IMPORTE', 'L', 0, 'R',true);
        $this->Ln();
        // Restauración de colores y fuentes
        $this->SetFillColor(224,235,255);
        $this->SetTextColor(0);
        $this->SetFont('','I',9);
        // Datos
       setlocale(LC_MONETARY, 'en_US');
        foreach ($this->cfdi['Conceptos'] as $row) {
            $this->Cell(20, 6, $row['cantidad'], 'LR', 0, 'L', $fill);
            $this->Cell(20, 6, $row['unidad'], 'LR', 0, 'L', $fill);
            $this->Cell(80, 6, $row['descripcion'], 'L', 0, 'L', $fill);
            $this->Cell(40, 6, money_format('%(#5n',$row['valorUnitario']), 'LR', 0, 'R', $fill);
            $this->Cell(30, 6, money_format('%(#5n',$row['importe']), 'LR', 0, 'R', $fill);
            $this->Ln();
            //$fill = !$fill;
        }
        //Calculo de impuestos
        //IMPORTE
        $this->SetFont('','B',9);
        $this->Ln();
        $this->Cell(20, 6, '', 'LR', 0, 'L', $fill);
        $this->Cell(20, 6, '', 'LR', 0, 'L', $fill);
        $this->Cell(80, 6, '', 'LR', 0, 'L', $fill);
        $this->Cell(40, 6, 'IMPORTE $', 'LR', 0, 'R', $fill);
        $this->Cell(30, 6, money_format('%(#5n',$this->cfdi['Comprobante']['subTotal']), 'LR', 0, 'R', $fill);
        $this->Ln();
        //IVA(TRASLADOS)
        $this->Cell(20, 6, '', 'LR', 0, 'L', $fill);
        $this->Cell(20, 6, '', 'LR', 0, 'L', $fill);
        $this->Cell(80, 6, '', 'LR', 0, 'L', $fill);
        $this->Cell(40, 6, 'IVA (16%)', 'LR', 0, 'R', $fill);
        $this->Cell(30, 6, money_format('%(#5n',$this->cfdi['totalImpuestosTrasladados']), 'LR', 0, 'R', $fill);
        $this->Ln();
         
         //TOTAL
        $this->Cell(20, 6, '', 'LR', 0, 'L', $fill);
        $this->Cell(20, 6, '', 'LR', 0, 'L', $fill);
        $this->Cell(80, 6, '', 'LR', 0, 'L', $fill);
        $this->Cell(40, 6, 'TOTAL $', 'LR', 0, 'R', $fill);
        $this->Cell(30, 6, money_format('%(#5n',$this->cfdi['Comprobante']['total']), 'LR', 0, 'R', $fill);
        $this->Ln(10);
        
    }
    
    public function QrCode() {
        $this->SetDrawColor(0, 0, 0);
        $this->SetFont('','',7);
        $this->SetLineWidth(.25);
        $this->Image($this->qrcode,10,$this->GetY(),43);
        
        $this->SetXY(50,$this->GetY() + 2);
        $this->Cell(150,2.5,'CANTIDAD CON LETRA: '.$this->numtoletras($this->cfdi['Comprobante']['total']));
        $this->Ln();
        $this->SetX(50);
        $this->Cell(150,2.5,'METODO DE PAGO: '.$this->cfdi['Comprobante']['metodoDePago'].' | FORMA DE PAGO: '.$this->cfdi['Comprobante']['formaDePago']);
        $fecha_timbrado = new \DateTime($this->cfdi['TimbreFiscalDigital']['FechaTimbrado']); $fecha_timbrado = $fecha_timbrado->format('Y-m-d H:m:s');
        $this->Ln();
        $this->SetX(50);
        $this->Cell(150,2.5,'REGIMEN FISCAL: '.$this->cfdi['Emisor']['RegimenFiscal'].' | FECHA TIMBRADO: '.$fecha_timbrado);
        $this->Ln();
        $this->SetX(50);
        $this->Cell(150,2.5,'SELLO:');
        $this->Ln();
        $this->SetX(50);
        $this->MultiCell(150,2.5,$this->cfdi['TimbreFiscalDigital']['selloCFD']);
        $this->SetX(50);
        $this->Cell(150,2.5,'SELLO SAT:');
        $this->Ln();
        $this->SetX(50);
        $this->MultiCell(150,2.5,$this->cfdi['TimbreFiscalDigital']['selloSAT']);   
        $this->SetX(50);
        $this->Cell(150,2.5,'NUMERO CERTIFICADO SAT: '.$this->cfdi['TimbreFiscalDigital']['noCertificadoSAT']);
        $this->Ln();
        $this->SetX(50);
        $this->Cell(150,2.5,'CADENA ORIGINAL:');
        $this->Ln();
        $this->SetX(50);
        $this->MultiCell(150,2.5,$this->cadena_original,0,'l');
        $this->Ln(5);
        $this->SetFont('','B',10);
        $this->Cell(190,2.5,'ESTE DOCUMENTO ES UNA REPRESENTACION IMPRESA DE UN CFDI',0,0,'C');
    }
    
    public function Footer() {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

    public function numtoletras($xcifra) {
        $xarray = array(0 => "Cero",
            1 => "UN", "DOS", "TRES", "CUATRO", "CINCO", "SEIS", "SIETE", "OCHO", "NUEVE",
            "DIEZ", "ONCE", "DOCE", "TRECE", "CATORCE", "QUINCE", "DIECISEIS", "DIECISIETE", "DIECIOCHO", "DIECINUEVE",
            "VEINTI", 30 => "TREINTA", 40 => "CUARENTA", 50 => "CINCUENTA", 60 => "SESENTA", 70 => "SETENTA", 80 => "OCHENTA", 90 => "NOVENTA",
            100 => "CIENTO", 200 => "DOSCIENTOS", 300 => "TRESCIENTOS", 400 => "CUATROCIENTOS", 500 => "QUINIENTOS", 600 => "SEISCIENTOS", 700 => "SETECIENTOS", 800 => "OCHOCIENTOS", 900 => "NOVECIENTOS"
        );
//
        $xcifra = trim($xcifra);
        $xlength = strlen($xcifra);
        $xpos_punto = strpos($xcifra, ".");
        $xaux_int = $xcifra;
        $xdecimales = "00";
        if (!($xpos_punto === false)) {
            if ($xpos_punto == 0) {
                $xcifra = "0" . $xcifra;
                $xpos_punto = strpos($xcifra, ".");
            }
            $xaux_int = substr($xcifra, 0, $xpos_punto); // obtengo el entero de la cifra a covertir
            $xdecimales = substr($xcifra . "00", $xpos_punto + 1, 2); // obtengo los valores decimales
        }

        $XAUX = str_pad($xaux_int, 18, " ", STR_PAD_LEFT); // ajusto la longitud de la cifra, para que sea divisible por centenas de miles (grupos de 6)
        $xcadena = "";
        for ($xz = 0; $xz < 3; $xz++) {
            $xaux = substr($XAUX, $xz * 6, 6);
            $xi = 0;
            $xlimite = 6; // inicializo el contador de centenas xi y establezco el límite a 6 dígitos en la parte entera
            $xexit = true; // bandera para controlar el ciclo del While
            while ($xexit) {
                if ($xi == $xlimite) { // si ya llegó al límite máximo de enteros
                    break; // termina el ciclo
                }

                $x3digitos = ($xlimite - $xi) * -1; // comienzo con los tres primeros digitos de la cifra, comenzando por la izquierda
                $xaux = substr($xaux, $x3digitos, abs($x3digitos)); // obtengo la centena (los tres dígitos)
                for ($xy = 1; $xy < 4; $xy++) { // ciclo para revisar centenas, decenas y unidades, en ese orden
                    switch ($xy) {
                        case 1: // checa las centenas
                            if (substr($xaux, 0, 3) < 100) { // si el grupo de tres dígitos es menor a una centena ( < 99) no hace nada y pasa a revisar las decenas
                            } else {
                                $key = (int) substr($xaux, 0, 3);
                                if (TRUE === array_key_exists($key, $xarray)) {  // busco si la centena es número redondo (100, 200, 300, 400, etc..)
                                    $xseek = $xarray[$key];
                                    $xsub = $this->subfijo($xaux); // devuelve el $this->subfijo correspondiente (Millón, Millones, Mil o nada)
                                    if (substr($xaux, 0, 3) == 100)
                                        $xcadena = " " . $xcadena . " CIEN " . $xsub;
                                    else
                                        $xcadena = " " . $xcadena . " " . $xseek . " " . $xsub;
                                    $xy = 3; // la centena fue redonda, entonces termino el ciclo del for y ya no reviso decenas ni unidades
                                }
                                else { // entra aquí si la centena no fue numero redondo (101, 253, 120, 980, etc.)
                                    $key = (int) substr($xaux, 0, 1) * 100;
                                    $xseek = $xarray[$key]; // toma el primer caracter de la centena y lo multiplica por cien y lo busca en el arreglo (para que busque 100,200,300, etc)
                                    $xcadena = " " . $xcadena . " " . $xseek;
                                } // ENDIF ($xseek)
                            } // ENDIF (substr($xaux, 0, 3) < 100)
                            break;
                        case 2: // checa las decenas (con la misma lógica que las centenas)
                            if (substr($xaux, 1, 2) < 10) {
                                
                            } else {
                                $key = (int) substr($xaux, 1, 2);
                                if (TRUE === array_key_exists($key, $xarray)) {
                                    $xseek = $xarray[$key];
                                    $xsub = $this->subfijo($xaux);
                                    if (substr($xaux, 1, 2) == 20)
                                        $xcadena = " " . $xcadena . " VEINTE " . $xsub;
                                    else
                                        $xcadena = " " . $xcadena . " " . $xseek . " " . $xsub;
                                    $xy = 3;
                                }
                                else {
                                    $key = (int) substr($xaux, 1, 1) * 10;
                                    $xseek = $xarray[$key];
                                    if (20 == substr($xaux, 1, 1) * 10)
                                        $xcadena = " " . $xcadena . " " . $xseek;
                                    else
                                        $xcadena = " " . $xcadena . " " . $xseek . " Y ";
                                } // ENDIF ($xseek)
                            } // ENDIF (substr($xaux, 1, 2) < 10)
                            break;
                        case 3: // checa las unidades
                            if (substr($xaux, 2, 1) < 1) { // si la unidad es cero, ya no hace nada
                            } else {
                                $key = (int) substr($xaux, 2, 1);
                                $xseek = $xarray[$key]; // obtengo directamente el valor de la unidad (del uno al nueve)
                                $xsub = $this->subfijo($xaux);
                                $xcadena = " " . $xcadena . " " . $xseek . " " . $xsub;
                            } // ENDIF (substr($xaux, 2, 1) < 1)
                            break;
                    } // END SWITCH
                } // END FOR
                $xi = $xi + 3;
            } // ENDDO

            if (substr(trim($xcadena), -5, 5) == "ILLON") // si la cadena obtenida termina en MILLON o BILLON, entonces le agrega al final la conjuncion DE
                $xcadena.= " DE";

            if (substr(trim($xcadena), -7, 7) == "ILLONES") // si la cadena obtenida en MILLONES o BILLONES, entoncea le agrega al final la conjuncion DE
                $xcadena.= " DE";

            // ----------- esta línea la puedes cambiar de acuerdo a tus necesidades o a tu país -------
            if (trim($xaux) != "") {
                switch ($xz) {
                    case 0:
                        if (trim(substr($XAUX, $xz * 6, 6)) == "1")
                            $xcadena.= "UN BILLON ";
                        else
                            $xcadena.= " BILLONES ";
                        break;
                    case 1:
                        if (trim(substr($XAUX, $xz * 6, 6)) == "1")
                            $xcadena.= "UN MILLON ";
                        else
                            $xcadena.= " MILLONES ";
                        break;
                    case 2:
                        if ($xcifra < 1) {
                            $xcadena = "CERO PESOS $xdecimales/100 M.N.";
                        }
                        if ($xcifra >= 1 && $xcifra < 2) {
                            $xcadena = "UN PESO $xdecimales/100 M.N. ";
                        }
                        if ($xcifra >= 2) {
                            $xcadena.= " PESOS $xdecimales/100 M.N. "; //
                        }
                        break;
                } // endswitch ($xz)
            } // ENDIF (trim($xaux) != "")
            // ------------------      en este caso, para México se usa esta leyenda     ----------------
            $xcadena = str_replace("VEINTI ", "VEINTI", $xcadena); // quito el espacio para el VEINTI, para que quede: VEINTICUATRO, VEINTIUN, VEINTIDOS, etc
            $xcadena = str_replace("  ", " ", $xcadena); // quito espacios dobles
            $xcadena = str_replace("UN UN", "UN", $xcadena); // quito la duplicidad
            $xcadena = str_replace("  ", " ", $xcadena); // quito espacios dobles
            $xcadena = str_replace("BILLON DE MILLONES", "BILLON DE", $xcadena); // corrigo la leyenda
            $xcadena = str_replace("BILLONES DE MILLONES", "BILLONES DE", $xcadena); // corrigo la leyenda
            $xcadena = str_replace("DE UN", "UN", $xcadena); // corrigo la leyenda
        } // ENDFOR ($xz)
        return trim($xcadena);
    }

    public function subfijo($xx) { // esta función regresa un $this->subfijo para la cifra
        $xx = trim($xx);
        $xstrlen = strlen($xx);
        if ($xstrlen == 1 || $xstrlen == 2 || $xstrlen == 3)
            $xsub = "";
        //
        if ($xstrlen == 4 || $xstrlen == 5 || $xstrlen == 6)
            $xsub = "MIL";
        //
        return $xsub;
    }
    
    public function cfdiToArray($cfdi){
        
        $xml = simplexml_load_string($cfdi); 
        $ns = $xml->getNamespaces(true);
        $xml->registerXPathNamespace('c', $ns['cfdi']);
        $xml->registerXPathNamespace('t', $ns['tfd']);
        
        $arr = array();
        //EMPIEZO A LEER LA INFORMACION DEL CFDI
        $arr['Comprobante'] = array();
        foreach ($xml->xpath('//cfdi:Comprobante') as $cfdiComprobante){ 
              $arr['Comprobante']['version'] = (string)$cfdiComprobante['version'];
              $arr['Comprobante']['fecha'] = (string)$cfdiComprobante['fecha'];
              $arr['Comprobante']['LugarExpedicion'] = (string)$cfdiComprobante['LugarExpedicion'];
              $arr['Comprobante']['sello'] = (string)$cfdiComprobante['sello'];
              $arr['Comprobante']['total'] = (string)$cfdiComprobante['total'];
              $arr['Comprobante']['subTotal'] = (string)$cfdiComprobante['subTotal'];
              $arr['Comprobante']['certificado'] = (string)$cfdiComprobante['certificado'];
              $arr['Comprobante']['formaDePago'] = (string)$cfdiComprobante['formaDePago'];
              $arr['Comprobante']['metodoDePago'] = (string)$cfdiComprobante['metodoDePago'];
              $arr['Comprobante']['noCertificado'] = (string)$cfdiComprobante['noCertificado'];
        }
         $arr['Emisor'] = array();
        foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Emisor') as $Emisor) {
            $arr['Emisor']['rfc'] = (string)$Emisor['rfc'];
            $arr['Emisor']['nombre'] = (string)$Emisor['nombre'];
        }
        $arr['Emisor']['DomicilioFiscal'] = array();
        foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Emisor//cfdi:DomicilioFiscal') as $DomicilioFiscal) {
            $arr['Emisor']['DomicilioFiscal']['pais'] = (string)$DomicilioFiscal['pais'];
            $arr['Emisor']['DomicilioFiscal']['calle'] = (string)$DomicilioFiscal['calle'];       
            $arr['Emisor']['DomicilioFiscal']['estado'] = (string)$DomicilioFiscal['estado'];
            $arr['Emisor']['DomicilioFiscal']['colonia'] = (string)$DomicilioFiscal['colonia'];
            $arr['Emisor']['DomicilioFiscal']['municipio'] = (string)$DomicilioFiscal['municipio'];
            $arr['Emisor']['DomicilioFiscal']['noExterior'] = (string)$DomicilioFiscal['noExterior'];
            $arr['Emisor']['DomicilioFiscal']['codigoPostal'] = (string)$DomicilioFiscal['codigoPostal'];
        }
        $arr['Emisor']['RegimenFiscal']= '';
        foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Emisor//cfdi:RegimenFiscal') as $RegimenFiscal) {
            $arr['Emisor']['RegimenFiscal'] = (string) $RegimenFiscal['Regimen'];
        }
        $arr['Receptor'] = array();
        foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Receptor') as $Receptor) {
            $arr['Receptor']['rfc'] = (string)$Receptor['rfc'];
            $arr['Receptor']['nombre'] = (string)$Receptor['nombre'];
        }
        $arr['Receptor']['Domicilio'] = array();
        foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Receptor//cfdi:Domicilio') as $ReceptorDomicilio) {
            $arr['Receptor']['Domicilio']['pais'] = (string)$ReceptorDomicilio['pais'];
            $arr['Receptor']['Domicilio']['calle'] = (string)$ReceptorDomicilio['calle'];
            $arr['Receptor']['Domicilio']['estado'] = (string)$ReceptorDomicilio['estado'];
            $arr['Receptor']['Domicilio']['colonia'] = (string)$ReceptorDomicilio['colonia'];
            $arr['Receptor']['Domicilio']['municipio'] = (string)$ReceptorDomicilio['municipio'];
            $arr['Receptor']['Domicilio']['noExterior'] = (string)$ReceptorDomicilio['noExterior'];
            $arr['Receptor']['Domicilio']['noInterior'] = (string)$ReceptorDomicilio['noInterior'];
            $arr['Receptor']['Domicilio']['codigoPostal'] = (string)$ReceptorDomicilio['codigoPostal'];
        }
        
        $arr['Conceptos']= array();
        foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Conceptos//cfdi:Concepto') as $Concepto){
            $tmp['unidad'] = (string) $Concepto['unidad'];
            $tmp['importe'] = (string) $Concepto['importe'];
            $tmp['cantidad'] = (string) $Concepto['cantidad'];
            $tmp['descripcion'] = (string) $Concepto['descripcion'];
            $tmp['valorUnitario'] = (string) $Concepto['valorUnitario'];
            $arr['Conceptos'][] = $tmp;
        }
         $arr['Traslados']= array();
        foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Impuestos//cfdi:Traslados//cfdi:Traslado') as $Traslado) {
            $tmp = array();
            $tmp['tasa'] = (string) $Traslado['tasa'];
            $tmp['importe'] = (string) $Traslado['importe'];
            $tmp['impuesto'] = (string) $Traslado['impuesto'];
            $arr['Traslados'][] = $tmp;
        }
        $arr['totalImpuestosTrasladados']= '';
        foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Impuestos') as $Impuestos) {
            $arr['totalImpuestosTrasladados'] = (string) $Impuestos['totalImpuestosTrasladados'];
        }
        $arr['TimbreFiscalDigital']= array();
        foreach ($xml->xpath('//t:TimbreFiscalDigital') as $tfd) {
           $arr['TimbreFiscalDigital']['selloCFD'] = (string)$tfd['selloCFD'];
           $arr['TimbreFiscalDigital']['FechaTimbrado'] = (string)$tfd['FechaTimbrado']; 
           $arr['TimbreFiscalDigital']['UUID'] = (string)$tfd['UUID']; 
           $arr['TimbreFiscalDigital']['noCertificadoSAT'] = (string)$tfd['noCertificadoSAT']; 
           $arr['TimbreFiscalDigital']['version'] = (string)$tfd['version']; 
           $arr['TimbreFiscalDigital']['selloSAT'] = (string)$tfd['selloSAT']; 
        } 

        return $arr;
    }
    

}
