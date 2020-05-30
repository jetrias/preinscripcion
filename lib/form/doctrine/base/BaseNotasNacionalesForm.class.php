<?php

/**
 * NotasNacionales form base class.
 *
 * @method NotasNacionales getObject() Returns the current form's model object
 *
 * @package    preinscripcion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseNotasNacionalesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'id_alumno'     => new sfWidgetFormTextarea(),
      'id_malla'      => new sfWidgetFormTextarea(),
      'id_uc'         => new sfWidgetFormTextarea(),
      'seccion'       => new sfWidgetFormTextarea(),
      'periodo'       => new sfWidgetFormTextarea(),
      'nota'          => new sfWidgetFormTextarea(),
      'id_estado'     => new sfWidgetFormTextarea(),
      'id_tipo_aldea' => new sfWidgetFormTextarea(),
      'certificacion' => new sfWidgetFormTextarea(),
      'fecha'         => new sfWidgetFormTextarea(),
      'asignatura'    => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'id_alumno'     => new sfValidatorString(array('required' => false)),
      'id_malla'      => new sfValidatorString(array('required' => false)),
      'id_uc'         => new sfValidatorString(array('required' => false)),
      'seccion'       => new sfValidatorString(array('required' => false)),
      'periodo'       => new sfValidatorString(array('required' => false)),
      'nota'          => new sfValidatorString(array('required' => false)),
      'id_estado'     => new sfValidatorString(array('required' => false)),
      'id_tipo_aldea' => new sfValidatorString(array('required' => false)),
      'certificacion' => new sfValidatorString(array('required' => false)),
      'fecha'         => new sfValidatorString(array('required' => false)),
      'asignatura'    => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('notas_nacionales[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'NotasNacionales';
  }

}
