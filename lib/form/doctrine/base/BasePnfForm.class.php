<?php

/**
 * Pnf form base class.
 *
 * @method Pnf getObject() Returns the current form's model object
 *
 * @package    preinscripcion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePnfForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'codigo'      => new sfWidgetFormTextarea(),
      'descripcion' => new sfWidgetFormTextarea(),
      'tipo_pnf'    => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'codigo'      => new sfValidatorString(array('required' => false)),
      'descripcion' => new sfValidatorString(array('required' => false)),
      'tipo_pnf'    => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pnf[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pnf';
  }

}
