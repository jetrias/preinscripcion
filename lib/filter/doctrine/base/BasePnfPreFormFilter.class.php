<?php

/**
 * PnfPre filter form base class.
 *
 * @package    preinscripcion
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePnfPreFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'estado_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'), 'add_empty' => true)),
      'descripcion' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pnf_id'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'estado_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Estado'), 'column' => 'id')),
      'descripcion' => new sfValidatorPass(array('required' => false)),
      'pnf_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('pnf_pre_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PnfPre';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'estado_id'   => 'ForeignKey',
      'descripcion' => 'Text',
      'pnf_id'      => 'Number',
    );
  }
}
