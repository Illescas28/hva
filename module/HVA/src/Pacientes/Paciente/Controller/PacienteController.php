<?php
namespace Pacientes\Paciente\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Validator\Explode;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

//// Form ////
use Pacientes\Paciente\Form\PacienteForm;
use Pacientes\Consulta\Form\ConsultaForm;
use Pacientes\Admision\Form\AdmisionForm;
use Pacientes\Cargoconsulta\Form\CargoconsultaForm;
use Pacientes\Cargoadmision\Form\CargoadmisionForm;

//// Filter ////
use Pacientes\Paciente\Filter\PacienteFilter;
use Pacientes\Consulta\Filter\ConsultaFilter;
use Pacientes\Admision\Filter\AdmisionFilter;
use Pacientes\Cargoconsulta\Filter\CargoconsultaFilter;
use Pacientes\Cargoadmision\Filter\CargoadmisionFilter;

//// Form ////
use Pacientes\Admisionanticipo\Form\AdmisionanticipoForm;
use Pacientes\Consultaanticipo\Form\ConsultaanticipoForm;
//// Filter ////
use Pacientes\Admisionanticipo\Filter\AdmisionanticipoFilter;
use Pacientes\Consultaanticipo\Filter\ConsultaanticipoFilter;

//// Propel ////
use Paciente;
use PacienteQuery;
use BasePeer;

//// PDF ////
use Pacientes\Paciente\Controller\PDF;

class PacienteController extends AbstractActionController
{
    public function calculaEdad( $fecha ) {
        list($m,$d,$Y) = explode("/",$fecha);
        return( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y );
    }

    /*
    public function calcularEdades($fecha){
        $dias = explode('/', $fecha, 3);
        $dias = mktime(0, 0, 0, $dias[1], $dias[0], $dias[2]);
        $edad = (int)((time()-$dias)/31556926);
        return $edad;
    }
    */
        
