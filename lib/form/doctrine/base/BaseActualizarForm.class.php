<?php

/**
 * Actualizar form base class.
 *
 * @method Actualizar getObject() Returns the current form's model object
 *
 * @package    preinscripcion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseActualizarForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputText(),
      'tipo'       => new sfWidgetFormTextarea(),
      'identidad'  => new sfWidgetFormTextarea(),
      'nombre_1'   => new sfWidgetFormTextarea(),
      'apellido_1' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorInteger(),
      'tipo'       => new sfValidatorString(array('required' => false)),
      'identidad'  => new sfValidatorString(array('required' => false)),
      'nombre_1'   => new sfValidatorString(array('required' => false)),
      'apellido_1' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('actualizar[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Actualizar';
  }

}
