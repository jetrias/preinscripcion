<?php

/**
 * Electivos filter form base class.
 *
 * @package    preinscripcion
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseElectivosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_alumno'     => new sfWidgetFormFilterInput(),
      'id_malla'      => new sfWidgetFormFilterInput(),
      'id_uc'         => new sfWidgetFormFilterInput(),
      'seccion'       => new sfWidgetFormFilterInput(),
      'id_periodo'    => new sfWidgetFormFilterInput(),
      'fecha_re'      => new sfWidgetFormFilterInput(),
      'hora_re'       => new sfWidgetFormFilterInput(),
      'nota'          => new sfWidgetFormFilterInput(),
      'asistencia'    => new sfWidgetFormFilterInput(),
      'docente'       => new sfWidgetFormFilterInput(),
      'id_tipo_aldea' => new sfWidgetFormFilterInput(),
      'certificacion' => new sfWidgetFormFilterInput(),
      'estado'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_alumno'     => new sfValidatorPass(array('required' => false)),
      'id_malla'      => new sfValidatorPass(array('required' => false)),
      'id_uc'         => new sfValidatorPass(array('required' => false)),
      'seccion'       => new sfValidatorPass(array('required' => false)),
      'id_periodo'    => new sfValidatorPass(array('required' => false)),
      'fecha_re'      => new sfValidatorPass(array('required' => false)),
      'hora_re'       => new sfValidatorPass(array('required' => false)),
      'nota'          => new sfValidatorPass(array('required' => false)),
      'asistencia'    => new sfValidatorPass(array('required' => false)),
      'docente'       => new sfValidatorPass(array('required' => false)),
      'id_tipo_aldea' => new sfValidatorPass(array('required' => false)),
      'certificacion' => new sfValidatorPass(array('required' => false)),
      'estado'        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('electivos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Electivos';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'id_alumno'     => 'Text',
      'id_malla'      => 'Text',
      'id_uc'         => 'Text',
      'seccion'       => 'Text',
      'id_periodo'    => 'Text',
      'fecha_re'      => 'Text',
      'hora_re'       => 'Text',
      'nota'          => 'Text',
      'asistencia'    => 'Text',
      'docente'       => 'Text',
      'id_tipo_aldea' => 'Text',
      'certificacion' => 'Text',
      'estado'        => 'Text',
    );
  }
}
