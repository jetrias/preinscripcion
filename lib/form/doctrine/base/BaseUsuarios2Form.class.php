<?php

/**
 * Usuarios2 form base class.
 *
 * @method Usuarios2 getObject() Returns the current form's model object
 *
 * @package    preinscripcion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUsuarios2Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'identificacion' => new sfWidgetFormTextarea(),
      'usuario'        => new sfWidgetFormTextarea(),
      'clave'          => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'identificacion' => new sfValidatorString(array('required' => false)),
      'usuario'        => new sfValidatorString(array('required' => false)),
      'clave'          => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('usuarios2[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuarios2';
  }

}
