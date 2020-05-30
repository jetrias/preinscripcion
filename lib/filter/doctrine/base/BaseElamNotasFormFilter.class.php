<?php

/**
 * ElamNotas filter form base class.
 *
 * @package    preinscripcion
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseElamNotasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'periodo'      => new sfWidgetFormFilterInput(),
      'pasaporte'    => new sfWidgetFormFilterInput(),
      'carrera'      => new sfWidgetFormFilterInput(),
      'materia'      => new sfWidgetFormFilterInput(),
      'seccion'      => new sfWidgetFormFilterInput(),
      'u_curricular' => new sfWidgetFormFilterInput(),
      'nota'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'periodo'      => new sfValidatorPass(array('required' => false)),
      'pasaporte'    => new sfValidatorPass(array('required' => false)),
      'carrera'      => new sfValidatorPass(array('required' => false)),
      'materia'      => new sfValidatorPass(array('required' => false)),
      'seccion'      => new sfValidatorPass(array('required' => false)),
      'u_curricular' => new sfValidatorPass(array('required' => false)),
      'nota'         => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('elam_notas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ElamNotas';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'periodo'      => 'Text',
      'pasaporte'    => 'Text',
      'carrera'      => 'Text',
      'materia'      => 'Text',
      'seccion'      => 'Text',
      'u_curricular' => 'Text',
      'nota'         => 'Text',
    );
  }
}
