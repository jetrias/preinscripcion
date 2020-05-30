<?php

/**
 * ElamNotas form base class.
 *
 * @method ElamNotas getObject() Returns the current form's model object
 *
 * @package    preinscripcion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseElamNotasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'periodo'      => new sfWidgetFormTextarea(),
      'pasaporte'    => new sfWidgetFormTextarea(),
      'carrera'      => new sfWidgetFormTextarea(),
      'materia'      => new sfWidgetFormTextarea(),
      'seccion'      => new sfWidgetFormTextarea(),
      'u_curricular' => new sfWidgetFormTextarea(),
      'nota'         => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'periodo'      => new sfValidatorString(array('required' => false)),
      'pasaporte'    => new sfValidatorString(array('required' => false)),
      'carrera'      => new sfValidatorString(array('required' => false)),
      'materia'      => new sfValidatorString(array('required' => false)),
      'seccion'      => new sfValidatorString(array('required' => false)),
      'u_curricular' => new sfValidatorString(array('required' => false)),
      'nota'         => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('elam_notas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ElamNotas';
  }

}
