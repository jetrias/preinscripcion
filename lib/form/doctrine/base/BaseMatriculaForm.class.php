<?php

/**
 * Matricula form base class.
 *
 * @method Matricula getObject() Returns the current form's model object
 *
 * @package    preinscripcion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMatriculaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'tipo_id'          => new sfWidgetFormTextarea(),
      'numero_id'        => new sfWidgetFormTextarea(),
      'primer_apellido'  => new sfWidgetFormTextarea(),
      'segundo_apellido' => new sfWidgetFormTextarea(),
      'nombres'          => new sfWidgetFormTextarea(),
      'estado'           => new sfWidgetFormTextarea(),
      'municipio'        => new sfWidgetFormTextarea(),
      'parroquia'        => new sfWidgetFormTextarea(),
      'asic'             => new sfWidgetFormTextarea(),
      'ano_curso'        => new sfWidgetFormTextarea(),
      'pnf'              => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'tipo_id'          => new sfValidatorString(array('required' => false)),
      'numero_id'        => new sfValidatorString(array('required' => false)),
      'primer_apellido'  => new sfValidatorString(array('required' => false)),
      'segundo_apellido' => new sfValidatorString(array('required' => false)),
      'nombres'          => new sfValidatorString(array('required' => false)),
      'estado'           => new sfValidatorString(array('required' => false)),
      'municipio'        => new sfValidatorString(array('required' => false)),
      'parroquia'        => new sfValidatorString(array('required' => false)),
      'asic'             => new sfValidatorString(array('required' => false)),
      'ano_curso'        => new sfValidatorString(array('required' => false)),
      'pnf'              => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('matricula[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Matricula';
  }

}
