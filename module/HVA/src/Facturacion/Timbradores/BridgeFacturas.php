<?php

namespace Facturacion\Timbradores;

use Facturacion\Timbradores\Finkok;
use Facturacion\Timbradores\Cfds;

//use REST\V1\Shared\Functions\FTPConnection;

class BridgeFacturas {

    // SAT Informacion de los campos. : http://www.dof.gob.mx/nota_detalle.php?codigo=5332803&fecha=17/02/2014
    // XML de la descripcion de todos los campos: http://www.sat.gob.mx/sitio_internet/cfd/3/cfdv32.xsd

    private $timbradoresAllowed = array(
        'finkok', // http://wiki.finkok.com/doku.php?id=inicio#ejemplos_de_codigo
        'solucionfactible', //http://solucionfactible.com/sfic/capitulos/timbrado/ws-timbrado-timbrar.jsp#recomendaciones
        'smatweb', //
    );
    private $timbrador = null;
    private $cfds;
    private $taxTypes = array(
        'IVA' => 16, //
        'IEPS' => 0
    );
    protected $timbradorCompany = 'finkok'; //'finkok'; 'solucionfactible';
    protected $isTestEnvironment = true;

    /**
     * 
     * @param type $timbradorCompany
     * @param type $isTestEnvironment
     * @return type
     */
    public function __construct($timbradorCompany = '') {

        if ($timbradorCompany != '')
            $this->timbradorCompany = $timbradorCompany;

        if (!in_array($this->timbradorCompany, $this->timbradoresAllowed)) {
            return array('error' => 'Error al instanciar BridgeFacturas. timbradorCompany is not allowed: ' . $this->timbradorCompany);
        } else {
            // para crear el XML
            $this->cfds = new Cfds();
            $class = "Facturacion\Timbradores\\" . ucfirst($this->timbradorCompany);
          
            $this->timbrador = new $class($this->isTestEnvironment); // Instanciamos la clase del timbrador
        }
    }

