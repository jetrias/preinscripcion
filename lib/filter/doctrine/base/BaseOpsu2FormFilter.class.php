<?php

/**
 * Opsu2 filter form base class.
 *
 * @package    preinscripcion
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseOpsu2FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre_universidad' => new sfWidgetFormFilterInput(),
      'nucleo'             => new sfWidgetFormFilterInput(),
      'carrera'            => new sfWidgetFormFilterInput(),
      'id_rusnies'         => new sfWidgetFormFilterInput(),
      'nacionalidad'       => new sfWidgetFormFilterInput(),
      'identificacion'     => new sfWidgetFormFilterInput(),
      'nombres'            => new sfWidgetFormFilterInput(),
      'rama'               => new sfWidgetFormFilterInput(),
      'anio_graduacion'    => new sfWidgetFormFilterInput(),
      'ia'                 => new sfWidgetFormFilterInput(),
      'semestre'           => new sfWidgetFormFilterInput(),
      'telefono'           => new sfWidgetFormFilterInput(),
      'correo'             => new sfWidgetFormFilterInput(),
      'estado_id'          => new sfWidgetFormFilterInput(),
      'pnf_id'             => new sfWidgetFormFilterInput(),
      'transferir'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'nombre_universidad' => new sfValidatorPass(array('required' => false)),
      'nucleo'             => new sfValidatorPass(array('required' => false)),
      'carrera'            => new sfValidatorPass(array('required' => false)),
      'id_rusnies'         => new sfValidatorPass(array('required' => false)),
      'nacionalidad'       => new sfValidatorPass(array('required' => false)),
      'identificacion'     => new sfValidatorPass(array('required' => false)),
      'nombres'            => new sfValidatorPass(array('required' => false)),
      'rama'               => new sfValidatorPass(array('required' => false)),
      'anio_graduacion'    => new sfValidatorPass(array('required' => false)),
      'ia'                 => new sfValidatorPass(array('required' => false)),
      'semestre'           => new sfValidatorPass(array('required' => false)),
      'telefono'           => new sfValidatorPass(array('required' => false)),
      'correo'             => new sfValidatorPass(array('required' => false)),
      'estado_id'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'pnf_id'             => new sfValidatorPass(array('required' => false)),
      'transferir'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('opsu2_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Opsu2';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'nombre_universidad' => 'Text',
      'nucleo'             => 'Text',
      'carrera'            => 'Text',
      'id_rusnies'         => 'Text',
      'nacionalidad'       => 'Text',
      'identificacion'     => 'Text',
      'nombres'            => 'Text',
      'rama'               => 'Text',
      'anio_graduacion'    => 'Text',
      'ia'                 => 'Text',
      'semestre'           => 'Text',
      'telefono'           => 'Text',
      'correo'             => 'Text',
      'estado_id'          => 'Number',
      'pnf_id'             => 'Text',
      'transferir'         => 'Boolean',
    );
  }
}
