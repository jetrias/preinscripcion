<?php

/**
 * Usuarios2 filter form base class.
 *
 * @package    preinscripcion
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUsuarios2FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'identificacion' => new sfWidgetFormFilterInput(),
      'usuario'        => new sfWidgetFormFilterInput(),
      'clave'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'identificacion' => new sfValidatorPass(array('required' => false)),
      'usuario'        => new sfValidatorPass(array('required' => false)),
      'clave'          => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('usuarios2_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuarios2';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'identificacion' => 'Text',
      'usuario'        => 'Text',
      'clave'          => 'Text',
    );
  }
}
