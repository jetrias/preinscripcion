<?php

/**
 * PreinscripcionCurso filter form base class.
 *
 * @package    preinscripcion
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePreinscripcionCursoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nacionalidad'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'identificacion' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pnombre'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'snombre'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'papellido'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sapellido'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'genero'         => new sfWidgetFormFilterInput(),
      'fnac'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'pais_origen_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PaisOrigen'), 'add_empty' => true)),
      'estado_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'), 'add_empty' => true)),
      'municipio_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Municipio'), 'add_empty' => true)),
      'parroquia_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Parroquia'), 'add_empty' => true)),
      'direccion'      => new sfWidgetFormFilterInput(),
      'telefono'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tlf_casa'       => new sfWidgetFormFilterInput(),
      'tlf_contacto'   => new sfWidgetFormFilterInput(),
      'correo'         => new sfWidgetFormFilterInput(),
      'twitter'        => new sfWidgetFormFilterInput(),
      'seleccionado'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'transferido'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'pnf_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pnf'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nacionalidad'   => new sfValidatorPass(array('required' => false)),
      'identificacion' => new sfValidatorPass(array('required' => false)),
      'pnombre'        => new sfValidatorPass(array('required' => false)),
      'snombre'        => new sfValidatorPass(array('required' => false)),
      'papellido'      => new sfValidatorPass(array('required' => false)),
      'sapellido'      => new sfValidatorPass(array('required' => false)),
      'genero'         => new sfValidatorPass(array('required' => false)),
      'fnac'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'pais_origen_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('PaisOrigen'), 'column' => 'id')),
      'estado_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Estado'), 'column' => 'id')),
      'municipio_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Municipio'), 'column' => 'id')),
      'parroquia_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Parroquia'), 'column' => 'id')),
      'direccion'      => new sfValidatorPass(array('required' => false)),
      'telefono'       => new sfValidatorPass(array('required' => false)),
      'tlf_casa'       => new sfValidatorPass(array('required' => false)),
      'tlf_contacto'   => new sfValidatorPass(array('required' => false)),
      'correo'         => new sfValidatorPass(array('required' => false)),
      'twitter'        => new sfValidatorPass(array('required' => false)),
      'seleccionado'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'transferido'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'pnf_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Pnf'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('preinscripcion_curso_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PreinscripcionCurso';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'nacionalidad'   => 'Text',
      'identificacion' => 'Text',
      'pnombre'        => 'Text',
      'snombre'        => 'Text',
      'papellido'      => 'Text',
      'sapellido'      => 'Text',
      'genero'         => 'Text',
      'fnac'           => 'Date',
      'pais_origen_id' => 'ForeignKey',
      'estado_id'      => 'ForeignKey',
      'municipio_id'   => 'ForeignKey',
      'parroquia_id'   => 'ForeignKey',
      'direccion'      => 'Text',
      'telefono'       => 'Text',
      'tlf_casa'       => 'Text',
      'tlf_contacto'   => 'Text',
      'correo'         => 'Text',
      'twitter'        => 'Text',
      'seleccionado'   => 'Boolean',
      'transferido'    => 'Boolean',
      'pnf_id'         => 'ForeignKey',
    );
  }
}
