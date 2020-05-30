<?php

/**
 * Indice filter form base class.
 *
 * @package    preinscripcion
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseIndiceFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'pnf_id'        => new sfWidgetFormFilterInput(),
      'estudiante_id' => new sfWidgetFormFilterInput(),
      'estado_id'     => new sfWidgetFormFilterInput(),
      'trunc'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'pnf_id'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'estudiante_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'estado_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'trunc'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('indice_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Indice';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'pnf_id'        => 'Number',
      'estudiante_id' => 'Number',
      'estado_id'     => 'Number',
      'trunc'         => 'Number',
    );
  }
}
