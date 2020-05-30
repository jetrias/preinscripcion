<?php

/**
 * Nuevoingreso2018 form base class.
 *
 * @method Nuevoingreso2018 getObject() Returns the current form's model object
 *
 * @package    preinscripcion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseNuevoingreso2018Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputText(),
      'tipo_identificacion'  => new sfWidgetFormTextarea(),
      'identificacion'       => new sfWidgetFormTextarea(),
      'primer_nombre'        => new sfWidgetFormTextarea(),
      'segundo_nombre'       => new sfWidgetFormTextarea(),
      'primer_apellido'      => new sfWidgetFormTextarea(),
      'segundo_apellido'     => new sfWidgetFormTextarea(),
      'sexo_id'              => new sfWidgetFormInputText(),
      'fecha_nacimiento'     => new sfWidgetFormDate(),
      'pais_origen_id'       => new sfWidgetFormInputText(),
      'estado_id'            => new sfWidgetFormInputText(),
      'municipio_id'         => new sfWidgetFormInputText(),
      'parroquia_id'         => new sfWidgetFormInputText(),
      'direccion'            => new sfWidgetFormTextarea(),
      'punto_referencia'     => new sfWidgetFormTextarea(),
      'asic_estado_id'       => new sfWidgetFormInputText(),
      'asic_municipio_id'    => new sfWidgetFormInputText(),
      'asic_id'              => new sfWidgetFormInputText(),
      'telefono'             => new sfWidgetFormInputText(),
      'telefono_casa'        => new sfWidgetFormInputText(),
      'correo_electronico'   => new sfWidgetFormTextarea(),
      'persona_contacto'     => new sfWidgetFormTextarea(),
      'estado_civil_id'      => new sfWidgetFormInputText(),
      'n_hijos'              => new sfWidgetFormInputText(),
      'ano_curso'            => new sfWidgetFormTextarea(),
      'cohorte'              => new sfWidgetFormTextarea(),
      'etnia_indigena_id'    => new sfWidgetFormInputText(),
      'elam'                 => new sfWidgetFormInputCheckbox(),
      'idmatricula'          => new sfWidgetFormTextarea(),
      'trabaja'              => new sfWidgetFormTextarea(),
      'lugar'                => new sfWidgetFormTextarea(),
      'horario'              => new sfWidgetFormTextarea(),
      'ingresos'             => new sfWidgetFormTextarea(),
      'telefono_trabajo'     => new sfWidgetFormInputText(),
      'centro_poblado_id'    => new sfWidgetFormTextarea(),
      'foto'                 => new sfWidgetFormTextarea(),
      'tipo_empresa'         => new sfWidgetFormTextarea(),
      'estatus'              => new sfWidgetFormTextarea(),
      'banco'                => new sfWidgetFormTextarea(),
      'tipo_cuenta'          => new sfWidgetFormTextarea(),
      'cuenta'               => new sfWidgetFormTextarea(),
      'cta_social'           => new sfWidgetFormInputCheckbox(),
      'cta_personal'         => new sfWidgetFormInputCheckbox(),
      'no_cta'               => new sfWidgetFormInputCheckbox(),
      'n_ingreso'            => new sfWidgetFormInputCheckbox(),
      'opsu'                 => new sfWidgetFormInputCheckbox(),
      'postulado'            => new sfWidgetFormInputCheckbox(),
      'registro'             => new sfWidgetFormDate(),
      'verificado'           => new sfWidgetFormInputCheckbox(),
      'fecha_verificacion'   => new sfWidgetFormDate(),
      'notas'                => new sfWidgetFormTextarea(),
      'pnf'                  => new sfWidgetFormTextarea(),
      'codigo_tlf_id'        => new sfWidgetFormInputText(),
      'codigo_tlf_casa_id'   => new sfWidgetFormInputText(),
      'parentesco'           => new sfWidgetFormTextarea(),
      'codigo_tlf_contacto'  => new sfWidgetFormInputText(),
      'telefono_contacto'    => new sfWidgetFormInputText(),
      'situacion_academica'  => new sfWidgetFormTextarea(),
      'carnet_patria'        => new sfWidgetFormTextarea(),
      'serial_carnet_patria' => new sfWidgetFormTextarea(),
      'dedicacion_laboral'   => new sfWidgetFormTextarea(),
      'lgbt'                 => new sfWidgetFormInputCheckbox(),
      'afrodescendiente'     => new sfWidgetFormInputCheckbox(),
      'asic_parroquia_id'    => new sfWidgetFormInputText(),
      'asic_hab_id'          => new sfWidgetFormInputText(),
      'mod_ingreso_id'       => new sfWidgetFormInputText(),
      'convocatoria'         => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorInteger(array('required' => false)),
      'tipo_identificacion'  => new sfValidatorString(array('required' => false)),
      'identificacion'       => new sfValidatorString(array('required' => false)),
      'primer_nombre'        => new sfValidatorString(array('required' => false)),
      'segundo_nombre'       => new sfValidatorString(array('required' => false)),
      'primer_apellido'      => new sfValidatorString(array('required' => false)),
      'segundo_apellido'     => new sfValidatorString(array('required' => false)),
      'sexo_id'              => new sfValidatorInteger(array('required' => false)),
      'fecha_nacimiento'     => new sfValidatorDate(array('required' => false)),
      'pais_origen_id'       => new sfValidatorInteger(array('required' => false)),
      'estado_id'            => new sfValidatorInteger(array('required' => false)),
      'municipio_id'         => new sfValidatorInteger(array('required' => false)),
      'parroquia_id'         => new sfValidatorInteger(array('required' => false)),
      'direccion'            => new sfValidatorString(array('required' => false)),
      'punto_referencia'     => new sfValidatorString(array('required' => false)),
      'asic_estado_id'       => new sfValidatorInteger(array('required' => false)),
      'asic_municipio_id'    => new sfValidatorInteger(array('required' => false)),
      'asic_id'              => new sfValidatorInteger(array('required' => false)),
      'telefono'             => new sfValidatorNumber(array('required' => false)),
      'telefono_casa'        => new sfValidatorNumber(array('required' => false)),
      'correo_electronico'   => new sfValidatorString(array('required' => false)),
      'persona_contacto'     => new sfValidatorString(array('required' => false)),
      'estado_civil_id'      => new sfValidatorInteger(array('required' => false)),
      'n_hijos'              => new sfValidatorNumber(array('required' => false)),
      'ano_curso'            => new sfValidatorString(array('required' => false)),
      'cohorte'              => new sfValidatorString(array('required' => false)),
      'etnia_indigena_id'    => new sfValidatorInteger(array('required' => false)),
      'elam'                 => new sfValidatorBoolean(array('required' => false)),
      'idmatricula'          => new sfValidatorString(array('required' => false)),
      'trabaja'              => new sfValidatorString(array('required' => false)),
      'lugar'                => new sfValidatorString(array('required' => false)),
      'horario'              => new sfValidatorString(array('required' => false)),
      'ingresos'             => new sfValidatorString(array('required' => false)),
      'telefono_trabajo'     => new sfValidatorNumber(array('required' => false)),
      'centro_poblado_id'    => new sfValidatorString(array('required' => false)),
      'foto'                 => new sfValidatorString(array('required' => false)),
      'tipo_empresa'         => new sfValidatorString(array('required' => false)),
      'estatus'              => new sfValidatorString(array('required' => false)),
      'banco'                => new sfValidatorString(array('required' => false)),
      'tipo_cuenta'          => new sfValidatorString(array('required' => false)),
      'cuenta'               => new sfValidatorString(array('required' => false)),
      'cta_social'           => new sfValidatorBoolean(array('required' => false)),
      'cta_personal'         => new sfValidatorBoolean(array('required' => false)),
      'no_cta'               => new sfValidatorBoolean(array('required' => false)),
      'n_ingreso'            => new sfValidatorBoolean(array('required' => false)),
      'opsu'                 => new sfValidatorBoolean(array('required' => false)),
      'postulado'            => new sfValidatorBoolean(array('required' => false)),
      'registro'             => new sfValidatorDate(array('required' => false)),
      'verificado'           => new sfValidatorBoolean(array('required' => false)),
      'fecha_verificacion'   => new sfValidatorDate(array('required' => false)),
      'notas'                => new sfValidatorString(array('required' => false)),
      'pnf'                  => new sfValidatorString(array('required' => false)),
      'codigo_tlf_id'        => new sfValidatorInteger(array('required' => false)),
      'codigo_tlf_casa_id'   => new sfValidatorInteger(array('required' => false)),
      'parentesco'           => new sfValidatorString(array('required' => false)),
      'codigo_tlf_contacto'  => new sfValidatorInteger(array('required' => false)),
      'telefono_contacto'    => new sfValidatorNumber(array('required' => false)),
      'situacion_academica'  => new sfValidatorString(array('required' => false)),
      'carnet_patria'        => new sfValidatorString(array('required' => false)),
      'serial_carnet_patria' => new sfValidatorString(array('required' => false)),
      'dedicacion_laboral'   => new sfValidatorString(array('required' => false)),
      'lgbt'                 => new sfValidatorBoolean(array('required' => false)),
      'afrodescendiente'     => new sfValidatorBoolean(array('required' => false)),
      'asic_parroquia_id'    => new sfValidatorInteger(array('required' => false)),
      'asic_hab_id'          => new sfValidatorInteger(array('required' => false)),
      'mod_ingreso_id'       => new sfValidatorInteger(array('required' => false)),
      'convocatoria'         => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('nuevoingreso2018[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Nuevoingreso2018';
  }

}