    /**
     * 
     * @param type $type
     * @param type $data
     * @return type
     */
    public function timbrar($documentType = 'factura', $ordertype = 'orderservice', $order, $emisor, $receptor) {

        $xmlId = false;
        $response = '';

        $return = false;
        $result = '';


        $arr = array();

        // Segun el tipo de documento
        switch ($documentType) {

            // Facturas
            case 'factura':

                $arr['tipoDeComprobante'] = 'ingreso';
                

//                            $arr['serie'] = '';
//                            $arr['folio'] = '';
//
//                            $arr['noAprobacion'] = ''; 
//                            $arr['anoAprobacion'] = '';
                // $emisor[0] ===> datos fiscales
                // $emisor[1] ===> datos del certificado con que se va a generar el xml
                //var_dump($emisor);
                // El nombre del archivo debe ser igual al numero del certificado, el q estoy usando ahora es CSD010_AAA010101AAA ()
                $arr['noCertificado'] = $emisor['noCertificado'];
                $arr['cerpem'] = $emisor['cerpem'];
                $arr['keypem'] = $emisor['keypem'];


                $arr['LugarExpedicion'] = $emisor['LugarExpedicion']; //'Guadalajara';                                                        
                //$this->pre($emisor);
                // Emisor
                $arr['Emisor']['rfc'] = $emisor['rfc'];
                $arr['Emisor']['nombre'] = $emisor['nombre'];
                $arr['Emisor']['Regimen'] = 'S.A. de C.V.'; //
                $arr['Emisor']['Domicilio']['calle'] = $emisor['Domicilio']['calle'];
                $arr['Emisor']['Domicilio']['noExterior'] = $emisor['Domicilio']['noExterior'];
                $arr['Emisor']['Domicilio']['noInterior'] = $emisor['Domicilio']['noInterior'];
                $arr['Emisor']['Domicilio']['colonia'] = $emisor['Domicilio']['colonia'];
                $arr['Emisor']['Domicilio']['localidad'] = $emisor['Domicilio']['localidad'];
                $arr['Emisor']['Domicilio']['municipio'] = $emisor['Domicilio']['municipio'];
                $arr['Emisor']['Domicilio']['estado'] = $emisor['Domicilio']['estado'];
                $arr['Emisor']['Domicilio']['pais'] = $emisor['Domicilio']['pais'];
                $arr['Emisor']['Domicilio']['codigoPostal'] = $emisor['Domicilio']['codigoPostal'];
               
                // Receptor 
                if ($receptor['clienttaxaddress_taxesid'] != 'XAXX010101000') {

                    $arr['Receptor']['rfc'] = $receptor['pacientefacturacion_rfc'];
                    $arr['Receptor']['nombre'] = $receptor['pacientefacturacion_razonsocial'];
                    $arr['Receptor']['Domicilio']['calle'] = $receptor['pacientefacturacion_calle'];
                    $arr['Receptor']['Domicilio']['noExterior'] = $receptor['pacientefacturacion_noexterior'];
                    $arr['Receptor']['Domicilio']['noInterior'] = $receptor['pacientefacturacion_nointerior'];
                    $arr['Receptor']['Domicilio']['colonia'] = $receptor['pacientefacturacion_colonia'];
                    $arr['Receptor']['Domicilio']['localidad'] = '';
                    $arr['Receptor']['Domicilio']['municipio'] = $receptor['pacientefacturacion_ciudad'];
                    $arr['Receptor']['Domicilio']['estado'] = $receptor['pacientefacturacion_estado'];
                    $arr['Receptor']['Domicilio']['pais'] = $receptor['pacientefacturacion_pais'];
                    $arr['Receptor']['Domicilio']['codigoPostal'] = $receptor['pacientefacturacion_codigopostal'];
                    
                } else {
                    $arr['Receptor']['rfc'] = $receptor['clienttaxaddress_taxesid'];
                }
                
                $arr['fecha'] = date('Y-m-d H:i:s'); // $order['externalorder_paymentdate'];
                //$arr['fecha'] = $order['externalorder_date'];
                $arr['formaDePago'] = 'Pago en una sola exhibición'; // Pago en una sola exhibición o número de parcialidad

                // Segun el tipo de orden
                switch ($ordertype) {

                    case 'ADM':
                         
                        $arr['metodoDePago'] = strtolower($order['admision_tipodepago']);

                        $arr['id'] = 'ADM_'.$order['idadmision'];
                        $arr['subTotal'] = $order['admision_total'];
                        $arr['total'] = $order['admision_total'];

                        $arr['descuento'] = 0;

                        $items = $order['detalles'];
                        $i = 0;
                        foreach ($items as $item) {
                            
                            $arr['Conceptos'][$i]['cantidad'] = $item['cargoadmision_cantidad'];
                            $arr['Conceptos'][$i]['unidad'] = !is_null($item['servicio_unidad']) ? $item['servicio_unidad'] : $item['articulo_unidad'];
                            $arr['Conceptos'][$i]['descripcion'] = !is_null($item['servicio_nombre']) ? $item['servicio_nombre'] : $item['articulo_nombre'];
                            $arr['Conceptos'][$i]['valorUnitario'] = !is_null($item['servicio_valorunitario']) ? $item['servicio_valorunitario'] : $item['articulo_valorunitario'];
                            $arr['Conceptos'][$i]['importe'] = $item['cargoadmision_monto'];

                            $i++;
                        }
                        
                        // Impuestos 
                        $arr['Traslados']['impuesto'] = 'IVA';
                        $arr['Traslados']['tasa'] = $this->taxTypes[$arr['Traslados']['impuesto']];
                        $arr['Traslados']['importe'] = $arr['total'] / $arr['Traslados']['tasa']; //revisar formula
                       
                        
                        break;


                    case 'order':

                        //$arr['folio'] = $order['idorder'];  
                        // Acomodamos los datos para crear el XML, de acuerdo a la version que lo ocupa el SAT

                        $arr['id'] = $order['idorder'];
                        //
//                        $arr['idbranch'] = $order['idbranch'];
//                        $arr['fecha'] = date('Y-m-d H:i:s'); // $order['order_paymentdate'];
//                        $arr['formaDePago'] = 'Pago en una sola exhibición'; // Pago en una sola exhibición o número de parcialidad

                        $arr['subTotal'] = $order['order_total'];
                        $arr['total'] = $order['order_total'];

                        $arr['descuento'] = 0;

                        $items = $order['items'];
                        $i = 0;
                        foreach ($order['items'] as $item) {

                            $arr['Conceptos'][$i]['cantidad'] = $item['orderitem_quantity'];
                            $arr['Conceptos'][$i]['unidad'] = $item['unit'];
                            $arr['Conceptos'][$i]['descripcion'] = $item['item_name'];
                            $arr['Conceptos'][$i]['valorUnitario'] = $item['orderitem_cost'] / $item['orderitem_quantity'];
                            $arr['Conceptos'][$i]['importe'] = $item['orderitem_cost'];

                            $i++;
                        }

                        // Impuestos 
                        $arr['Traslados']['impuesto'] = 'IVA';
                        $arr['Traslados']['tasa'] = $this->taxTypes[$arr['Traslados']['impuesto']];
                        $arr['Traslados']['importe'] = $arr['total'] * ($arr['Traslados']['tasa'] / 100); //revisar formula

                        break;


                    case 'externalorder':

                        //$arr['folio'] = $order['idexternalorder'];  
                        // Acomodamos los datos para crear el XML, de acuerdo a la version que lo ocupa el SAT

                        $arr['id'] = $order['idexternalorder'];
                        //
//                        $arr['idbranch'] = $order['idbranch'];
//                        $arr['fecha'] = $order['externalorder_date']; //date('Y-m-d H:i:s'); // $order['externalorder_paymentdate'];
//                        $arr['formaDePago'] = 'Pago en una sola exhibición'; // Pago en una sola exhibición o número de parcialidad

                        $arr['subTotal'] = $order['externalorder_total'];
                        $arr['total'] = $order['externalorder_total'];

                        $arr['descuento'] = 0;
//                        var_dump($order['items']);
                        $items = $order['items'];
                        $i = 0;
                        foreach ($order['items'] as $item) {

                            $arr['Conceptos'][$i]['cantidad'] = $item['externalorderitem_quantity'];
                            $arr['Conceptos'][$i]['unidad'] = $item['externalorderitem_unit'];
                            $arr['Conceptos'][$i]['descripcion'] = $item['externalorderitem_concept'];
                            $arr['Conceptos'][$i]['valorUnitario'] = $item['externalorderitem_unitprice'];
                            $arr['Conceptos'][$i]['importe'] = $item['externalorderitem_unitprice'] * $item['externalorderitem_quantity'];

                            $i++;
                        }

                        // Impuestos 
                        $arr['Traslados']['impuesto'] = 'IVA';
                        $arr['Traslados']['tasa'] = $this->taxTypes[ $arr['Traslados']['impuesto'] ];
                        $arr['Traslados']['importe'] = $arr['total'] * ($arr['Traslados']['tasa'] / 100); //revisar formula
                        
                        break;

                    default :
                        $return['error'] = "BridgeFacturas error: ordertype " . $ordertype . " is Not implemented yet";
                        break;
                }
                
                //echo '<pre>';var_dump($arr); echo '<pre>';exit();
                if (!isset($return['error']) && $return['error'] == ''){
                    $result = $this->cfds->satxmlsv32($arr);
                   
                }

                break;

            // Nomimas
            case 'nomina':
                $return['error'] = "BridgeFacturas error: documentType " . $documentType . " is Not implemented yet";
                break;
        }

        
        if ($result) {
           
            $return['error'] = '';
            
            $file = $_SERVER['DOCUMENT_ROOT'].'/tmp/xml/' . $result['xmlId']; // __DIR__ . '/xmls/' . $result['xmlId'] . "";
            
            $fileQrcode = TMPDIR . $result['xmlId'] . ".png"; //__DIR__ . '/xmls/' . $result['xmlId'] . ".png";

            // A timbrar con el PAC seleccionado
            $response = $this->timbrador->timbrar($documentType, $file);

            // $response = '';
            
            if (!isset($response['error'])) {

                $return['xmlId'] = $result['xmlId'];
                $return['response'] = $response;
                $return['cadenaOriginal'] = $result['cadenaOriginal'];
                $return['timbradorCompany'] = $this->timbradorCompany;

                if (isset($response['qrCode'])) {
                    // $return['qrCode'] = $response['qrCode'];
                }
            } else
                $return['error'] = $response['error'];
        } else {
            if (!isset($return['error']) && $return['error'] != '')
                $return['error'] = ' No hay xmlId or ' . $return['error'];
        }


        return $return;
    }

