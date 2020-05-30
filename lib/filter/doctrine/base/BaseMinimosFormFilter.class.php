<?php

/**
 * Minimos filter form base class.
 *
 * @package    preinscripcion
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMinimosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cedula'         => new sfWidgetFormFilterInput(),
      'nombre'         => new sfWidgetFormFilterInput(),
      'apellido1'      => new sfWidgetFormFilterInput(),
      'apellido2'      => new sfWidgetFormFilterInput(),
      'sexo'           => new sfWidgetFormFilterInput(),
      'estado'         => new sfWidgetFormFilterInput(),
      'municipio'      => new sfWidgetFormFilterInput(),
      'parroquia'      => new sfWidgetFormFilterInput(),
      'asic'           => new sfWidgetFormFilterInput(),
      'n_docente'      => new sfWidgetFormFilterInput(),
      'f_nac'          => new sfWidgetFormFilterInput(),
      'tipo_identidad' => new sfWidgetFormFilterInput(),
      'pasaporte'      => new sfWidgetFormFilterInput(),
      'nacionalidad'   => new sfWidgetFormFilterInput(),
      'pais_origen'    => new sfWidgetFormFilterInput(),
      'direccion'      => new sfWidgetFormFilterInput(),
      'localiz'        => new sfWidgetFormFilterInput(),
      'telefono'       => new sfWidgetFormFilterInput(),
      'correo'         => new sfWidgetFormFilterInput(),
      'sit_esc'        => new sfWidgetFormFilterInput(),
      'curso'          => new sfWidgetFormFilterInput(),
      'cohorte'        => new sfWidgetFormFilterInput(),
      'matricula'      => new sfWidgetFormFilterInput(),
      'programa'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'cedula'         => new sfValidatorPass(array('required' => false)),
      'nombre'         => new sfValidatorPass(array('required' => false)),
      'apellido1'      => new sfValidatorPass(array('required' => false)),
      'apellido2'      => new sfValidatorPass(array('required' => false)),
      'sexo'           => new sfValidatorPass(array('required' => false)),
      'estado'         => new sfValidatorPass(array('required' => false)),
      'municipio'      => new sfValidatorPass(array('required' => false)),
      'parroquia'      => new sfValidatorPass(array('required' => false)),
      'asic'           => new sfValidatorPass(array('required' => false)),
      'n_docente'      => new sfValidatorPass(array('required' => false)),
      'f_nac'          => new sfValidatorPass(array('required' => false)),
      'tipo_identidad' => new sfValidatorPass(array('required' => false)),
      'pasaporte'      => new sfValidatorPass(array('required' => false)),
      'nacionalidad'   => new sfValidatorPass(array('required' => false)),
      'pais_origen'    => new sfValidatorPass(array('required' => false)),
      'direccion'      => new sfValidatorPass(array('required' => false)),
      'localiz'        => new sfValidatorPass(array('required' => false)),
      'telefono'       => new sfValidatorPass(array('required' => false)),
      'correo'         => new sfValidatorPass(array('required' => false)),
      'sit_esc'        => new sfValidatorPass(array('required' => false)),
      'curso'          => new sfValidatorPass(array('required' => false)),
      'cohorte'        => new sfValidatorPass(array('required' => false)),
      'matricula'      => new sfValidatorPass(array('required' => false)),
      'programa'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('minimos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Minimos';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'cedula'         => 'Text',
      'nombre'         => 'Text',
      'apellido1'      => 'Text',
      'apellido2'      => 'Text',
      'sexo'           => 'Text',
      'estado'         => 'Text',
      'municipio'      => 'Text',
      'parroquia'      => 'Text',
      'asic'           => 'Text',
      'n_docente'      => 'Text',
      'f_nac'          => 'Text',
      'tipo_identidad' => 'Text',
      'pasaporte'      => 'Text',
      'nacionalidad'   => 'Text',
      'pais_origen'    => 'Text',
      'direccion'      => 'Text',
      'localiz'        => 'Text',
      'telefono'       => 'Text',
      'correo'         => 'Text',
      'sit_esc'        => 'Text',
      'curso'          => 'Text',
      'cohorte'        => 'Text',
      'matricula'      => 'Text',
      'programa'       => 'Text',
    );
  }
}
