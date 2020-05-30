<?php

/**
 * Graduandos8 form base class.
 *
 * @method Graduandos8 getObject() Returns the current form's model object
 *
 * @package    preinscripcion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseGraduandos8Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'        => new sfWidgetFormInputHidden(),
      'n'         => new sfWidgetFormTextarea(),
      'tipo_doc'  => new sfWidgetFormTextarea(),
      'doc_iden'  => new sfWidgetFormTextarea(),
      'ape1'      => new sfWidgetFormTextarea(),
      'ape2'      => new sfWidgetFormTextarea(),
      'nombres'   => new sfWidgetFormTextarea(),
      'gene'      => new sfWidgetFormTextarea(),
      'pais_o'    => new sfWidgetFormTextarea(),
      'estado'    => new sfWidgetFormTextarea(),
      'municipio' => new sfWidgetFormTextarea(),
      'parr'      => new sfWidgetFormTextarea(),
      'asic'      => new sfWidgetFormTextarea(),
      'cohorte'   => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'n'         => new sfValidatorString(array('required' => false)),
      'tipo_doc'  => new sfValidatorString(array('required' => false)),
      'doc_iden'  => new sfValidatorString(array('required' => false)),
      'ape1'      => new sfValidatorString(array('required' => false)),
      'ape2'      => new sfValidatorString(array('required' => false)),
      'nombres'   => new sfValidatorString(array('required' => false)),
      'gene'      => new sfValidatorString(array('required' => false)),
      'pais_o'    => new sfValidatorString(array('required' => false)),
      'estado'    => new sfValidatorString(array('required' => false)),
      'municipio' => new sfValidatorString(array('required' => false)),
      'parr'      => new sfValidatorString(array('required' => false)),
      'asic'      => new sfValidatorString(array('required' => false)),
      'cohorte'   => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('graduandos8[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Graduandos8';
  }

}
