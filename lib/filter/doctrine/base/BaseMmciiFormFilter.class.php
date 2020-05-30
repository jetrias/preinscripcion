<?php

/**
 * Mmcii filter form base class.
 *
 * @package    preinscripcion
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMmciiFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idmatricula'                   => new sfWidgetFormFilterInput(),
      'ano_en_curso'                  => new sfWidgetFormFilterInput(),
      'estamunpar'                    => new sfWidgetFormFilterInput(),
      'asic'                          => new sfWidgetFormFilterInput(),
      'id_nucleo_docente'             => new sfWidgetFormFilterInput(),
      'nombre'                        => new sfWidgetFormFilterInput(),
      'apellido1'                     => new sfWidgetFormFilterInput(),
      'apellido2'                     => new sfWidgetFormFilterInput(),
      'sexo'                          => new sfWidgetFormFilterInput(),
      'fecha_de_nacimiento'           => new sfWidgetFormFilterInput(),
      'tipoidentidad'                 => new sfWidgetFormFilterInput(),
      'cedula_de_identidad'           => new sfWidgetFormFilterInput(),
      'numero_de_pasaporte'           => new sfWidgetFormFilterInput(),
      'nacionalidad'                  => new sfWidgetFormFilterInput(),
      'pais_de_origen'                => new sfWidgetFormFilterInput(),
      'direccion_particular'          => new sfWidgetFormFilterInput(),
      'localizacion'                  => new sfWidgetFormFilterInput(),
      'telefono'                      => new sfWidgetFormFilterInput(),
      'correo_electronico'            => new sfWidgetFormFilterInput(),
      'situacion_escolar'             => new sfWidgetFormFilterInput(),
      'procedencia_escolar'           => new sfWidgetFormFilterInput(),
      'centro_escolar_de_procedencia' => new sfWidgetFormFilterInput(),
      'estado_civil'                  => new sfWidgetFormFilterInput(),
      'numero_de_hijos'               => new sfWidgetFormFilterInput(),
      'enfermedades_que_padece_a'     => new sfWidgetFormFilterInput(),
      'enfermedades_que_padece_b'     => new sfWidgetFormFilterInput(),
      'convpadre'                     => new sfWidgetFormFilterInput(),
      'convmadre'                     => new sfWidgetFormFilterInput(),
      'convconyuge'                   => new sfWidgetFormFilterInput(),
      'convhijos'                     => new sfWidgetFormFilterInput(),
      'convhermano'                   => new sfWidgetFormFilterInput(),
      'convotro'                      => new sfWidgetFormFilterInput(),
      'convtotal'                     => new sfWidgetFormFilterInput(),
      'ano_todos_ratifmatricula'      => new sfWidgetFormFilterInput(),
      'cohorte'                       => new sfWidgetFormFilterInput(),
      'fecha_de_matricula'            => new sfWidgetFormFilterInput(),
      'no_pasa_de_ano'                => new sfWidgetFormFilterInput(),
      'revisado'                      => new sfWidgetFormFilterInput(),
      'expedienteincompleto'          => new sfWidgetFormFilterInput(),
      'fotodig'                       => new sfWidgetFormFilterInput(),
      'cemsorigen'                    => new sfWidgetFormFilterInput(),
      'doble_baja'                    => new sfWidgetFormFilterInput(),
      'es_indigena'                   => new sfWidgetFormFilterInput(),
      'etnia_indigena'                => new sfWidgetFormFilterInput(),
      'causaalta'                     => new sfWidgetFormFilterInput(),
      'programa'                      => new sfWidgetFormFilterInput(),
      'estado'                        => new sfWidgetFormFilterInput(),
      'estado2'                       => new sfWidgetFormFilterInput(),
      'situacion_escolar_b'           => new sfWidgetFormFilterInput(),
      'region'                        => new sfWidgetFormFilterInput(),
      'univ'                          => new sfWidgetFormFilterInput(),
      'campo0'                        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'idmatricula'                   => new sfValidatorPass(array('required' => false)),
      'ano_en_curso'                  => new sfValidatorPass(array('required' => false)),
      'estamunpar'                    => new sfValidatorPass(array('required' => false)),
      'asic'                          => new sfValidatorPass(array('required' => false)),
      'id_nucleo_docente'             => new sfValidatorPass(array('required' => false)),
      'nombre'                        => new sfValidatorPass(array('required' => false)),
      'apellido1'                     => new sfValidatorPass(array('required' => false)),
      'apellido2'                     => new sfValidatorPass(array('required' => false)),
      'sexo'                          => new sfValidatorPass(array('required' => false)),
      'fecha_de_nacimiento'           => new sfValidatorPass(array('required' => false)),
      'tipoidentidad'                 => new sfValidatorPass(array('required' => false)),
      'cedula_de_identidad'           => new sfValidatorPass(array('required' => false)),
      'numero_de_pasaporte'           => new sfValidatorPass(array('required' => false)),
      'nacionalidad'                  => new sfValidatorPass(array('required' => false)),
      'pais_de_origen'                => new sfValidatorPass(array('required' => false)),
      'direccion_particular'          => new sfValidatorPass(array('required' => false)),
      'localizacion'                  => new sfValidatorPass(array('required' => false)),
      'telefono'                      => new sfValidatorPass(array('required' => false)),
      'correo_electronico'            => new sfValidatorPass(array('required' => false)),
      'situacion_escolar'             => new sfValidatorPass(array('required' => false)),
      'procedencia_escolar'           => new sfValidatorPass(array('required' => false)),
      'centro_escolar_de_procedencia' => new sfValidatorPass(array('required' => false)),
      'estado_civil'                  => new sfValidatorPass(array('required' => false)),
      'numero_de_hijos'               => new sfValidatorPass(array('required' => false)),
      'enfermedades_que_padece_a'     => new sfValidatorPass(array('required' => false)),
      'enfermedades_que_padece_b'     => new sfValidatorPass(array('required' => false)),
      'convpadre'                     => new sfValidatorPass(array('required' => false)),
      'convmadre'                     => new sfValidatorPass(array('required' => false)),
      'convconyuge'                   => new sfValidatorPass(array('required' => false)),
      'convhijos'                     => new sfValidatorPass(array('required' => false)),
      'convhermano'                   => new sfValidatorPass(array('required' => false)),
      'convotro'                      => new sfValidatorPass(array('required' => false)),
      'convtotal'                     => new sfValidatorPass(array('required' => false)),
      'ano_todos_ratifmatricula'      => new sfValidatorPass(array('required' => false)),
      'cohorte'                       => new sfValidatorPass(array('required' => false)),
      'fecha_de_matricula'            => new sfValidatorPass(array('required' => false)),
      'no_pasa_de_ano'                => new sfValidatorPass(array('required' => false)),
      'revisado'                      => new sfValidatorPass(array('required' => false)),
      'expedienteincompleto'          => new sfValidatorPass(array('required' => false)),
      'fotodig'                       => new sfValidatorPass(array('required' => false)),
      'cemsorigen'                    => new sfValidatorPass(array('required' => false)),
      'doble_baja'                    => new sfValidatorPass(array('required' => false)),
      'es_indigena'                   => new sfValidatorPass(array('required' => false)),
      'etnia_indigena'                => new sfValidatorPass(array('required' => false)),
      'causaalta'                     => new sfValidatorPass(array('required' => false)),
      'programa'                      => new sfValidatorPass(array('required' => false)),
      'estado'                        => new sfValidatorPass(array('required' => false)),
      'estado2'                       => new sfValidatorPass(array('required' => false)),
      'situacion_escolar_b'           => new sfValidatorPass(array('required' => false)),
      'region'                        => new sfValidatorPass(array('required' => false)),
      'univ'                          => new sfValidatorPass(array('required' => false)),
      'campo0'                        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mmcii_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Mmcii';
  }

  public function getFields()
  {
    return array(
      'id'                            => 'Number',
      'idmatricula'                   => 'Text',
      'ano_en_curso'                  => 'Text',
      'estamunpar'                    => 'Text',
      'asic'                          => 'Text',
      'id_nucleo_docente'             => 'Text',
      'nombre'                        => 'Text',
      'apellido1'                     => 'Text',
      'apellido2'                     => 'Text',
      'sexo'                          => 'Text',
      'fecha_de_nacimiento'           => 'Text',
      'tipoidentidad'                 => 'Text',
      'cedula_de_identidad'           => 'Text',
      'numero_de_pasaporte'           => 'Text',
      'nacionalidad'                  => 'Text',
      'pais_de_origen'                => 'Text',
      'direccion_particular'          => 'Text',
      'localizacion'                  => 'Text',
      'telefono'                      => 'Text',
      'correo_electronico'            => 'Text',
      'situacion_escolar'             => 'Text',
      'procedencia_escolar'           => 'Text',
      'centro_escolar_de_procedencia' => 'Text',
      'estado_civil'                  => 'Text',
      'numero_de_hijos'               => 'Text',
      'enfermedades_que_padece_a'     => 'Text',
      'enfermedades_que_padece_b'     => 'Text',
      'convpadre'                     => 'Text',
      'convmadre'                     => 'Text',
      'convconyuge'                   => 'Text',
      'convhijos'                     => 'Text',
      'convhermano'                   => 'Text',
      'convotro'                      => 'Text',
      'convtotal'                     => 'Text',
      'ano_todos_ratifmatricula'      => 'Text',
      'cohorte'                       => 'Text',
      'fecha_de_matricula'            => 'Text',
      'no_pasa_de_ano'                => 'Text',
      'revisado'                      => 'Text',
      'expedienteincompleto'          => 'Text',
      'fotodig'                       => 'Text',
      'cemsorigen'                    => 'Text',
      'doble_baja'                    => 'Text',
      'es_indigena'                   => 'Text',
      'etnia_indigena'                => 'Text',
      'causaalta'                     => 'Text',
      'programa'                      => 'Text',
      'estado'                        => 'Text',
      'estado2'                       => 'Text',
      'situacion_escolar_b'           => 'Text',
      'region'                        => 'Text',
      'univ'                          => 'Text',
      'campo0'                        => 'Text',
    );
  }
}
