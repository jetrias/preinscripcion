<?php

/**
 * Pnf filter form base class.
 *
 * @package    preinscripcion
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePnfFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo'      => new sfWidgetFormFilterInput(),
      'descripcion' => new sfWidgetFormFilterInput(),
      'tipo_pnf'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'codigo'      => new sfValidatorPass(array('required' => false)),
      'descripcion' => new sfValidatorPass(array('required' => false)),
      'tipo_pnf'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pnf_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pnf';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'codigo'      => 'Text',
      'descripcion' => 'Text',
      'tipo_pnf'    => 'Text',
    );
  }
}
