<?php

/**
 * Parroquia filter form base class.
 *
 * @package    preinscripcion
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseParroquiaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'descripcion'      => new sfWidgetFormFilterInput(),
      'municipio_id'     => new sfWidgetFormFilterInput(),
      'estado_codigo'    => new sfWidgetFormFilterInput(),
      'municipio_codigo' => new sfWidgetFormFilterInput(),
      'parroquia_codigo' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'descripcion'      => new sfValidatorPass(array('required' => false)),
      'municipio_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'estado_codigo'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'municipio_codigo' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'parroquia_codigo' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('parroquia_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Parroquia';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'descripcion'      => 'Text',
      'municipio_id'     => 'Number',
      'estado_codigo'    => 'Number',
      'municipio_codigo' => 'Number',
      'parroquia_codigo' => 'Number',
    );
  }
}
