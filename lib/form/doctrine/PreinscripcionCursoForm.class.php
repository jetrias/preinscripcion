<?php

/**
 * PreinscripcionCurso form.
 *
 * @package    preinscripcion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PreinscripcionCursoForm extends BasePreinscripcionCursoForm
{
  public function configure()
  {
      unset($this['seleccionado'],$this['transferido']);
            $years = range(date('Y') - 80, date('Y') - 15);
      $this->widgetSchema['nacionalidad'] = new sfWidgetFormChoice(array(
            'choices' => array('' => 'Seleccione',
                "V" => "V", "E" => "E", "P" => "P")));
      $this->widgetSchema['fnac'] = new sfWidgetFormJQueryDate(array(
            'culture' => 'es',
            'config' => '{changeMonth: true,changeYear: true}',
            'date_widget' => new sfWidgetFormDate(array('format' => '%day% %month% %year%',
                'years' => array_combine($years, $years),))));
      $this->widgetSchema['identificacion'] = new sfWidgetFormInput(array(), array('placeHolder' => 'Coloca el número de identificación'));
      $this->widgetSchema['pnombre'] = new sfWidgetFormInput(array(), array('placeHolder' => 'Coloca Tu Primer Nombre'));
      $this->widgetSchema['snombre'] = new sfWidgetFormInput(array(), array('placeHolder' => 'Coloca Tu Segundo Nombre'));
      $this->widgetSchema['papellido'] = new sfWidgetFormInput(array(), array('placeHolder' => 'Coloca Tu Primer Apellido'));
      $this->widgetSchema['sapellido'] = new sfWidgetFormInput(array(), array('placeHolder' => 'Coloca Tu Segundo Apellido'));
      $this->widgetSchema['direccion'] = new sfWidgetFormInput(array(), array('placeHolder' => 'Coloca la direccion de tu casa'));
      $this->widgetSchema['correo'] = new sfWidgetFormInput(array(), array('placeHolder' => 'Coloca Tu correo electronico'));
      $this->widgetSchema['telefono'] = new sfWidgetFormInput(array(), array('placeHolder' => 'Coloca Tu número de telefono'));
      $this->widgetSchema['tlf_casa'] = new sfWidgetFormInput(array(), array('placeHolder' => 'Coloca el número de telefono de tu casa'));
      $this->widgetSchema['tlf_contacto'] = new sfWidgetFormInput(array(), array('placeHolder' => 'Coloca el número de telefono de la persona contacto'));
      $this->widgetSchema['twitter'] = new sfWidgetFormInput(array(), array('placeHolder' => ''));
      $this->widgetSchema['genero'] = new sfWidgetFormChoice(array(
            'choices' => array('' => 'Seleccione',
                "F" => "F", "M" => "M")));
      $this->widgetSchema['pais_origen_id'] = new sfWidgetFormDoctrineChoice(array(
            /* 'multiple' => true, */
            'model' => 'paisOrigen',
            'order_by' => '2',
            'add_empty' => true));
        $this->widgetSchema['estado_id'] = new sfWidgetFormDoctrineChoice(array(
            'model' => 'Estado',
            'table_method'=>'getEstadoDis',
            'add_empty' => 'Seleccione estado'));
        $this->widgetSchema['municipio_id'] = new sfWidgetFormDoctrineDependentSelect(array(
            'model' => 'Municipio',
            'depends' => 'Estado',
            'add_empty' => 'Seleccione municipio',
//            'ajax' => true,
        ));
        $this->widgetSchema['parroquia_id'] = new sfWidgetFormDoctrineDependentSelect(array(
            'model' => 'Parroquia',
            'depends' => 'Municipio',
            'add_empty' => 'Seleccione parroquia',
//            'ajax' => true,
            ));
//        $this->widgetSchema['pnf_id'] = new sfWidgetFormDoctrineChoice(array(
//                'model' => 'pnf',
//                'add_empty' => 'Seleccione'));
        $this->widgetSchema['pnf_id'] = new sfWidgetFormDoctrineChoice(array(
                 'model'     => 'pnf',
                 'table_method'=>'getPnf',
                 'add_empty' => 'Seleccione',
));
  }
}
