<?php

/**
 * Graduados2019 filter form base class.
 *
 * @package    preinscripcion
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseGraduados2019FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cedula' => new sfWidgetFormFilterInput(),
      'univ'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'cedula' => new sfValidatorPass(array('required' => false)),
      'univ'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('graduados2019_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Graduados2019';
  }

  public function getFields()
  {
    return array(
      'id'     => 'Number',
      'cedula' => 'Text',
      'univ'   => 'Text',
    );
  }
}
