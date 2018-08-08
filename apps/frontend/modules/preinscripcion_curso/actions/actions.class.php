<?php

require_once dirname(__FILE__).'/../lib/preinscripcion_cursoGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/preinscripcion_cursoGeneratorHelper.class.php';

/**
 * preinscripcion_curso actions.
 *
 * @package    preinscripcion
 * @subpackage preinscripcion_curso
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class preinscripcion_cursoActions extends autoPreinscripcion_cursoActions
{
    private $home='/pre/index.php/preinscripcion_curso/buscar';
     public function executeIndex(sfWebRequest $request){
         
         $this->getUser()->setFlash('error', sprintf('Se ha detectado una acción inválida en el sistema!'));
        
         $this->redirect($this->home);
     }
      public function executeEdit(sfWebRequest $request)
  {
    $this->getUser()->setFlash('error', sprintf('Se ha detectado una acción inválida en el sistema!'));
    $this->redirect($this->home);
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
        $this->redirect('@preinscripcion_curso_new');
      }
      else
      {
        $this->getUser()->setFlash('notice', $notice);
        $this->redirect('/pre/index.php/preinscripcion_curso/planilla?tip='. $this->form->getValue('nacionalidad').'&ide='.$nombre = $this->form->getValue('identificacion').'');
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
          $result=  PreinscripcionCursoTable::getPre($this->tipoIdentificacion,$this->identificacion);
          if($result[0]['id']!=''){
              $this->redirect('/pre/index.php/preinscripcion_curso/planilla?tip='.$this->tipoIdentificacion.'&ide='.$this->identificacion.'');
          }else{
              $this->redirect('/pre/index.php/preinscripcion_curso/new');
          }
      }
      
  }
  public function executePlanilla(sfWebRequest $request){
//      print_r($request);
        $data=PreinscripcionCursoTable::getPre($this->getRequestParameter('tip'),$this->getRequestParameter('ide'));
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
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP-15, PDF_MARGIN_RIGHT);
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM-15);
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
<table border="1px;" width="100%"cellpadding="5" cellspacing="2" class="clase">
    <tr><td align="center" colspan="3"></td></tr>
    <tr><td colspan="2" width="80%" align="center"><br><br><br><br>REPÚBLICA BOLIVARIANA DE VENEZUELA<br>
            UNIVERSIDAD DE LAS CIENCIAS DE LA SALUD "HUGO CHÁVEZ FRÍAS"<br>
            <b>PLANILLA DE PREINSCRIPCIÓN ASPIRANTES PNF 2018</b><br><br><br>    
</td><td width="20%" align="center"><br><br><br><br><br>FOTO<br>de frente<br><br><br></td></tr>
<tr><td align="center" colspan="3"><b>DATOS PERSONALES</b></td></tr>
<tr bgcolor="#CCCCCC"><td>Nombres: '.$data[0]['pnombre'].' '.$data[0]['snombre'].'</td><td>Apellidos: '.$data[0]['papellido'].' '.$data[0]['sapellido'].'</td><td>Género: '.$data[0]['genero'].'</td></tr>
<tr><td>Nacionalidad: '.$data[0]['nacionalidad'].'</td><td>Cédula:'.$data[0]['identificacion'].'</td><td>Edad: '.$edad.'</td></tr>
<tr bgcolor="#CCCCCC"><td colspan="3">Programa Nacional de Formación al que aspira ingresar: <b>'.$data[0]['pnf'].'</b></td></tr>    
<tr><td>Teléfono: '.$data[0]['telefono'].'</td><td>Correo:'.$data[0]['correo'].'</td><td>Pais de Origen: '.$data[0]['pais_origen'].'</td></tr>      
<tr bgcolor="#CCCCCC"><td>ESTADO: '.$data[0]['estado'].'</td><td>MUNICIPIO: '.$data[0]['municipio'].'</td><td>PARROQUIA: '.$data[0]['parroquia'].'</td></tr>
<tr><td colspan="3">Dirección: '.$data[0]['direccion'].'</td></tr></table>
<table border="0px;" width="100%"cellpadding="0" cellspacing="0" class="clase">
    <tr><td width="30%" align="center"><br><br><br>_________________________________<br> Firma y Sello<br> Dirección de Control de Estudios<br> Secretaría General</td>
        <td width="40%"></td>
        <td width="30%" align="center"><br><br><br>_________________________________<br> Estudiante</td></tr>
    <tr><td colspan="3"><br><br><p style="justify"></p></td></tr>
</table>    
<del>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="12">cortar por esta línea</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</del><br><br><br>
<table border="1px;" width="100%"cellpadding="5" cellspacing="2" class="clase">
    <tr><td align="center" colspan="3"></td></tr>
    <tr><td colspan="2" width="80%" align="center"><br><br><br><br>REPÚBLICA BOLIVARIANA DE VENEZUELA<br>
            UNIVERSIDAD DE LAS CIENCIAS DE LA SALUD "HUGO CHÁVEZ FRÍAS"<br>
            <b>PLANILLA DE PREINSCRIPCIÓN ASPIRANTES PNF 2018</b><br><br><br>    
</td><td width="20%" align="center"><br><br><br><br><br>FOTO<br>de frente<br><br><br></td></tr>
<tr><td align="center" colspan="3"><b>DATOS PERSONALES</b></td></tr>
<tr bgcolor="#CCCCCC"><td>Nombres: '.$data[0]['pnombre'].' '.$data[0]['snombre'].'</td><td>Apellidos: '.$data[0]['papellido'].' '.$data[0]['sapellido'].'</td><td>Género: '.$data[0]['genero'].'</td></tr>
<tr><td>Nacionalidad: '.$data[0]['nacionalidad'].'</td><td>Cédula:'.$data[0]['identificacion'].'</td><td>Edad: '.$edad.'</td></tr>
<tr bgcolor="#CCCCCC"><td colspan="3">Programa Nacional de Formación al que aspira ingresar: <b>'.$data[0]['pnf'].'</b></td></tr>    
<tr><td>Teléfono: '.$data[0]['telefono'].'</td><td>Correo:'.$data[0]['correo'].'</td><td>Pais de Origen: '.$data[0]['pais_origen'].'</td></tr>      
<tr bgcolor="#CCCCCC"><td>ESTADO: '.$data[0]['estado'].'</td><td>MUNICIPIO: '.$data[0]['municipio'].'</td><td>PARROQUIA: '.$data[0]['parroquia'].'</td></tr>
<tr><td colspan="3">Dirección: '.$data[0]['direccion'].'</td></tr></table>
<table border="0px;" width="100%"cellpadding="0" cellspacing="0" class="clase">
    <tr><td width="30%" align="center"><br><br><br>_________________________________<br> Firma y Sello<br> Dirección de Control de Estudios<br> Secretaría General</td>
        <td width="40%"></td>
        <td width="30%" align="center"><br><br><br>_________________________________<br> Estudiante</td></tr>
    <tr><td colspan="3"><br><br><p style="justify"></p></td></tr>
</table>        
';
        //<img src="http://www.ucs.gob.ve/cintillo/cintillo.jpg"/>
        $pdf->writeHTML($html, true, 0, true, true);
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
