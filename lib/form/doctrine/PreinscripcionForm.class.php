<?php

/**
 * Preinscripcion form.
 *
 * @package    preinscripcion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PreinscripcionForm extends BasePreinscripcionForm
{
  public function configure()
  {
      unset($this['otra_especializacion']);
      $years = range(date('Y') - 80, date('Y') - 15);
      $this->widgetSchema['nacionalidad'] = new sfWidgetFormChoice(array(
            'choices' => array('' => 'Seleccione',
                "V" => "V", "E" => "E", "P" => "P")));
      $this->widgetSchema['identificacion'] = new sfWidgetFormInput(array(), array('placeHolder' => ''));
      $this->widgetSchema['pnombre'] = new sfWidgetFormInput(array(), array('placeHolder' => 'Coloca Tu Primer Nombre'));
      $this->widgetSchema['snombre'] = new sfWidgetFormInput(array(), array('placeHolder' => 'Coloca Tu Segundo Nombre'));
      $this->widgetSchema['papellido'] = new sfWidgetFormInput(array(), array('placeHolder' => 'Coloca Tu Primer Apellido'));
      $this->widgetSchema['sapellido'] = new sfWidgetFormInput(array(), array('placeHolder' => 'Coloca Tu Segundo Apellido'));
      $this->widgetSchema['direccion'] = new sfWidgetFormInput(array(), array('placeHolder' => 'Coloca la direccion de tu casa'));
      $this->widgetSchema['correo'] = new sfWidgetFormInput(array(), array('placeHolder' => 'Coloca Tu correo electronico'));
      $this->widgetSchema['telefono'] = new sfWidgetFormInput(array(), array('placeHolder' => 'Coloca Tu número de telefono'));
      $this->widgetSchema['twitter'] = new sfWidgetFormInput(array(), array('placeHolder' => ''));
      $this->widgetSchema['uni_pre'] = new sfWidgetFormInput(array(), array('placeHolder' => 'Coloca la universidad donde cursaste pregrado'));
      $this->widgetSchema['uni_otra'] = new sfWidgetFormInput(array(), array('placeHolder' => ''));
      $this->widgetSchema['ano_otra'] = new sfWidgetFormInput(array(), array('placeHolder' => ''));
      $this->widgetSchema['ano_pre'] = new sfWidgetFormInput(array(), array('placeHolder' => ''));
      $this->widgetSchema['ano_mgi'] = new sfWidgetFormInput(array(), array('placeHolder' => ''));
     
      $this->widgetSchema['mgi'] = new sfWidgetFormChoice(array(
            'choices' => array('' => 'Seleccione',
                "SI" => "SI", "NO" => "NO")));
      $this->widgetSchema['art_8'] = new sfWidgetFormChoice(array(
            'choices' => array('' => 'Seleccione',
                "SI" => "SI", "NO" => "NO")));
      $this->widgetSchema['uni_mgi'] = new sfWidgetFormInput(array(), array('placeHolder' => 'Coloca la universidad donde cursaste MGI'));
      $this->widgetSchema['otra'] = new sfWidgetFormChoice(array(
            'choices' => array('' => 'Seleccione',
                "SI" => "SI", "NO" => "NO")));
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
        $this->widgetSchema->moveField('pnfa_id', 'after', 'twitter');
        $this->widgetSchema->moveField('art_8', 'after', 'pnfa_id');
        $this->widgetSchema->moveField('ano_pre', 'after', 'uni_pre');
        $this->widgetSchema->moveField('ano_mgi', 'after', 'uni_mgi');
        
        $this->validatorSchema['papellido'] = new sfValidatorAnd(array(
                new sfValidatorString(array('min_length' => 2, 'max_length' => 25), array('min_length' => 'Debe ser mayor a 1 caracter.', 'max_length' => 'Debe ser menor de 26 caracteres.')),
                new sfValidatorRegex(array('pattern' => '/^[A-ZÑÁÉÍÓÚ]+$/'), array('invalid' => 'Solo debe colocar letras')),), array(), array('required' => 'Por favor llene el campo.'));
        $this->validatorSchema['sapellido'] = new sfValidatorAnd(array(
                new sfValidatorString(array('min_length' => 2, 'max_length' => 25), array('min_length' => 'Debe ser mayor a 1 caracter.', 'max_length' => 'Debe ser menor de 26 caracteres.')),
                new sfValidatorRegex(array('pattern' => '/^[A-ZÑÁÉÍÓÚ]+$/'), array('invalid' => 'Solo debe colocar letras')),), array(), array('required' => 'Por favor llene el campo.'));
        $this->validatorSchema['pnombre'] = new sfValidatorAnd(array(
                new sfValidatorString(array('min_length' => 2, 'max_length' => 25), array('min_length' => 'Debe ser mayor a 1 caracter.', 'max_length' => 'Debe ser menor de 26 caracteres.')),
                new sfValidatorRegex(array('pattern' => '/^[A-ZÑÁÉÍÓÚ]+$/'), array('invalid' => 'Solo debe colocar letras')),), array(), array('required' => 'Por favor llene el campo.'));
        $this->validatorSchema['snombre'] = new sfValidatorAnd(array(
                new sfValidatorString(array('min_length' => 2, 'max_length' => 25), array('min_length' => 'Debe ser mayor a 1 caracter.', 'max_length' => 'Debe ser menor de 26 caracteres.')),
                new sfValidatorRegex(array('pattern' => '/^[A-ZÑÁÉÍÓÚ]+$/'), array('invalid' => 'Solo debe colocar letras')),), array(), array('required' => 'Por favor llene el campo.'));
        $this->validatorSchema['correo'] = new sfValidatorEmail(array(
                    ), array('required' => 'Por favor coloque su Correo Electronico.'));
        $this->widgetSchema['fnac'] = new sfWidgetFormJQueryDate(array(
            'culture' => 'es',
            'config' => '{changeMonth: true,changeYear: true}',
            'date_widget' => new sfWidgetFormDate(array('format' => '%day% %month% %year%',
                'years' => array_combine($years, $years),))));
        //$this->widgetSchema['fecha'] = new sfWidgetFormJQueryDate(array('culture' => 'es'));
//        $this->validatorSchema['telefono'] = new sfValidatorAnd(array(
////        new sfValidatorInteger(
////            array('min'=> 00000000000,'max' => 99999999999),
////            array('min' => 'Debe contener 11 digitos', 'max' => 'Debe contener 11 digitos')
////        ),
//        new sfValidatorRegex(
//            array('pattern' => '[0-9]'),
//            array('invalid' => 'Solo debe colocar Numeros y Debe contener 11 digitos')
//        ),
//    ), array(), array('required' => 'Por favor coloque su telefono.'));
  }
}
