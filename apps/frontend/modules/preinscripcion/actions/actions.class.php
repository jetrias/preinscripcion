<?php

require_once dirname(__FILE__).'/../lib/preinscripcionGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/preinscripcionGeneratorHelper.class.php';

/**
 * preinscripcion actions.
 *
 * @package    preinscripcion
 * @subpackage preinscripcion
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class preinscripcionActions extends autoPreinscripcionActions
{
     public function executeIndex(sfWebRequest $request){
         $this->getUser()->setFlash('error', sprintf('Se ha detectado una acción inválida en el sistema!'));
        
         $this->redirect('@preinscripcion_new');
     }
      public function executeEdit(sfWebRequest $request)
  {
    $this->getUser()->setFlash('error', sprintf('Se ha detectado una acción inválida en el sistema!'));
    $this->redirect('@preinscripcion_new');
  }
protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

      $preinscripcion = $form->save();

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $preinscripcion)));

      if ($request->hasParameter('_save_and_add'))
      {
        $this->getUser()->setFlash('notice', $notice.' You can add another one below.');

        $this->redirect('@preinscripcion_new');
      }
      else
      {
        $this->getUser()->setFlash('notice', $notice);
        $this->redirect('/preinscripcion/web/index.php/preinscripcion/planilla?tip='. $this->form->getValue('nacionalidad').'&ide='.$nombre = $this->form->getValue('identificacion').'');
        //$this->redirect(array('sf_route' => 'preinscripcion_edit', 'sf_subject' => $preinscripcion));
      }
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }
  public function executeBuscar(sfWebRequest $request){
      $this->buscar = $this->getRequestParameter('buscar');
      $this->identificacion = $this->getRequestParameter('identificacion');
      $this->tipoIdentificacion = $this->getRequestParameter('tipo_identificacion');
      if($this->buscar=='BUSCAR'){
         // echo $this->identificacion.'-'.$this->tipoIdentificacion;exit();
          $result=PreinscripcionTable::getPre($this->tipoIdentificacion,$this->identificacion);
          if($result[0]['id']!=''){
              $this->redirect('/preinscripcion/web/index.php/preinscripcion/planilla?tip='.$this->tipoIdentificacion.'&ide='.$this->identificacion.'');
          }else{
              $this->redirect('/preinscripcion/web/index.php/preinscripcion/new');
          }
      }
      
  }
  public function executePlanilla(sfWebRequest $request){
//      print_r($request);
        $data=PreinscripcionTable::getPre($this->getRequestParameter('tip'),$this->getRequestParameter('ide'));
        $edad = $this->edad($data[0]['fnac']);
        $fecha2 = date("d-m-Y", strtotime($data[0]['fnac']));

        if ($data[0]['tipo_identificacion'] == 'V') {
            $tipo_identificacion = 'CÉDULA';
        }
        if ($data[0]['tipo_identificacion'] == 'E') {
            $tipo_identificacion = 'CÉDULA';
        }
        if ($data[0]['tipo_identificacion'] == 'P') {
            $tipo_identificacion = 'PASAPORTE';
        }
        $config = sfTCPDFPluginConfigHandler::loadConfig();
        $pdf = new sfTCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('SIGE');
        $pdf->SetTitle('Matrícula');
        $pdf->SetSubject('SIGE - Matrícula');
        $pdf->SetKeywords('SIGE, PDF, Matrícula');
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        $pdf->setFontSubsetting(true);
        $pdf->SetFont('dejavusans', '', 14, '', true);
        // Add a page
        // This method has several options, check the source code documentation for more information.
// set style for barcode
        $style = array(
            'border' => 2,
            'vpadding' => 'auto',
            'hpadding' => 'auto',
            'fgcolor' => array(0, 0, 0),
            'bgcolor' => false, //array(255,255,255)
            'module_width' => 1, // width of a single module in points
            'module_height' => 1 // height of a single module in points
        );
        $dia = date('d');
        $mes = date('m');
        $year = date('Y');


        // ---------------------------------------------------------
        $pdf->AddPage();
        $html = '
<style>
    .clase {
        font-family: verdana;
        font-size: 8;
    }
</style>
<table border="1px;" width="100%"cellpadding="0" cellspacing="0" class="clase">
    <tr><td colspan="7" align="center"><img src="http://www.ucs.gob.ve/cintillo/cintillo.jpg"/></td></tr>
    <tr><td colspan="6" width="80%" align="center"><br><br>REPÚBLICA BOLIVARIANA DE VENEZUELA<br> 
            UNIVERSIDAD DE LAS CIENCIAS DE LA SALUD "HUGO CHÁVEZ FRÍAS"<br>
            <b>PLANILLA DE MATRÍCULA ASPIRANTES PNFA 2018<br>
               HOSPITAL GENERAL EL VIGIA - EDO. MERIDA</b><br>
        </td><td width="20%" align="center"><br><br>FOTO<br>de frente<br>con bata</td></tr>
    <tr><td colspan="7" align="center"><b>DATOS PERSONALES</b></td></tr>
    <tr><td>PRIMER APELLIDO:<br>' . $data[0]['papellido'] . '</td><td>SEGUNDO APELLIDO:<br>' . $data[0]['sapellido'] . '</td><td>NOMBRES:<br>' . $data[0]['pnombre'] . ' ' . $data[0]['snombre'] . '</td><td>GÉNERO:' . $data[0]['genero'] . '</td>
        <td>EDAD:<br>' . $edad . '</td><td>FECHA DE NACIMIENTO:<br>' . $fecha2 . '</td><td>ESTADO CIVIL:</td></tr>
    <tr><td colspan="2">NACIONALIDAD: ' . $data[0]['nacionalidad'] . '</td><td colspan="2">N. DE CÉDULA:' . $data[0]['identificacion'] . '</td><td colspan="3">PAÍS DE ORIGEN:' . $data[0]['pais_origen'] . '</td></tr>
    <tr><td colspan="7">DIRECCIÓN: ' . $data[0]['direccion'] . '</td></tr>
    <tr><td colspan="2">ESTADO: ' . $data[0]['estado'] . '</td><td colspan="2">MUNICIPIO: ' . $data[0]['municipio'] . '</td><td colspan="3">PARROQUIA: ' . $data[0]['parroquia'] . '</td></tr>
    <tr><td colspan="2">TELÉFONO:' . $data[0]['telefono'] . '</td><td colspan="3">CORREO:' . $data[0]['correo'] . '</td><td colspan="2">TWITTER:' . $data[0]['twitter'] . '</td></tr>
    <tr><td colspan="7" align="center"><b>DATOS ACADÉMICOS Y PROFESIONALES</b></td></tr>
    <tr><td colspan="2" align="center">TÍTULO</td><td colspan="3" align="center">NOMBRE DE LA UNIVERSIDAD QUE ACREDITÓ</td><td colspan="2" align="center">AÑO DE EGRESO</td></tr>
    <tr><td colspan="2" align="center">' . $data[0]['titulo'] . '</td><td colspan="3"align="center">' . $data[0]['uni_pre'] . '</td><td colspan="2" align="center">' . $data[0]['ano_pre'] . '</td></tr>
    <tr><td colspan="2" align="center">REALIZÓ LA ESPECIALIZACIÓN EN MEDICINA GENERAL INTEGRAL?<br>' . $data[0]['mgi'] . '</td><td colspan="3" align="center">' . $data[0]['uni_mgi'] . '</td><td colspan="2" align="center">' . $data[0]['ano_mgi'] . '</td></tr>
    <tr><td colspan="2" align="center">REALIZÓ OTRA ESPECIALIZACIÓN?<br>' . $data[0]['otra'] .' </td><td colspan="3" align="center">' . $data[0]['uni_otra'] . '</td><td colspan="2" align="center">' . $data[0]['ano_otra'] . '</td></tr>
    <tr><td colspan="7" align="center"><b>PROGRAMA NACIONAL DE FORMACIÓN AVANZADA AL QUE ASPIRA INGRESAR</b></td></tr>
    <tr><td colspan="7" align="center"><b>'.$data[0]['pnfa'].'</b></td></tr>
</table>
<table border="0px;" width="100%"cellpadding="0" cellspacing="0" class="clase">
    <tr><td width="30%" align="center"><br><br><br>_________________________________<br> Firma y Sello<br> Dirección de Control de Estudios<br> Secretaría General</td>
        <td width="40%"></td>
        <td width="30%" align="center"><br><br><br>_________________________________<br> Estudiante</td></tr>
    <tr><td colspan="3"><br><br><p style="justify">NOTA: EL ASPIRANTE DEBE: A) IMPRIMIR DOS (02) EJEMPLARES DE ESTA PLANILLA. UNA DEBE SER ENTREGADA A LA  
    COORDINACIÓN DE DOCENCIA E INVESTIGACIÓN Y EXTENSIÓN DEL HOSPITAL GNRAL EL VIGIA, Y LA OTRA, LA GUARDARÁ COMO CONSTANCIA DE LA  
    FORMALIZACIÓN DE LA MATRÍCULA. B) ESTAR ATENTO A LA CONVOCATORIA PARA OFICIALIZAR EL PROCESO DE MATRÍCULA, QUE IMPLICARÁ LA CONSIGNACIÓN DE RECAUDOS.</p></td></tr>
</table>';
        $pdf->writeHTML($html, true, 0, true, true);
        if ($data[0]['n_ingreso'] == true) {
            $pdf->AddPage();
            $html2 = '<style>
    .clase {
        font-family: verdana;
        font-size: 8;
    }
</style>
<table  border="0px;" width="100%"cellpadding="0" cellspacing="0" class="clase">
    <tr><td><img src="images/cintillo.jpg"/></td></tr>
    <tr><td align="center"><br><br><br><b>CONSTANCIA DE APROBACIÓN</b></td></tr>
    <tr><td align="center"><br><br><b>I CURSO INTRODUCTORIO A LAS CIENCIAS DE LA SALUD 2017</b></td></tr>
    <tr><td><br><br><p style="text-align: justify">Por medio de la presente, se hace constar que el(la) ciudadano(a):' . $data[0]['primer_nombre'] . ' ' . $data[0]['segundo_nombre'] . ' 
            ' . $data[0]['primer_apellido'] . ' ' . $data[0]['segundo_apellido'] . ',  titular de la Cédula de Identidad N° ' . $data[0]['identificacion'] . ' ,  
    cursó y aprobó el I Curso  Introductorio a las Ciencias de la Salud 2017, en el estado: 
    _________________,municipio:_______________________, ASIC:_____________________, obteniendo 
    las siguientes calificaciones:</p> <br><br>
        </td></tr>
    <tr><td>
            <table border="1px;" width="100%"cellpadding="0" cellspacing="0" class="clase">
                <tr><td>EJES DE FORMACIÓN</td><td>UNIDADES CURRICULAES</td><td>NOTA(ESCALA 1-20)</td></tr>
                <tr><td>Comunicacional</td><td>COMUNICACIÓN Y TÉCNICAS DE ESTUDIO PARA EL APRENDIZAJE (CTEA)
</td><td></td></tr>
                <tr><td rowspan="3">Científico Técnico</td><td>BIOLOGÍA (BIO)</td><td></td></tr>
                <tr><td>FÍSICA BÁSICA (FB)</td><td></td></tr>
                <tr><td>QUÍMICA (QUÍ)</td><td></td></tr>
                <tr><td>Razonamiento Lógico Matemático</td><td>MATEMÁTICA BÁSICA (MB)</td><td></td></tr>
                <tr><td rowspan="2">Socio Político</td><td>REALIDAD SOCIOPOLÍTICA Y  PENSAMIENTO LATINOAMERICANO (RSPL)
</td><td></td></tr>
                <tr><td>PROYECTO NACIONAL Y NUEVA  CIUDADANÍA (PNNC)</td><td></td></tr>
                <tr><td >Práctico</td><td>INTRODUCCIÓN AL SISTEMA PÚBLICO NACIONAL DE SALUD (ISPNS) E INTRODUCCIÓN AL CONSULTORIO DE BARRIO ADENTRO (ICBA)</td><td></td></tr>
                <tr><td colspan="2" align="center"><b>CALIFICACIÓN INTEGRAL DEFINITIVA</b></td><td></td></tr>
                <tr><td colspan="3">
                    Observaciones:
                    <br>
                    <br><br><br><br><br>
                    ____________________________  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    ______________________________<br>
                    SECRETARIO DOCENTE
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    COORDINADOR CABES<br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    SELLO<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    FECHA:___/___/____
                        <br><br>
                    </td></tr>
            </table></td></tr>
</table>';
            $pdf->writeHTML($html2, true, 0, true, true);
        }
        $pdf->SetFont('dejavusans', '', 11, '', true);

        $pdf->Output('matricula.pdf', 'I');
        throw new sfStopException();
    }
      public function edad($fecha) {
        $fecha = str_replace("/", "-", $fecha);
        $fecha = date('Y/m/d', strtotime($fecha));
        $hoy = date('Y/m/d');
        $edad = $hoy - $fecha;
        return $edad;
    }
}