    /**
     * 
     * @param type $type
     * @param type $data
     * @return type
     */
    public function cancelaXML($documentType = 'factura', $taxdocument, $companyTaxdata = '') {

        $uuids = false;
        $response = false;
        $return['error'] = 'BridgeFacturas error: unknow';

//        var_dump($documentType);
//        var_dump($taxdocument);
//        var_dump($companyTaxdata);
//        
//        Buscamos el certificado con el que se emitio la factura
//        if ($companyTaxdata != '') {
//            $companyTaxdata = $companyTaxdata;
//        } else {
//            $taxdata = \CompanytaxdataQuery::create()->filterByIdcompany($idCompany)->filterByCompanytaxdataUseasdefault('1');
//            if (!$companyTaxdata->exists())
//                $companyTaxdata = '';
//            else
//                $companyTaxdata = $companyTaxdata->findOne()->toArray(BasePeer::TYPE_FIELDNAME);
//            // ----- FIN Emisor
//        }
//        
        // Si NO se indico una compañia
        if ($taxdocument && $companyTaxdata) {

//            var_dump($companyTaxdata);

            $taxpayer_id = $taxdocument['companytaxaddress_taxesid'];
            $cer = $companyTaxdata['companytaxdata_cerpem'];
            $key = $companyTaxdata['companytaxdata_keypem'];

            // Segun el tipo de documento
            switch ($documentType) {

                case 'factura':
                    switch ($this->timbradorCompany) {
                        case 'finkok': // lo mandamos en forma de array                            
                            $uuids[] = $taxdocument['clienttaxaddressdocument_uuid'];
                            break;

                        case 'solucionfactible':
                            $uuids = $taxdocument['clienttaxaddressdocument_uuid'];
                            break;
                    }
                    break;

                default :
                    $return['error'] = "BridgeFacturas (cancelaXML) error: documentType " . $documentType . ' Not implemented yet';
                    break;
            }




            if ($uuids) {

                $response = $this->timbrador->cancelaXML($documentType, $uuids, $taxpayer_id, $cer, $key);

                if (!isset($response['error'])) {

                    $return = $response;
                } else
                    $return['error'] = $response['error'];
            }else {
                $return['error'] = 'BridgeFacturas error: sin uuids en taxdocument';
//                var_dump($taxdocument);
            }
        }

        return $return;
    }

    /**
     * 
     * @param type $arr
     */
    public function pre($arr) {

        print_r('<pre>');
        print_r($arr);
        print_r('<pre>');
    }

}