    public function contratofinalAction(){

        
        $request = $this->getRequest();
        
        if($request->isPost()){
           

            $admisionQuery = \AdmisionQuery::create()->filterByIdadmision($request->getPost()->idadmision)->findOne();
            
            $nombrepaciente = $admisionQuery->getPaciente()->getPacienteNombre()." ".$admisionQuery->getPaciente()->getPacienteAp(). " " . $admisionQuery->getPaciente()->getPacienteAm();
            $nombremedico = $admisionQuery->getMedico()->getMedicoNombre(). " ". $admisionQuery->getMedico()->getMedicoApellidopaterno(). " " . $admisionQuery->getMedico()->getMedicoApellidomaterno();
            $nombreresponsable = $admisionQuery->getPaciente()->getPacienteResponsable();
            $telresponsable = $admisionQuery->getPaciente()->getPacienteTelefonoresponsable();
            $telefonocel = $admisionQuery->getPaciente()->getPacienteTelefonocelular();
            $nombrepadre = $admisionQuery->getPaciente()->getPacientePadre();
            $nombremadre = $admisionQuery->getPaciente()->getPacienteMadre();
            $nombreconyuge = $admisionQuery->getPaciente()->getPacienteConyuge();
            $observaciones= $admisionQuery->getAdmisionObservaciones();
            $diagnostico = $admisionQuery->getAdmisionDiagnostico();
            $cuarto = $admisionQuery->getCuarto()->getCuartoNombre();
            $cama="";
            $sexo = $admisionQuery->getPaciente()->getPacienteSexo();
            $estadocivil = $admisionQuery->getPaciente()->getPacienteEstadocivil();
            $direccion = $admisionQuery->getPaciente()->getPacienteCalle();
            $fechaNacimientoPaciente = date('m/d/Y', strtotime($admisionQuery->getPaciente()->getPacienteFechanacimiento()));
            $edad = $this->calculaEdad($fechaNacimientoPaciente);
            $lugartrabajo="";
            $avisara = $nombreresponsable;
            $numpaciente = $admisionQuery->getIdpaciente();
            $ocupacion = $admisionQuery->getPaciente()->getPacienteOcupacion();
            $fechaadmision = $admisionQuery->getAdmisionFechaadmision('d-m-Y');
            $fechasalida = $admisionQuery->getAdmisionFechasalida('d-m-Y');;
            $horaadmision = $admisionQuery->getAdmisionFechaadmision('H:i:s');
            $horasalida = $admisionQuery->getAdmisionFechasalida('H:i:s');
            $colonia = $admisionQuery->getPaciente()->getPacienteColonia();
            $ciudad = $admisionQuery->getPaciente()->getPacienteCiudad();
            $estado = $admisionQuery->getPaciente()->getPacienteEstado();
            $anticipo="";
        
            $pdf = new PDF();
            $pdf->ChapterBody($nombrepaciente, $nombreresponsable, $nombremedico);
           // $pdf->PrintChapter($nombrepaciente, $nombreresponsable, $nombremedico);

            $pdf->settextcolor(0,0,128);
            $pdf->AddPage();
            $pdf->SetFont('Arial','B', 12);
            //Margen decorativo iniciando en 0, 0
            //$pdf->Image('logo_login2.png', 0,0, 210, 295, 'PNG');

            //Imagen izquierd
            $pdf->Image($_SERVER['DOCUMENT_ROOT'].'/img/logo_login.png', 25, 18, 17, 25, 'PNG');

            //Imagen derecha
           // $pdf->Image('image.png', 155, 27, 25, 22, 'PNG');

            //Texto de Título
            $pdf->SetXY(57, 25);
            $pdf->MultiCell(150, 5, utf8_decode('HOSPITAL DEL VALLE DE ATEMAJAC S.A. DE C.V. '), 0, 'L');

            $pdf->SetFont('Arial','', 9);
            $pdf->SetXY(40, 30);
            $pdf->MultiCell(150, 5, utf8_decode('RAMÓN CORONA NO. 55 TELS.: 3853-1041, 3853-1048, 3853-1064, 3853-1074'), 0, 'C');

            $pdf->SetXY(40, 35);
            $pdf->MultiCell(150, 5, utf8_decode('ATEMAJAC DEL VALLE, ZAPOPAN, JALISCO'), 0, 'C');

            $pdf->SetXY(40, 40);
            $pdf->MultiCell(150, 5, utf8_decode('R.F.C. HVA-890913-1LO'), 0, 'C');

            $pdf->Line(10, 50, 200, 50);

            //De aqui en adelante se colocan distintos métodos
            //para diseñar el formato.

            //Nombre //Apellidos //DNI //TELEFONO
            $pdf->SetXY(10, 55);
            $pdf->Cell(20, 8, 'Nombre:', 0, 'L');

            //*****
            //Edad
            $pdf->SetXY(10, 60);
            $pdf->Cell(20, 8, 'Edad:', 0, 'L');

            //sexo
            $pdf->SetXY(35, 60);
            $pdf->Cell(20, 8, 'Sexo:', 0, 'L');

            //estado civil
            $pdf->SetXY(85, 60);
            $pdf->Cell(20, 8, 'Estado Civil:', 0, 'L');


            //Tel.
            $pdf->SetXY(135, 60);
            $pdf->Cell(20, 8, 'Tel.:', 0, 'L');

            //////////
            //Direccion
            $pdf->SetXY(10, 65);
            $pdf->Cell(20, 8, utf8_decode('Dirección:'), 0, 'L');

            //////////
            //Direccion 2
            $pdf->SetXY(10, 70);
            $pdf->Cell(20, 8, utf8_decode('Dirección del lugar de procedencia:'), 0, 'L');

            //////////
            //Direccion 2
            $pdf->SetXY(10, 75);
            $pdf->Cell(20, 8, utf8_decode('Nombre del Cónyuge:'), 0, 'L');
            //////////
            //Direccion 2
            $pdf->SetXY(10, 80);
            $pdf->Cell(20, 8, utf8_decode('Nombre del Padre:'), 0, 'L');

            //Direccion 2
            $pdf->SetXY(10, 85);
            $pdf->Cell(20, 8, utf8_decode('Nombre de la Madre:'), 0, 'L');

            //Direccion 2
            $pdf->SetXY(10, 90);
            $pdf->Cell(20, 8, utf8_decode('Lugar donde trabaja:'), 0, 'L');

            //Direccion 2
            $pdf->SetXY(10, 95);
            $pdf->Cell(20, 8, utf8_decode('En caso de emergencia avisar a:'), 0, 'L');

            //Direccion 2
            $pdf->SetXY(10, 100);
            $pdf->Cell(20, 8, utf8_decode('Nombre del médico:'), 0, 'L');


            //Direccion 2
            $pdf->SetXY(10, 105);
            $pdf->Cell(20, 8, utf8_decode('Observaciones:'), 0, 'L');

            $pdf->Line(10, 115, 200, 115);

            $pdf->SetXY(10, 115);
            $pdf->MultiCell(200, 5, utf8_decode('LO SIGUIENTE PERTENECE Y ES PARTE DEL CONTRATO DE SERVICIOS DESCRITOS AL REVERSO DEL PRESENTE'), 0, 'L');




            $pdf->SetXY(10, 120);
            $txt= "'EL USUARIO' de los servicios cuyos datos generales aparecen en los DATOS GENERALES DE ADMISIÓN al inicio de la presente y/o su familiar responsable y/o su representante legal de nombre ".$nombrerepresentante." manifiesta(n) su voluntad de contratar y servir los servicios de atención médica que proporciona 'EL HOSPITAL' a 'EL USUARIO' autoriza a Dr. ".$nombremedico." y a sus colaboradores, para que prescriban, lleven a cabo tratamiento médico que requiera en la atención de su persona, así como la administración de medicamentos y anestésico prescritos. Ambas partes convienen en que en caso de que 'EL USUARIO' esté capacitado para firmar el contrato, lo hará en su nombre y representación la persona denominada en el presente contrato como Familiar Responsable o Representante Legal y será quien se responsabilice de manera solidaria en el cumplimiento de las obligaciones y autorizaciones anteriormente establecidas.";

            $pdf->MultiCell(190, 5, utf8_decode($txt), 0, 'J');

            $pdf->SetXY(10, 170);
            $txt2= "ESTANDO DE ACUERDO CON EL CONTRATO";
            $pdf->MultiCell(190, 5, utf8_decode($txt2), 0, 'C');



            $pdf->Line(10, 200, 70, 200);
            $pdf->SetXY(10, 200);
            $txt3= "EL HOSPITAL";
            $pdf->MultiCell(60, 5, utf8_decode($txt3), 0, 'C');

            $pdf->Line(10, 220, 70, 220);
            $pdf->SetXY(10, 220);
            $txt3= "FAMILIAR RESPONSABLE";
            $pdf->MultiCell(60, 5, utf8_decode($txt3), 0, 'C');

            $pdf->Line(140, 200, 200, 200);
            $pdf->SetXY(140, 200);
            $txt3= "EL PACIENTE";
            $pdf->MultiCell(60, 5, utf8_decode($txt3), 0, 'C');

            $pdf->Line(140, 220, 200, 220);
            $pdf->SetXY(140, 220);
            $txt3= "REPRESENTANTE LEGAL";
            $pdf->MultiCell(60, 5, utf8_decode($txt3), 0, 'C');


            //date_default_timezone_set('UTC');
            setlocale(LC_ALL,"es_ES");



            $pdf->SetXY(10, 270);
            $txt3= "Fecha ".date("d")." de ".strftime("%B")." de ".date("Y");
            $pdf->MultiCell(200, 5, utf8_decode($txt3), 0, 'C');
            $dias=date("d");
            $mes=strftime("%B");
            $anio=date("Y");


            //Creamos objeto de myDBC y se llama al método
            //que traerá el arreglo con la información de
            //una persona, y se guarda en $datosConsulta
           // $seleccion = new myDBC();
          //  $datosConsulta = $seleccion->seleccionar_datos();

            //Arreglo de coordenadas
            //Basadas en la primera coordenada de Line
            $misCoordenadas = array(
                                    array('x' => 30, 'y' => 55.5), //Fecha
                                    array('x' => 25, 'y' => 60.5), //Nombre
                                    array('x' => 45, 'y' => 60.5), //Apellidos
                                    array('x' => 105, 'y' => 60.5), //DNI
                                    array('x' => 145, 'y' => 60.5), //Teléfono
                                    array('x' => 35, 'y' => 65.5), //Licenciatura
                                    array('x' => 62, 'y' => 70.5), //Cargo
                                    array('x' => 45, 'y' => 75.5), //Código postal
                                    array('x' => 45, 'y' => 80.5), //Código postal
                                    array('x' => 45, 'y' => 85.5), //Código postal
                                    array('x' => 45, 'y' => 90.5), //Código postal
                                    array('x' => 60, 'y' => 95.5), //Código postal
                                    array('x' => 55, 'y' => 100.5), //Código postal
                                    array('x' => 55, 'y' => 105.5), //Código postal
                                    );

            //Este paso es un "truco" para poder iterar el arreglo
            //de la consulta y recorrer uno a uno cada elemento.

            //Crear un arreglo
            $arreglo = array();
            $arreglo[0]= $nombrepaciente;
            $arreglo[1]= $edad;
            $arreglo[2]= $sexo;
            $arreglo[3]=  $estadocivil;
            $arreglo[4]= $telefonocel;
            $arreglo[5]= $direccion;
            $arreglo[6]= $direccion;
            $arreglo[7]= $nombreconyuge;
            $arreglo[8]= $nombrepadre;
            $arreglo[9]= $nombremadre;
            $arreglo[10]= $lugartrabajo;
            $arreglo[11]= $avisara;
            $arreglo[12]= $nombremedico;
            $arreglo[13]= $observaciones;



            //Convertirlo en arreglo con índices

            //Ahora se usará este $arreglo junto con $mis Coordenadas
            //Se obtiene un elemento de la consulta y un par de coordenadas
            //que serán pasado a SetXY y Cell
            for($i = 0; $i < 14; $i++)
            {
                $pdf->SetXY($misCoordenadas[$i]['x'], $misCoordenadas[$i]['y']);
                $pdf->Cell(20, 7, utf8_decode($arreglo[$i]), 0);
            }


            $title="HOSPITAL DEL VALLE DE ATEMAJAC, S.A. DE C.V. Ramón Corona 55 Tels.: 3853-1041, 3853-1048, 3853-1064, 3853-1074 Atejamac del Valle, Zapopan, Jalisco, México R.F.C. HVA-890913-1LO";
            $pdf->SetTitle($title);
            $pdf->PrintChapter($nombrepaciente, $nombreresponsable, $nombremedico);

            ///////////// AVISO PRIVACIDAD

            $pdf->AddPage();
            $pdf->SetFont('Arial','B', 12);
            //Margen decorativo iniciando en 0, 0
            //$pdf->Image('logo_login2.png', 0,0, 210, 295, 'PNG');

            //Imagen izquierd
            $pdf->Image($_SERVER['DOCUMENT_ROOT'].'/img/logo_login.png', 10, 10, 17, 25, 'PNG');

            //Imagen derecha
            // $pdf->Image('image.png', 155, 27, 25, 22, 'PNG');

            //Texto de Título
            $pdf->SetXY(10, 15);
            $pdf->MultiCell(200, 5, utf8_decode('HOSPITAL DEL VALLE DE ATEMAJAC S.A. DE C.V. '), 0, 'C');

            $pdf->SetFont('Arial','', 9);

            $pdf->SetXY(10, 16);
            $pdf->MultiCell(200, 16, utf8_decode('RAMÓN CORONA NO. 55 ATEMAJAC DEL VALLE ZAPOPAN JALISCO'), 0, 'C');

            $pdf->SetXY(10, 25);
            $pdf->MultiCell(200, 25, utf8_decode('-AVISO DE PRIVACIDAD-'), 0, 'C');


           // $pdf->Line(10, 50, 200, 50);
            $txt="RESPONSABLE DEL TRATAMIENTO DE DATOS PERSONALES \nHOSPITAL DEL VALLE DE ATEMAJAC S.A. DE C.V. ('Hospital del Valle de Atemajac') con domicilio en Ramón Corona # 55 Colonia Atemajac del Valle, Zapopan Jalisco México CP 44510, es responsable de tratamiento de sus datos personales conforme a este aviso de privacidad. \n\nFINALIDAD DEL TRATAMIENTO DE LOS DATOS PERSONALES \nLos Datos Personales en posesión de Hospital del Valle de Atemajac serán utilizados para: \n\n-Prestación de servicios médico-hospitalarios, incluyendo sin limitar hospitalización, cirugía, estudios diagnósticos, atención de enfermería, servicios farmaceúticos, análisis de laboratorio, radiología e imagen, estudios y análisis patológicos, terapia, rehabilitación, dieta y nutrición y demás fines relacionados con servicios de salud. \n-Creación, estudio, análisis, actualización, y conservación del expediente clínico. \n-Facturación y cobranza por servicios. \n-Estudios, registros, estadísticas y análisis de información de salud. \n-Conservación de registros para seguimiento a servicios, prestación de servicios en el futuro y en general para dar seguimiento a cualquier relación contractual. \n-Análisis estadístico y de mercado. \n-Promoción y mercadeo de productos y servicios de Hospital del Valle de Atemajac. \n\nDATOS SENSIBLES \nHospital del Valle de Atemajac recabará y tratará datos sensibles, relacionados con el estado de salud, antecedentes e historial clínico, información sobre modo de vida y otros datos necesarios o convenientes para los fines arriba señalados. Los datos personales sensibles serán mantenidos y tratados con estricta seguridad y confidencialidad para fines relacionados con la prestación de servicios de salud y conforme a este aviso de privacidad y la legislación, reglamentos y normativa aplicable. \n\nTRANSFERENCIA \nPara la prestación de servicios Hospital del Valle de Atemajac puede transferir dentro y fuera del país, los datos personales en su posesión a terceros subcontratados para fines relacionados con los señalados en este aviso de privacidad. Dentro de los terceros a los que se transferirán dichos datos se incluyen sin limitar laboratorios, hospitales, centros de investigación, aseguradoras, así como a autoridades que considere necesario o conveniente comunicar datos personales. \n\nLIMITACION DE USO Y DIVULGACIÓN DE DATOS PERSONALES \nPara limitar el uso de sus datos personales, favor de enviar un correo electrónico a contacto@hva.mx o notificación por escrito a Ramón Corona # 55 Colonia Atejamac del Valle, Zapopan Jalisco México CP 44510 dirigida al Departamento de Administración en el que señale la limitación al uso de sus datos deseada. \n\nMEDIOS PARA EJERCER DERECHOS ARCO (ACCESO, RECTIFICACIÓN, CANCELACIÓN Y OPOSICIÓN) \nPara tener acceso a los datos personales que Hospital del Valle de Atemajac posee, así como para rectificarlos en caso de que éstos sean inexactos o incompletos, o para cancelarlos u oponerse a su tratamiento para ciertos fines, favor de presentar una solicitud por escrito dirigida a nuestro departamento de Administración en contacto@hva.mx o notificación por escrito a ";

           // $pdf->SetXY(10, 50);
            $pdf->MultiCell(180, 5, utf8_decode($txt), 0, 'J');
            $pdf->AddPage();

            $txt="Ramón Corona # 55 Colonia Atejamac del Valle, Zapopan Jalisco México CP 44510 de lunes a viernes de 9:00 a 14:00 hrs. que contenga la siguiente información: \nNombre del titular \nDomicilio del titular o dirección de correo electrónico para comunicar respuesta a solicitud \nDocumentos que acrediten identidad o autorización para representarlo en la solicitud \nDescripción de datos personales sobre los que se pretende ejercer algún derecho \nCualquier otro elemento que permita la localización de los datos personales y atención a la solicitud. \n\nMEDIOS PARA REVOCAR CONSENTIMIENTO \nEn cualquier momento puede solicitar la revocación del consentimiento otorgado a Hospital del Valle de Atemajac para tratar sus datos personales enviando una solicitud por escrito dirigida al Departamento de Administración a contacto@hva.mx o enviando una notificación por escrito a Ramón Corona # 55 Colonia Atejamac del Valle, Zapopan Jalisco México CP 44510 de lunes a viernes de 9:00 a 14:00 hrs. en la que se detalle claramente los datos respecto de los que se revoca su consentimiento. \n\nNOTIFICACIÓN DE CAMBIOS AL AVISO DE PRIVACIDAD \nEl presente Aviso de Privacidad podrá ser modificado en cualquier momento para cumplir con actualizaciones legislativas, jurisprudenciales, políticas internas, nuevos requisitos para la prestación de servicios de Hospital del Valle de Atemajac o cualquier otra causa a entera discreción de Hospital del Valle de Atemajac. En tal caso, las modificaciones estarán disponibles en nuestra página de internet://www.hva.mx \n\nEnterado del contenido del presente Aviso de privacidad, consiento que mis datos personales sean tratados conforme a los términos y condiciones que se desprenden del presente documento.";

            //$pdf->SetXY(10, 30);
            $pdf->MultiCell(180, 5, utf8_decode($txt), 0, 'J');

            //Nombre //Apellidos //DNI //TELEFONO
            $pdf->SetXY(10, 125);
            $pdf->Cell(20, 5, 'Nombre:', 0, 'L');
            $pdf->Line(25, 130, 100, 130);

            $pdf->SetXY(25, 125);
            $pdf->Cell(20, 5, $nombrepaciente, 0, 'L');



            $pdf->SetXY(110, 125);
            $pdf->Cell(20, 8, 'Firma:', 0, 'L');
            $pdf->Line(125, 130, 180, 130);

            //Nombre //Apellidos //DNI //TELEFONO
            $pdf->SetXY(10, 130);
            $pdf->Cell(20, 5, "Yo:", 0, 'L');
            $pdf->Line(16, 135, 80, 135);

            $pdf->SetXY(20, 130);
            $pdf->Cell(20, 5, $nombrepaciente, 0, 'L');
            ////
            $pdf->SetXY(82, 130);
            $pdf->MultiCell(110, 5, utf8_decode("No consiento que mis datos sean transferidos en los términos del presente"), 0, 'J');
            $pdf->SetXY(10, 135);
            $pdf->MultiCell(75, 5, utf8_decode("aviso de privacidad."), 0, 'J');

            //Nombre //Apellidos //DNI //TELEFONO
            $pdf->SetXY(10, 150);
            $pdf->Cell(20, 8, 'Firma:', 0, 'L');
            $pdf->Line(20, 155, 100, 155);

            $pdf->SetXY(10, 160);
            $pdf->Cell(20, 8, "En caso de obtener datos de Menores de Edad o Personas Legalmente Incapacitadas:", 0, 'L');
            $pdf->SetXY(10, 165);
            $pdf->Cell(20, 8, "Nombre del titular de los datos personales: ", 0, 'L');
            $pdf->Line(75, 170, 150, 170);

            $pdf->SetXY(10, 180);
            $pdf->Cell(20, 8, "Nombre y Firma del Padre, Madre, Tutor o Representante Legal:", 0, 'L');
            $pdf->Line(105, 185, 180, 185);

            $pdf->SetXY(10, 195);
           $pdf->MultiCell(180, 5, utf8_decode("Zapopan, Jalisco, México a ".$dias." días del mes de ".$mes." del año ".$anio), 0, 'J');
            $pdf->Line(75, 170, 150, 170);
        ///////////////////////
            $pdf->AddPage();
            $pdf->SetFont('Arial','B', 12);
            //Margen decorativo iniciando en 0, 0
            //$pdf->Image('logo_login2.png', 0,0, 210, 295, 'PNG');

            //Imagen izquierd
            $pdf->Image($_SERVER['DOCUMENT_ROOT'].'/img/logo_login.png', 25, 18, 17, 25, 'PNG');

            //Imagen derecha
            // $pdf->Image('image.png', 155, 27, 25, 22, 'PNG');

            //Texto de Título
            $pdf->SetXY(57, 25);
            $pdf->MultiCell(150, 5, utf8_decode('HOSPITAL DEL VALLE DE ATEMAJAC S.A. DE C.V. '), 0, 'L');

            $pdf->SetFont('Arial','', 9);
            $pdf->SetXY(40, 30);
            $pdf->MultiCell(150, 5, utf8_decode('RAMÓN CORONA NO. 55 TELS.: 3853-1041, 3853-1048, 3853-1064, 3853-1074'), 0, 'C');

            $pdf->SetXY(40, 35);
            $pdf->MultiCell(150, 5, utf8_decode('ATEMAJAC DEL VALLE, ZAPOPAN, JALISCO'), 0, 'C');

            $pdf->SetXY(40, 40);
            $pdf->MultiCell(150, 5, utf8_decode('R.F.C. HVA-890913-1LO'), 0, 'C');


            $pdf->SetXY(40, 45);
            $pdf->MultiCell(150, 5, utf8_decode('HOJA DE ADMISIÓN'), 0, 'C');


            $pdf->Line(10, 50, 200, 50);


            //////    $pdf->SetXY(10, 55);
             $pdf->SetXY(10, 50);
            $pdf->Cell(20, 8, 'NO PACIENTE:', 0, 'L','R');
            $pdf->Line(30, 55, 105, 55);
            $pdf->SetXY(30, 50);
            $pdf->Cell(20, 8, $numpaciente, 0, 'L','L');

            $pdf->SetXY(105, 50);
            $pdf->Cell(20, 8, 'CUARTO:', 0, 'L','R');
            $pdf->Line(125, 55, 145, 55);
            $pdf->SetXY(125, 50);
            $pdf->Cell(20, 8, $cuarto, 0, 'L','L');


            $pdf->SetXY(150, 50);
            $pdf->Cell(20, 8, 'CAMA:', 0, 'L','R');
            $pdf->Line(170, 55, 200, 55);
            $pdf->SetXY(170, 50);
            $pdf->Cell(20, 8, $cama, 0, 'L','L');
            //*****

            //De aqui en adelante se colocan distintos métodos
            //para diseñar el formato.

            //Nombre //Apellidos //DNI //TELEFONO
            $pdf->SetXY(10, 55);
            $pdf->Cell(20, 8, 'NOMBRE:', 0, 'R','R');
             $pdf->Line(30, 60, 125, 60);
            $pdf->SetXY(30, 55);
            $pdf->Cell(20, 8, $nombrepaciente, 0, 'L','L');
            //*****
            //Edad
            $pdf->SetXY(130, 55);
            $pdf->Cell(20, 8, 'EDAD:', 0, 'R','R');
            $pdf->Line(150, 60, 200, 60);
            $pdf->SetXY(150, 55);
            $pdf->Cell(20, 8, $edad, 0, 'L','L');

            //////

            //Tel.
            $pdf->SetXY(10, 60);
            $pdf->Cell(20, 8, 'TELEFONO.:', 0, 'R','R');
            $pdf->Line(30, 65, 125, 65);
            $pdf->SetXY(30, 60);
            $pdf->Cell(20, 8, $telefonocel, 0, 'L','L');

            //sexo
            $pdf->SetXY(130, 60);
            $pdf->Cell(20, 8, 'SEXO:', 0, 'R','R');
             $pdf->Line(150, 65, 200, 65);
            $pdf->SetXY(150, 60);
            $pdf->Cell(20, 8, $sexo, 0, 'L','L');

            ////

            //Direccion
            $pdf->SetXY(10, 65);
            $pdf->Cell(20, 8, utf8_decode('DOMICILIO:'), 0, 'R','R');
            $pdf->Line(30, 70, 125, 70);
            $pdf->SetXY(30, 65);
            $pdf->Cell(20, 8, $direccion, 0, 'L','L');


            //estado civil
            $pdf->SetXY(130, 65);
            $pdf->Cell(20, 8, 'ESTADO CIVIL:', 0, 'R','R');
             $pdf->Line(150, 70, 200, 70);
            $pdf->SetXY(150, 65);
            $pdf->Cell(20, 8, $estadocivil, 0, 'L','L');

            //////////

            $pdf->SetXY(10, 70);
            $pdf->Cell(20, 8, utf8_decode('COLONIA:'), 0, 'R','R');
            $pdf->Line(30, 75, 125, 75);
            $pdf->SetXY(30, 70);
            $pdf->Cell(20, 8, $colonia, 0, 'L','L');


            //estado civil
            $pdf->SetXY(130, 70);
            $pdf->Cell(20, 8, utf8_decode('OCUPACIÓN:'), 0, 'R','R');
             $pdf->Line(150, 75, 200, 75);
            $pdf->SetXY(150, 70);
            $pdf->Cell(20, 8, $ocupacion, 0, 'L','L');


            //////////

            $pdf->SetXY(10, 75);
            $pdf->Cell(20, 8, utf8_decode('CIUDAD:'), 0, 'R','R');
              $pdf->Line(30, 80, 145, 80);
            $pdf->SetXY(30, 75);
            $pdf->Cell(20, 8, $ciudad, 0, 'L','L');


            //estado civil
            $pdf->SetXY(10, 80);
            $pdf->Cell(20, 8, utf8_decode('ESTADO:'), 0, 'R','R');
            $pdf->Line(30, 85, 145, 85);
            $pdf->SetXY(30, 80);
            $pdf->Cell(20, 8, $estado, 0, 'L','L');

            //////////


            //////////

            $pdf->SetXY(10, 90);
            $pdf->Cell(20, 8, utf8_decode('MADRE:'), 0, 'R','R');
            $pdf->Line(30, 95, 94, 95);
            $pdf->SetXY(30, 90);
            $pdf->Cell(20, 8, $nombremadre, 0, 'L','L');


            //estado civil
            $pdf->SetXY(100, 90);
            $pdf->Cell(20, 8, utf8_decode('RESPONSABLE:'), 0, 'R','R');
            $pdf->Line(120, 95, 200, 95);
            $pdf->SetXY(120, 90);
            $pdf->Cell(20, 8, $nombreresponsable, 0, 'L','L');


            ////

            $pdf->SetXY(10, 95);
            $pdf->Cell(20, 8, utf8_decode('PADRE:'), 0, 'R','R');
            $pdf->Line(30, 100, 94, 100);
            $pdf->SetXY(30, 95);
            $pdf->Cell(20, 8, $nombrepadre, 0, 'L','L');


            //estado civil
            $pdf->SetXY(100, 95);
            $pdf->Cell(20, 8, utf8_decode('TEL. RESP.:'), 0, 'R','R');
            $pdf->Line(120, 100, 200, 100);
            $pdf->SetXY(120, 95);
            $pdf->Cell(20, 8, $telresponsable, 0, 'L','L');

            $pdf->SetXY(10, 100);
            $pdf->Cell(20, 8, utf8_decode('CONYUGE:'), 0, 'R','R');
            $pdf->Line(30, 105, 200, 105);
            $pdf->SetXY(30, 100);
            $pdf->Cell(20, 8, $nombreconyuge, 0, 'L','L');

            ////


            $pdf->Line(10, 115, 200, 115);
            $pdf->SetXY(10, 115);
            $pdf->Cell(190, 8, utf8_decode('PARA USO EXCLUSIVO DEL HOSPITAL'), 0, 'C','C');
            $pdf->Line(10, 125, 200, 125);


            //Direccion 2
            $pdf->SetXY(24, 130);
            $pdf->Cell(20, 8, utf8_decode('FECHA DE ADMISIÓN:'), 0, 'L','R');
            $pdf->Line(45, 135, 95, 135);
            $pdf->SetXY(44, 130);
            $pdf->Cell(20, 8, $fechaadmision, 0, 'L','L');


            $pdf->SetXY(110, 130);
            $pdf->Cell(20, 8, utf8_decode('HORA DE ADMISIÓN:'), 0, 'L','R');
            $pdf->Line(135, 135, 200, 135);
            $pdf->SetXY(135, 130);
            $pdf->Cell(20, 8, $horaadmision, 0, 'L','L');
            //////////

            $pdf->SetXY(24, 135);
            $pdf->Cell(20, 8, utf8_decode('FECHA DE SALIDA:'), 0, 'L','R');
            $pdf->Line(45, 140, 95, 140);
            $pdf->SetXY(44, 135);
            $pdf->Cell(20, 8, $fechasalida, 0, 'L','L');

            $pdf->SetXY(110, 135);
            $pdf->Cell(20, 8, utf8_decode('HORA DE SALIDA:'), 0, 'L','R');
            $pdf->Line(135, 140, 200, 140);
            $pdf->SetXY(135, 135);
            $pdf->Cell(20, 8, $horasalida, 0, 'L','L');
            //////////

            $pdf->SetXY(24, 140);
            $pdf->Cell(20, 8, utf8_decode('ANTICIPO:'), 0, 'L','R');
            $pdf->Line(45, 145, 200, 145);
            $pdf->SetXY(44, 140);
            $pdf->Cell(20, 8, $anticipo, 0, 'L','L');

            //////////

            $pdf->Line(10, 150, 200, 150);

            $pdf->SetXY(36, 150);
            $pdf->Cell(20, 8, utf8_decode('DIAGNOSTICO DE ADMISIÓN:'), 0, 'L','R');
            $pdf->Line(57, 155, 200, 155);
            $pdf->SetXY(56, 150);
            $pdf->Cell(20, 8, $diagnostico, 0, 'L','L');

            $pdf->SetXY(36, 155);
            $pdf->Cell(20, 8, utf8_decode('DOCTOR:'), 0, 'L','R');
            $pdf->Line(57, 160, 95, 160);
            $pdf->SetXY(56, 155);
            $pdf->Cell(20, 8, $nombremedico, 0, 'L','L');

             $pdf->Line(10, 165, 200, 165);

            //////////

            $pdf->SetXY(20, 170);
            $pdf->Cell(20, 8, utf8_decode('OBSERVACIONES:'), 0, 'L','R');
            $pdf->SetXY(40, 170);
            $pdf->Cell(20, 8, $observaciones, 0, 'L','L');

             $pdf->Line(10, 180, 200, 180);
            ////

            $pdf->SetXY(10, 185);
            $pdf->MultiCell(190, 5, utf8_decode("Por medio de la presente, autorizo a los médicos del Hospital del Valle de Atemajac, S.A. de C.V., para que se de me la atención médica o quirúrgica, que ellos juzguen convenientes para recobrar mi salud, así como para que se me practiquen los exámenes de laboratorio o Rayos X que amerite. Estoy enterado de los riesgos inherentes a los medicamentos que se administren, así como el riesgo del acto Quirúrgico tanto dn el Trans como en el Post-Operatorio, así como el anestésico. En pleno uso de mis facultades acepto y doy autorización y no serán responsables del resultado, cualquiera que este sea. "), 0, 'J');

            $pdf->SetXY(40, 220);
            $pdf->Cell(20, 8, utf8_decode('FIRMA DEL PACIENTE:'), 0, 'L','C');

            $pdf->Line(20, 240, 80, 240);

            $pdf->SetXY(150, 220);
            $pdf->Cell(20, 8, utf8_decode('FIRMA DEL DOCTOR:'), 0, 'L','C');

            $pdf->Line(130, 240, 190, 240);


            $pdf->Line(10, 115, 200, 115);
            
            $pdf->AddPage();
    $pdf->SetFont('Arial','B', 12);
    //Margen decorativo iniciando en 0, 0
    //$pdf->Image('logo_login2.png', 0,0, 210, 295, 'PNG');
    
    //Imagen izquierd
    $pdf->Image($_SERVER['DOCUMENT_ROOT'].'/img/logo_login.png', 25, 18, 17, 25, 'PNG');
    
    //Imagen derecha
    // $pdf->Image('image.png', 155, 27, 25, 22, 'PNG');
    
    //Texto de Título
    $pdf->SetXY(57, 25);
    $pdf->MultiCell(150, 5, utf8_decode('HOSPITAL DEL VALLE DE ATEMAJAC S.A. DE C.V. '), 0, 'L');
    
    $pdf->SetFont('Arial','', 9);
    $pdf->SetXY(40, 30);
    $pdf->MultiCell(150, 5, utf8_decode('RAMÓN CORONA NO. 55 TELS.: 3853-1041, 3853-1048, 3853-1064, 3853-1074'), 0, 'C');
    
    $pdf->SetXY(40, 35);
    $pdf->MultiCell(150, 5, utf8_decode('ATEMAJAC DEL VALLE, ZAPOPAN, JALISCO'), 0, 'C');
    
    $pdf->SetXY(40, 40);
    $pdf->MultiCell(150, 5, utf8_decode('R.F.C. HVA-890913-1LO'), 0, 'C');
    
    
    $pdf->SetXY(40, 55);
    $pdf->MultiCell(150, 5, utf8_decode('PAGARÉ'), 0, 'C');
    
    
    $pdf->SetXY(40, 50);
    $textfecha="Zapopan, Jalisco a ".fechaadmision;
    $pdf->MultiCell(150, 5, utf8_decode($textfecha), 0, 'R');
    
    $pdf->SetXY(15, 65);
    $pdf->MultiCell(150, 5, utf8_decode($nombrepaciente), 0, 'C');
    
    $pdf->SetXY(10, 65);
    $textopagare="Por medio del presente pagaré, el suscrito(a) _________________________________, reconozco que debo y prometo que pagaré incondicionalmente el día _____________________, a la orden del HOSPITAL DEL VALLE DE ATEMAJAC, S.A. de C.V. en el domicilio ubicado en CALLE RAMÓN CORONA NUMERO 55, COLONIA ATEMAJAC DEL VALLE, ZAPOPAN, JALISCO, la cantidad de _____________________________________________________M.N., por el valor de los servicios médicos y hospitalarios recibidos a mi entera satisfacción.";
    
    $pdf->MultiCell(190, 5, utf8_decode($textopagare), 0, 'J');
    
    $pdf->SetXY(45, 115);
    $pdf->MultiCell(150, 5, utf8_decode($nombrepaciente), 0, 'L');
    $pdf->SetXY(25, 120);
    $pdf->MultiCell(150, 5, utf8_decode($direccion), 0, 'L');
    $pdf->SetXY(45, 145);
    $pdf->MultiCell(150, 5, utf8_decode($nombrepaciente), 0, 'L');
    $pdf->SetXY(10, 210);
    $pdf->MultiCell(150, 5, utf8_decode($fechaadmision), 0, 'L');

    
    $textpagare2="Si no fuere puntualmente cubierto a su vencimiento la totalidad del importe que debo pagar al HOSPITAL DEL VALLE DE ATEMAJAC S.A. DE C.V., conforme a este pagaré, los suscritos prometemos pagar incondicionalmente un interés mensual moratorio equivalente a la tasa que publique mensualmente el Banco de México por concepto de Certificados de Tesorería (CETES) con vencimiento a 28 (veintiocho) días, más 5 (cinco) puntos aplicando adicionalmente a la cantidad que resulte el 1.5% (uno punto cinco por ciento), hasta la total liquidación del adeudo. \nNombre del Suscrito: _____________________________ \nDomicilio: _________________________________________ \nQuien cuenta con facultades suficientes para suscribir el presente título por su propio derecho. \nEl suscriptor conviene en hacer todos los pagos respecto del principal e intereses ordinarios y moratorios de este PAGARÉ, libres, exentos y sin deducción alguna por concepto o a cuenta de cualquier impuesto, contribución, tributo, deducción, carga o retención o cualquier otra responsabilidad fiscal que grave dichas cantidades en la actualidad o en lo futuro, pagadera en cualquier jurisdicción. \nAsí mismo, el suscrito ____________________________________________, por medio del presente pagaré, acepto constituirme como aval del señor(a) ____________________________, por lo que reconozco y prometo que pagaré incondicionalmente el día ___________________________, a la orden del HOSPITAL DEL VALLE DE ATEMAJAC, S.A. de C.V. en la ciudad de Zapopan, Jalisco, la cantidad de _____________________________________ M.N., por el valor de los servicios médicos y hospitalarios recibidos a su entera satisfacción en caso de que dicha persona no realice el pago.\nNombre del aval: _________________________________________ \nDirección: _______________________________________________ \nPoblación: _____________________________\nPara todo lo relativo a la interpretación y cumplimiento de este PAGARÉ, los suscriptores  señalan y se someten expresamente a la jurisdicción y competencia de los Juzgados y Tribunales del Primer Partido Judicial del Estado de Jalisco con residencia en la ciudad de Zapopan, Jalisco, renunciando clara y terminantemente a cualquier otro fuero que pudiere corresponderle por razón de su domicilio presente o futuro. \nEl presente PAGARÉ consta de una página y se suscribe en la ciudad de Zapopan, Jalisco, el día ______________________________";
   $pdf->SetXY(10, 90);
   $pdf->MultiCell(190, 5, utf8_decode($textpagare2), 0, 'J');
    
    
    $pdf->Line(25, 230, 75, 230);
    $pdf->Line(25, 235, 75, 235);
    
    $pdf->Line(125, 230, 175, 230);
    $pdf->Line(125, 235, 175, 235);
    $pdf->SetXY(25, 230);
    $pdf->MultiCell(50, 5, utf8_decode($nombrepaciente), 0, 'C');
    
    $pdf->SetXY(25, 235);
    $pdf->MultiCell(50, 5, utf8_decode('DEUDOR'), 0, 'C');
    $pdf->SetXY(125, 235);
    $pdf->MultiCell(50, 5, utf8_decode('AVAL'), 0, 'C');
    
    $pdf->Output(); //Salida al navegador
        }
    }
    public function nuevoAction()
    {
        $request = $this->getRequest();

        //Intanciamos nuestro formulario
        $pacienteForm = new PacienteForm();

        if ($request->isPost()) { //Si hicieron POST

            //Instanciamos nuestro filtro
            $pacienteFilter = new PacienteFilter();
            //Le ponemos nuestro filtro a nuesto fromulario
            $pacienteForm->setInputFilter($pacienteFilter->getInputFilter());

            //Le ponemos los datos a nuestro formulario
            $pacienteForm->setData($request->getPost());

            //Validamos nuestro formulario
            if($pacienteForm->isValid()){
                //Instanciamos un nuevo objeto de nuestro objeto Paciente
                $paciente = new Paciente();

                //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Paciente
                foreach ($pacienteForm->getData() as $pacienteKey => $pacienteValue){
                    if($pacienteKey != 'pacientefacturacion_rfc'){
                        $paciente->setByName($pacienteKey, $pacienteValue, \BasePeer::TYPE_FIELDNAME);
                    }
                }

                //Guardamos en nuestra base de datos
                $paciente->save();

                // Si nos mandan RFC
                if($request->getPost()->pacientefacturacion_rfc != null){
                    $pacientefacturacion = new \Pacientefacturacion();
                    $pacientefacturacion->setIdpaciente($paciente->getIdpaciente());
                    $pacientefacturacion->setPacientefacturacionCalle($paciente->getPacienteCalle());
                    $pacientefacturacion->setPacientefacturacionNoexterior($paciente->getPacienteNoexterior());
                    $pacientefacturacion->setPacientefacturacionNointerior($paciente->getPacienteNointerior());
                    $pacientefacturacion->setPacientefacturacionColonia($paciente->getPacienteColonia());
                    $pacientefacturacion->setPacientefacturacionCiudad($paciente->getPacienteCiudad());
                    $pacientefacturacion->setPacientefacturacionCodigopostal($paciente->getPacienteCodigopostal());
                    $pacientefacturacion->setPacientefacturacionEstado($paciente->getPacienteEstado());
                    $pacientefacturacion->setPacientefacturacionPais($paciente->getPacientePais());
                    $pacientefacturacion->setPacientefacturacionRfc($request->getPost()->pacientefacturacion_rfc);
                    $pacientefacturacion->save();
                }

                //Agregamos un mensaje
                $this->flashMessenger()->addMessage('Paciente guardado exitosamente!');
                $pacienteQuery = PacienteQuery::create()->filterByIdpaciente($paciente->getIdpaciente())->findOne();
                return new ViewModel(array(
                    'pacienteQuery' => $pacienteQuery,
                    'pacienteForm' => $pacienteForm,
                    'flashMessages' => $this->flashMessenger()->getMessages(),
                ));

                //Redireccionamos a nuestro list
                //return $this->redirect()->toRoute('pacientes');
            }/*else{
                $messageArray = array();
                foreach ($pacienteForm->getMessages() as $key => $value){
                    foreach($value as $val){
                        //Obtenemos el valor de la columna con error
                        $message = $key.' '.$val;
                        array_push($messageArray, $message);
                    }
                }
                var_dump($messageArray);
                return new ViewModel(array(
                    'input_error' => $messageArray
                ));
            }*/
        }

        return new ViewModel(array(
            'pacienteForm' => $pacienteForm,
        ));
    }

