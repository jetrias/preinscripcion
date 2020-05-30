<?php

/**
 * Mmcii form base class.
 *
 * @method Mmcii getObject() Returns the current form's model object
 *
 * @package    preinscripcion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMmciiForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                            => new sfWidgetFormInputHidden(),
      'idmatricula'                   => new sfWidgetFormTextarea(),
      'ano_en_curso'                  => new sfWidgetFormTextarea(),
      'estamunpar'                    => new sfWidgetFormTextarea(),
      'asic'                          => new sfWidgetFormTextarea(),
      'id_nucleo_docente'             => new sfWidgetFormTextarea(),
      'nombre'                        => new sfWidgetFormTextarea(),
      'apellido1'                     => new sfWidgetFormTextarea(),
      'apellido2'                     => new sfWidgetFormTextarea(),
      'sexo'                          => new sfWidgetFormTextarea(),
      'fecha_de_nacimiento'           => new sfWidgetFormTextarea(),
      'tipoidentidad'                 => new sfWidgetFormTextarea(),
      'cedula_de_identidad'           => new sfWidgetFormTextarea(),
      'numero_de_pasaporte'           => new sfWidgetFormTextarea(),
      'nacionalidad'                  => new sfWidgetFormTextarea(),
      'pais_de_origen'                => new sfWidgetFormTextarea(),
      'direccion_particular'          => new sfWidgetFormTextarea(),
      'localizacion'                  => new sfWidgetFormTextarea(),
      'telefono'                      => new sfWidgetFormTextarea(),
      'correo_electronico'            => new sfWidgetFormTextarea(),
      'situacion_escolar'             => new sfWidgetFormTextarea(),
      'procedencia_escolar'           => new sfWidgetFormTextarea(),
      'centro_escolar_de_procedencia' => new sfWidgetFormTextarea(),
      'estado_civil'                  => new sfWidgetFormTextarea(),
      'numero_de_hijos'               => new sfWidgetFormTextarea(),
      'enfermedades_que_padece_a'     => new sfWidgetFormTextarea(),
      'enfermedades_que_padece_b'     => new sfWidgetFormTextarea(),
      'convpadre'                     => new sfWidgetFormTextarea(),
      'convmadre'                     => new sfWidgetFormTextarea(),
      'convconyuge'                   => new sfWidgetFormTextarea(),
      'convhijos'                     => new sfWidgetFormTextarea(),
      'convhermano'                   => new sfWidgetFormTextarea(),
      'convotro'                      => new sfWidgetFormTextarea(),
      'convtotal'                     => new sfWidgetFormTextarea(),
      'ano_todos_ratifmatricula'      => new sfWidgetFormTextarea(),
      'cohorte'                       => new sfWidgetFormTextarea(),
      'fecha_de_matricula'            => new sfWidgetFormTextarea(),
      'no_pasa_de_ano'                => new sfWidgetFormTextarea(),
      'revisado'                      => new sfWidgetFormTextarea(),
      'expedienteincompleto'          => new sfWidgetFormTextarea(),
      'fotodig'                       => new sfWidgetFormTextarea(),
      'cemsorigen'                    => new sfWidgetFormTextarea(),
      'doble_baja'                    => new sfWidgetFormTextarea(),
      'es_indigena'                   => new sfWidgetFormTextarea(),
      'etnia_indigena'                => new sfWidgetFormTextarea(),
      'causaalta'                     => new sfWidgetFormTextarea(),
      'programa'                      => new sfWidgetFormTextarea(),
      'estado'                        => new sfWidgetFormTextarea(),
      'estado2'                       => new sfWidgetFormTextarea(),
      'situacion_escolar_b'           => new sfWidgetFormTextarea(),
      'region'                        => new sfWidgetFormTextarea(),
      'univ'                          => new sfWidgetFormTextarea(),
      'campo0'                        => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'                            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'idmatricula'                   => new sfValidatorString(array('required' => false)),
      'ano_en_curso'                  => new sfValidatorString(array('required' => false)),
      'estamunpar'                    => new sfValidatorString(array('required' => false)),
      'asic'                          => new sfValidatorString(array('required' => false)),
      'id_nucleo_docente'             => new sfValidatorString(array('required' => false)),
      'nombre'                        => new sfValidatorString(array('required' => false)),
      'apellido1'                     => new sfValidatorString(array('required' => false)),
      'apellido2'                     => new sfValidatorString(array('required' => false)),
      'sexo'                          => new sfValidatorString(array('required' => false)),
      'fecha_de_nacimiento'           => new sfValidatorString(array('required' => false)),
      'tipoidentidad'                 => new sfValidatorString(array('required' => false)),
      'cedula_de_identidad'           => new sfValidatorString(array('required' => false)),
      'numero_de_pasaporte'           => new sfValidatorString(array('required' => false)),
      'nacionalidad'                  => new sfValidatorString(array('required' => false)),
      'pais_de_origen'                => new sfValidatorString(array('required' => false)),
      'direccion_particular'          => new sfValidatorString(array('required' => false)),
      'localizacion'                  => new sfValidatorString(array('required' => false)),
      'telefono'                      => new sfValidatorString(array('required' => false)),
      'correo_electronico'            => new sfValidatorString(array('required' => false)),
      'situacion_escolar'             => new sfValidatorString(array('required' => false)),
      'procedencia_escolar'           => new sfValidatorString(array('required' => false)),
      'centro_escolar_de_procedencia' => new sfValidatorString(array('required' => false)),
      'estado_civil'                  => new sfValidatorString(array('required' => false)),
      'numero_de_hijos'               => new sfValidatorString(array('required' => false)),
      'enfermedades_que_padece_a'     => new sfValidatorString(array('required' => false)),
      'enfermedades_que_padece_b'     => new sfValidatorString(array('required' => false)),
      'convpadre'                     => new sfValidatorString(array('required' => false)),
      'convmadre'                     => new sfValidatorString(array('required' => false)),
      'convconyuge'                   => new sfValidatorString(array('required' => false)),
      'convhijos'                     => new sfValidatorString(array('required' => false)),
      'convhermano'                   => new sfValidatorString(array('required' => false)),
      'convotro'                      => new sfValidatorString(array('required' => false)),
      'convtotal'                     => new sfValidatorString(array('required' => false)),
      'ano_todos_ratifmatricula'      => new sfValidatorString(array('required' => false)),
      'cohorte'                       => new sfValidatorString(array('required' => false)),
      'fecha_de_matricula'            => new sfValidatorString(array('required' => false)),
      'no_pasa_de_ano'                => new sfValidatorString(array('required' => false)),
      'revisado'                      => new sfValidatorString(array('required' => false)),
      'expedienteincompleto'          => new sfValidatorString(array('required' => false)),
      'fotodig'                       => new sfValidatorString(array('required' => false)),
      'cemsorigen'                    => new sfValidatorString(array('required' => false)),
      'doble_baja'                    => new sfValidatorString(array('required' => false)),
      'es_indigena'                   => new sfValidatorString(array('required' => false)),
      'etnia_indigena'                => new sfValidatorString(array('required' => false)),
      'causaalta'                     => new sfValidatorString(array('required' => false)),
      'programa'                      => new sfValidatorString(array('required' => false)),
      'estado'                        => new sfValidatorString(array('required' => false)),
      'estado2'                       => new sfValidatorString(array('required' => false)),
      'situacion_escolar_b'           => new sfValidatorString(array('required' => false)),
      'region'                        => new sfValidatorString(array('required' => false)),
      'univ'                          => new sfValidatorString(array('required' => false)),
      'campo0'                        => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mmcii[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Mmcii';
  }

}
