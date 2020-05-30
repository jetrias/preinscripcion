<?php

/**
 * Indice form base class.
 *
 * @method Indice getObject() Returns the current form's model object
 *
 * @package    preinscripcion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseIndiceForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'pnf_id'        => new sfWidgetFormInputText(),
      'estudiante_id' => new sfWidgetFormInputText(),
      'estado_id'     => new sfWidgetFormInputText(),
      'trunc'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'pnf_id'        => new sfValidatorInteger(array('required' => false)),
      'estudiante_id' => new sfValidatorInteger(array('required' => false)),
      'estado_id'     => new sfValidatorInteger(array('required' => false)),
      'trunc'         => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('indice[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Indice';
  }

}