    public function listarAction()
    {
        $pacienteQuery = \PacienteQuery::create()
            ->filterBy(BasePeer::translateFieldname('paciente', 'paciente_nombre', BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME), 'Publico', \Criteria::NOT_EQUAL)
            ->find();
        $pacienteArray = array();
        foreach($pacienteQuery as $pacienteValue){
            array_push($pacienteArray, $pacienteValue);
        }
        $this->flashMessenger()->addMessage('Paciente guardado exitosamente!');

        return new ViewModel(array(
            'pacientes' => $pacienteArray,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
        /*
        // Instanciamos nuestro formulario pacienteForm
        $pacienteQuery = new PacienteQuery();
        $result = $pacienteQuery->paginate($page,$limit);
        $dataCollection = $result->getResults();
        $this->flashMessenger()->addMessage('Paciente guardado exitosamente!');

        return new ViewModel(array(
            'pacientes' => $dataCollection,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
        */
    }

    public function historicosAction()
    {
        $pacienteQuery = \PacienteQuery::create()
            ->filterBy(BasePeer::translateFieldname('paciente', 'paciente_nombre', BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME), 'Publico', \Criteria::NOT_EQUAL)
            ->find();
        $pacienteArray = array();
        foreach($pacienteQuery as $pacienteValue){
            array_push($pacienteArray, $pacienteValue);
        }

        return new ViewModel(array(
            'pacientes' => $pacienteArray,
        ));

    }

    public function actualesAction()
    {
        $pacienteQuery = \PacienteQuery::create()->find();
        $consultaArray = array();
        $admisionArray = array();
        foreach($pacienteQuery as $pacienteValue){
            $consultaQuery = \ConsultaQuery::create()->filterByIdpaciente($pacienteValue->getIdpaciente())->filterByConsultaStatus('no pagada')->useConsultorioQuery()->filterByConsultorioEnuso(1)->endUse()->findOne();
            if($consultaQuery){
                array_push($consultaArray, $consultaQuery);
            }
            $admisionQuery = \AdmisionQuery::create()->filterByIdpaciente($pacienteValue->getIdpaciente())->filterByAdmisionStatus('no pagada')->useCuartoQuery()->filterByCuartoEnuso(1)->endUse()->findOne();
            if($admisionQuery){
                array_push($admisionArray, $admisionQuery);
            }
        }

        $consultaCollection = $consultaArray;
        $admisionCollection = $admisionArray;

        return new ViewModel(array(
            'pacientesConsulta' => $consultaCollection,
            'pacientesAdmision' => $admisionCollection,
        ));
    }

    public function detallesAction()
    {
        $request = $this->getRequest();

        // Start Alta paciente - consulta alta_consultorio = true
        if($request->getPost()->alta_consultorio == "true"){
            if(\ConsultorioQuery::create()->filterByIdconsultorio($request->getPost()->idconsultorio)->exists()){

                $consultorioActualizar = \ConsultorioQuery::create()->filterByIdconsultorio($request->getPost()->idconsultorio)->findOne();
                $consultorioActualizar->setConsultorioEnuso(0)->save();
                $consultorioArray = $consultorioActualizar->toArray(BasePeer::TYPE_FIELDNAME);
                return new JsonModel(array(
                    'consultorioArray' => $consultorioArray,
                ));
            }
        }
        // End Alta paciente - consulta alta_consultorio = true

        // Start Alta paciente - admision alta_cuarto = true
        if($request->getPost()->alta_cuarto == "true"){
            if(\CuartoQuery::create()->filterByIdcuarto($request->getPost()->idcuarto)->exists()){

                $cuartoActualizar = \CuartoQuery::create()->filterByIdcuarto($request->getPost()->idcuarto)->findOne();
                $cuartoActualizar->setCuartoEnuso(0)->save();
                $cuartoArray = $cuartoActualizar->toArray(BasePeer::TYPE_FIELDNAME);
                if(\AdmisionQuery::create()->filterByIdadmision($request->getPost()->idadmision)->exists()){

                    $admisionActualizarStatus = \AdmisionQuery::create()->filterByIdadmision($request->getPost()->idadmision)->findOne();
                    $admisionActualizarStatus->setAdmisionFechasalida(date('Y-m-d H:i:s'))->save();
                    $admisionArray = $admisionActualizarStatus->toArray(BasePeer::TYPE_FIELDNAME);

                }else{
                    $admisionArray = null;
                }
                return new JsonModel(array(
                    'cuartoArray' => $cuartoArray,
                    //'admisionArray' => $admisionArray,
                ));
            }
        }
        // End Alta paciente - consulta alta_cuarto = true


        // Start Actualizar admision_status = pagada
        if($request->getPost()->subTotalAdmision == "0"){
            if(\AdmisionQuery::create()->filterByIdadmision($request->getPost()->idadmision)->exists()){

                $admisionActualizarStatus = \AdmisionQuery::create()->filterByIdadmision($request->getPost()->idadmision)->findOne();
                $admisionActualizarStatus->setAdmisionStatus($request->getPost()->admision_status)->setAdmisionTipodepago($request->getPost()->admision_tipodepago)->setAdmisionPagadaen(date('Y-m-d H:i:s'))->setAdmisionFacturada(0)->setAdmisionTotal($request->getPost()->admision_total)->setAdmisionReferenciapago($request->getPost()->admision_referenciapago)->save();
                $admisionArray = $admisionActualizarStatus->toArray(BasePeer::TYPE_FIELDNAME);
                return new JsonModel(array(
                    'admisionArray' => $admisionArray,
                ));
            }
        }
        // End Actualizar admision_status = pagada

        // Start Actualizar consulta_status = pagada
        if($request->getPost()->subTotalConsulta == "0"){
            if(\ConsultaQuery::create()->filterByIdconsulta($request->getPost()->idconsulta)->exists()){

                $consultaActualizarStatus = \ConsultaQuery::create()->filterByIdconsulta($request->getPost()->idconsulta)->findOne();
                $consultaActualizarStatus->setConsultaStatus($request->getPost()->consulta_status)->setConsultaReferenciapago($request->getPost()->consulta_referenciapago)->setConsultaTipodepago($request->getPost()->consulta_tipodepago)/*->setConsultaPagadaen(date('Y-m-d H:i:s'))*/->setConsultaFacturada(0)->setConsultaTotal($request->getPost()->consulta_total)->save();
                $consultaArray = $consultaActualizarStatus->toArray(BasePeer::TYPE_FIELDNAME);
                return new JsonModel(array(
                    'consultaArray' => $consultaArray,
                ));
            }
        }
        // End Actualizar consulta_status = pagada

        // Start Eliminar cargoadmision
        if($request->getPost()->idcargoadmision){
            if($request->getPost()->eliminar_cargoadmision_tipo == 'articulo'){
                if(\CargoadmisionQuery::create()->filterByIdcargoadmision($request->getPost()->idcargoadmision)->exists()){

                    $cargoadmisionEliminado = \CargoadmisionQuery::create()->filterByIdcargoadmision($request->getPost()->idcargoadmision)->findOne();
                    $lugarinventarioEntity = $cargoadmisionEliminado->getLugarinventario();
                    $cantidad = $lugarinventarioEntity->getLugarinventarioCantidad();
                    $lugarinventarioEntity->setLugarinventarioCantidad($cantidad+$request->getPost()->cantidad);
                    $lugarinventarioEntity->save();
                    $cargoadmisionEliminadoArray = array();
                    if($cargoadmisionEliminado->getIdlugarinventario() != null){

                        $articulovarianteEliminado = $cargoadmisionEliminado->getLugarinventario()->getOrdencompradetalle()->getArticulovariante();

                        $propiedadvalorNombreEliminado = null;
                        foreach($articulovarianteEliminado->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEliminado){
                            $propiedadEliminadoQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEliminado->getIdpropiedad())->findOne();
                            $propiedadvalorEliminadoQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEliminado->getIdpropiedadvalor())->findOne();
                            $propiedadvalorNombreEliminado .= $propiedadEliminadoQuery->getPropiedadNombre() . " " . $propiedadvalorEliminadoQuery->getPropiedadvalorNombre(). " ";
                        }

                        $cargoadmisionEliminado = array(
                            'idcargoadmision' => $cargoadmisionEliminado->getIdcargoadmision(),
                            'idadmision' => $cargoadmisionEliminado->getIdadmision(),
                            'status' => $cargoadmisionEliminado->getAdmision()->getAdmisionStatus(),
                            'cargoadmision_cantidad' => $cargoadmisionEliminado->getCargoadmisionCantidad(),
                            'articulo' => $cargoadmisionEliminado->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulo()->getArticuloNombre(),
                            'descripcion' => utf8_encode($propiedadvalorNombreEliminado),
                            'salida' => $cargoadmisionEliminado->getLugarinventario()->getLugar()->getLugarNombre(),
                            'fechahora' => $cargoadmisionEliminado->getCargoadmisionFecha(),
                            'precio' => $cargoadmisionEliminado->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio(),
                            'subtotal' => $cargoadmisionEliminado->getCargoadmisionMonto(),
                        );
                        array_push($cargoadmisionEliminadoArray, $cargoadmisionEliminado);
                    }
                    \CargoadmisionQuery::create()->filterByIdcargoadmision($request->getPost()->idcargoadmision)->delete();


                    $cargoadmisionQuery = \CargoadmisionQuery::create()->filterByIdadmision($request->getPost()->idadmision)->find();
                    if($cargoadmisionQuery->getArrayCopy()){
                        $cargoadmisionArray = array();
                        foreach($cargoadmisionQuery as $cargoadmisionEntity){
                            if($cargoadmisionEntity->getIdlugarinventario() != null){
                                $articulovarianteEntity = $cargoadmisionEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante();
                                foreach($articulovarianteEntity->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                    $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                    $propiedadNombre = $propiedadQuery->getPropiedadNombre();
                                }
                                foreach($articulovarianteEntity->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                    $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                    $propiedadvalorNombre = $propiedadvalorQuery->getPropiedadvalorNombre();
                                }
                                $cargoadmision = array(
                                    'idcargoadmision' => $cargoadmisionEntity->getIdcargoadmision(),
                                    'idadmision' => $cargoadmisionEntity->getIdadmision(),
                                    'status' => $cargoadmisionEntity->getAdmision()->getAdmisionStatus(),
                                    'cargoadmision_cantidad' => $cargoadmisionEntity->getCargoadmisionCantidad(),
                                    'articulo' => $cargoadmisionEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulo()->getArticuloNombre(),
                                    'descripcion' => utf8_encode($propiedadNombre." ".$propiedadvalorNombre),
                                    'salida' => $cargoadmisionEntity->getLugarinventario()->getLugar()->getLugarNombre(),
                                    'fechahora' => $cargoadmisionEntity->getCargoadmisionFecha(),
                                    'precio' => $cargoadmisionEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio(),
                                    'subtotal' => $cargoadmisionEntity->getCargoadmisionMonto(),
                                );
                                array_push($cargoadmisionArray, $cargoadmision);
                            }
                        }
                    }
                    return new JsonModel(array(
                        'cargoadmisionArray' => $cargoadmisionArray,
                        'cargoadmisionEliminadoArray' => $cargoadmisionEliminadoArray,
                    ));
                }
            }
            if($request->getPost()->eliminar_cargoadmision_tipo == 'servicio'){
                if(\CargoadmisionQuery::create()->filterByIdcargoadmision($request->getPost()->idcargoadmision)->exists()){

                    $cargoadmisionEliminado = \CargoadmisionQuery::create()->filterByIdcargoadmision($request->getPost()->idcargoadmision)->findOne();
                    $cargoadmisionEliminadoArray = array();
                    if($cargoadmisionEliminado->getIdservicio() != null){
                        $cargoadmisionEliminado = array(
                            'idcargoadmision' => $cargoadmisionEliminado->getIdcargoadmision(),
                            'idadmision' => $cargoadmisionEliminado->getIdadmision(),
                            'status' => $cargoadmisionEliminado->getAdmision()->getAdmisionStatus(),
                            'cargoadmision_cantidad' => $cargoadmisionEliminado->getCargoadmisionCantidad(),
                            'servicio' => $cargoadmisionEliminado->getServicio()->getServicioNombre(),
                            'descripcion' => $cargoadmisionEliminado->getServicio()->getServicioDescripcion(),
                            'precio' => $cargoadmisionEliminado->getServicio()->getServicioPrecio(),
                            'subtotal' => $cargoadmisionEliminado->getCargoadmisionMonto(),
                            'fechahora' => $cargoadmisionEliminado->getCargoadmisionFecha(),
                        );
                        array_push($cargoadmisionEliminadoArray, $cargoadmisionEliminado);
                    }
                    \CargoadmisionQuery::create()->filterByIdcargoadmision($request->getPost()->idcargoadmision)->delete();

                    $cargoadmisionQuery = \CargoadmisionQuery::create()->filterByIdadmision($request->getPost()->idadmision)->find();
                    if($cargoadmisionQuery->getArrayCopy()){
                        $cargoadmisionArray = array();
                        foreach($cargoadmisionQuery as $cargoadmisionEntity){
                            if($cargoadmisionEntity->getIdservicio() != null){
                                $cargoadmision = array(
                                    'idcargoadmision' => $cargoadmisionEntity->getIdcargoadmision(),
                                    'idadmision' => $cargoadmisionEntity->getIdadmision(),
                                    'status' => $cargoadmisionEntity->getAdmision()->getAdmisionStatus(),
                                    'cargoadmision_cantidad' => $cargoadmisionEntity->getCargoadmisionCantidad(),
                                    'servicio' => $cargoadmisionEntity->getServicio()->getServicioNombre(),
                                    'descripcion' => $cargoadmisionEntity->getServicio()->getServicioDescripcion(),
                                    'precio' => $cargoadmisionEntity->getServicio()->getServicioPrecio(),
                                    'subtotal' => $cargoadmisionEntity->getCargoadmisionMonto(),
                                    'fechahora' => date('Y-m-d H:i:s'),
                                );
                                array_push($cargoadmisionArray, $cargoadmision);
                            }
                        }
                    }

                    return new JsonModel(array(
                        'cargoadmisionArray' => $cargoadmisionArray,
                        'cargoadmisionEliminadoArray' => $cargoadmisionEliminadoArray,
                    ));
                }
            }
        }
        // End Eliminar cargoadmision

        
        // End Ver admisionanticipo
        // Start Eliminar admisionanticipo
        if($request->getPost()->eliminar_admisionanticipo == "true"){
            if(\AdmisionanticipoQuery::create()->filterByIdadmisionanticipo($request->getPost()->idadmisionanticipo)->exists()){

                $admisionanticipoEliminado = \AdmisionanticipoQuery::create()->filterByIdadmisionanticipo($request->getPost()->idadmisionanticipo)->findOne();
                $admisionanticipoEliminadoArray = array();
                $admisionanticipoEliminado = array(
                    'idadmisionanticipo' => $admisionanticipoEliminado->getIdadmisionanticipo(),
                    'idadmision' => $admisionanticipoEliminado->getIdadmision(),
                    'admisionanticipo_fecha' => $admisionanticipoEliminado->getAdmisionanticipoFecha(),
                    'admisionanticipo_cantidad' => $admisionanticipoEliminado->getAdmisionanticipoCantidad(),
                    'admisionanticipo_nota' => $admisionanticipoEliminado->getAdmisionanticipoNota(),
                );
                array_push($admisionanticipoEliminadoArray, $admisionanticipoEliminado);

                \AdmisionanticipoQuery::create()->filterByIdadmisionanticipo($request->getPost()->idadmisionanticipo)->delete();

                $cargoadmisionQuery = \CargoadmisionQuery::create()->filterByIdadmision($request->getPost()->idadmision)->find();
                if($cargoadmisionQuery->getArrayCopy()){
                    $cargoadmisionArray = array();
                    foreach($cargoadmisionQuery as $cargoadmisionEntity){
                        if($cargoadmisionEntity->getIdservicio() != null){
                            $cargoadmision = array(
                                'subtotal' => $cargoadmisionEntity->getCargoadmisionMonto(),
                            );
                            array_push($cargoadmisionArray, $cargoadmision);
                        }
                    }
                }

                return new JsonModel(array(
                    'cargoadmisionArray' => $cargoadmisionArray,
                    'admisionanticipoEliminadoArray' => $admisionanticipoEliminadoArray,
                ));
            }
        }
        // End Eliminar admisionanticipo
        
//        // Start Ver admisionanticipo
//        if($request->getPost()->ver_admisionanticipo == "true"){
//            $admisionanticipoQuery = \AdmisionanticipoQuery::create()->filterByIdadmision($request->getPost()->idadmision)->find();
//            if($admisionanticipoQuery->count() != 0){
//                $admisionanticipoArray = array();
//                foreach($admisionanticipoQuery as $admisionanticipoEntity){
//                    $admisionanticipo = array(
//                        'idadmisionanticipo' => $admisionanticipoEntity->getIdadmisionanticipo(),
//                        'idadmision' => $admisionanticipoEntity->getIdadmision(),
//                        'admisionanticipo_fecha' => $admisionanticipoEntity->getAdmisionanticipoFecha(),
//                        'admisionanticipo_cantidad' => $admisionanticipoEntity->getAdmisionanticipoCantidad(),
//                        'admisionanticipo_nota' => $admisionanticipoEntity->getAdmisionanticipoNota(),
//                        'admisionanticipo_tipo' => $admisionanticipoEntity->getAdmisionanticipoTipo()
//                    );
//                    array_push($admisionanticipoArray, $admisionanticipo);
//                }
//            }
//            return new JsonModel(array(
//                'admisionanticipoArray' => $admisionanticipoArray,
//            ));
//        }
//        // End Ver admisionanticipo
        
        // Start Ver admisionanticipo
        if($request->getPost()->ver_admisionanticipo == "true"){
            $existeServicio = false;

            $admisionanticipoQuery = \AdmisionanticipoQuery::create()->filterByIdadmision($request->getPost()->idadmision)->find();
            if($admisionanticipoQuery->count() != 0){
                $admisionanticipoArray = array();
                foreach($admisionanticipoQuery as $admisionanticipoEntity){
                    $admisionanticipo = array(
                        'idadmisionanticipo' => $admisionanticipoEntity->getIdadmisionanticipo(),
                        'idadmision' => $admisionanticipoEntity->getIdadmision(),
                        'admisionanticipo_fecha' => $admisionanticipoEntity->getAdmisionanticipoFecha(),
                        'admisionanticipo_cantidad' => $admisionanticipoEntity->getAdmisionanticipoCantidad(),
                        'admisionanticipo_nota' => $admisionanticipoEntity->getAdmisionanticipoNota(),
                        'admisionanticipo_tipo' => $admisionanticipoEntity->getAdmisionanticipoTipo()
                    );
                    array_push($admisionanticipoArray, $admisionanticipo);

                    $cargoadmisionQuery = \CargoadmisionQuery::create()->filterByIdadmision($admisionanticipoEntity->getIdadmision())->find();
                    foreach($cargoadmisionQuery as $cargoadmisionEntity){
                        if($cargoadmisionEntity->getIdservicio()){
                            $existeServicio = true;
                        }

                    }
                }
            }

            return new JsonModel(array(
                'admisionanticipoArray' => $admisionanticipoArray,
                'existeServicio' => $existeServicio,
            ));
        }
        // End Ver admisionanticipo

        // Start Ver consultaanticipo
        if($request->getPost()->ver_consultaanticipo == "true"){
            $existeServicioConsulta = false;

            $consultaanticipoQuery = \ConsultaanticipoQuery::create()->filterByIdconsulta($request->getPost()->idconsulta)->find();
            if($consultaanticipoQuery->count() != 0){
                $consultaanticipoArray = array();
                foreach($consultaanticipoQuery as $consultaanticipoEntity){
                    $consultaanticipo = array(
                        'idconsultaanticipo' => $consultaanticipoEntity->getIdconsultaanticipo(),
                        'idconsulta' => $consultaanticipoEntity->getIdconsulta(),
                        'consultaanticipo_fecha' => $consultaanticipoEntity->getConsultaanticipoFecha(),
                        'consultaanticipo_cantidad' => $consultaanticipoEntity->getConsultaanticipoCantidad(),
                        'consultaanticipo_nota' => $consultaanticipoEntity->getConsultaanticipoNota(),
                        'consultaanticipo_tipo' => $consultaanticipoEntity->getConsultaanticipoTipo()
                    );
                    array_push($consultaanticipoArray, $consultaanticipo);

                    $cargoconsultaQuery = \CargoconsultaQuery::create()->filterByIdconsulta($consultaanticipoEntity->getIdconsulta())->find();
                    foreach($cargoconsultaQuery as $cargoconsultaEntity){
                        if($cargoconsultaEntity->getIdservicio()){
                            $existeServicioConsulta = true;
                        }

                    }
                }
            }

            return new JsonModel(array(
                'consultaanticipoArray' => $consultaanticipoArray,
                'existeServicioConsulta' => $existeServicioConsulta,
            ));
        }
        // End Ver consultaanticipo
        
        // Start Eliminar cargoconsulta
        if($request->getPost()->idcargoconsulta){
            if($request->getPost()->eliminar_cargoconsulta_tipo == 'articulo'){
                if(\CargoconsultaQuery::create()->filterByIdcargoconsulta($request->getPost()->idcargoconsulta)->exists()){

                    $cargoconsultaEliminado = \CargoconsultaQuery::create()->filterByIdcargoconsulta($request->getPost()->idcargoconsulta)->findOne();
                    $lugarinventarioEntity = $cargoconsultaEliminado->getLugarinventario();
                    $cantidad = $lugarinventarioEntity->getLugarinventarioCantidad();
                    $lugarinventarioEntity->setLugarinventarioCantidad($cantidad+$request->getPost()->cantidad);
                    $lugarinventarioEntity->save();
                    $cargoconsultaEliminadoArray = array();
                    if($cargoconsultaEliminado->getIdlugarinventario() != null){
                        $articulovarianteEliminado = $cargoconsultaEliminado->getLugarinventario()->getOrdencompradetalle()->getArticulovariante();

                        $propiedadvalorNombreEliminado = null;
                        foreach($articulovarianteEliminado->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEliminado){
                            $propiedadEliminadoQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEliminado->getIdpropiedad())->findOne();
                            $propiedadvalorEliminadoQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEliminado->getIdpropiedadvalor())->findOne();
                            $propiedadvalorNombreEliminado .= $propiedadEliminadoQuery->getPropiedadNombre() . " " . $propiedadvalorEliminadoQuery->getPropiedadvalorNombre(). " ";
                        }
                        $cargoconsultaEliminado = array(
                            'idcargoconsulta' => $cargoconsultaEliminado->getIdcargoconsulta(),
                            'idconsulta' => $cargoconsultaEliminado->getIdconsulta(),
                            'status' => $cargoconsultaEliminado->getConsulta()->getConsultaStatus(),
                            'cantidad' => $cargoconsultaEliminado->getCantidad(),
                            'articulo' => $cargoconsultaEliminado->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulo()->getArticuloNombre(),
                            'descripcion' => utf8_encode($propiedadvalorNombreEliminado),
                            'salida' => $cargoconsultaEliminado->getLugarinventario()->getLugar()->getLugarNombre(),
                            'fechahora' => $cargoconsultaEliminado->getCargoconsultaFecha(),
                            'precio' => $cargoconsultaEliminado->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio(),
                            'subtotal' => $cargoconsultaEliminado->getMonto(),
                        );
                        array_push($cargoconsultaEliminadoArray, $cargoconsultaEliminado);
                    }
                    \CargoconsultaQuery::create()->filterByIdcargoconsulta($request->getPost()->idcargoconsulta)->delete();


                    $cargoconsultaQuery = \CargoconsultaQuery::create()->filterByIdconsulta($request->getPost()->idconsulta)->find();
                    if($cargoconsultaQuery->getArrayCopy()){
                        $cargoconsultaArray = array();
                        foreach($cargoconsultaQuery as $cargoconsultaEntity){
                            if($cargoconsultaEntity->getIdlugarinventario() != null){
                                $articulovarianteEntity = $cargoconsultaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante();

                                $propiedadvalorNombre = null;
                                foreach($articulovarianteEntity->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                    $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                    $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                    $propiedadvalorNombre .= $propiedadQuery->getPropiedadNombre() . " " . $propiedadvalorQuery->getPropiedadvalorNombre(). " ";
                                }
                                $cargoconsulta = array(
                                    'idcargoconsulta' => $cargoconsultaEntity->getIdcargoconsulta(),
                                    'idconsulta' => $cargoconsultaEntity->getIdconsulta(),
                                    'status' => $cargoconsultaEntity->getConsulta()->getConsultaStatus(),
                                    'cantidad' => $cargoconsultaEntity->getCantidad(),
                                    'articulo' => $cargoconsultaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulo()->getArticuloNombre(),
                                    'descripcion' => utf8_encode($propiedadvalorNombre),
                                    'salida' => $cargoconsultaEntity->getLugarinventario()->getLugar()->getLugarNombre(),
                                    'fechahora' => $cargoconsultaEntity->getCargoconsultaFecha(),
                                    'precio' => $cargoconsultaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio(),
                                    'subtotal' => $cargoconsultaEntity->getMonto(),
                                );
                                array_push($cargoconsultaArray, $cargoconsulta);
                            }
                        }
                    }
                    return new JsonModel(array(
                        'cargoconsultaArray' => $cargoconsultaArray,
                        'cargoconsultaEliminadoArray' => $cargoconsultaEliminadoArray,
                    ));
                }
            }
            if($request->getPost()->eliminar_cargoconsulta_tipo == 'servicio'){
                if(\CargoconsultaQuery::create()->filterByIdcargoconsulta($request->getPost()->idcargoconsulta)->exists()){

                    $cargoconsultaEliminado = \CargoconsultaQuery::create()->filterByIdcargoconsulta($request->getPost()->idcargoconsulta)->findOne();
                    $cargoconsultaEliminadoArray = array();
                    if($cargoconsultaEliminado->getIdservicio() != null){
                        $cargoconsultaEliminado = array(
                            'idcargoconsulta' => $cargoconsultaEliminado->getIdcargoconsulta(),
                            'idconsulta' => $cargoconsultaEliminado->getIdconsulta(),
                            'status' => $cargoconsultaEliminado->getConsulta()->getConsultaStatus(),
                            'cantidad' => $cargoconsultaEliminado->getCantidad(),
                            'servicio' => $cargoconsultaEliminado->getServicio()->getServicioNombre(),
                            'descripcion' => $cargoconsultaEliminado->getServicio()->getServicioDescripcion(),
                            'precio' => $cargoconsultaEliminado->getServicio()->getServicioPrecio(),
                            'subtotal' => $cargoconsultaEliminado->getMonto(),
                            'fechahora' => $cargoconsultaEliminado->getCargoconsultaFecha(),
                        );
                        array_push($cargoconsultaEliminadoArray, $cargoconsultaEliminado);
                    }
                    \CargoconsultaQuery::create()->filterByIdcargoconsulta($request->getPost()->idcargoconsulta)->delete();

                    $cargoconsultaQuery = \CargoconsultaQuery::create()->filterByIdconsulta($request->getPost()->idconsulta)->find();
                    if($cargoconsultaQuery->getArrayCopy()){
                        $cargoconsultaArray = array();
                        foreach($cargoconsultaQuery as $cargoconsultaEntity){
                            if($cargoconsultaEntity->getIdservicio() != null){
                                $cargoconsulta = array(
                                    'idcargoconsulta' => $cargoconsultaEntity->getIdcargoconsulta(),
                                    'idconsulta' => $cargoconsultaEntity->getIdconsulta(),
                                    'status' => $cargoconsultaEntity->getConsulta()->getConsultaStatus(),
                                    'cantidad' => $cargoconsultaEntity->getCantidad(),
                                    'servicio' => $cargoconsultaEntity->getServicio()->getServicioNombre(),
                                    'descripcion' => $cargoconsultaEntity->getServicio()->getServicioDescripcion(),
                                    'precio' => $cargoconsultaEntity->getServicio()->getServicioPrecio(),
                                    'subtotal' => $cargoconsultaEntity->getMonto(),
                                    'fechahora' => date('Y-m-d H:i:s'),
                                );
                                array_push($cargoconsultaArray, $cargoconsulta);
                            }
                        }
                    }

                    return new JsonModel(array(
                        'cargoconsultaArray' => $cargoconsultaArray,
                        'cargoconsultaEliminadoArray' => $cargoconsultaEliminadoArray,
                    ));
                }
            }
        }
        // End Eliminar cargoconsulta

        // Inicio Anticipo Admision
        //Intanciamos nuestro formulario admisionanticipo
        $admisionanticipoForm = new AdmisionanticipoForm();
        //Instanciamos nuestro filtro
        $admisionanticipoFilter = new AdmisionanticipoFilter();
        //Le ponemos nuestro filtro a nuesto fromulario
        $admisionanticipoForm->setInputFilter($admisionanticipoFilter->getInputFilter());

        //Le ponemos los datos a nuestro formulario
        $admisionanticipoForm->setData($request->getPost());

        //Validamos nuestro formulario
        if($admisionanticipoForm->isValid()){

            $admisionanticipo = new \Admisionanticipo();

            //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Admisionanticipo
            foreach ($admisionanticipoForm->getData() as $admisionanticipoKey => $admisionanticipoValue){
                $admisionanticipo->setByName($admisionanticipoKey, $admisionanticipoValue, \BasePeer::TYPE_FIELDNAME);
            }
            $admisionanticipo->setAdmisionanticipoFecha(date('Y-m-d H:i:s'));
            //Guardamos en nuestra base de datos
            $admisionanticipo->save();

            $admisionanticipoArray = \AdmisionanticipoQuery::create()->filterByIdadmisionanticipo($admisionanticipo->getIdadmisionanticipo())->findOne()->toArray(\BasePeer::TYPE_FIELDNAME);

            return new JsonModel(array(
                'admisionanticipoArray' => $admisionanticipoArray,
            ));
        }
        // Fin Anticipo Admision

        // Inicio Pago Admision
        //Intanciamos nuestro formulario admisionanticipo
        $admisionanticipoForm = new AdmisionanticipoForm();
        //Instanciamos nuestro filtro
        $admisionanticipoFilter = new AdmisionanticipoFilter();
        //Le ponemos nuestro filtro a nuesto fromulario
        $admisionanticipoForm->setInputFilter($admisionanticipoFilter->getInputFilter());

        //Le ponemos los datos a nuestro formulario
        $admisionanticipoForm->setData($request->getPost());

        //Validamos nuestro formulario
        if($admisionanticipoForm->isValid()){

            $admisionanticipo = new \Admisionanticipo();

            //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Admisionanticipo
            foreach ($admisionanticipoForm->getData() as $admisionanticipoKey => $admisionanticipoValue){
                $admisionanticipo->setByName($admisionanticipoKey, $admisionanticipoValue, \BasePeer::TYPE_FIELDNAME);
            }
            $admisionanticipo->setAdmisionanticipoFecha(date('Y-m-d H:i:s'));
            //Guardamos en nuestra base de datos
            $admisionanticipo->save();

            $admisionanticipoArray = \AdmisionanticipoQuery::create()->filterByIdadmisionanticipo($admisionanticipo->getIdadmisionanticipo())->findOne()->toArray(\BasePeer::TYPE_FIELDNAME);

            return new JsonModel(array(
                'admisionanticipoArray' => $admisionanticipoArray,
            ));
        }
        // Fin Pago Admision

        // Inicio Pago Consulta
        //Intanciamos nuestro formulario consultaanticipo
        $consultaanticipoForm = new ConsultaanticipoForm();
        //Instanciamos nuestro filtro
        $consultaanticipoFilter = new ConsultaanticipoFilter();
        //Le ponemos nuestro filtro a nuesto fromulario
        $consultaanticipoForm->setInputFilter($consultaanticipoFilter->getInputFilter());

        //Le ponemos los datos a nuestro formulario
        $consultaanticipoForm->setData($request->getPost());

        //Validamos nuestro formulario
        if($consultaanticipoForm->isValid()){

            $consultaanticipo = new \Consultaanticipo();

            //Recorremos nuestro formulario y seteamos los valores a nuestro objeto consultaanticipo
            foreach ($consultaanticipoForm->getData() as $consultaanticipoKey => $consultaanticipoValue){
                $consultaanticipo->setByName($consultaanticipoKey, $consultaanticipoValue, \BasePeer::TYPE_FIELDNAME);
            }
            $consultaanticipo->setConsultaanticipoFecha(date('Y-m-d H:i:s'));
            //Guardamos en nuestra base de datos
            $consultaanticipo->save();

            $consultaanticipoArray = \ConsultaanticipoQuery::create()->filterByIdconsultaanticipo($consultaanticipo->getIdconsultaanticipo())->findOne()->toArray(\BasePeer::TYPE_FIELDNAME);

            return new JsonModel(array(
                'consultaanticipoArray' => $consultaanticipoArray,
            ));
        }
        // Fin Pago Consulta

        $id = (int) $this->params()->fromRoute('id', 0);
        if($id){

            $paciente = \PacienteQuery::create()->findPk($id);
            $fechaNacimiento = date('m/d/Y', strtotime($paciente->getPacienteFechanacimiento()));

            $consultasQuery = $paciente->getConsultas();
            if($consultasQuery->count() != 0){
                foreach($consultasQuery as $consultaEntity){
                    if($consultaEntity->getConsultorio()->getConsultorioEnuso() == 1){
                        $consultaEntity = $consultaEntity;
                    }
                }

                if($request->getPost()->tablaCargoconsultaArticulo == 'true'){
                    $cargoconsultaArray = array();
                    // Creamos la tabla con sus elementos existentes tanto de articulo como de servicio:
                    $cargoconsultaQuery = \CargoconsultaQuery::create()->filterByIdconsulta($consultaEntity->getIdconsulta())->find();
                    if($cargoconsultaQuery->getArrayCopy()){
                        foreach($cargoconsultaQuery as $cargoconsultaEntity){
                            if($cargoconsultaEntity->getIdlugarinventario() != null){
                                $articulovarianteEntity = $cargoconsultaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante();
                                $propiedadvalorNombre = null;
                                foreach($articulovarianteEntity->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                    $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                    $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                    $propiedadvalorNombre .= $propiedadQuery->getPropiedadNombre() . " " . $propiedadvalorQuery->getPropiedadvalorNombre(). " ";
                                }

                                $cargoconsulta = array(
                                    'idcargoconsulta' => $cargoconsultaEntity->getIdcargoconsulta(),
                                    'idconsulta' => $cargoconsultaEntity->getIdconsulta(),
                                    'status' => $cargoconsultaEntity->getConsulta()->getConsultaStatus(),
                                    'cantidad' => $cargoconsultaEntity->getCantidad(),
                                    'articulo' => $cargoconsultaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulo()->getArticuloNombre(),
                                    'descripcion' => utf8_encode($propiedadvalorNombre),
                                    'salida' => $cargoconsultaEntity->getLugarinventario()->getLugar()->getLugarNombre(),
                                    'fechahora' => $cargoconsultaEntity->getCargoconsultaFecha(),
                                    'precio' => $cargoconsultaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio(),
                                    'subtotal' => $cargoconsultaEntity->getMonto(),
                                );
                                array_push($cargoconsultaArray, $cargoconsulta);
                            }
                        }
                    }
                }

                if($request->getPost()->tablaCargoconsultaServicio == 'true'){
                    $cargoconsultaArray = array();
                    // Creamos la tabla con sus elementos existentes tanto de articulo como de servicio:
                    $cargoconsultaQuery = \CargoconsultaQuery::create()->filterByIdconsulta($consultaEntity->getIdconsulta())->find();
                    if($cargoconsultaQuery->getArrayCopy()){
                        foreach($cargoconsultaQuery as $cargoconsultaEntity){
                            if($cargoconsultaEntity->getIdservicio() != null){
                                $cargoconsulta = array(
                                    'idcargoconsulta' => $cargoconsultaEntity->getIdcargoconsulta(),
                                    'idconsulta' => $cargoconsultaEntity->getIdconsulta(),
                                    'status' => $cargoconsultaEntity->getConsulta()->getConsultaStatus(),
                                    'cantidad' => $cargoconsultaEntity->getCantidad(),
                                    'servicio' => $cargoconsultaEntity->getServicio()->getServicioNombre(),
                                    'idservicio' => $cargoconsultaEntity->getServicio()->getIdservicio(),
                                    'descripcion' => $cargoconsultaEntity->getServicio()->getServicioDescripcion(),
                                    'precio' => $cargoconsultaEntity->getServicio()->getServicioPrecio(),
                                    'subtotal' => $cargoconsultaEntity->getMonto(),
                                    'fechahora' => date('Y-m-d H:i:s'),
                                );
                                array_push($cargoconsultaArray, $cargoconsulta);
                            }
                        }
                    }
                }

                if($cargoconsultaArray != null){
                    return new JsonModel(array(
                        'cargoconsultaArray' => $cargoconsultaArray
                    ));
                }
                //Intanciamos nuestro formulario cargoconsulta
                $cargoconsultaForm = new CargoconsultaForm();

                if($request->getPost()->cargoconsultaarticulo_by != null){

                    if($request->getPost()->cargoconsultaarticulo_by == 'nombre'){
                        if($request->getPost()->busquedaArticulo != null){
                            $ordencompradetalleQuery = \OrdencompradetalleQuery::create()
                                ->useArticulovarianteQuery()
                                ->useArticuloQuery()
                                ->filterBy(BasePeer::translateFieldname('articulo', 'articulo_nombre', BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME), '%'.$request->getPost()->busquedaArticulo.'%', \Criteria::LIKE)
                                ->endUse()
                                ->endUse()
                                ->find();
                        }else{
                            $ordencompradetalleQuery = \OrdencompradetalleQuery::create()->find();
                        }
                    }
                    if($request->getPost()->cargoconsultaarticulo_by == 'código de barras'){
                        if($request->getPost()->busquedaArticulo != null){
                            $ordencompradetalleQuery = \OrdencompradetalleQuery::create()
                                ->useArticulovarianteQuery()
                                ->filterBy(BasePeer::translateFieldname('articulovariante', 'articulovariante_codigobarras', BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME), '%'.$request->getPost()->busquedaArticulo.'%', \Criteria::LIKE)
                                ->endUse()
                                ->find();
                        }else{
                            $ordencompradetalleQuery = \OrdencompradetalleQuery::create()->find();
                        }
                    }
                    if($request->getPost()->cargoconsultaarticulo_by == 'proveedor'){
                        if($request->getPost()->busquedaArticulo != null){
                            $ordencompradetalleQuery = \OrdencompradetalleQuery::create()
                                ->useOrdencompraQuery()
                                ->useProveedorQuery()
                                ->filterBy(BasePeer::translateFieldname('proveedor', 'proveedor_nombre', BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME), '%'.$request->getPost()->busquedaArticulo.'%', \Criteria::LIKE)
                                ->endUse()
                                ->endUse()
                                ->find();
                        }else{
                            $ordencompradetalleQuery = \OrdencompradetalleQuery::create()->find();
                        }
                    }

                    if($ordencompradetalleQuery->getArrayCopy()){
                        $ordencompradetalleArray = array();
                        $lugarNombre = null;
                        foreach($ordencompradetalleQuery as $ordencompradetalleEntity){
                            /*
                            foreach($ordencompradetalleEntity->getLugarinventarios()->getArrayCopy() as $lugarinventarioEntity){
                                $idlugarinventario = $lugarinventarioEntity->getIdlugarinventario();
                                $lugarNombre = $lugarinventarioEntity->getLugar()->getLugarNombre();
                                $lugarinventarioCantidad = $lugarinventarioEntity->getLugarinventarioCantidad();
                                $articuloNombre = $ordencompradetalleEntity->getArticulovariante()->getArticulo()->getArticuloNombre();

                                foreach($ordencompradetalleEntity->getArticulovariante()->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                    $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                    $propiedadNombre = $propiedadQuery->getPropiedadNombre();
                                }
                                foreach($ordencompradetalleEntity->getArticulovariante()->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                    $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                    $propiedadvalorNombre = $propiedadvalorQuery->getPropiedadvalorNombre();
                                }
                            }
                            */

                            foreach($ordencompradetalleEntity->getLugarinventarios()->getArrayCopy() as $lugarinventarioEntity){
                                $idlugarinventario = $lugarinventarioEntity->getIdlugarinventario();
                                $lugarNombre = $lugarinventarioEntity->getLugar()->getLugarNombre();
                                $lugarinventarioCantidad = $lugarinventarioEntity->getLugarinventarioCantidad();
                                $articuloNombre = $ordencompradetalleEntity->getArticulovariante()->getArticulo()->getArticuloNombre();

                                /*
                                foreach($ordencompradetalleEntity->getArticulovariante()->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                    $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                    $propiedadNombre = $propiedadQuery->getPropiedadNombre();
                                    array_push($propiedadArray, $propiedadNombre);

                                }
                                foreach($ordencompradetalleEntity->getArticulovariante()->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                    $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                    $propiedadvalorNombre = $propiedadvalorQuery->getPropiedadvalorNombre();
                                    array_push($propiedadValorArray, $propiedadvalorNombre);
                                }
                                */

                                $propiedadvalorNombre = null;
                                foreach($ordencompradetalleEntity->getArticulovariante()->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                    $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                    $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                    $propiedadvalorNombre .= $propiedadQuery->getPropiedadNombre() . " " . $propiedadvalorQuery->getPropiedadvalorNombre(). " ";
                                }
                            }

                            $ordencompradetalle = array(
                                'idordencompradetalle' => $ordencompradetalleEntity->getIdordencompradetalle(),
                                'idlugarinventario' => $idlugarinventario,
                                'cargoconsulta_tipo' => 'articulo',
                                'cargoconsulta_fecha' => date('Y-m-d H:i:s'),
                                'ordencompradetalle_caducidad' => $ordencompradetalleEntity->getOrdencompradetalleCaducidad(),
                                'existencia' => $lugarinventarioCantidad,
                                'articulo' => $articuloNombre,
                                'descripcion' => utf8_encode($propiedadvalorNombre),
                                'precio' => $ordencompradetalleEntity->getArticulovariante()->getArticulovariantePrecio(),
                                'salida' => $lugarNombre,
                            );

                            array_push($ordencompradetalleArray, $ordencompradetalle);
                        }
                    }


                    return new JsonModel(array(
                        'ordencompradetalleArray' => $ordencompradetalleArray
                    ));
                }

                if($request->getPost()->cargoconsultaservicio_by != null){

                    if($request->getPost()->cargoconsultaservicio_by == 'nombre'){
                        if($request->getPost()->busquedaServicio != null){
                            $servicioQuery = \ServicioQuery::create()
                                ->filterBy(BasePeer::translateFieldname('servicio', 'servicio_nombre', BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME), '%'.$request->getPost()->busquedaServicio.'%', \Criteria::LIKE)
                                ->find();
                        }else{
                            $servicioQuery = \ServicioQuery::create()->find();
                        }
                    }

                    if($servicioQuery->getArrayCopy()){
                        $servicioArray = array();
                        foreach($servicioQuery as $servicioEntity){
                            $servicio = array(
                                'idservicio' => $servicioEntity->getIdservicio(),
                                'cargoconsulta_tipo' => 'servicio',
                                'cargoconsulta_fecha' => date('Y-m-d H:i:s'),
                                'servicio_nombre' => $servicioEntity->getServicioNombre(),
                                'servicio_descripcion' => $servicioEntity->getServicioDescripcion(),
                                'servicio_precio' => $servicioEntity->getServicioPrecio(),
                            );
                            array_push($servicioArray, $servicio);
                        }
                    }

                    return new JsonModel(array(
                        'servicioArray' => $servicioArray
                    ));
                }
                // Fin Preparando Form Cargoconsulta

                //Instanciamos nuestro filtro
                $cargoconsultaFilter = new CargoconsultaFilter();
                //Le ponemos nuestro filtro a nuesto fromulario
                $cargoconsultaForm->setInputFilter($cargoconsultaFilter->getInputFilter());

                //Le ponemos los datos a nuestro formulario
                $cargoconsultaForm->setData(array('idconsulta' => $consultaEntity->getIdconsulta()));
                $cargoconsultaForm->setData($request->getPost());

                //Validamos nuestro formulario
                if($cargoconsultaForm->isValid()){

                    $cargoconsultaArray = array();
                    if($request->getPost()->cargoconsulta_tipo == 'articulo'){

                        //Instanciamos un nuevo objeto de nuestro objeto Paciente
                        $cargoconsulta = new \Cargoconsulta();

                        //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Consulta
                        foreach ($cargoconsultaForm->getData() as $cargoconsultaKey => $cargoconsultaValue){
                            if($cargoconsultaKey != 'cargoconsultaarticulo_by' && $cargoconsultaKey != 'cargoconsultaservicio_by' && $cargoconsultaKey != 'busquedaArticulo' && $cargoconsultaKey != 'busquedaServicio'){
                                $cargoconsulta->setByName($cargoconsultaKey, $cargoconsultaValue, \BasePeer::TYPE_FIELDNAME);
                            }
                        }
                        // Validar precio, caducidad y existencia de ordencompradetalle
                        $existencia = $cargoconsulta->getLugarinventario()->getLugarinventarioCantidad();
                        $caducidad = $cargoconsulta->getLugarinventario()->getOrdencompradetalle()->getOrdencompradetalleCaducidad();
                        $precio = $cargoconsulta->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio();

                        if($existencia > 0){
                            if($caducidad < date('Y-m-d')){
                                $cargoconsulta->setMonto($request->getPost()->cantidad*$precio);
                            }
                        }

                        //Guardamos en nuestra base de datos
                        $cargoconsulta->save();

                        $lugarinventarioQuery = $cargoconsulta->getLugarinventario();
                        $lugarinventarioQuery->setLugarinventarioCantidad($lugarinventarioQuery->getLugarinventarioCantidad()-$cargoconsulta->getCantidad());
                        $lugarinventarioQuery->save();

                        $cargoconsultaQuery = \CargoconsultaQuery::create()->filterByIdconsulta($cargoconsulta->getIdconsulta())->find();
                        if($cargoconsultaQuery->getArrayCopy()){
                            foreach($cargoconsultaQuery as $cargoconsultaEntity){
                                if($cargoconsultaEntity->getIdlugarinventario() != null){
                                    $articulovarianteEntity = $cargoconsultaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante();
                                    $propiedadvalorNombre = null;
                                    foreach($articulovarianteEntity->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                        $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                        $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                        $propiedadvalorNombre .= $propiedadQuery->getPropiedadNombre() . " " . $propiedadvalorQuery->getPropiedadvalorNombre(). " ";
                                    }

                                    $cargoconsulta = array(
                                        'idcargoconsulta' => $cargoconsultaEntity->getIdcargoconsulta(),
                                        'idconsulta' => $cargoconsultaEntity->getIdconsulta(),
                                        'status' => $cargoconsultaEntity->getConsulta()->getConsultaStatus(),
                                        'cantidad' => $cargoconsultaEntity->getCantidad(),
                                        'articulo' => $cargoconsultaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulo()->getArticuloNombre(),
                                        'descripcion' => utf8_encode($propiedadvalorNombre),
                                        'salida' => $cargoconsultaEntity->getLugarinventario()->getLugar()->getLugarNombre(),
                                        'fechahora' => $cargoconsultaEntity->getCargoconsultaFecha(),
                                        'precio' => $cargoconsultaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio(),
                                        'subtotal' => $cargoconsultaEntity->getMonto(),
                                    );
                                    array_push($cargoconsultaArray, $cargoconsulta);
                                }
                            }
                        }
                    }
                    if($request->getPost()->cargoconsulta_tipo == 'servicio'){

                        //Instanciamos un nuevo objeto de nuestro objeto Paciente
                        $cargoconsulta = new \Cargoconsulta();

                        //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Consulta
                        foreach ($cargoconsultaForm->getData() as $cargoconsultaKey => $cargoconsultaValue){
                            if($cargoconsultaKey != 'cargoconsultaarticulo_by' && $cargoconsultaKey != 'cargoconsultaservicio_by' && $cargoconsultaKey != 'busquedaArticulo' && $cargoconsultaKey != 'busquedaServicio'){
                                $cargoconsulta->setByName($cargoconsultaKey, $cargoconsultaValue, \BasePeer::TYPE_FIELDNAME);
                            }
                        }

                        $precio = $cargoconsulta->getServicio()->getServicioPrecio();
                        $cargoconsulta->setMonto($request->getPost()->cantidad*$precio);
                        //Guardamos en nuestra base de datos
                        $cargoconsulta->save();

                        $cargoconsultaQuery = \CargoconsultaQuery::create()->filterByIdconsulta($cargoconsulta->getIdconsulta())->find();
                        if($cargoconsultaQuery->getArrayCopy()){
                            foreach($cargoconsultaQuery as $cargoconsultaEntity){
                                if($cargoconsultaEntity->getIdservicio() != null){
                                    $cargoconsulta = array(
                                        'idcargoconsulta' => $cargoconsultaEntity->getIdcargoconsulta(),
                                        'idconsulta' => $cargoconsultaEntity->getIdconsulta(),
                                        'status' => $cargoconsultaEntity->getConsulta()->getConsultaStatus(),
                                        'cantidad' => $cargoconsultaEntity->getCantidad(),
                                        'servicio' => $cargoconsultaEntity->getServicio()->getServicioNombre(),
                                        'descripcion' => $cargoconsultaEntity->getServicio()->getServicioDescripcion(),
                                        'precio' => $cargoconsultaEntity->getServicio()->getServicioPrecio(),
                                        'subtotal' => $cargoconsultaEntity->getMonto(),
                                        'fechahora' => date('Y-m-d H:i:s'),
                                    );
                                    array_push($cargoconsultaArray, $cargoconsulta);
                                }
                            }
                        }
                    }

                    return new JsonModel(array(
                        'cargoconsultaArray' => $cargoconsultaArray
                    ));
                }/* else {
                    $messageArray = array();
                    foreach ($cargoconsultaForm->getMessages() as $key => $value){
                        foreach($value as $val){
                            //Obtenemos el valor de la columna con error
                            $message = $key.' '.$val;
                            array_push($messageArray, $message);
                        }
                    }
                    var_dump($messageArray);
                    return new ViewModel(array(
                        'input_error' => $messageArray
                    ));
                }*/

                $idconsultorio = $consultaEntity->getIdconsultorio();
                return new ViewModel(array(
                    'pacienteEntity' => $paciente,
                    'edad' => $this->calculaEdad($fechaNacimiento),
                    'consultorioEnuso' => $consultaEntity->getConsultorio()->getConsultorioEnuso(),
                    'consultaByPaciente' => $consultaEntity,
                    'idconsultorio' => $idconsultorio,
                    'cargoconsultaForm' => $cargoconsultaForm,
                ));
            }

            $admisionesQuery = $paciente->getAdmisions();
            if($admisionesQuery->count() != 0){
                foreach($admisionesQuery as $admisionEntity){
                    if($admisionEntity->getCuarto()->getCuartoEnuso() == 1){
                        $admisionEntity = $admisionEntity;
                    }
                }

                if($request->getPost()->tablaCargoadmisionArticulo == 'true'){
                    $cargoadmisionArray = array();
                    // Creamos la tabla con sus elementos existentes tanto de articulo como de servicio:
                    $cargoadmisionQuery = \CargoadmisionQuery::create()->filterByIdadmision($admisionEntity->getIdadmision())->find();
                    if($cargoadmisionQuery->getArrayCopy()){
                        foreach($cargoadmisionQuery as $cargoadmisionEntity){
                            if($cargoadmisionEntity->getIdlugarinventario() != null){
                                $articulovarianteEntity = $cargoadmisionEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante();
                                foreach($articulovarianteEntity->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                    $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                    $propiedadNombre = $propiedadQuery->getPropiedadNombre();
                                }
                                foreach($articulovarianteEntity->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                    $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                    $propiedadvalorNombre = $propiedadvalorQuery->getPropiedadvalorNombre();
                                }
                                $cargoadmision = array(
                                    'idcargoadmision' => $cargoadmisionEntity->getIdcargoadmision(),
                                    'idadmision' => $cargoadmisionEntity->getIdadmision(),
                                    'status' => $cargoadmisionEntity->getAdmision()->getAdmisionStatus(),
                                    'cargoadmision_cantidad' => $cargoadmisionEntity->getCargoadmisionCantidad(),
                                    'articulo' => $cargoadmisionEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulo()->getArticuloNombre(),
                                    'descripcion' => utf8_encode($propiedadNombre." ".$propiedadvalorNombre),
                                    'salida' => $cargoadmisionEntity->getLugarinventario()->getLugar()->getLugarNombre(),
                                    'fechahora' => $cargoadmisionEntity->getCargoadmisionFecha(),
                                    'precio' => $cargoadmisionEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio(),
                                    'subtotal' => $cargoadmisionEntity->getCargoadmisionMonto(),
                                );
                                array_push($cargoadmisionArray, $cargoadmision);
                            }
                        }
                    }

                    return new JsonModel(array(
                        'cargoadmisionArray' => $cargoadmisionArray
                    ));
                }

                if($request->getPost()->tablaCargoadmisionServicio == 'true'){
                    $cargoadmisionArray = array();
                    // Creamos la tabla con sus elementos existentes tanto de articulo como de servicio:
                    $cargoadmisionQuery = \CargoadmisionQuery::create()->filterByIdadmision($admisionEntity->getIdadmision())->find();
                    if($cargoadmisionQuery->getArrayCopy()){
                        foreach($cargoadmisionQuery as $cargoadmisionEntity){
                            if($cargoadmisionEntity->getIdservicio() != null){
                                $cargoadmision = array(
                                    'idcargoadmision' => $cargoadmisionEntity->getIdcargoadmision(),
                                    'idadmision' => $cargoadmisionEntity->getIdadmision(),
                                    'status' => $cargoadmisionEntity->getAdmision()->getAdmisionStatus(),
                                    'cargoadmision_cantidad' => $cargoadmisionEntity->getCargoadmisionCantidad(),
                                    'servicio' => $cargoadmisionEntity->getServicio()->getServicioNombre(),
                                    'descripcion' => $cargoadmisionEntity->getServicio()->getServicioDescripcion(),
                                    'precio' => $cargoadmisionEntity->getServicio()->getServicioPrecio(),
                                    'subtotal' => $cargoadmisionEntity->getCargoadmisionMonto(),
                                    'fechahora' => date('Y-m-d H:i:s'),
                                );
                                array_push($cargoadmisionArray, $cargoadmision);
                            }
                        }
                    }

                    return new JsonModel(array(
                        'cargoadmisionArray' => $cargoadmisionArray
                    ));
                }


                //Intanciamos nuestro formulario cargoadmision "SIN PARAMETROS"
                $cargoadmisionForm = new CargoadmisionForm();

                if($request->getPost()->cargoadmisionarticulo_by != null){

                    if($request->getPost()->cargoadmisionarticulo_by == 'nombre'){

                        if($request->getPost()->busquedaAdmisionArticulo != null){
                            $ordencompradetalleQuery = \OrdencompradetalleQuery::create()
                                ->useArticulovarianteQuery()
                                ->useArticuloQuery()
                                ->filterBy(BasePeer::translateFieldname('articulo', 'articulo_nombre', BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME), '%'.$request->getPost()->busquedaAdmisionArticulo.'%', \Criteria::LIKE)
                                ->endUse()
                                ->endUse()
                                ->find();
                        }else{
                            $ordencompradetalleQuery = \OrdencompradetalleQuery::create()->find();
                        }
                    }
                    if($request->getPost()->cargoadmisionarticulo_by == 'código de barras'){
                        if($request->getPost()->busquedaAdmisionArticulo != null){
                            $ordencompradetalleQuery = \OrdencompradetalleQuery::create()
                                ->useArticulovarianteQuery()
                                ->filterBy(BasePeer::translateFieldname('articulovariante', 'articulovariante_codigobarras', BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME), '%'.$request->getPost()->busquedaAdmisionArticulo.'%', \Criteria::LIKE)
                                ->endUse()
                                ->find();
                        }else{
                            $ordencompradetalleQuery = \OrdencompradetalleQuery::create()->find();
                        }
                    }
                    if($request->getPost()->cargoadmisionarticulo_by == 'proveedor'){
                        if($request->getPost()->busquedaAdmisionArticulo != null){
                            $ordencompradetalleQuery = \OrdencompradetalleQuery::create()
                                ->useOrdencompraQuery()
                                ->useProveedorQuery()
                                ->filterBy(BasePeer::translateFieldname('proveedor', 'proveedor_nombre', BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME), '%'.$request->getPost()->busquedaAdmisionArticulo.'%', \Criteria::LIKE)
                                ->endUse()
                                ->endUse()
                                ->find();
                        }else{
                            $ordencompradetalleQuery = \OrdencompradetalleQuery::create()->find();
                        }
                    }


                    if($ordencompradetalleQuery->getArrayCopy()){
                        $ordencompradetalleArray = array();
                        $lugarNombre = null;
                        foreach($ordencompradetalleQuery as $ordencompradetalleEntity){
                            /*
                            foreach($ordencompradetalleEntity->getLugarinventarios()->getArrayCopy() as $lugarinventarioEntity){
                                $idlugarinventario = $lugarinventarioEntity->getIdlugarinventario();
                                $lugarNombre = $lugarinventarioEntity->getLugar()->getLugarNombre();
                                $lugarinventarioCantidad = $lugarinventarioEntity->getLugarinventarioCantidad();
                                $articuloNombre = $ordencompradetalleEntity->getArticulovariante()->getArticulo()->getArticuloNombre();

                                foreach($ordencompradetalleEntity->getArticulovariante()->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                    $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                    $propiedadNombre = $propiedadQuery->getPropiedadNombre();
                                }
                                foreach($ordencompradetalleEntity->getArticulovariante()->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                    $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                    $propiedadvalorNombre = $propiedadvalorQuery->getPropiedadvalorNombre();
                                }
                            }
                            */

                            foreach($ordencompradetalleEntity->getLugarinventarios()->getArrayCopy() as $lugarinventarioEntity){
                                $idlugarinventario = $lugarinventarioEntity->getIdlugarinventario();
                                $lugarNombre = $lugarinventarioEntity->getLugar()->getLugarNombre();
                                $lugarinventarioCantidad = $lugarinventarioEntity->getLugarinventarioCantidad();
                                $articuloNombre = $ordencompradetalleEntity->getArticulovariante()->getArticulo()->getArticuloNombre();

                                /*
                                foreach($ordencompradetalleEntity->getArticulovariante()->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                    $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                    $propiedadNombre = $propiedadQuery->getPropiedadNombre();
                                    array_push($propiedadArray, $propiedadNombre);

                                }
                                foreach($ordencompradetalleEntity->getArticulovariante()->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                    $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                    $propiedadvalorNombre = $propiedadvalorQuery->getPropiedadvalorNombre();
                                    array_push($propiedadValorArray, $propiedadvalorNombre);
                                }
                                */

                                $propiedadvalorNombre = null;
                                foreach($ordencompradetalleEntity->getArticulovariante()->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                    $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                    $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                    $propiedadvalorNombre .= $propiedadQuery->getPropiedadNombre() . " " . $propiedadvalorQuery->getPropiedadvalorNombre(). " ";
                                }
                            }

                            $ordencompradetalle = array(
                                'idordencompradetalle' => $ordencompradetalleEntity->getIdordencompradetalle(),
                                'idlugarinventario' => $idlugarinventario,
                                'cargoadmision_tipo' => 'articulo',
                                'cargoadmision_fecha' => date('Y-m-d H:i:s'),
                                'ordencompradetalle_caducidad' => $ordencompradetalleEntity->getOrdencompradetalleCaducidad(),
                                'existencia' => $lugarinventarioCantidad,
                                'articulo' => $articuloNombre,
                                'descripcion' => utf8_encode($propiedadvalorNombre),
                                'precio' => $ordencompradetalleEntity->getArticulovariante()->getArticulovariantePrecio(),
                                'salida' => $lugarNombre,
                            );

                            array_push($ordencompradetalleArray, $ordencompradetalle);
                        }
                    }

                    return new JsonModel(array(
                        'ordencompradetalleArray' => $ordencompradetalleArray
                    ));
                }

                if($request->getPost()->cargoadmisionservicio_by != null){

                    if($request->getPost()->cargoadmisionservicio_by == 'nombre'){
                        if($request->getPost()->busquedaAdmisionServicio != null){
                            $servicioQuery = \ServicioQuery::create()
                                ->filterBy(BasePeer::translateFieldname('servicio', 'servicio_nombre', BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME), '%'.$request->getPost()->busquedaAdmisionServicio.'%', \Criteria::LIKE)
                                ->find();

                        }else{
                            $servicioQuery = \ServicioQuery::create()->find();
                        }
                    }

                    if($servicioQuery->getArrayCopy()){
                        $servicioArray = array();
                        foreach($servicioQuery as $servicioEntity){
                            $servicio = array(
                                'idservicio' => $servicioEntity->getIdservicio(),
                                'cargoadmision_tipo' => 'servicio',
                                'cargoadmision_fecha' => date('Y-m-d H:i:s'),
                                'servicio_nombre' => $servicioEntity->getServicioNombre(),
                                'servicio_descripcion' => $servicioEntity->getServicioDescripcion(),
                                'servicio_precio' => $servicioEntity->getServicioPrecio(),
                            );
                            array_push($servicioArray, $servicio);
                        }
                    }else{
                        $servicioArray = null;
                    }

                    return new JsonModel(array(
                        'servicioArray' => $servicioArray
                    ));
                }
                // Fin Preparando Form Cargoadmision


                //Instanciamos nuestro filtro
                $cargoadmisionFilter = new CargoadmisionFilter();
                //Le ponemos nuestro filtro a nuesto fromulario
                $cargoadmisionForm->setInputFilter($cargoadmisionFilter->getInputFilter());

                //Le ponemos los datos a nuestro formulario
                $cargoadmisionForm->setData(array('idadmision' => $admisionEntity->getIdadmision()));
                $cargoadmisionForm->setData($request->getPost());

                //Validamos nuestro formulario
                if($cargoadmisionForm->isValid()){
                    $cargoadmisionArray = array();
                    if($request->getPost()->cargoadmision_tipo == 'articulo'){

                        //Instanciamos un nuevo objeto de nuestro objeto Paciente
                        $cargoadmision = new \Cargoadmision();

                        //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Admision
                        foreach ($cargoadmisionForm->getData() as $cargoadmisionKey => $cargoadmisionValue){
                            if($cargoadmisionKey != 'cargoadmisionarticulo_by' && $cargoadmisionKey != 'cargoadmisionservicio_by' && $cargoadmisionKey != 'busquedaAdmisionArticulo' && $cargoadmisionKey != 'busquedaAdmisionServicio'){
                                $cargoadmision->setByName($cargoadmisionKey, $cargoadmisionValue, \BasePeer::TYPE_FIELDNAME);
                            }
                        }
                        // Validar precio, caducidad y existencia de ordencompradetalle
                        $existencia = $cargoadmision->getLugarinventario()->getLugarinventarioCantidad();
                        $caducidad = $cargoadmision->getLugarinventario()->getOrdencompradetalle()->getOrdencompradetalleCaducidad();
                        $precio = $cargoadmision->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio();

                        if($existencia > 0){
                            if($caducidad < date('Y-m-d')){
                                $cargoadmision->setCargoadmisionMonto($request->getPost()->cargoadmision_cantidad*$precio);
                            }
                        }

                        //Guardamos en nuestra base de datos
                        $cargoadmision->save();

                        $lugarinventarioQuery = $cargoadmision->getLugarinventario();
                        $lugarinventarioQuery->setLugarinventarioCantidad($lugarinventarioQuery->getLugarinventarioCantidad()-$cargoadmision->getCargoadmisionCantidad());
                        $lugarinventarioQuery->save();

                        $cargoadmisionQuery = \CargoadmisionQuery::create()->filterByIdadmision($cargoadmision->getIdadmision())->find();
                        if($cargoadmisionQuery->getArrayCopy()){
                            foreach($cargoadmisionQuery as $cargoadmisionEntity){
                                if($cargoadmisionEntity->getIdlugarinventario() != null){
                                    $articulovarianteEntity = $cargoadmisionEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante();

                                    $propiedadvalorNombre = null;
                                    foreach($articulovarianteEntity->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                        $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                        $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                        $propiedadvalorNombre .= $propiedadQuery->getPropiedadNombre() . " " . $propiedadvalorQuery->getPropiedadvalorNombre(). " ";
                                    }
                                    $cargoadmision = array(
                                        'idcargoadmision' => $cargoadmisionEntity->getIdcargoadmision(),
                                        'idadmision' => $cargoadmisionEntity->getIdadmision(),
                                        'status' => $cargoadmisionEntity->getAdmision()->getAdmisionStatus(),
                                        'cargoadmision_cantidad' => $cargoadmisionEntity->getCargoadmisionCantidad(),
                                        'articulo' => $cargoadmisionEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulo()->getArticuloNombre(),
                                        'descripcion' => utf8_encode($propiedadvalorNombre),
                                        'salida' => $cargoadmisionEntity->getLugarinventario()->getLugar()->getLugarNombre(),
                                        'fechahora' => $cargoadmisionEntity->getCargoadmisionFecha(),
                                        'precio' => $cargoadmisionEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio(),
                                        'subtotal' => $cargoadmisionEntity->getCargoadmisionMonto(),
                                    );
                                    array_push($cargoadmisionArray, $cargoadmision);
                                }
                            }
                        }
                    }
                    if($request->getPost()->cargoadmision_tipo == 'servicio'){

                        //Instanciamos un nuevo objeto de nuestro objeto Paciente
                        $cargoadmision = new \Cargoadmision();

                        //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Admision
                        foreach ($cargoadmisionForm->getData() as $cargoadmisionKey => $cargoadmisionValue){
                            if($cargoadmisionKey != 'cargoadmisionarticulo_by' && $cargoadmisionKey != 'cargoadmisionservicio_by' && $cargoadmisionKey != 'busquedaAdmisionArticulo' && $cargoadmisionKey != 'busquedaAdmisionServicio'){
                                $cargoadmision->setByName($cargoadmisionKey, $cargoadmisionValue, \BasePeer::TYPE_FIELDNAME);
                            }
                        }

                        $precio = $cargoadmision->getServicio()->getServicioPrecio();
                        $cargoadmision->setCargoadmisionMonto($request->getPost()->cargoadmision_cantidad*$precio);
                        //Guardamos en nuestra base de datos
                        $cargoadmision->save();

                        $cargoadmisionQuery = \CargoadmisionQuery::create()->filterByIdadmision($cargoadmision->getIdadmision())->find();
                        if($cargoadmisionQuery->getArrayCopy()){
                            foreach($cargoadmisionQuery as $cargoadmisionEntity){
                                if($cargoadmisionEntity->getIdservicio() != null){
                                    $cargoadmision = array(
                                        'idcargoadmision' => $cargoadmisionEntity->getIdcargoadmision(),
                                        'idadmision' => $cargoadmisionEntity->getIdadmision(),
                                        'status' => $cargoadmisionEntity->getAdmision()->getAdmisionStatus(),
                                        'cargoadmision_cantidad' => $cargoadmisionEntity->getCargoadmisionCantidad(),
                                        'servicio' => $cargoadmisionEntity->getServicio()->getServicioNombre(),
                                        'descripcion' => $cargoadmisionEntity->getServicio()->getServicioDescripcion(),
                                        'precio' => $cargoadmisionEntity->getServicio()->getServicioPrecio(),
                                        'subtotal' => $cargoadmisionEntity->getCargoadmisionMonto(),
                                        'fechahora' => date('Y-m-d H:i:s'),
                                    );
                                    array_push($cargoadmisionArray, $cargoadmision);
                                }
                            }
                        }
                    }

                    return new JsonModel(array(
                        'cargoadmisionArray' => $cargoadmisionArray,
                    ));
                }/* else {
                    $messageArray = array();
                    foreach ($cargoadmisionForm->getMessages() as $key => $value){
                        foreach($value as $val){
                            //Obtenemos el valor de la columna con error
                            $message = $key.' '.$val;
                            array_push($messageArray, $message);
                        }
                    }
                    return new JsonModel(array(
                        'error' => $messageArray,
                    ));
                }*/

                $idcuarto = $admisionEntity->getIdcuarto();
                $idadmision = $admisionEntity->getIdadmision();
                return new ViewModel(array(
                    'idadmision' => $idadmision,
                    'idcuarto' => $idcuarto,
                    'pacienteEntity' => $paciente,
                    'edad' => $this->calculaEdad($fechaNacimiento),
                    'cuartoEnuso' => $admisionEntity->getCuarto()->getCuartoEnuso(),
                    'admisionByPaciente' => $admisionEntity,
                    'cargoadmisionForm' => $cargoadmisionForm,
                ));
            }


        }else{
            return $this->redirect()->toRoute('pacientes');
        }
    }

    public function asignarAction(){

        $request = $this->getRequest();

        // Start Alta paciente - consulta alta_consultorio = true
        if($request->getPost()->alta_consultorio == "true"){
            if(\ConsultorioQuery::create()->filterByIdconsultorio($request->getPost()->idconsultorio)->exists()){

                $consultorioActualizar = \ConsultorioQuery::create()->filterByIdconsultorio($request->getPost()->idconsultorio)->findOne();
                $consultorioActualizar->setConsultorioEnuso(0)->save();
                $consultorioArray = $consultorioActualizar->toArray(BasePeer::TYPE_FIELDNAME);
                return new JsonModel(array(
                    'consultorioArray' => $consultorioArray,
                ));
            }
        }
        // End Alta paciente - consulta alta_consultorio = true

        // Start Alta paciente - admision alta_cuarto = true
        if($request->getPost()->alta_cuarto == "true"){
            if(\CuartoQuery::create()->filterByIdcuarto($request->getPost()->idcuarto)->exists()){

                $cuartoActualizar = \CuartoQuery::create()->filterByIdcuarto($request->getPost()->idcuarto)->findOne();
                $cuartoActualizar->setCuartoEnuso(0)->save();
                $cuartoArray = $cuartoActualizar->toArray(BasePeer::TYPE_FIELDNAME);
                if(\AdmisionQuery::create()->filterByIdadmision($request->getPost()->idadmision)->exists()){

                    $admisionActualizarStatus = \AdmisionQuery::create()->filterByIdadmision($request->getPost()->idadmision)->findOne();
                    $admisionActualizarStatus->setAdmisionFechasalida(date('Y-m-d H:i:s'))->save();
                    $admisionArray = $admisionActualizarStatus->toArray(BasePeer::TYPE_FIELDNAME);

                }else{
                    $admisionArray = null;
                }
                return new JsonModel(array(
                    'cuartoArray' => $cuartoArray,
                    'admisionArray' => $admisionArray,
                ));
            }
        }
        // End Alta paciente - consulta alta_cuarto = true


        // Start Actualizar admision_status = pagada
        if($request->getPost()->subTotalAdmision == "0"){
            if(\AdmisionQuery::create()->filterByIdadmision($request->getPost()->idadmision)->exists()){

                $admisionActualizarStatus = \AdmisionQuery::create()->filterByIdadmision($request->getPost()->idadmision)->findOne();
                $admisionActualizarStatus->setAdmisionStatus($request->getPost()->admision_status)->setAdmisionTipodepago($request->getPost()->admision_tipodepago)->setAdmisionPagadaen(date('Y-m-d H:i:s'))->setAdmisionFacturada(0)->setAdmisionTotal($request->getPost()->admision_total)->setAdmisionReferenciapago($request->getPost()->admision_referenciapago)->save();
                $admisionArray = $admisionActualizarStatus->toArray(BasePeer::TYPE_FIELDNAME);
                return new JsonModel(array(
                    'admisionArray' => $admisionArray,
                ));
            }
        }
        // End Actualizar admision_status = pagada

        // Start Actualizar consulta_status = pagada
        if($request->getPost()->subTotalConsulta == "0"){
            if(\ConsultaQuery::create()->filterByIdconsulta($request->getPost()->idconsulta)->exists()){

                $consultaActualizarStatus = \ConsultaQuery::create()->filterByIdconsulta($request->getPost()->idconsulta)->findOne();
                $consultaActualizarStatus->setConsultaStatus($request->getPost()->consulta_status)->setConsultaReferenciapago($request->getPost()->consulta_referenciapago)->setConsultaTipodepago($request->getPost()->consulta_tipodepago)/*->setConsultaPagadaen(date('Y-m-d H:i:s'))*/->setConsultaFacturada(0)->setConsultaTotal($request->getPost()->consulta_total)->save();
                $consultaArray = $consultaActualizarStatus->toArray(BasePeer::TYPE_FIELDNAME);
                return new JsonModel(array(
                    'consultaArray' => $consultaArray,
                ));
            }
        }
        // End Actualizar consulta_status = pagada

        // Start Eliminar cargoadmision
        if($request->getPost()->idcargoadmision){
            if($request->getPost()->eliminar_cargoadmision_tipo == 'articulo'){
                if(\CargoadmisionQuery::create()->filterByIdcargoadmision($request->getPost()->idcargoadmision)->exists()){

                    $cargoadmisionEliminado = \CargoadmisionQuery::create()->filterByIdcargoadmision($request->getPost()->idcargoadmision)->findOne();
                    $lugarinventarioEntity = $cargoadmisionEliminado->getLugarinventario();
                    $cantidad = $lugarinventarioEntity->getLugarinventarioCantidad();
                    $lugarinventarioEntity->setLugarinventarioCantidad($cantidad+$request->getPost()->cantidad);
                    $lugarinventarioEntity->save();
                    $cargoadmisionEliminadoArray = array();
                    if($cargoadmisionEliminado->getIdlugarinventario() != null){

                        $articulovarianteEliminado = $cargoadmisionEliminado->getLugarinventario()->getOrdencompradetalle()->getArticulovariante();

                        $propiedadvalorNombreEliminado = null;
                        foreach($articulovarianteEliminado->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEliminado){
                            $propiedadEliminadoQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEliminado->getIdpropiedad())->findOne();
                            $propiedadvalorEliminadoQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEliminado->getIdpropiedadvalor())->findOne();
                            $propiedadvalorNombreEliminado .= $propiedadEliminadoQuery->getPropiedadNombre() . " " . $propiedadvalorEliminadoQuery->getPropiedadvalorNombre(). " ";
                        }

                        $cargoadmisionEliminado = array(
                            'idcargoadmision' => $cargoadmisionEliminado->getIdcargoadmision(),
                            'idadmision' => $cargoadmisionEliminado->getIdadmision(),
                            'status' => $cargoadmisionEliminado->getAdmision()->getAdmisionStatus(),
                            'cargoadmision_cantidad' => $cargoadmisionEliminado->getCargoadmisionCantidad(),
                            'articulo' => $cargoadmisionEliminado->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulo()->getArticuloNombre(),
                            'descripcion' => utf8_encode($propiedadvalorNombreEliminado),
                            'salida' => $cargoadmisionEliminado->getLugarinventario()->getLugar()->getLugarNombre(),
                            'fechahora' => $cargoadmisionEliminado->getCargoadmisionFecha(),
                            'precio' => $cargoadmisionEliminado->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio(),
                            'subtotal' => $cargoadmisionEliminado->getCargoadmisionMonto(),
                        );
                        array_push($cargoadmisionEliminadoArray, $cargoadmisionEliminado);
                    }
                    \CargoadmisionQuery::create()->filterByIdcargoadmision($request->getPost()->idcargoadmision)->delete();


                    $cargoadmisionQuery = \CargoadmisionQuery::create()->filterByIdadmision($request->getPost()->idadmision)->find();
                    if($cargoadmisionQuery->getArrayCopy()){
                        $cargoadmisionArray = array();
                        foreach($cargoadmisionQuery as $cargoadmisionEntity){
                            if($cargoadmisionEntity->getIdlugarinventario() != null){
                                $articulovarianteEntity = $cargoadmisionEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante();
                                foreach($articulovarianteEntity->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                    $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                    $propiedadNombre = $propiedadQuery->getPropiedadNombre();
                                }
                                foreach($articulovarianteEntity->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                    $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                    $propiedadvalorNombre = $propiedadvalorQuery->getPropiedadvalorNombre();
                                }
                                $cargoadmision = array(
                                    'idcargoadmision' => $cargoadmisionEntity->getIdcargoadmision(),
                                    'idadmision' => $cargoadmisionEntity->getIdadmision(),
                                    'status' => $cargoadmisionEntity->getAdmision()->getAdmisionStatus(),
                                    'cargoadmision_cantidad' => $cargoadmisionEntity->getCargoadmisionCantidad(),
                                    'articulo' => $cargoadmisionEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulo()->getArticuloNombre(),
                                    'descripcion' => utf8_encode($propiedadNombre." ".$propiedadvalorNombre),
                                    'salida' => $cargoadmisionEntity->getLugarinventario()->getLugar()->getLugarNombre(),
                                    'fechahora' => $cargoadmisionEntity->getCargoadmisionFecha(),
                                    'precio' => $cargoadmisionEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio(),
                                    'subtotal' => $cargoadmisionEntity->getCargoadmisionMonto(),
                                );
                                array_push($cargoadmisionArray, $cargoadmision);
                            }
                        }
                    }
                    return new JsonModel(array(
                        'cargoadmisionArray' => $cargoadmisionArray,
                        'cargoadmisionEliminadoArray' => $cargoadmisionEliminadoArray,
                    ));
                }
            }
            if($request->getPost()->eliminar_cargoadmision_tipo == 'servicio'){
                if(\CargoadmisionQuery::create()->filterByIdcargoadmision($request->getPost()->idcargoadmision)->exists()){

                    $cargoadmisionEliminado = \CargoadmisionQuery::create()->filterByIdcargoadmision($request->getPost()->idcargoadmision)->findOne();
                    $cargoadmisionEliminadoArray = array();
                    if($cargoadmisionEliminado->getIdservicio() != null){
                        $cargoadmisionEliminado = array(
                            'idcargoadmision' => $cargoadmisionEliminado->getIdcargoadmision(),
                            'idadmision' => $cargoadmisionEliminado->getIdadmision(),
                            'status' => $cargoadmisionEliminado->getAdmision()->getAdmisionStatus(),
                            'cargoadmision_cantidad' => $cargoadmisionEliminado->getCargoadmisionCantidad(),
                            'servicio' => $cargoadmisionEliminado->getServicio()->getServicioNombre(),
                            'descripcion' => $cargoadmisionEliminado->getServicio()->getServicioDescripcion(),
                            'precio' => $cargoadmisionEliminado->getServicio()->getServicioPrecio(),
                            'subtotal' => $cargoadmisionEliminado->getCargoadmisionMonto(),
                            'fechahora' => $cargoadmisionEliminado->getCargoadmisionFecha(),
                        );
                        array_push($cargoadmisionEliminadoArray, $cargoadmisionEliminado);
                    }
                    \CargoadmisionQuery::create()->filterByIdcargoadmision($request->getPost()->idcargoadmision)->delete();

                    $cargoadmisionQuery = \CargoadmisionQuery::create()->filterByIdadmision($request->getPost()->idadmision)->find();
                    if($cargoadmisionQuery->getArrayCopy()){
                        $cargoadmisionArray = array();
                        foreach($cargoadmisionQuery as $cargoadmisionEntity){
                            if($cargoadmisionEntity->getIdservicio() != null){
                                $cargoadmision = array(
                                    'idcargoadmision' => $cargoadmisionEntity->getIdcargoadmision(),
                                    'idadmision' => $cargoadmisionEntity->getIdadmision(),
                                    'status' => $cargoadmisionEntity->getAdmision()->getAdmisionStatus(),
                                    'cargoadmision_cantidad' => $cargoadmisionEntity->getCargoadmisionCantidad(),
                                    'servicio' => $cargoadmisionEntity->getServicio()->getServicioNombre(),
                                    'descripcion' => $cargoadmisionEntity->getServicio()->getServicioDescripcion(),
                                    'precio' => $cargoadmisionEntity->getServicio()->getServicioPrecio(),
                                    'subtotal' => $cargoadmisionEntity->getCargoadmisionMonto(),
                                    'fechahora' => date('Y-m-d H:i:s'),
                                );
                                array_push($cargoadmisionArray, $cargoadmision);
                            }
                        }
                    }

                    return new JsonModel(array(
                        'cargoadmisionArray' => $cargoadmisionArray,
                        'cargoadmisionEliminadoArray' => $cargoadmisionEliminadoArray,
                    ));
                }
            }
        }
        // End Eliminar cargoadmision

        // Start Ver admisionanticipo
        if($request->getPost()->ver_admisionanticipo == "true"){
            $admisionanticipoQuery = \AdmisionanticipoQuery::create()->filterByIdadmision($request->getPost()->idadmision)->find();
            if($admisionanticipoQuery->count() != 0){
                $admisionanticipoArray = array();
                foreach($admisionanticipoQuery as $admisionanticipoEntity){
                    $admisionanticipo = array(
                        'idadmisionanticipo' => $admisionanticipoEntity->getIdadmisionanticipo(),
                        'idadmision' => $admisionanticipoEntity->getIdadmision(),
                        'admisionanticipo_fecha' => $admisionanticipoEntity->getAdmisionanticipoFecha(),
                        'admisionanticipo_cantidad' => $admisionanticipoEntity->getAdmisionanticipoCantidad(),
                        'admisionanticipo_nota' => $admisionanticipoEntity->getAdmisionanticipoNota(),
                        'admisionanticipo_tipo' => $admisionanticipoEntity->getAdmisionanticipoTipo()
                    );
                    array_push($admisionanticipoArray, $admisionanticipo);
                }
            }
            return new JsonModel(array(
                'admisionanticipoArray' => $admisionanticipoArray,
            ));
        }
        // End Ver admisionanticipo
        // Start Eliminar admisionanticipo
        if($request->getPost()->eliminar_admisionanticipo == "true"){
            if(\AdmisionanticipoQuery::create()->filterByIdadmisionanticipo($request->getPost()->idadmisionanticipo)->exists()){

                $admisionanticipoEliminado = \AdmisionanticipoQuery::create()->filterByIdadmisionanticipo($request->getPost()->idadmisionanticipo)->findOne();
                $admisionanticipoEliminadoArray = array();
                $admisionanticipoEliminado = array(
                    'idadmisionanticipo' => $admisionanticipoEliminado->getIdadmisionanticipo(),
                    'idadmision' => $admisionanticipoEliminado->getIdadmision(),
                    'admisionanticipo_fecha' => $admisionanticipoEliminado->getAdmisionanticipoFecha(),
                    'admisionanticipo_cantidad' => $admisionanticipoEliminado->getAdmisionanticipoCantidad(),
                    'admisionanticipo_nota' => $admisionanticipoEliminado->getAdmisionanticipoNota(),
                );
                array_push($admisionanticipoEliminadoArray, $admisionanticipoEliminado);

                \AdmisionanticipoQuery::create()->filterByIdadmisionanticipo($request->getPost()->idadmisionanticipo)->delete();

                $cargoadmisionQuery = \CargoadmisionQuery::create()->filterByIdadmision($request->getPost()->idadmision)->find();
                if($cargoadmisionQuery->getArrayCopy()){
                    $cargoadmisionArray = array();
                    foreach($cargoadmisionQuery as $cargoadmisionEntity){
                        if($cargoadmisionEntity->getIdservicio() != null){
                            $cargoadmision = array(
                                'subtotal' => $cargoadmisionEntity->getCargoadmisionMonto(),
                            );
                            array_push($cargoadmisionArray, $cargoadmision);
                        }
                    }
                }

                return new JsonModel(array(
                    'cargoadmisionArray' => $cargoadmisionArray,
                    'admisionanticipoEliminadoArray' => $admisionanticipoEliminadoArray,
                ));
            }
        }
        // End Eliminar admisionanticipo

        // Start Eliminar cargoconsulta
        if($request->getPost()->idcargoconsulta){
            if($request->getPost()->eliminar_cargoconsulta_tipo == 'articulo'){
                if(\CargoconsultaQuery::create()->filterByIdcargoconsulta($request->getPost()->idcargoconsulta)->exists()){

                    $cargoconsultaEliminado = \CargoconsultaQuery::create()->filterByIdcargoconsulta($request->getPost()->idcargoconsulta)->findOne();
                    $lugarinventarioEntity = $cargoconsultaEliminado->getLugarinventario();
                    $cantidad = $lugarinventarioEntity->getLugarinventarioCantidad();
                    $lugarinventarioEntity->setLugarinventarioCantidad($cantidad+$request->getPost()->cantidad);
                    $lugarinventarioEntity->save();
                    $cargoconsultaEliminadoArray = array();
                    if($cargoconsultaEliminado->getIdlugarinventario() != null){
                        $articulovarianteEliminado = $cargoconsultaEliminado->getLugarinventario()->getOrdencompradetalle()->getArticulovariante();

                        $propiedadvalorNombreEliminado = null;
                        foreach($articulovarianteEliminado->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEliminado){
                            $propiedadEliminadoQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEliminado->getIdpropiedad())->findOne();
                            $propiedadvalorEliminadoQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEliminado->getIdpropiedadvalor())->findOne();
                            $propiedadvalorNombreEliminado .= $propiedadEliminadoQuery->getPropiedadNombre() . " " . $propiedadvalorEliminadoQuery->getPropiedadvalorNombre(). " ";
                        }
                        $cargoconsultaEliminado = array(
                            'idcargoconsulta' => $cargoconsultaEliminado->getIdcargoconsulta(),
                            'idconsulta' => $cargoconsultaEliminado->getIdconsulta(),
                            'status' => $cargoconsultaEliminado->getConsulta()->getConsultaStatus(),
                            'cantidad' => $cargoconsultaEliminado->getCantidad(),
                            'articulo' => $cargoconsultaEliminado->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulo()->getArticuloNombre(),
                            'descripcion' => utf8_encode($propiedadvalorNombreEliminado),
                            'salida' => $cargoconsultaEliminado->getLugarinventario()->getLugar()->getLugarNombre(),
                            'fechahora' => $cargoconsultaEliminado->getCargoconsultaFecha(),
                            'precio' => $cargoconsultaEliminado->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio(),
                            'subtotal' => $cargoconsultaEliminado->getMonto(),
                        );
                        array_push($cargoconsultaEliminadoArray, $cargoconsultaEliminado);
                    }
                    \CargoconsultaQuery::create()->filterByIdcargoconsulta($request->getPost()->idcargoconsulta)->delete();


                    $cargoconsultaQuery = \CargoconsultaQuery::create()->filterByIdconsulta($request->getPost()->idconsulta)->find();
                    if($cargoconsultaQuery->getArrayCopy()){
                        $cargoconsultaArray = array();
                        foreach($cargoconsultaQuery as $cargoconsultaEntity){
                            if($cargoconsultaEntity->getIdlugarinventario() != null){
                                $articulovarianteEntity = $cargoconsultaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante();

                                $propiedadvalorNombre = null;
                                foreach($articulovarianteEntity->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                    $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                    $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                    $propiedadvalorNombre .= $propiedadQuery->getPropiedadNombre() . " " . $propiedadvalorQuery->getPropiedadvalorNombre(). " ";
                                }
                                $cargoconsulta = array(
                                    'idcargoconsulta' => $cargoconsultaEntity->getIdcargoconsulta(),
                                    'idconsulta' => $cargoconsultaEntity->getIdconsulta(),
                                    'status' => $cargoconsultaEntity->getConsulta()->getConsultaStatus(),
                                    'cantidad' => $cargoconsultaEntity->getCantidad(),
                                    'articulo' => $cargoconsultaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulo()->getArticuloNombre(),
                                    'descripcion' => utf8_encode($propiedadvalorNombre),
                                    'salida' => $cargoconsultaEntity->getLugarinventario()->getLugar()->getLugarNombre(),
                                    'fechahora' => $cargoconsultaEntity->getCargoconsultaFecha(),
                                    'precio' => $cargoconsultaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio(),
                                    'subtotal' => $cargoconsultaEntity->getMonto(),
                                );
                                array_push($cargoconsultaArray, $cargoconsulta);
                            }
                        }
                    }
                    return new JsonModel(array(
                        'cargoconsultaArray' => $cargoconsultaArray,
                        'cargoconsultaEliminadoArray' => $cargoconsultaEliminadoArray,
                    ));
                }
            }
            if($request->getPost()->eliminar_cargoconsulta_tipo == 'servicio'){
                if(\CargoconsultaQuery::create()->filterByIdcargoconsulta($request->getPost()->idcargoconsulta)->exists()){

                    $cargoconsultaEliminado = \CargoconsultaQuery::create()->filterByIdcargoconsulta($request->getPost()->idcargoconsulta)->findOne();
                    $cargoconsultaEliminadoArray = array();
                    if($cargoconsultaEliminado->getIdservicio() != null){
                        $cargoconsultaEliminado = array(
                            'idcargoconsulta' => $cargoconsultaEliminado->getIdcargoconsulta(),
                            'idconsulta' => $cargoconsultaEliminado->getIdconsulta(),
                            'status' => $cargoconsultaEliminado->getConsulta()->getConsultaStatus(),
                            'cantidad' => $cargoconsultaEliminado->getCantidad(),
                            'servicio' => $cargoconsultaEliminado->getServicio()->getServicioNombre(),
                            'descripcion' => $cargoconsultaEliminado->getServicio()->getServicioDescripcion(),
                            'precio' => $cargoconsultaEliminado->getServicio()->getServicioPrecio(),
                            'subtotal' => $cargoconsultaEliminado->getMonto(),
                            'fechahora' => $cargoconsultaEliminado->getCargoconsultaFecha(),
                        );
                        array_push($cargoconsultaEliminadoArray, $cargoconsultaEliminado);
                    }
                    \CargoconsultaQuery::create()->filterByIdcargoconsulta($request->getPost()->idcargoconsulta)->delete();

                    $cargoconsultaQuery = \CargoconsultaQuery::create()->filterByIdconsulta($request->getPost()->idconsulta)->find();
                    if($cargoconsultaQuery->getArrayCopy()){
                        $cargoconsultaArray = array();
                        foreach($cargoconsultaQuery as $cargoconsultaEntity){
                            if($cargoconsultaEntity->getIdservicio() != null){
                                $cargoconsulta = array(
                                    'idcargoconsulta' => $cargoconsultaEntity->getIdcargoconsulta(),
                                    'idconsulta' => $cargoconsultaEntity->getIdconsulta(),
                                    'status' => $cargoconsultaEntity->getConsulta()->getConsultaStatus(),
                                    'cantidad' => $cargoconsultaEntity->getCantidad(),
                                    'servicio' => $cargoconsultaEntity->getServicio()->getServicioNombre(),
                                    'descripcion' => $cargoconsultaEntity->getServicio()->getServicioDescripcion(),
                                    'precio' => $cargoconsultaEntity->getServicio()->getServicioPrecio(),
                                    'subtotal' => $cargoconsultaEntity->getMonto(),
                                    'fechahora' => date('Y-m-d H:i:s'),
                                );
                                array_push($cargoconsultaArray, $cargoconsulta);
                            }
                        }
                    }

                    return new JsonModel(array(
                        'cargoconsultaArray' => $cargoconsultaArray,
                        'cargoconsultaEliminadoArray' => $cargoconsultaEliminadoArray,
                    ));
                }
            }
        }
        // End Eliminar cargoconsulta

        // Inicio Anticipo Admision
        //Intanciamos nuestro formulario admisionanticipo
        $admisionanticipoForm = new AdmisionanticipoForm();
        //Instanciamos nuestro filtro
        $admisionanticipoFilter = new AdmisionanticipoFilter();
        //Le ponemos nuestro filtro a nuesto fromulario
        $admisionanticipoForm->setInputFilter($admisionanticipoFilter->getInputFilter());

        //Le ponemos los datos a nuestro formulario
        $admisionanticipoForm->setData($request->getPost());

        //Validamos nuestro formulario
        if($admisionanticipoForm->isValid()){

            $admisionanticipo = new \Admisionanticipo();

            //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Admisionanticipo
            foreach ($admisionanticipoForm->getData() as $admisionanticipoKey => $admisionanticipoValue){
                $admisionanticipo->setByName($admisionanticipoKey, $admisionanticipoValue, \BasePeer::TYPE_FIELDNAME);
            }
            $admisionanticipo->setAdmisionanticipoFecha(date('Y-m-d H:i:s'));
            //Guardamos en nuestra base de datos
            $admisionanticipo->save();

            $admisionanticipoArray = \AdmisionanticipoQuery::create()->filterByIdadmisionanticipo($admisionanticipo->getIdadmisionanticipo())->findOne()->toArray(\BasePeer::TYPE_FIELDNAME);

            return new JsonModel(array(
                'admisionanticipoArray' => $admisionanticipoArray,
            ));
        }
        // Fin Anticipo Admision

        // Inicio Pago Admision
        //Intanciamos nuestro formulario admisionanticipo
        $admisionanticipoForm = new AdmisionanticipoForm();
        //Instanciamos nuestro filtro
        $admisionanticipoFilter = new AdmisionanticipoFilter();
        //Le ponemos nuestro filtro a nuesto fromulario
        $admisionanticipoForm->setInputFilter($admisionanticipoFilter->getInputFilter());

        //Le ponemos los datos a nuestro formulario
        $admisionanticipoForm->setData($request->getPost());

        //Validamos nuestro formulario
        if($admisionanticipoForm->isValid()){

            $admisionanticipo = new \Admisionanticipo();

            //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Admisionanticipo
            foreach ($admisionanticipoForm->getData() as $admisionanticipoKey => $admisionanticipoValue){
                $admisionanticipo->setByName($admisionanticipoKey, $admisionanticipoValue, \BasePeer::TYPE_FIELDNAME);
            }
            $admisionanticipo->setAdmisionanticipoFecha(date('Y-m-d H:i:s'));
            //Guardamos en nuestra base de datos
            $admisionanticipo->save();

            $admisionanticipoArray = \AdmisionanticipoQuery::create()->filterByIdadmisionanticipo($admisionanticipo->getIdadmisionanticipo())->findOne()->toArray(\BasePeer::TYPE_FIELDNAME);

            return new JsonModel(array(
                'admisionanticipoArray' => $admisionanticipoArray,
            ));
        }
        // Fin Pago Admision

        // Inicio Pago Consulta
        //Intanciamos nuestro formulario consultaanticipo
        $consultaanticipoForm = new ConsultaanticipoForm();
        //Instanciamos nuestro filtro
        $consultaanticipoFilter = new ConsultaanticipoFilter();
        //Le ponemos nuestro filtro a nuesto fromulario
        $consultaanticipoForm->setInputFilter($consultaanticipoFilter->getInputFilter());

        //Le ponemos los datos a nuestro formulario
        $consultaanticipoForm->setData($request->getPost());

        //Validamos nuestro formulario
        if($consultaanticipoForm->isValid()){

            $consultaanticipo = new \Consultaanticipo();

            //Recorremos nuestro formulario y seteamos los valores a nuestro objeto consultaanticipo
            foreach ($consultaanticipoForm->getData() as $consultaanticipoKey => $consultaanticipoValue){
                $consultaanticipo->setByName($consultaanticipoKey, $consultaanticipoValue, \BasePeer::TYPE_FIELDNAME);
            }
            $consultaanticipo->setConsultaanticipoFecha(date('Y-m-d H:i:s'));
            //Guardamos en nuestra base de datos
            $consultaanticipo->save();

            $consultaanticipoArray = \ConsultaanticipoQuery::create()->filterByIdconsultaanticipo($consultaanticipo->getIdconsultaanticipo())->findOne()->toArray(\BasePeer::TYPE_FIELDNAME);

            return new JsonModel(array(
                'consultaanticipoArray' => $consultaanticipoArray,
            ));
        }
        // Fin Pago Consulta

        $id = (int) $this->params()->fromRoute('id', 0);
        if($id){
            $paciente = PacienteQuery::create()->filterByIdpaciente($id)->findOne();
            $fechaNacimiento = date('m/d/Y', strtotime($paciente->getPacienteFechanacimiento()));

            // Inicio Preparando Form Admision
            // Almacenamos en un array los registros de todos los medicos existentes en la base de datos
            $medicoCollection = \MedicoQuery::create()->find();
            $medicoArray = array();
            foreach ($medicoCollection as $medicoEntity){
                $medicoArray[$medicoEntity->getIdmedico()] = $medicoEntity->getMedicoNombre()." ".$medicoEntity->getMedicoApellidopaterno()." ".$medicoEntity->getMedicoApellidomaterno();
            }
            // Almacenamos en un array los registros de todos los cuartos existentes en la base de datos
            $cuartoCollection = \CuartoQuery::create()->filterByCuartoEnuso(false)->find();
            $cuartoArray = array();
            foreach ($cuartoCollection as $cuartoEntity){
                $cuartoArray[$cuartoEntity->getIdcuarto()] = $cuartoEntity->getCuartoNombre();
            }
            //Intanciamos nuestro formulario admision y le mandamos por parametro los medicos y cuartos existentes
            $admisionForm = new AdmisionForm($medicoArray, $cuartoArray);
            //Instanciamos un nuevo objeto de nuestro objeto Paciente
            $admision = new \Admision();
            // Fin Preparando Form Admision

            // Inicio Preparando Form Consultorio
            // Almacenamos en un array los registros de todos los consultorios existentes en la base de datos
            $consultorioCollection = \ConsultorioQuery::create()->filterByConsultorioEnuso(false)->find();
            $consultorioArray = array();
            foreach ($consultorioCollection as $consultorioEntity){
                $consultorioArray[$consultorioEntity->getIdconsultorio()] = $consultorioEntity->getConsultorioNombre();
            }
            //Intanciamos nuestro formulario consulta y le mandamos por parametro los medicos y consultorios existentes
            $consultaForm = new ConsultaForm($medicoArray, $consultorioArray);
            //Instanciamos un nuevo objeto de nuestro objeto Paciente
            $consulta = new \Consulta();
            // Fin Preparando Form Consultorio

            //Intanciamos nuestro formulario cargoconsulta "SIN PARAMETROS"
            $cargoconsultaForm = new CargoconsultaForm();

            if($request->getPost()->cargoconsultaarticulo_by != null){

                if($request->getPost()->cargoconsultaarticulo_by == 'nombre'){
                    if($request->getPost()->busquedaArticulo != null){
                        $ordencompradetalleQuery = \OrdencompradetalleQuery::create()
                            ->useArticulovarianteQuery()
                            ->useArticuloQuery()
                            ->filterBy(BasePeer::translateFieldname('articulo', 'articulo_nombre', BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME), '%'.$request->getPost()->busquedaArticulo.'%', \Criteria::LIKE)
                            ->endUse()
                            ->endUse()
                            ->find();
                    }else{
                        $ordencompradetalleQuery = \OrdencompradetalleQuery::create()->find();
                    }
                }
                if($request->getPost()->cargoconsultaarticulo_by == 'código de barras'){
                    if($request->getPost()->busquedaArticulo != null){
                        $ordencompradetalleQuery = \OrdencompradetalleQuery::create()
                            ->useArticulovarianteQuery()
                            ->filterBy(BasePeer::translateFieldname('articulovariante', 'articulovariante_codigobarras', BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME), '%'.$request->getPost()->busquedaArticulo.'%', \Criteria::LIKE)
                            ->endUse()
                            ->find();
                    }else{
                        $ordencompradetalleQuery = \OrdencompradetalleQuery::create()->find();
                    }
                }
                if($request->getPost()->cargoconsultaarticulo_by == 'proveedor'){
                    if($request->getPost()->busquedaArticulo != null){
                        $ordencompradetalleQuery = \OrdencompradetalleQuery::create()
                            ->useOrdencompraQuery()
                            ->useProveedorQuery()
                            ->filterBy(BasePeer::translateFieldname('proveedor', 'proveedor_nombre', BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME), '%'.$request->getPost()->busquedaArticulo.'%', \Criteria::LIKE)
                            ->endUse()
                            ->endUse()
                            ->find();
                    }else{
                        $ordencompradetalleQuery = \OrdencompradetalleQuery::create()->find();
                    }
                }

                if($ordencompradetalleQuery->getArrayCopy()){
                    $ordencompradetalleArray = array();
                    $lugarNombre = null;
                    foreach($ordencompradetalleQuery as $ordencompradetalleEntity){
                        /*
                        foreach($ordencompradetalleEntity->getLugarinventarios()->getArrayCopy() as $lugarinventarioEntity){
                            $idlugarinventario = $lugarinventarioEntity->getIdlugarinventario();
                            $lugarNombre = $lugarinventarioEntity->getLugar()->getLugarNombre();
                            $lugarinventarioCantidad = $lugarinventarioEntity->getLugarinventarioCantidad();
                            $articuloNombre = $ordencompradetalleEntity->getArticulovariante()->getArticulo()->getArticuloNombre();

                            foreach($ordencompradetalleEntity->getArticulovariante()->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                $propiedadNombre = $propiedadQuery->getPropiedadNombre();
                            }
                            foreach($ordencompradetalleEntity->getArticulovariante()->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                $propiedadvalorNombre = $propiedadvalorQuery->getPropiedadvalorNombre();
                            }
                        }
                        */

                        foreach($ordencompradetalleEntity->getLugarinventarios()->getArrayCopy() as $lugarinventarioEntity){
                            $idlugarinventario = $lugarinventarioEntity->getIdlugarinventario();
                            $lugarNombre = $lugarinventarioEntity->getLugar()->getLugarNombre();
                            $lugarinventarioCantidad = $lugarinventarioEntity->getLugarinventarioCantidad();
                            $articuloNombre = $ordencompradetalleEntity->getArticulovariante()->getArticulo()->getArticuloNombre();

                            /*
                            foreach($ordencompradetalleEntity->getArticulovariante()->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                $propiedadNombre = $propiedadQuery->getPropiedadNombre();
                                array_push($propiedadArray, $propiedadNombre);

                            }
                            foreach($ordencompradetalleEntity->getArticulovariante()->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                $propiedadvalorNombre = $propiedadvalorQuery->getPropiedadvalorNombre();
                                array_push($propiedadValorArray, $propiedadvalorNombre);
                            }
                            */

                            $propiedadvalorNombre = null;
                            foreach($ordencompradetalleEntity->getArticulovariante()->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                $propiedadvalorNombre .= $propiedadQuery->getPropiedadNombre() . " " . $propiedadvalorQuery->getPropiedadvalorNombre(). " ";
                            }
                        }

                        $ordencompradetalle = array(
                            'idordencompradetalle' => $ordencompradetalleEntity->getIdordencompradetalle(),
                            'idlugarinventario' => $idlugarinventario,
                            'cargoconsulta_tipo' => 'articulo',
                            'cargoconsulta_fecha' => date('Y-m-d H:i:s'),
                            'ordencompradetalle_caducidad' => $ordencompradetalleEntity->getOrdencompradetalleCaducidad(),
                            'existencia' => $lugarinventarioCantidad,
                            'articulo' => $articuloNombre,
                            'descripcion' => utf8_encode($propiedadvalorNombre),
                            'precio' => $ordencompradetalleEntity->getArticulovariante()->getArticulovariantePrecio(),
                            'salida' => $lugarNombre,
                        );

                        array_push($ordencompradetalleArray, $ordencompradetalle);
                    }
                }


                return new JsonModel(array(
                    'ordencompradetalleArray' => $ordencompradetalleArray
                ));
            }

            if($request->getPost()->cargoconsultaservicio_by != null){

                if($request->getPost()->cargoconsultaservicio_by == 'nombre'){
                    if($request->getPost()->busquedaServicio != null){
                        $servicioQuery = \ServicioQuery::create()
                            ->filterBy(BasePeer::translateFieldname('servicio', 'servicio_nombre', BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME), '%'.$request->getPost()->busquedaServicio.'%', \Criteria::LIKE)
                            ->find();
                    }else{
                        $servicioQuery = \ServicioQuery::create()->find();
                    }
                }

                if($servicioQuery->getArrayCopy()){
                    $servicioArray = array();
                    foreach($servicioQuery as $servicioEntity){
                        $servicio = array(
                            'idservicio' => $servicioEntity->getIdservicio(),
                            'cargoconsulta_tipo' => 'servicio',
                            'cargoconsulta_fecha' => date('Y-m-d H:i:s'),
                            'servicio_nombre' => $servicioEntity->getServicioNombre(),
                            'servicio_descripcion' => $servicioEntity->getServicioDescripcion(),
                            'servicio_precio' => $servicioEntity->getServicioPrecio(),
                        );
                        array_push($servicioArray, $servicio);
                    }
                }

                return new JsonModel(array(
                    'servicioArray' => $servicioArray
                ));
            }
            // Fin Preparando Form Cargoconsulta

            //Intanciamos nuestro formulario cargoadmision "SIN PARAMETROS"
            $cargoadmisionForm = new CargoadmisionForm();

            if($request->getPost()->cargoadmisionarticulo_by != null){

                if($request->getPost()->cargoadmisionarticulo_by == 'nombre'){

                    if($request->getPost()->busquedaAdmisionArticulo != null){
                        $ordencompradetalleQuery = \OrdencompradetalleQuery::create()
                            ->useArticulovarianteQuery()
                            ->useArticuloQuery()
                            ->filterBy(BasePeer::translateFieldname('articulo', 'articulo_nombre', BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME), '%'.$request->getPost()->busquedaAdmisionArticulo.'%', \Criteria::LIKE)
                            ->endUse()
                            ->endUse()
                            ->find();
                    }else{
                        $ordencompradetalleQuery = \OrdencompradetalleQuery::create()->find();
                    }
                }
                if($request->getPost()->cargoadmisionarticulo_by == 'código de barras'){
                    if($request->getPost()->busquedaAdmisionArticulo != null){
                        $ordencompradetalleQuery = \OrdencompradetalleQuery::create()
                            ->useArticulovarianteQuery()
                            ->filterBy(BasePeer::translateFieldname('articulovariante', 'articulovariante_codigobarras', BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME), '%'.$request->getPost()->busquedaAdmisionArticulo.'%', \Criteria::LIKE)
                            ->endUse()
                            ->find();
                    }else{
                        $ordencompradetalleQuery = \OrdencompradetalleQuery::create()->find();
                    }
                }
                if($request->getPost()->cargoadmisionarticulo_by == 'proveedor'){
                    if($request->getPost()->busquedaAdmisionArticulo != null){
                        $ordencompradetalleQuery = \OrdencompradetalleQuery::create()
                            ->useOrdencompraQuery()
                            ->useProveedorQuery()
                            ->filterBy(BasePeer::translateFieldname('proveedor', 'proveedor_nombre', BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME), '%'.$request->getPost()->busquedaAdmisionArticulo.'%', \Criteria::LIKE)
                            ->endUse()
                            ->endUse()
                            ->find();
                    }else{
                        $ordencompradetalleQuery = \OrdencompradetalleQuery::create()->find();
                    }
                }


                if($ordencompradetalleQuery->getArrayCopy()){
                    $ordencompradetalleArray = array();
                    $lugarNombre = null;
                    foreach($ordencompradetalleQuery as $ordencompradetalleEntity){
                        /*
                        foreach($ordencompradetalleEntity->getLugarinventarios()->getArrayCopy() as $lugarinventarioEntity){
                            $idlugarinventario = $lugarinventarioEntity->getIdlugarinventario();
                            $lugarNombre = $lugarinventarioEntity->getLugar()->getLugarNombre();
                            $lugarinventarioCantidad = $lugarinventarioEntity->getLugarinventarioCantidad();
                            $articuloNombre = $ordencompradetalleEntity->getArticulovariante()->getArticulo()->getArticuloNombre();

                            foreach($ordencompradetalleEntity->getArticulovariante()->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                $propiedadNombre = $propiedadQuery->getPropiedadNombre();
                            }
                            foreach($ordencompradetalleEntity->getArticulovariante()->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                $propiedadvalorNombre = $propiedadvalorQuery->getPropiedadvalorNombre();
                            }
                        }
                        */

                        foreach($ordencompradetalleEntity->getLugarinventarios()->getArrayCopy() as $lugarinventarioEntity){
                            $idlugarinventario = $lugarinventarioEntity->getIdlugarinventario();
                            $lugarNombre = $lugarinventarioEntity->getLugar()->getLugarNombre();
                            $lugarinventarioCantidad = $lugarinventarioEntity->getLugarinventarioCantidad();
                            $articuloNombre = $ordencompradetalleEntity->getArticulovariante()->getArticulo()->getArticuloNombre();

                            /*
                            foreach($ordencompradetalleEntity->getArticulovariante()->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                $propiedadNombre = $propiedadQuery->getPropiedadNombre();
                                array_push($propiedadArray, $propiedadNombre);

                            }
                            foreach($ordencompradetalleEntity->getArticulovariante()->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                $propiedadvalorNombre = $propiedadvalorQuery->getPropiedadvalorNombre();
                                array_push($propiedadValorArray, $propiedadvalorNombre);
                            }
                            */

                            $propiedadvalorNombre = null;
                            foreach($ordencompradetalleEntity->getArticulovariante()->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                $propiedadvalorNombre .= $propiedadQuery->getPropiedadNombre() . " " . $propiedadvalorQuery->getPropiedadvalorNombre(). " ";
                            }
                        }

                        $ordencompradetalle = array(
                            'idordencompradetalle' => $ordencompradetalleEntity->getIdordencompradetalle(),
                            'idlugarinventario' => $idlugarinventario,
                            'cargoadmision_tipo' => 'articulo',
                            'cargoadmision_fecha' => date('Y-m-d H:i:s'),
                            'ordencompradetalle_caducidad' => $ordencompradetalleEntity->getOrdencompradetalleCaducidad(),
                            'existencia' => $lugarinventarioCantidad,
                            'articulo' => $articuloNombre,
                            'descripcion' => utf8_encode($propiedadvalorNombre),
                            'precio' => $ordencompradetalleEntity->getArticulovariante()->getArticulovariantePrecio(),
                            'salida' => $lugarNombre,
                        );

                        array_push($ordencompradetalleArray, $ordencompradetalle);
                    }
                }

                return new JsonModel(array(
                    'ordencompradetalleArray' => $ordencompradetalleArray
                ));
            }

            if($request->getPost()->cargoadmisionservicio_by != null){

                if($request->getPost()->cargoadmisionservicio_by == 'nombre'){
                    if($request->getPost()->busquedaAdmisionServicio != null){
                        $servicioQuery = \ServicioQuery::create()
                            ->filterBy(BasePeer::translateFieldname('servicio', 'servicio_nombre', BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME), '%'.$request->getPost()->busquedaAdmisionServicio.'%', \Criteria::LIKE)
                            ->find();

                    }else{
                        $servicioQuery = \ServicioQuery::create()->find();
                    }
                }

                if($servicioQuery->getArrayCopy()){
                    $servicioArray = array();
                    foreach($servicioQuery as $servicioEntity){
                        $servicio = array(
                            'idservicio' => $servicioEntity->getIdservicio(),
                            'cargoadmision_tipo' => 'servicio',
                            'cargoadmision_fecha' => date('Y-m-d H:i:s'),
                            'servicio_nombre' => $servicioEntity->getServicioNombre(),
                            'servicio_descripcion' => $servicioEntity->getServicioDescripcion(),
                            'servicio_precio' => $servicioEntity->getServicioPrecio(),
                        );
                        array_push($servicioArray, $servicio);
                    }
                }else{
                    $servicioArray = null;
                }

                return new JsonModel(array(
                    'servicioArray' => $servicioArray
                ));
            }
            // Fin Preparando Form Cargoadmision

            if ($request->isPost()) { //Si hicieron POST
                //Instanciamos nuestro filtro
                $consultaFilter = new ConsultaFilter();
                //Le ponemos nuestro filtro a nuesto fromulario
                $consultaForm->setInputFilter($consultaFilter->getInputFilter());

                //Le ponemos los datos a nuestro formulario
                $consultaForm->setData($request->getPost());

                //Validamos nuestro formulario
                if($consultaForm->isValid()){

                    //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Consulta
                    foreach ($consultaForm->getData() as $consultaKey => $consultaValue){
                        $consulta->setByName($consultaKey, $consultaValue, \BasePeer::TYPE_FIELDNAME);
                        $consulta->setConsultaStatus('no pagada');
                    }
                    //Guardamos en nuestra base de datos
                    $consulta->save();

                    $consultorio = $consulta->getConsultorio();
                    $consultorio->setConsultorioEnuso(1);
                    $consultorio->save();

                    $consultaArray = \ConsultaQuery::create()->filterByIdconsulta($consulta->getIdconsulta())->findOne()->toArray(BasePeer::TYPE_FIELDNAME);

                    return new JsonModel(array(
                        'consultaArray' => $consultaArray,
                    ));
                    //Redireccionamos a nuestro list
                    //return $this->redirect()->toRoute('pacientes');
                }

                //Instanciamos nuestro filtro
                $cargoconsultaFilter = new CargoconsultaFilter();
                //Le ponemos nuestro filtro a nuesto fromulario
                $cargoconsultaForm->setInputFilter($cargoconsultaFilter->getInputFilter());

                //Le ponemos los datos a nuestro formulario
                $cargoconsultaForm->setData($request->getPost());

                //Validamos nuestro formulario
                if($cargoconsultaForm->isValid()){

                    $cargoconsultaArray = array();
                    if($request->getPost()->cargoconsulta_tipo == 'articulo'){

                        //Instanciamos un nuevo objeto de nuestro objeto Paciente
                        $cargoconsulta = new \Cargoconsulta();

                        //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Consulta
                        foreach ($cargoconsultaForm->getData() as $cargoconsultaKey => $cargoconsultaValue){
                            if($cargoconsultaKey != 'cargoconsultaarticulo_by' && $cargoconsultaKey != 'cargoconsultaservicio_by' && $cargoconsultaKey != 'busquedaArticulo' && $cargoconsultaKey != 'busquedaServicio'){
                                $cargoconsulta->setByName($cargoconsultaKey, $cargoconsultaValue, \BasePeer::TYPE_FIELDNAME);
                            }
                        }
                        // Validar precio, caducidad y existencia de ordencompradetalle
                        $existencia = $cargoconsulta->getLugarinventario()->getLugarinventarioCantidad();
                        $caducidad = $cargoconsulta->getLugarinventario()->getOrdencompradetalle()->getOrdencompradetalleCaducidad();
                        $precio = $cargoconsulta->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio();

                        if($existencia > 0){
                            if($caducidad < date('Y-m-d')){
                                $cargoconsulta->setMonto($request->getPost()->cantidad*$precio);
                            }
                        }

                        //Guardamos en nuestra base de datos
                        $cargoconsulta->save();

                        $lugarinventarioQuery = $cargoconsulta->getLugarinventario();
                        $lugarinventarioQuery->setLugarinventarioCantidad($lugarinventarioQuery->getLugarinventarioCantidad()-$cargoconsulta->getCantidad());
                        $lugarinventarioQuery->save();

                        $cargoconsultaQuery = \CargoconsultaQuery::create()->filterByIdconsulta($cargoconsulta->getIdconsulta())->find();
                        if($cargoconsultaQuery->getArrayCopy()){
                            foreach($cargoconsultaQuery as $cargoconsultaEntity){
                                if($cargoconsultaEntity->getIdlugarinventario() != null){
                                    $articulovarianteEntity = $cargoconsultaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante();
                                    $propiedadvalorNombre = null;
                                    foreach($articulovarianteEntity->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                        $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                        $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                        $propiedadvalorNombre .= $propiedadQuery->getPropiedadNombre() . " " . $propiedadvalorQuery->getPropiedadvalorNombre(). " ";
                                    }

                                    $cargoconsulta = array(
                                        'idcargoconsulta' => $cargoconsultaEntity->getIdcargoconsulta(),
                                        'idconsulta' => $cargoconsultaEntity->getIdconsulta(),
                                        'status' => $cargoconsultaEntity->getConsulta()->getConsultaStatus(),
                                        'cantidad' => $cargoconsultaEntity->getCantidad(),
                                        'articulo' => $cargoconsultaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulo()->getArticuloNombre(),
                                        'descripcion' => utf8_encode($propiedadvalorNombre),
                                        'salida' => $cargoconsultaEntity->getLugarinventario()->getLugar()->getLugarNombre(),
                                        'fechahora' => $cargoconsultaEntity->getCargoconsultaFecha(),
                                        'precio' => $cargoconsultaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio(),
                                        'subtotal' => $cargoconsultaEntity->getMonto(),
                                    );
                                    array_push($cargoconsultaArray, $cargoconsulta);
                                }
                            }
                        }
                    }
                    if($request->getPost()->cargoconsulta_tipo == 'servicio'){

                        //Instanciamos un nuevo objeto de nuestro objeto Paciente
                        $cargoconsulta = new \Cargoconsulta();

                        //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Consulta
                        foreach ($cargoconsultaForm->getData() as $cargoconsultaKey => $cargoconsultaValue){
                            if($cargoconsultaKey != 'cargoconsultaarticulo_by' && $cargoconsultaKey != 'cargoconsultaservicio_by' && $cargoconsultaKey != 'busquedaArticulo' && $cargoconsultaKey != 'busquedaServicio'){
                                $cargoconsulta->setByName($cargoconsultaKey, $cargoconsultaValue, \BasePeer::TYPE_FIELDNAME);
                            }
                        }

                        $precio = $cargoconsulta->getServicio()->getServicioPrecio();
                        $cargoconsulta->setMonto($request->getPost()->cantidad*$precio);
                        //Guardamos en nuestra base de datos
                        $cargoconsulta->save();

                        $cargoconsultaQuery = \CargoconsultaQuery::create()->filterByIdconsulta($cargoconsulta->getIdconsulta())->find();
                        if($cargoconsultaQuery->getArrayCopy()){
                            foreach($cargoconsultaQuery as $cargoconsultaEntity){
                                if($cargoconsultaEntity->getIdservicio() != null){
                                    $cargoconsulta = array(
                                        'idcargoconsulta' => $cargoconsultaEntity->getIdcargoconsulta(),
                                        'idconsulta' => $cargoconsultaEntity->getIdconsulta(),
                                        'status' => $cargoconsultaEntity->getConsulta()->getConsultaStatus(),
                                        'cantidad' => $cargoconsultaEntity->getCantidad(),
                                        'servicio' => $cargoconsultaEntity->getServicio()->getServicioNombre(),
                                        'descripcion' => $cargoconsultaEntity->getServicio()->getServicioDescripcion(),
                                        'precio' => $cargoconsultaEntity->getServicio()->getServicioPrecio(),
                                        'subtotal' => $cargoconsultaEntity->getMonto(),
                                        'fechahora' => date('Y-m-d H:i:s'),
                                    );
                                    array_push($cargoconsultaArray, $cargoconsulta);
                                }
                            }
                        }
                    }

                    return new JsonModel(array(
                        'cargoconsultaArray' => $cargoconsultaArray
                    ));
                }/* else {
                    $messageArray = array();
                    foreach ($cargoconsultaForm->getMessages() as $key => $value){
                        foreach($value as $val){
                            //Obtenemos el valor de la columna con error
                            $message = $key.' '.$val;
                            array_push($messageArray, $message);
                        }
                    }
                    var_dump($messageArray);
                    return new ViewModel(array(
                        'input_error' => $messageArray
                    ));
                }*/

                //Instanciamos nuestro filtro
                $admisionFilter = new AdmisionFilter();
                //Le ponemos nuestro filtro a nuesto fromulario
                $admisionForm->setInputFilter($admisionFilter->getInputFilter());

                //Le ponemos los datos a nuestro formulario
                $admisionForm->setData($request->getPost());

                //Validamos nuestro formulario
                if($admisionForm->isValid()){

                    //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Admision
                    foreach ($admisionForm->getData() as $admisionKey => $admisionValue){
                        $admision->setByName($admisionKey, $admisionValue, \BasePeer::TYPE_FIELDNAME);
                        if($admisionKey == 'admision_fechaadmision'){
                            $admision->setAdmisionFechaadmision($admisionValue." ".date('H:i:s'));
                        }
                        $admision->setAdmisionStatus('no pagada');
                    }
                    //Guardamos en nuestra base de datos
                    $admision->save();

                    $cuarto = $admision->getCuarto();
                    $cuarto->setCuartoEnuso(1);
                    $cuarto->save();

                    $admisionArray = \AdmisionQuery::create()->filterByIdadmision($admision->getIdadmision())->findOne()->toArray(BasePeer::TYPE_FIELDNAME);

                    return new JsonModel(array(
                        'admisionArray' => $admisionArray,
                    ));
                    //Redireccionamos a nuestro list
                    //return $this->redirect()->toRoute('pacientes');
                }/*else {
                    $messageArray = array();
                    foreach ($cargoadmisionForm->getMessages() as $key => $value){
                        foreach($value as $val){
                            //Obtenemos el valor de la columna con error
                            $message = $key.' '.$val;
                            array_push($messageArray, $message);
                        }
                    }
                    var_dump($messageArray);
                    return new JsonModel(array(
                        'error' => $messageArray,
                    ));
                }*/

                //Instanciamos nuestro filtro
                $cargoadmisionFilter = new CargoadmisionFilter();
                //Le ponemos nuestro filtro a nuesto fromulario
                $cargoadmisionForm->setInputFilter($cargoadmisionFilter->getInputFilter());

                //Le ponemos los datos a nuestro formulario
                $cargoadmisionForm->setData($request->getPost());

                //Validamos nuestro formulario
                if($cargoadmisionForm->isValid()){
                    $cargoadmisionArray = array();
                    if($request->getPost()->cargoadmision_tipo == 'articulo'){

                        //Instanciamos un nuevo objeto de nuestro objeto Paciente
                        $cargoadmision = new \Cargoadmision();

                        //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Admision
                        foreach ($cargoadmisionForm->getData() as $cargoadmisionKey => $cargoadmisionValue){
                            if($cargoadmisionKey != 'cargoadmisionarticulo_by' && $cargoadmisionKey != 'cargoadmisionservicio_by' && $cargoadmisionKey != 'busquedaAdmisionArticulo' && $cargoadmisionKey != 'busquedaAdmisionServicio'){
                                $cargoadmision->setByName($cargoadmisionKey, $cargoadmisionValue, \BasePeer::TYPE_FIELDNAME);
                            }
                        }
                        // Validar precio, caducidad y existencia de ordencompradetalle
                        $existencia = $cargoadmision->getLugarinventario()->getLugarinventarioCantidad();
                        $caducidad = $cargoadmision->getLugarinventario()->getOrdencompradetalle()->getOrdencompradetalleCaducidad();
                        $precio = $cargoadmision->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio();

                        if($existencia > 0){
                            if($caducidad < date('Y-m-d')){
                                $cargoadmision->setCargoadmisionMonto($request->getPost()->cargoadmision_cantidad*$precio);
                            }
                        }

                        //Guardamos en nuestra base de datos
                        $cargoadmision->save();

                        $lugarinventarioQuery = $cargoadmision->getLugarinventario();
                        $lugarinventarioQuery->setLugarinventarioCantidad($lugarinventarioQuery->getLugarinventarioCantidad()-$cargoadmision->getCargoadmisionCantidad());
                        $lugarinventarioQuery->save();

                        $cargoadmisionQuery = \CargoadmisionQuery::create()->filterByIdadmision($cargoadmision->getIdadmision())->find();
                        if($cargoadmisionQuery->getArrayCopy()){
                            foreach($cargoadmisionQuery as $cargoadmisionEntity){
                                if($cargoadmisionEntity->getIdlugarinventario() != null){
                                    $articulovarianteEntity = $cargoadmisionEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante();

                                    $propiedadvalorNombre = null;
                                    foreach($articulovarianteEntity->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                        $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                        $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                        $propiedadvalorNombre .= $propiedadQuery->getPropiedadNombre() . " " . $propiedadvalorQuery->getPropiedadvalorNombre(). " ";
                                    }
                                    $cargoadmision = array(
                                        'idcargoadmision' => $cargoadmisionEntity->getIdcargoadmision(),
                                        'idadmision' => $cargoadmisionEntity->getIdadmision(),
                                        'status' => $cargoadmisionEntity->getAdmision()->getAdmisionStatus(),
                                        'cargoadmision_cantidad' => $cargoadmisionEntity->getCargoadmisionCantidad(),
                                        'articulo' => $cargoadmisionEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulo()->getArticuloNombre(),
                                        'descripcion' => utf8_encode($propiedadvalorNombre),
                                        'salida' => $cargoadmisionEntity->getLugarinventario()->getLugar()->getLugarNombre(),
                                        'fechahora' => $cargoadmisionEntity->getCargoadmisionFecha(),
                                        'precio' => $cargoadmisionEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio(),
                                        'subtotal' => $cargoadmisionEntity->getCargoadmisionMonto(),
                                    );
                                    array_push($cargoadmisionArray, $cargoadmision);
                                }
                            }
                        }
                    }
                    if($request->getPost()->cargoadmision_tipo == 'servicio'){

                        //Instanciamos un nuevo objeto de nuestro objeto Paciente
                        $cargoadmision = new \Cargoadmision();

                        //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Admision
                        foreach ($cargoadmisionForm->getData() as $cargoadmisionKey => $cargoadmisionValue){
                            if($cargoadmisionKey != 'cargoadmisionarticulo_by' && $cargoadmisionKey != 'cargoadmisionservicio_by' && $cargoadmisionKey != 'busquedaAdmisionArticulo' && $cargoadmisionKey != 'busquedaAdmisionServicio'){
                                $cargoadmision->setByName($cargoadmisionKey, $cargoadmisionValue, \BasePeer::TYPE_FIELDNAME);
                            }
                        }

                        $precio = $cargoadmision->getServicio()->getServicioPrecio();
                        $cargoadmision->setCargoadmisionMonto($request->getPost()->cargoadmision_cantidad*$precio);
                        //Guardamos en nuestra base de datos
                        $cargoadmision->save();

                        $cargoadmisionQuery = \CargoadmisionQuery::create()->filterByIdadmision($cargoadmision->getIdadmision())->find();
                        if($cargoadmisionQuery->getArrayCopy()){
                            foreach($cargoadmisionQuery as $cargoadmisionEntity){
                                if($cargoadmisionEntity->getIdservicio() != null){
                                    $cargoadmision = array(
                                        'idcargoadmision' => $cargoadmisionEntity->getIdcargoadmision(),
                                        'idadmision' => $cargoadmisionEntity->getIdadmision(),
                                        'status' => $cargoadmisionEntity->getAdmision()->getAdmisionStatus(),
                                        'cargoadmision_cantidad' => $cargoadmisionEntity->getCargoadmisionCantidad(),
                                        'servicio' => $cargoadmisionEntity->getServicio()->getServicioNombre(),
                                        'descripcion' => $cargoadmisionEntity->getServicio()->getServicioDescripcion(),
                                        'precio' => $cargoadmisionEntity->getServicio()->getServicioPrecio(),
                                        'subtotal' => $cargoadmisionEntity->getCargoadmisionMonto(),
                                        'fechahora' => date('Y-m-d H:i:s'),
                                    );
                                    array_push($cargoadmisionArray, $cargoadmision);
                                }
                            }
                        }
                    }

                    return new JsonModel(array(
                        'cargoadmisionArray' => $cargoadmisionArray,
                    ));
                }/* else {
                    $messageArray = array();
                    foreach ($cargoadmisionForm->getMessages() as $key => $value){
                        foreach($value as $val){
                            //Obtenemos el valor de la columna con error
                            $message = $key.' '.$val;
                            array_push($messageArray, $message);
                        }
                    }
                    return new JsonModel(array(
                        'error' => $messageArray,
                    ));
                }*/
            }

            return new ViewModel(array(
                'pacienteEntity' => $paciente,
                'edad' => $this->calculaEdad($fechaNacimiento),
                'consultaForm' => $consultaForm,
                'admisionForm' => $admisionForm,
                'cargoconsultaForm' => $cargoconsultaForm,
                'cargoadmisionForm' => $cargoadmisionForm,
            ));

        }else{
            return $this->redirect()->toRoute('pacientes');
        }
    }

    public function historicodetallesAction(){

        $id = (int) $this->params()->fromRoute('id', 0);
        if($id){
            if(\PacienteQuery::create()->filterByIdpaciente($id)->exists()){

                $cargoconsultaArticuloArray = array();
                $cargoconsultaServicioArray = array();
                
                $cargoadmisionArticuloArray = array();
                $cargoadmisionServicioArray = array();
                         
                $admisionanticiposArray = array();
                
                $pacienteEntity = \PacienteQuery::create()->filterByIdpaciente($id)->findOne();
                $consultasQuery = $pacienteEntity->getConsultas();
                $admisionesQuery = $pacienteEntity->getAdmisions();

                if($consultasQuery->count() != 0){

                    foreach($consultasQuery as $consultaEntity){

                        $cargoconsultas = $consultaEntity->getCargoconsultas();
                        if($cargoconsultas->count() != 0){
                            foreach($cargoconsultas as $cargoconsultaEntity){
                                if($cargoconsultaEntity->getIdlugarinventario() != null){
                                    $articulovarianteEntity = $cargoconsultaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante();

                                    $propiedadvalorNombre = null;
                                    foreach($articulovarianteEntity->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                        $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                        $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                        $propiedadvalorNombre .= $propiedadQuery->getPropiedadNombre() . " " . $propiedadvalorQuery->getPropiedadvalorNombre(). " ";
                                    }
                                    $cargoconsultaArticulo = array(
                                        'idcargoconsulta' => $cargoconsultaEntity->getIdcargoconsulta(),
                                        'idconsulta' => $cargoconsultaEntity->getIdconsulta(),
                                        'status' => $cargoconsultaEntity->getConsulta()->getConsultaStatus(),
                                        'cantidad' => $cargoconsultaEntity->getCantidad(),
                                        'articulo' => $cargoconsultaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulo()->getArticuloNombre(),
                                        'descripcion' => utf8_encode($propiedadvalorNombre),
                                        'salida' => $cargoconsultaEntity->getLugarinventario()->getLugar()->getLugarNombre(),
                                        'fechahora' => $cargoconsultaEntity->getCargoconsultaFecha(),
                                        'precio' => $cargoconsultaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio(),
                                        'subtotal' => $cargoconsultaEntity->getMonto(),
                                    );
                                    array_push($cargoconsultaArticuloArray, $cargoconsultaArticulo);
                                }

                                if($cargoconsultaEntity->getIdservicio() != null){
                                    $cargoconsultaServicio = array(
                                        'idcargoconsulta' => $cargoconsultaEntity->getIdcargoconsulta(),
                                        'idconsulta' => $cargoconsultaEntity->getIdconsulta(),
                                        'status' => $cargoconsultaEntity->getConsulta()->getConsultaStatus(),
                                        'cantidad' => $cargoconsultaEntity->getCantidad(),
                                        'servicio' => $cargoconsultaEntity->getServicio()->getServicioNombre(),
                                        'descripcion' => $cargoconsultaEntity->getServicio()->getServicioDescripcion(),
                                        'precio' => $cargoconsultaEntity->getServicio()->getServicioPrecio(),
                                        'subtotal' => $cargoconsultaEntity->getMonto(),
                                        'fechahora' => $cargoconsultaEntity->getConsulta()->getConsultaFecha(),
                                    );
                                    array_push($cargoconsultaServicioArray, $cargoconsultaServicio);
                                }
                            }
                        }
                    }
                }
                if($admisionesQuery->count() != 0){
                    foreach($admisionesQuery as $admisionEntity){
                        $cargoadmisiones = $admisionEntity->getCargoadmisions();
                        $admisionanticiposQuery = $admisionEntity->getAdmisionAnticipos();
                        foreach ($admisionanticiposQuery as $admisionanticipoEntity){
                            $admisionanticipo = array(
                                'idadmisionanticipo' => $admisionanticipoEntity->getIdadmisionanticipo(),
                                'idadmision' => $admisionanticipoEntity->getIdadmision(),
                                'admisionanticipo_fecha' => $admisionanticipoEntity->getAdmisionanticipoFecha(),
                                'admisionanticipo_cantidad' => $admisionanticipoEntity->getAdmisionanticipoCantidad(),
                                'admisionanticipo_nota' => $admisionanticipoEntity->getAdmisionanticipoNota(),
                                'admisionanticipo_tipo' => $admisionanticipoEntity->getAdmisionanticipoTipo()
                            );
                            array_push($admisionanticiposArray, $admisionanticipo);
                        }
                        if($cargoadmisiones->count() != 0){
                            foreach($cargoadmisiones as $cargoadmisionEntity){
                                if($cargoadmisionEntity->getIdlugarinventario() != null){
                                    $articulovarianteEntity = $cargoadmisionEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante();
                                    foreach($articulovarianteEntity->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                        $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                        $propiedadNombre = $propiedadQuery->getPropiedadNombre();
                                    }
                                    foreach($articulovarianteEntity->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                        $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                        $propiedadvalorNombre = $propiedadvalorQuery->getPropiedadvalorNombre();
                                    }
                                    $cargoadmisionArticulo = array(
                                        'idcargoadmision' => $cargoadmisionEntity->getIdcargoadmision(),
                                        'idadmision' => $cargoadmisionEntity->getIdadmision(),
                                        'status' => $cargoadmisionEntity->getAdmision()->getAdmisionStatus(),
                                        'cargoadmision_cantidad' => $cargoadmisionEntity->getCargoadmisionCantidad(),
                                        'articulo' => $cargoadmisionEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulo()->getArticuloNombre(),
                                        'descripcion' => utf8_encode($propiedadNombre." ".$propiedadvalorNombre),
                                        'salida' => $cargoadmisionEntity->getLugarinventario()->getLugar()->getLugarNombre(),
                                        'fechahora' => $cargoadmisionEntity->getCargoadmisionFecha(),
                                        'precio' => $cargoadmisionEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio(),
                                        'subtotal' => $cargoadmisionEntity->getCargoadmisionMonto(),
                                    );
                                    array_push($cargoadmisionArticuloArray, $cargoadmisionArticulo);
                                }

                                if($cargoadmisionEntity->getIdservicio() != null){
                                    $cargoadmisionServicio = array(
                                        'idcargoadmision' => $cargoadmisionEntity->getIdcargoadmision(),
                                        'idadmision' => $cargoadmisionEntity->getIdadmision(),
                                        'status' => $cargoadmisionEntity->getAdmision()->getAdmisionStatus(),
                                        'cargoadmision_cantidad' => $cargoadmisionEntity->getCargoadmisionCantidad(),
                                        'servicio' => $cargoadmisionEntity->getServicio()->getServicioNombre(),
                                        'descripcion' => $cargoadmisionEntity->getServicio()->getServicioDescripcion(),
                                        'precio' => $cargoadmisionEntity->getServicio()->getServicioPrecio(),
                                        'subtotal' => $cargoadmisionEntity->getCargoadmisionMonto(),
                                        'fechahora' => $cargoadmisionEntity->getAdmision()->getAdmisionFechaadmision(),
                                    );
                                    array_push($cargoadmisionServicioArray, $cargoadmisionServicio);
                                }
                            }
                        }
                    }
                }

                return new ViewModel(array(
                    'pacienteEntity' => $pacienteEntity,
                    'consultasQuery' => $consultasQuery,
                    'admisionesQuery' => $admisionesQuery,
                    'admisionanticiposArray' => $admisionanticiposArray,
                    'cargoconsultaArticuloArray' => $cargoconsultaArticuloArray,
                    'cargoconsultaServicioArray' => $cargoconsultaServicioArray,
                    'cargoadmisionArticuloArray' => $cargoadmisionArticuloArray,
                    'cargoadmisionServicioArray' => $cargoadmisionServicioArray,
                ));
            }
        }else{
            return $this->redirect()->toRoute('pacientes', array('action' => 'historicos'));
        }
    }

    public function editarAction()
    {

        $request = $this->getRequest();

        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        //Verificamos que el Id paciente que se quiere modificar exista
        if(!PacienteQuery::create()->filterByIdpaciente($id)->exists()){
            $id =0;
        }

        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('pacientes');
        }

        //Instanciamos nuestro paciente
        $paciente = PacienteQuery::create()->filterByIdpaciente($id)->findOne();

        //Instanciamos nuestro formulario
        $pacienteForm = new PacienteForm();

        //Le ponemos los datos de nuestro paciente a nuestro formulario
        $pacienteForm->setData($paciente->toArray(BasePeer::TYPE_FIELDNAME));

        if ($request->isPost()) { //Si hicieron POST

            //Instanciamos nuestro filtro
            $pacienteFilter = new PacienteFilter();

            //Le ponemos nuestro filtro a nuesto fromulario
            $pacienteForm->setInputFilter($pacienteFilter->getInputFilter());

            //Le ponemos los datos a nuestro formulario
            $pacienteForm->setData($request->getPost());

            //Validamos nuestro formulario
            if($pacienteForm->isValid()){

                //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Paciente
                foreach ($pacienteForm->getData() as $pacienteKey => $pacienteValue){
                    if($pacienteKey != 'pacientefacturacion_rfc'){
                        $paciente->setByName($pacienteKey, $pacienteValue, \BasePeer::TYPE_FIELDNAME);
                    }
                }

                $paciente->setIdpaciente($id);
                //Guardamos en nuestra base de datos
                $paciente->save();

                //Agregamos un mensaje
                $this->flashMessenger()->addMessage('Paciente guardado exitosamente!');

                //Redireccionamos a nuestro list
                return $this->redirect()->toRoute('pacientes');

            }
        }

        return new ViewModel(array(
            'id'  => $id,
            'pacienteForm' => $pacienteForm,
        ));
    }

    public function eliminarAction()
    {
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id', 0);
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('paciente', array('action' => 'asignar'));
        }

        //Verificamos que el Id medico que se quiere eliminar exista
        if(PacienteQuery::create()->filterByIdpaciente($id)->exists()){

            //Instanciamos nuestro paciente
            $paciente = PacienteQuery::create()->findPk($id);

            $paciente->delete();

            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Paciente eliminado exitosamente!');
            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('pacientes');

        }
    }
    
    public  function getpacientesAction(){
        $collection = \PacienteQuery::create()->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);
        
        $autcomplete = array();
        
        foreach ($collection as $entity){
            $tmp['value'] = $entity["idpaciente"];
            $tmp['label'] = $entity["paciente_nombre"].' '.$entity['paciente_ap'].' '.$entity['paciente_am'];
            $conceptos_autcomplete[] = $tmp;
        }
        return $this->getResponse()->setContent(\Zend\Json\Json::encode($conceptos_autcomplete));
    }
}