<?php

$nombrepaciente="nombre paciente";
$nombremedico="nombre medico";
$nombreresponsable="nombre responsable";
$telresponsable="3333333333";
$telefonocel= "6461974012";
$nombrepadre="nombre padre";
$nombremadre="nombre madre";
$nombreconyuge="nombre conyuge";
$observaciones="observaciones";
$diagnostico="diagnostico";
$cuarto="cuarto";
$sexo="sexo";
$estadocivil="estado civil";
$direccion="direccion";
$edad="edad";
$lugartrabajo="lugar de trabajo";
$avisara=" avisar a";
$numpaciente="20";
$cuarto="cuarto 10";
$cama=" cama";
$ocupacion="estudiante";
$fechaadmision="dd-mm-aaaa";
$fechasalida="dd2-mm-aaaa";
$horaadmision="HH-mm-ss";
$horasalida="HH2-mm-ss";
$colonia= "colonia";
$ciudad="ciudad";
$estado="estado";
$anticipo="nada";

define('FPDF_FONTPATH','font/');
require('fpdf.php');

// include_once('myDBC.php');
class PDF extends FPDF
{


    function AcceptPageBreak()
    {
        //Method accepting or not automatic page break
        if($this->col<2)
        {
            //Go to next column
            $this->SetCol($this->col+1);
            //Set ordinate to top
            $this->SetY($this->y0);
            //Keep on page
            return false;
        }
        else
        {
            //Go back to first column
            $this->SetCol(0);
            //Page break
            return true;
        }
    }

