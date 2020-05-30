<?php

/**
 * Actualizar filter form base class.
 *
 * @package    preinscripcion
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseActualizarFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo'       => new sfWidgetFormFilterInput(),
      'identidad'  => new sfWidgetFormFilterInput(),
      'nombre_1'   => new sfWidgetFormFilterInput(),
      'apellido_1' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tipo'       => new sfValidatorPass(array('required' => false)),
      'identidad'  => new sfValidatorPass(array('required' => false)),
      'nombre_1'   => new sfValidatorPass(array('required' => false)),
      'apellido_1' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('actualizar_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Actualizar';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'tipo'       => 'Text',
      'identidad'  => 'Text',
      'nombre_1'   => 'Text',
      'apellido_1' => 'Text',
    );
  }
}
