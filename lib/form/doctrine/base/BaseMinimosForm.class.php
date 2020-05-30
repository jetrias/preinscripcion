<?php

/**
 * Minimos form base class.
 *
 * @method Minimos getObject() Returns the current form's model object
 *
 * @package    preinscripcion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMinimosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'cedula'         => new sfWidgetFormTextarea(),
      'nombre'         => new sfWidgetFormTextarea(),
      'apellido1'      => new sfWidgetFormTextarea(),
      'apellido2'      => new sfWidgetFormTextarea(),
      'sexo'           => new sfWidgetFormTextarea(),
      'estado'         => new sfWidgetFormTextarea(),
      'municipio'      => new sfWidgetFormTextarea(),
      'parroquia'      => new sfWidgetFormTextarea(),
      'asic'           => new sfWidgetFormTextarea(),
      'n_docente'      => new sfWidgetFormTextarea(),
      'f_nac'          => new sfWidgetFormTextarea(),
      'tipo_identidad' => new sfWidgetFormTextarea(),
      'pasaporte'      => new sfWidgetFormTextarea(),
      'nacionalidad'   => new sfWidgetFormTextarea(),
      'pais_origen'    => new sfWidgetFormTextarea(),
      'direccion'      => new sfWidgetFormTextarea(),
      'localiz'        => new sfWidgetFormTextarea(),
      'telefono'       => new sfWidgetFormTextarea(),
      'correo'         => new sfWidgetFormTextarea(),
      'sit_esc'        => new sfWidgetFormTextarea(),
      'curso'          => new sfWidgetFormTextarea(),
      'cohorte'        => new sfWidgetFormTextarea(),
      'matricula'      => new sfWidgetFormTextarea(),
      'programa'       => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'cedula'         => new sfValidatorString(array('required' => false)),
      'nombre'         => new sfValidatorString(array('required' => false)),
      'apellido1'      => new sfValidatorString(array('required' => false)),
      'apellido2'      => new sfValidatorString(array('required' => false)),
      'sexo'           => new sfValidatorString(array('required' => false)),
      'estado'         => new sfValidatorString(array('required' => false)),
      'municipio'      => new sfValidatorString(array('required' => false)),
      'parroquia'      => new sfValidatorString(array('required' => false)),
      'asic'           => new sfValidatorString(array('required' => false)),
      'n_docente'      => new sfValidatorString(array('required' => false)),
      'f_nac'          => new sfValidatorString(array('required' => false)),
      'tipo_identidad' => new sfValidatorString(array('required' => false)),
      'pasaporte'      => new sfValidatorString(array('required' => false)),
      'nacionalidad'   => new sfValidatorString(array('required' => false)),
      'pais_origen'    => new sfValidatorString(array('required' => false)),
      'direccion'      => new sfValidatorString(array('required' => false)),
      'localiz'        => new sfValidatorString(array('required' => false)),
      'telefono'       => new sfValidatorString(array('required' => false)),
      'correo'         => new sfValidatorString(array('required' => false)),
      'sit_esc'        => new sfValidatorString(array('required' => false)),
      'curso'          => new sfValidatorString(array('required' => false)),
      'cohorte'        => new sfValidatorString(array('required' => false)),
      'matricula'      => new sfValidatorString(array('required' => false)),
      'programa'       => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('minimos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Minimos';
  }

}
