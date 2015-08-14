<?php

namespace Pacientes\Paciente\Controller;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Pacientes\Paciente\FPDF\FPDF;
    
/**
 * Description of PDF
 *
 * @author Productor
 */
class PDF extends FPDF{
    
    public function __construct() {

      
       parent::FPDF();
       
    }
    
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
         
        public function ChapterBody($nombrepaciente, $nombreresponsable, $nombremedico)
        {
            
            //Read text file
           // $f=fopen($fichier,'r');
            //$txt=fread($f,filesize($fichier));
             
             
            
             $txt="CONTRATO DE SERVICIOS DE ATENCIÓN MÉDICA POR COBRO DIRECTO QUE CELEBRAN EL HOSPITAL DEL VALLE DE ATEMAJAC, S.A. DE C.V. QUIEN EN LO SUCESIVO SE LE DENOMINARÁ 'EL HOSPITAL'. \n Y POR OTRA PARTE EL SR.(A) ____________________________________________________\n ________________________________________________________________________  A QUIEN EN LO SUCESIVO SE LE DENOMINARÁ EL 'EL PACIENTE' Y QUE CELEBRAN AL TENOR DE LAS SIGUIENTES DECLARACIONES Y CLAUSULAS: \n DECLARACIONES \n I. Hospital del Valle de Atemajac S.A. de C.V. Es una empresa legalmente constituida, según las Leyes Mexicanas, ante la Fé del LIC. MANUEL BAILON CABRERA Notario Público No. 35 de Guadalajara, Jal. Mediante Escriture Pública No. 27,264 fecha 13 DE SEPTIEMBRE 1989 registrada en el Registro Público de la Propiedad y del Comercio el 27 DE OCTUBRE DE 1989 bajo inscripción 27-28 de tomo 355 del libro primero del Registro Público de Comercio. Agregó con el Número 21 del Apéndice 1089 de este libro la documentación respectiva. Representada en la actualidad por el DR. JAVIER ALCANTAR JARAMILLO como administrador general único. \n 2a. 'EL HOSPITAL' tiene como objeto la Prestación de Servicios Hospitalarios en General, examenes clínicos diagnóstico de enfermedades, análisis de laboratorio y venta de todo tipo de medicamentos. \n 3a. 'EL HOSPITAL' manifiesta contar con las instalaciones y equipo propios y personal capacitado necesarios para proporcionar los servicios indicados en el punto que antecede. \n 4a. El usuario de los servicios o 'El Paciente' cuyos datos generales aparecen en los DATOS GENERALES DE ADMINISTRACIÓN al inicio de la presente y/o su familiar responsable y/o representante legal de nombre: ____________________________________________________\n ________________________________________________________________________ Manifiesta (n) su voluntad de contratar y recibir los servicios de atención médica que proporciona 'El Hospital'. \n 5a. 'El Paciente' es conforme de observar las normas de Reglamento Interno del Hospital. \n CLAUSULAS \n PRIMERA.- 'El Hospital' se obliga a prestar a 'El Paciente' los siguientes servicios Hospitalarios: habitacion, quirofano, medicamentos, servicios de enfermeria y dieta prescrita por el médico que le atienda. \n SEGUNDA.- 'El Paciente' se obliga a pagar a 'El Hospital' el importe total de los servicios antes mencionados, incluyendo los derivados de Rayos X, Laboratorio, Medicinas, Material de Curación, y demás servicios y/o material que sean respectivamente solicitados por el médico de 'El Paciente', gastos que se cargaran en la cuenta respectiva de acuerdo a los siguiente procedimientos: \n a) 'El Paciente' desde el momento mismo del ingreso podra entregar a 'El hospital' un anticipo sobre el monto del costo de los servicios que se estimen van a proporcionarle: \n b) 'El Hospital' si la estancia se prolonga, semanalmente presentará cuenta parcial a esa fecha que deberá ser liquidada en ese momento. \n c) 'El Paciente' al darse de alta, le será presentada por la administración de 'El Hospital' la factura total, la cual deberá ser liquidada en ese acto. \n d) En caso de que 'El Paciente' liquidara su cuenta mediante la suscripción del pagaré inserto al final del presente, previa autorización por la Administración de la institución, será extendido a favor de 'El Hospital' con la leyenda 'NO NEGOCIABLE'. \n TERCERA: 'El Paciente' entrega en este acto a 'El Hospital' en calidad de anticipo la cantidad de: $ __________________________________________________________________________________(_____________________________________________________________________________________________________________________________________________________ ) \nEsta cantidad será aplicada a cuenta del precio total y si al hacerlo resultare un remanente a favor del primero, le será reintegrado en efectivo al momento de darse de alta. \n CUARTA.- 'El Paciente' se dará de alta por indicación y autorización médica y/o solicitud voluntaria del 'El Paciente' o de su representante legal y por defunción. \n QUINTA.- 'El Paciente' se obliga a cumplir con el reglamento interno y demás disposiciones de 'El Hospital' y como esta es una institucion abierto al cuerpo médico lo releva de responsabilidad médica. \n SEXTA.- 'El Paciente' autoriza al Dr  ___________________________________________________\n ________________________________________________________________________  y a sus colaboradores para que prescriban, lleven a cabo tratamiento médico que requiera en la atención de su persona, así como la administración de medicamentos y anestésicos prescritos. \n SEPTIMA.- 'El Hospital' se obliga a respetar los precios de los medicamentos e insumos que sean suministrados al paciente, los cuales no deberán ser mayores al precio máximo de venta al público indicados en la presentación de estos productos. Asimismo el prestador del servicio se obliga a entregar al momento de que el paciente egrese del 'El Hospital' los medicamentos o insumos no consumidos. \n OCTAVA.- 'El Hospital' no se hace responsable de ningún valor o dinero del usuario que no sea depositado para su resguardo en administración. \n NOVENA.- Ambas partes convienen en que en caso de que 'El Paciente' esté incapacitado para firmar el contrato, hará en su nombre y representación la persona denominada en el presente contrato y como Familiar Responsable o Representante Legal y será quien se responsabilice de manera solidaria en el cumplimiento de las obligaciones y autorizaciones anteriormente establecidas. \n DÉCIMA.- El lugar de donde serán prestados los servicios médicos hospitalarios serán en las instalaciones de 'El Hospital' ubicadas en Ramón Corona Np. 55 Atemajac del Valle, Zapopan, Jalisco. \n DECIMA PRIMERA.- 'El Paciente' para hacer uso de los servicios que presta 'El Hospital' deberá cubrir con los siguientes requisitos \n a) Proporcionar la información a DATOS GENERALES DE ADMISIÓN. \n b) Darse por enterado de los aspectos principales del reglamento Interno del Hospital que le serán proporcionados mediante la entrega de un folleto adicional al presente contrato. \n c) Dar su conformidad respecto de la categoría, tipo y costo de los servicios de atención médica que previamente le fueron presentados mediante el Catálogo de Servicios y Precios. \n d) A firmar el presnete contrato o en su defecto su familiar responsable o representante legal. \n DÉCIMA SEGUNDA.- Para la aplicación o suministro a 'El Paciente' de medicamentos, de servicios auxiliares de diagnóstico y tratamiento e insumos se observará el siguiente procedimiento: \n a) deberá recabarse invariablemente la autorización e indicaciones de: \n 1a.- El médico de 'El Paciente' designado por el mismo o \n 2a.- En ausencia del primero o de carencia de sus indicaciones por el médico residente en turno. \n DÉCIMA TERCERA.- Para efectos de proporcionar el tratamiento médico de intervención quirúrgica o de servicios auxiliares de diagnóstico y tratamiento y demás servicios de atención médica que requiera 'El Paciente' se observará el procedimiento siguiente: \n a) Le será proporcionado a 'El Paciente' o en su defecto a su familiar responsable o a su representante legal en forma separada una Hoja de Consentimiento Quirúrgico que deberá ser requisitado por la autorización de este tipo de servicios como también de los servicios auxiliares necesarios de diagnóstico que sean inherente y medicamentos congruentes. \n DÉCIMA CUARTA.- Para efectos de la atención de cualquier reclamación por parte de 'El Paciente' o del familiar responsable o de su representante legal, 'El Hospital' cuenta con el personal que le atenderá en la ventanilla de la administración de la institución en donde se hará del conocimiento de ellos el nombre de cada encargado de turno. \n DÉCIMA QUINTA.- Para la interpretación y cumplimiento del presente contrato LAS PARTES se someten a la competencia de la PROCURADURÍA FEDERAL DEL CONSUMIDOR LEÍDO QUE EL PRESENTE CONTRATO POR QUIEN EN EL INTERVIENEN Y CONOCEDORES DE SU CONTINUIDAD LO SUSCRIBEN EN ORIGINAL Y COPIA EN LA CIUDAD DE GUADALAJARA, JALISCO A LOS ".$dias." DÍAS DEL MES DE ".$mes." DEL AÑO ".$anio." \n                     _____________________________________________________ \n                                                             'El HOSPITAL' \n                     _____________________________________________________ \n                                                              'EL PACIENTE' \n                     _____________________________________________________ \n                                                    FAMILIAR RESPONSABLE \n                     _____________________________________________________ \n                                                    REPRESENTANTE LEGAL" ;
            //fclose($f);
            //Font
            
            $this->Image($_SERVER['DOCUMENT_ROOT'].'/img/logo_login.png', 10, 5, 17, 25, 'PNG');
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
            
            $this->SetXY(0, 45);
            $this->MultiCell(50, 5, utf8_decode("                                                                                         ".$nombrepaciente), 0, 'L');
            
            $this->SetXY(0, 135);
            $this->MultiCell(50, 5, utf8_decode("                                                                                      ".$nombreresponsable), 0, 'L');
            
            $this->SetXY(80, 84);
            $this->MultiCell(50, 5, utf8_decode("                                                           ".$nombremedico), 0, 'L');
            
           // $this->Ln();
            //Mention
            $this->SetFont('','I');
            //$this->Cell(0,5,'(end of excerpt)');
            //Go back to first column
            $this->SetCol(0);
        }
        public function PrintChapter($nombrepaciente, $nombreresponsable, $nombremedico)
        {
            //Add chapter
            $this->AddPage();
            $this->ChapterTitle();
            $this->ChapterBody($nombrepaciente, $nombreresponsable, $nombremedico);
             
            $image1 = $_SERVER['DOCUMENT_ROOT'].'/img/selloformato.jpg';
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
