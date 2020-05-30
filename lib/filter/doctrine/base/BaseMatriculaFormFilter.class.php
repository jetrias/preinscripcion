<?php

/**
 * Matricula filter form base class.
 *
 * @package    preinscripcion
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMatriculaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipo_id'          => new sfWidgetFormFilterInput(),
      'numero_id'        => new sfWidgetFormFilterInput(),
      'primer_apellido'  => new sfWidgetFormFilterInput(),
      'segundo_apellido' => new sfWidgetFormFilterInput(),
      'nombres'          => new sfWidgetFormFilterInput(),
      'estado'           => new sfWidgetFormFilterInput(),
      'municipio'        => new sfWidgetFormFilterInput(),
      'parroquia'        => new sfWidgetFormFilterInput(),
      'asic'             => new sfWidgetFormFilterInput(),
      'ano_curso'        => new sfWidgetFormFilterInput(),
      'pnf'              => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'tipo_id'          => new sfValidatorPass(array('required' => false)),
      'numero_id'        => new sfValidatorPass(array('required' => false)),
      'primer_apellido'  => new sfValidatorPass(array('required' => false)),
      'segundo_apellido' => new sfValidatorPass(array('required' => false)),
      'nombres'          => new sfValidatorPass(array('required' => false)),
      'estado'           => new sfValidatorPass(array('required' => false)),
      'municipio'        => new sfValidatorPass(array('required' => false)),
      'parroquia'        => new sfValidatorPass(array('required' => false)),
      'asic'             => new sfValidatorPass(array('required' => false)),
      'ano_curso'        => new sfValidatorPass(array('required' => false)),
      'pnf'              => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('matricula_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Matricula';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'tipo_id'          => 'Text',
      'numero_id'        => 'Text',
      'primer_apellido'  => 'Text',
      'segundo_apellido' => 'Text',
      'nombres'          => 'Text',
      'estado'           => 'Text',
      'municipio'        => 'Text',
      'parroquia'        => 'Text',
      'asic'             => 'Text',
      'ano_curso'        => 'Text',
      'pnf'              => 'Text',
    );
  }
}
