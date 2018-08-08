<?php

/**
 * PreinscripcionCurso form base class.
 *
 * @method PreinscripcionCurso getObject() Returns the current form's model object
 *
 * @package    preinscripcion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePreinscripcionCursoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'nacionalidad'   => new sfWidgetFormTextarea(),
      'identificacion' => new sfWidgetFormTextarea(),
      'pnombre'        => new sfWidgetFormTextarea(),
      'snombre'        => new sfWidgetFormTextarea(),
      'papellido'      => new sfWidgetFormTextarea(),
      'sapellido'      => new sfWidgetFormTextarea(),
      'genero'         => new sfWidgetFormTextarea(),
      'fnac'           => new sfWidgetFormDate(),
      'pais_origen_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PaisOrigen'), 'add_empty' => true)),
      'estado_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'), 'add_empty' => false)),
      'municipio_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Municipio'), 'add_empty' => true)),
      'parroquia_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Parroquia'), 'add_empty' => true)),
      'direccion'      => new sfWidgetFormTextarea(),
      'telefono'       => new sfWidgetFormTextarea(),
      'tlf_casa'       => new sfWidgetFormTextarea(),
      'tlf_contacto'   => new sfWidgetFormTextarea(),
      'correo'         => new sfWidgetFormTextarea(),
      'twitter'        => new sfWidgetFormTextarea(),
      'seleccionado'   => new sfWidgetFormInputCheckbox(),
      'transferido'    => new sfWidgetFormInputCheckbox(),
      'pnf_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pnf'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nacionalidad'   => new sfValidatorString(),
      'identificacion' => new sfValidatorString(),
      'pnombre'        => new sfValidatorString(),
      'snombre'        => new sfValidatorString(),
      'papellido'      => new sfValidatorString(),
      'sapellido'      => new sfValidatorString(),
      'genero'         => new sfValidatorString(array('required' => false)),
      'fnac'           => new sfValidatorDate(array('required' => false)),
      'pais_origen_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PaisOrigen'), 'required' => false)),
      'estado_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'))),
      'municipio_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Municipio'), 'required' => false)),
      'parroquia_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Parroquia'), 'required' => false)),
      'direccion'      => new sfValidatorString(array('required' => false)),
      'telefono'       => new sfValidatorString(),
      'tlf_casa'       => new sfValidatorString(array('required' => false)),
      'tlf_contacto'   => new sfValidatorString(array('required' => false)),
      'correo'         => new sfValidatorString(array('required' => false)),
      'twitter'        => new sfValidatorString(array('required' => false)),
      'seleccionado'   => new sfValidatorBoolean(array('required' => false)),
      'transferido'    => new sfValidatorBoolean(array('required' => false)),
      'pnf_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Pnf'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('preinscripcion_curso[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PreinscripcionCurso';
  }

}
