<?php

/**
 * Graduados2019 form base class.
 *
 * @method Graduados2019 getObject() Returns the current form's model object
 *
 * @package    preinscripcion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseGraduados2019Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'     => new sfWidgetFormInputHidden(),
      'cedula' => new sfWidgetFormTextarea(),
      'univ'   => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'cedula' => new sfValidatorString(array('required' => false)),
      'univ'   => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('graduados2019[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Graduados2019';
  }

}
