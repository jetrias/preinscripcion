<?php

/**
 * NotasNacionales filter form base class.
 *
 * @package    preinscripcion
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseNotasNacionalesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_alumno'     => new sfWidgetFormFilterInput(),
      'id_malla'      => new sfWidgetFormFilterInput(),
      'id_uc'         => new sfWidgetFormFilterInput(),
      'seccion'       => new sfWidgetFormFilterInput(),
      'periodo'       => new sfWidgetFormFilterInput(),
      'nota'          => new sfWidgetFormFilterInput(),
      'id_estado'     => new sfWidgetFormFilterInput(),
      'id_tipo_aldea' => new sfWidgetFormFilterInput(),
      'certificacion' => new sfWidgetFormFilterInput(),
      'fecha'         => new sfWidgetFormFilterInput(),
      'asignatura'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_alumno'     => new sfValidatorPass(array('required' => false)),
      'id_malla'      => new sfValidatorPass(array('required' => false)),
      'id_uc'         => new sfValidatorPass(array('required' => false)),
      'seccion'       => new sfValidatorPass(array('required' => false)),
      'periodo'       => new sfValidatorPass(array('required' => false)),
      'nota'          => new sfValidatorPass(array('required' => false)),
      'id_estado'     => new sfValidatorPass(array('required' => false)),
      'id_tipo_aldea' => new sfValidatorPass(array('required' => false)),
      'certificacion' => new sfValidatorPass(array('required' => false)),
      'fecha'         => new sfValidatorPass(array('required' => false)),
      'asignatura'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('notas_nacionales_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'NotasNacionales';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'id_alumno'     => 'Text',
      'id_malla'      => 'Text',
      'id_uc'         => 'Text',
      'seccion'       => 'Text',
      'periodo'       => 'Text',
      'nota'          => 'Text',
      'id_estado'     => 'Text',
      'id_tipo_aldea' => 'Text',
      'certificacion' => 'Text',
      'fecha'         => 'Text',
      'asignatura'    => 'Text',
    );
  }
}