    function ChapterBody()
    {

        //Read text file
        // $f=fopen($fichier,'r');
        //$txt=fread($f,filesize($fichier));
        $txt="CONTRATO DE SERVICIOS DE ATENCIÓN MÉDICA POR COBRO DIRECTO QUE CELEBRAN EL HOSPITAL DEL VALLE DE ATEMAJAC, S.A. DE C.V. QUIEN EN LO SUCESIVO SE LE DENOMINARÁ 'EL HOSPITAL'. \n Y POR OTRA PARTE EL SR.(A) \n".$GLOBALS[nombrepaciente]." A QUIEN EN LO SUCESIVO SE LE DENOMINARÁ EL 'EL PACIENTE' Y QUE CELEBRAN AL TENOR DE LAS SIGUIENTES DECLARACIONES Y CLAUSULAS: \n DECLARACIONES \n I. Hospital del Valle de Atemajac S.A. de C.V. Es una empresa legalmente constituida, según las Leyes Mexicanas, ante la Fé del LIC. MANUEL BAILON CABRERA Notario Público No. 35 de Guadalajara, Jal. Mediante Escriture Pública No. 27,264 fecha 13 DE SEPTIEMBRE 1989 registrada en el Registro Público de la Propiedad y del Comercio el 27 DE OCTUBRE DE 1989 bajo inscripción 27-28 de tomo 355 del libro primero del Registro Público de Comercio. Agregó con el Número 21 del Apéndice 1089 de este libro la documentación respectiva. Representada en la actualidad por el DR. JAVIER ALCANTAR JARAMILLO como administrador general único. \n 2a. 'EL HOSPITAL' tiene como objeto la Prestación de Servicios Hospitalarios en General, examenes clínicos diagnóstico de enfermedades, análisis de laboratorio y venta de todo tipo de medicamentos. \n 3a. 'EL HOSPITAL' manifiesta contar con las instalaciones y equipo propios y personal capacitado necesarios para proporcionar los servicios indicados en el punto que antecede. \n 4a. El usuario de los servicios o 'El Paciente' cuyos datos generales aparecen en los DATOS GENERALES DE ADMINISTRACIÓN al inicio de la presente y/o su familiar responsable y/o representante legal de nombre: ".$GLOBALS[nombreresponsable]." Manifiesta (n) su voluntad de contratar y recibir los servicios de atención médica que proporciona 'El Hospital'. \n 5a. 'El Paciente' es conforme de observar las normas de Reglamento Interno del Hospital. \n CLAUSULAS \n PRIMERA.- 'El Hospital' se obliga a prestar a 'El Paciente' los siguientes servicios Hospitalarios: habitacion, quirofano, medicamentos, servicios de enfermeria y dieta prescrita por el médico que le atienda. \n SEGUNDA.- 'El Paciente' se obliga a pagar a 'El Hospital' el importe total de los servicios antes mencionados, incluyendo los derivados de Rayos X, Laboratorio, Medicinas, Material de Curación, y demás servicios y/o material que sean respectivamente solicitados por el médico de 'El Paciente', gastos que se cargaran en la cuenta respectiva de acuerdo a los siguiente procedimientos: \n a) 'El Paciente' desde el momento mismo del ingreso podra entregar a 'El hospital' un anticipo sobre el monto del costo de los servicios que se estimen van a proporcionarle: \n b) 'El Hospital' si la estancia se prolonga, semanalmente presentará cuenta parcial a esa fecha que deberá ser liquidada en ese momento. \n c) 'El Paciente' al darse de alta, le será presentada por la administración de 'El Hospital' la factura total, la cual deberá ser liquidada en ese acto. \n d) En caso de que 'El Paciente' liquidara su cuenta mediante la suscripción del pagaré inserto al final del presente, previa autorización por la Administración de la institución, será extendido a favor de 'El Hospital' con la leyenda 'NO NEGOCIABLE'. \n TERCERA: 'El Paciente' entrega en este acto a 'El Hospital' en calidad de anticipo la cantidad de: $ __________________________________________________________________________________(_____________________________________________________________________________________________________________________________________________________ ) \nEsta cantidad será aplicada a cuenta del precio total y si al hacerlo resultare un remanente a favor del primero, le será reintegrado en efectivo al momento de darse de alta. \n CUARTA.- 'El Paciente' se dará de alta por indicación y autorización médica y/o solicitud voluntaria del 'El Paciente' o de su representante legal y por defunción. \n QUINTA.- 'El Paciente' se obliga a cumplir con el reglamento interno y demás disposiciones de 'El Hospital' y como esta es una institucion abierto al cuerpo médico lo releva de responsabilidad médica. \n SEXTA.- 'El Paciente' autoriza al Dr ".$nombremedico." y a sus colaboradores para que prescriban, lleven a cabo tratamiento médico que requiera en la atención de su persona, así como la administración de medicamentos y anestésicos prescritos. \n SEPTIMA.- 'El Hospital' se obliga a respetar los precios de los medicamentos e insumos que sean suministrados al paciente, los cuales no deberán ser mayores al precio máximo de venta al público indicados en la presentación de estos productos. Asimismo el prestador del servicio se obliga a entregar al momento de que el paciente egrese del 'El Hospital' los medicamentos o insumos no consumidos. \n OCTAVA.- 'El Hospital' no se hace responsable de ningún valor o dinero del usuario que no sea depositado para su resguardo en administración. \n NOVENA.- Ambas partes convienen en que en caso de que 'El Paciente' esté incapacitado para firmar el contrato, hará en su nombre y representación la persona denominada en el presente contrato y como Familiar Responsable o Representante Legal y será quien se responsabilice de manera solidaria en el cumplimiento de las obligaciones y autorizaciones anteriormente establecidas. \n DÉCIMA.- El lugar de donde serán prestados los servicios médicos hospitalarios serán en las instalaciones de 'El Hospital' ubicadas en Ramón Corona Np. 55 Atemajac del Valle, Zapopan, Jalisco. \n DECIMA PRIMERA.- 'El Paciente' para hacer uso de los servicios que presta 'El Hospital' deberá cubrir con los siguientes requisitos \n a) Proporcionar la información a DATOS GENERALES DE ADMISIÓN. \n b) Darse por enterado de los aspectos principales del reglamento Interno del Hospital que le serán proporcionados mediante la entrega de un folleto adicional al presente contrato. \n c) Dar su conformidad respecto de la categoría, tipo y costo de los servicios de atención médica que previamente le fueron presentados mediante el Catálogo de Servicios y Precios. \n d) A firmar el presnete contrato o en su defecto su familiar responsable o representante legal. \n DÉCIMA SEGUNDA.- Para la aplicación o suministro a 'El Paciente' de medicamentos, de servicios auxiliares de diagnóstico y tratamiento e insumos se observará el siguiente procedimiento: \n a) deberá recabarse invariablemente la autorización e indicaciones de: \n 1a.- El médico de 'El Paciente' designado por el mismo o \n 2a.- En ausencia del primero o de carencia de sus indicaciones por el médico residente en turno. \n DÉCIMA TERCERA.- Para efectos de proporcionar el tratamiento médico de intervención quirúrgica o de servicios auxiliares de diagnóstico y tratamiento y demás servicios de atención médica que requiera 'El Paciente' se observará el procedimiento siguiente: \n a) Le será proporcionado a 'El Paciente' o en su defecto a su familiar responsable o a su representante legal en forma separada una Hoja de Consentimiento Quirúrgico que deberá ser requisitado por la autorización de este tipo de servicios como también de los servicios auxiliares necesarios de diagnóstico que sean inherente y medicamentos congruentes. \n DÉCIMA CUARTA.- Para efectos de la atención de cualquier reclamación por parte de 'El Paciente' o del familiar responsable o de su representante legal, 'El Hospital' cuenta con el personal que le atenderá en la ventanilla de la administración de la institución en donde se hará del conocimiento de ellos el nombre de cada encargado de turno. \n DÉCIMA QUINTA.- Para la interpretación y cumplimiento del presente contrato LAS PARTES se someten a la competencia de la PROCURADURÍA FEDERAL DEL CONSUMIDOR LEÍDO QUE EL PRESENTE CONTRATO POR QUIEN EN EL INTERVIENEN Y CONOCEDORES DE SU CONTINUIDAD LO SUSCRIBEN EN ORIGINAL Y COPIA EN LA CIUDAD DE GUADALAJARA, JALISCO A LOS ".$dias." DÍAS DEL MES DE ".$mes." DEL AÑO ".$anio." \n                     _____________________________________________________ \n                                                             'El HOSPITAL' \n                     _____________________________________________________ \n                                                              'EL PACIENTE' \n                     _____________________________________________________ \n                                                    FAMILIAR RESPONSABLE \n                     _____________________________________________________ \n                                                    REPRESENTANTE LEGAL" ;
        //fclose($f);
        //Font

        $this->Image('logo_login2.png', 10, 5, 17, 25, 'PNG');
        $this->SetFont('Times','',12);
        $this->SetXY(25, 10);
        $this->MultiCell(200, 5, utf8_decode('HOSPITAL DEL VALLE DE ATEMAJAC S.A. DE C.V. '), 0, 'L');
        $this->SetFont('Times','',5);
        $this->SetXY(25, 13);
        $this->MultiCell(100, 5, utf8_decode('RAMÓN CORONA NO. 55 TELS.: 3853-1041, 3853-1048, 3853-1064, 3853-1074'), 0, 'C');
        $this->SetXY(25, 16);
        $this->MultiCell(100, 5, utf8_decode('ATEMAJAC DEL VALLE, ZAPOPAN, JALISCO'), 0, 'C');
        $this->SetXY(25, 19);
        $this->MultiCell(100, 5, utf8_decode('R.F.C. HVA-890913-1LO'), 0, 'C');

        $this->SetXY(10, 30);
        $this->SetFont('Times','',4);
        //Output text in a 6 cm width column
        $this->PageBreakTrigger = 230;

        $this->MultiCell(60,5,utf8_decode($txt));

        // $this->Ln();
        //Mention
        $this->SetFont('','I');
        //$this->Cell(0,5,'(end of excerpt)');
        //Go back to first column
        $this->SetCol(0);
    }
    function PrintChapter()
    {
        //Add chapter
        $this->AddPage();
        $this->ChapterTitle();
        $this->ChapterBody();

        $image1 = "selloformato.jpg";
        $this->Image($image1, 75, 230,80);
    }
    function SetCol($col)
    {
        //Set position at a given column
        $this->col=$col;
        $x=10+$col*65;
        $this->SetLeftMargin($x);
        $this->SetX($x);
    }
    function ChapterTitle()
    {
        //Title
        //  $this->SetFont('Arial','',12);
        //$this->SetFillColor(200,220,255);
        //$this->Cell(0,6,"Chapter  $num : $label",0,1,'L',1);
        $this->Ln(4);
        //Save ordinate
        $this->y0=$this->GetY()+10;
    }

}
$pdf = new PDF();
$pdf->settextcolor(0,0,128);
$pdf->AddPage();
$pdf->SetFont('Arial','B', 12);
//Margen decorativo iniciando en 0, 0
//$pdf->Image('logo_login2.png', 0,0, 210, 295, 'PNG');

//Imagen izquierd
$pdf->Image('logo_login2.png', 25, 18, 17, 25, 'PNG');

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
$pdf->PrintChapter();

///////////// AVISO PRIVACIDAD

$pdf->AddPage();
$pdf->PageBreakTrigger = 250;
$pdf->SetFont('Arial','B', 12);
//Margen decorativo iniciando en 0, 0
//$pdf->Image('logo_login2.png', 0,0, 210, 295, 'PNG');

//Imagen izquierd
$pdf->Image('logo_login2.png', 10, 10, 17, 25, 'PNG');

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
$pdf->Image('logo_login2.png', 25, 18, 17, 25, 'PNG');

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
$pdf->Image('logo_login2.png', 25, 18, 17, 25, 'PNG');

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

?>