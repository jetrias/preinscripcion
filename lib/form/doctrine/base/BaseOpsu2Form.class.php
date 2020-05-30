<?php

/**
 * Opsu2 form base class.
 *
 * @method Opsu2 getObject() Returns the current form's model object
 *
 * @package    preinscripcion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseOpsu2Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'nombre_universidad' => new sfWidgetFormTextarea(),
      'nucleo'             => new sfWidgetFormTextarea(),
      'carrera'            => new sfWidgetFormTextarea(),
      'id_rusnies'         => new sfWidgetFormTextarea(),
      'nacionalidad'       => new sfWidgetFormTextarea(),
      'identificacion'     => new sfWidgetFormTextarea(),
      'nombres'            => new sfWidgetFormTextarea(),
      'rama'               => new sfWidgetFormTextarea(),
      'anio_graduacion'    => new sfWidgetFormTextarea(),
      'ia'                 => new sfWidgetFormTextarea(),
      'semestre'           => new sfWidgetFormTextarea(),
      'telefono'           => new sfWidgetFormTextarea(),
      'correo'             => new sfWidgetFormTextarea(),
      'estado_id'          => new sfWidgetFormInputText(),
      'pnf_id'             => new sfWidgetFormTextarea(),
      'transferir'         => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre_universidad' => new sfValidatorString(array('required' => false)),
      'nucleo'             => new sfValidatorString(array('required' => false)),
      'carrera'            => new sfValidatorString(array('required' => false)),
      'id_rusnies'         => new sfValidatorString(array('required' => false)),
      'nacionalidad'       => new sfValidatorString(array('required' => false)),
      'identificacion'     => new sfValidatorString(array('required' => false)),
      'nombres'            => new sfValidatorString(array('required' => false)),
      'rama'               => new sfValidatorString(array('required' => false)),
      'anio_graduacion'    => new sfValidatorString(array('required' => false)),
      'ia'                 => new sfValidatorString(array('required' => false)),
      'semestre'           => new sfValidatorString(array('required' => false)),
      'telefono'           => new sfValidatorString(array('required' => false)),
      'correo'             => new sfValidatorString(array('required' => false)),
      'estado_id'          => new sfValidatorInteger(array('required' => false)),
      'pnf_id'             => new sfValidatorString(array('required' => false)),
      'transferir'         => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('opsu2[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Opsu2';
  }

}
