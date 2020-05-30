<?php

/**
 * Graduados9 filter form base class.
 *
 * @package    preinscripcion
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseGraduados9FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idmatricula'                   => new sfWidgetFormFilterInput(),
      'a�o en curso'                => new sfWidgetFormFilterInput(),
      'estamunpar'                    => new sfWidgetFormFilterInput(),
      'asic'                          => new sfWidgetFormFilterInput(),
      'id n�cleo docente'           => new sfWidgetFormFilterInput(),
      'nombre'                        => new sfWidgetFormFilterInput(),
      'apellido1'                     => new sfWidgetFormFilterInput(),
      'apellido2'                     => new sfWidgetFormFilterInput(),
      'sexo'                          => new sfWidgetFormFilterInput(),
      'fecha de nacimiento'           => new sfWidgetFormFilterInput(),
      'tipoidentidad'                 => new sfWidgetFormFilterInput(),
      'c�dula de identidad'         => new sfWidgetFormFilterInput(),
      'n�mero de pasaporte'         => new sfWidgetFormFilterInput(),
      'nacionalidad'                  => new sfWidgetFormFilterInput(),
      'pa�s de origen'              => new sfWidgetFormFilterInput(),
      'direcci�n particular'        => new sfWidgetFormFilterInput(),
      'localizaci�n'                => new sfWidgetFormFilterInput(),
      'tel�fono'                    => new sfWidgetFormFilterInput(),
      'correo electr�nico'          => new sfWidgetFormFilterInput(),
      'situaci�n escolar'           => new sfWidgetFormFilterInput(),
      'procedencia escolar'           => new sfWidgetFormFilterInput(),
      'centro escolar de procedencia' => new sfWidgetFormFilterInput(),
      'estado civil'                  => new sfWidgetFormFilterInput(),
      'n�mero de hijos'             => new sfWidgetFormFilterInput(),
      'enfermedades que padece 1'     => new sfWidgetFormFilterInput(),
      'enfermedades que padece 2'     => new sfWidgetFormFilterInput(),
      'convpadre'                     => new sfWidgetFormFilterInput(),
      'convmadre'                     => new sfWidgetFormFilterInput(),
      'convc�nyuge'                 => new sfWidgetFormFilterInput(),
      'convhijos'                     => new sfWidgetFormFilterInput(),
      'convhermano'                   => new sfWidgetFormFilterInput(),
      'convotro'                      => new sfWidgetFormFilterInput(),
      'convtotal'                     => new sfWidgetFormFilterInput(),
      'a�o-todos.ratifmatr�cula'  => new sfWidgetFormFilterInput(),
      'cohorte'                       => new sfWidgetFormFilterInput(),
      'fecha de matr�cula'          => new sfWidgetFormFilterInput(),
      'no pasa de a�o'              => new sfWidgetFormFilterInput(),
      'revisado'                      => new sfWidgetFormFilterInput(),
      'expedienteincompleto'          => new sfWidgetFormFilterInput(),
      'fotodig'                       => new sfWidgetFormFilterInput(),
      'cemsorigen'                    => new sfWidgetFormFilterInput(),
      'doble baja'                    => new sfWidgetFormFilterInput(),
      'es ind�gena'                 => new sfWidgetFormFilterInput(),
      'etnia ind�gena'              => new sfWidgetFormFilterInput(),
      'causaalta'                     => new sfWidgetFormFilterInput(),
      'programa'                      => new sfWidgetFormFilterInput(),
      'estado'                        => new sfWidgetFormFilterInput(),
      'estado2'                       => new sfWidgetFormFilterInput(),
      'situacion escolar'             => new sfWidgetFormFilterInput(),
      'regi�n'                      => new sfWidgetFormFilterInput(),
      'univ'                          => new sfWidgetFormFilterInput(),
      'campo0'                        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'idmatricula'                   => new sfValidatorPass(array('required' => false)),
      'a�o en curso'                => new sfValidatorPass(array('required' => false)),
      'estamunpar'                    => new sfValidatorPass(array('required' => false)),
      'asic'                          => new sfValidatorPass(array('required' => false)),
      'id n�cleo docente'           => new sfValidatorPass(array('required' => false)),
      'nombre'                        => new sfValidatorPass(array('required' => false)),
      'apellido1'                     => new sfValidatorPass(array('required' => false)),
      'apellido2'                     => new sfValidatorPass(array('required' => false)),
      'sexo'                          => new sfValidatorPass(array('required' => false)),
      'fecha de nacimiento'           => new sfValidatorPass(array('required' => false)),
      'tipoidentidad'                 => new sfValidatorPass(array('required' => false)),
      'c�dula de identidad'         => new sfValidatorPass(array('required' => false)),
      'n�mero de pasaporte'         => new sfValidatorPass(array('required' => false)),
      'nacionalidad'                  => new sfValidatorPass(array('required' => false)),
      'pa�s de origen'              => new sfValidatorPass(array('required' => false)),
      'direcci�n particular'        => new sfValidatorPass(array('required' => false)),
      'localizaci�n'                => new sfValidatorPass(array('required' => false)),
      'tel�fono'                    => new sfValidatorPass(array('required' => false)),
      'correo electr�nico'          => new sfValidatorPass(array('required' => false)),
      'situaci�n escolar'           => new sfValidatorPass(array('required' => false)),
      'procedencia escolar'           => new sfValidatorPass(array('required' => false)),
      'centro escolar de procedencia' => new sfValidatorPass(array('required' => false)),
      'estado civil'                  => new sfValidatorPass(array('required' => false)),
      'n�mero de hijos'             => new sfValidatorPass(array('required' => false)),
      'enfermedades que padece 1'     => new sfValidatorPass(array('required' => false)),
      'enfermedades que padece 2'     => new sfValidatorPass(array('required' => false)),
      'convpadre'                     => new sfValidatorPass(array('required' => false)),
      'convmadre'                     => new sfValidatorPass(array('required' => false)),
      'convc�nyuge'                 => new sfValidatorPass(array('required' => false)),
      'convhijos'                     => new sfValidatorPass(array('required' => false)),
      'convhermano'                   => new sfValidatorPass(array('required' => false)),
      'convotro'                      => new sfValidatorPass(array('required' => false)),
      'convtotal'                     => new sfValidatorPass(array('required' => false)),
      'a�o-todos.ratifmatr�cula'  => new sfValidatorPass(array('required' => false)),
      'cohorte'                       => new sfValidatorPass(array('required' => false)),
      'fecha de matr�cula'          => new sfValidatorPass(array('required' => false)),
      'no pasa de a�o'              => new sfValidatorPass(array('required' => false)),
      'revisado'                      => new sfValidatorPass(array('required' => false)),
      'expedienteincompleto'          => new sfValidatorPass(array('required' => false)),
      'fotodig'                       => new sfValidatorPass(array('required' => false)),
      'cemsorigen'                    => new sfValidatorPass(array('required' => false)),
      'doble baja'                    => new sfValidatorPass(array('required' => false)),
      'es ind�gena'                 => new sfValidatorPass(array('required' => false)),
      'etnia ind�gena'              => new sfValidatorPass(array('required' => false)),
      'causaalta'                     => new sfValidatorPass(array('required' => false)),
      'programa'                      => new sfValidatorPass(array('required' => false)),
      'estado'                        => new sfValidatorPass(array('required' => false)),
      'estado2'                       => new sfValidatorPass(array('required' => false)),
      'situacion escolar'             => new sfValidatorPass(array('required' => false)),
      'regi�n'                      => new sfValidatorPass(array('required' => false)),
      'univ'                          => new sfValidatorPass(array('required' => false)),
      'campo0'                        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('graduados9_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Graduados9';
  }

  public function getFields()
  {
    return array(
      'id'                            => 'Number',
      'idmatricula'                   => 'Text',
      'a�o en curso'                => 'Text',
      'estamunpar'                    => 'Text',
      'asic'                          => 'Text',
      'id n�cleo docente'           => 'Text',
      'nombre'                        => 'Text',
      'apellido1'                     => 'Text',
      'apellido2'                     => 'Text',
      'sexo'                          => 'Text',
      'fecha de nacimiento'           => 'Text',
      'tipoidentidad'                 => 'Text',
      'c�dula de identidad'         => 'Text',
      'n�mero de pasaporte'         => 'Text',
      'nacionalidad'                  => 'Text',
      'pa�s de origen'              => 'Text',
      'direcci�n particular'        => 'Text',
      'localizaci�n'                => 'Text',
      'tel�fono'                    => 'Text',
      'correo electr�nico'          => 'Text',
      'situaci�n escolar'           => 'Text',
      'procedencia escolar'           => 'Text',
      'centro escolar de procedencia' => 'Text',
      'estado civil'                  => 'Text',
      'n�mero de hijos'             => 'Text',
      'enfermedades que padece 1'     => 'Text',
      'enfermedades que padece 2'     => 'Text',
      'convpadre'                     => 'Text',
      'convmadre'                     => 'Text',
      'convc�nyuge'                 => 'Text',
      'convhijos'                     => 'Text',
      'convhermano'                   => 'Text',
      'convotro'                      => 'Text',
      'convtotal'                     => 'Text',
      'a�o-todos.ratifmatr�cula'  => 'Text',
      'cohorte'                       => 'Text',
      'fecha de matr�cula'          => 'Text',
      'no pasa de a�o'              => 'Text',
      'revisado'                      => 'Text',
      'expedienteincompleto'          => 'Text',
      'fotodig'                       => 'Text',
      'cemsorigen'                    => 'Text',
      'doble baja'                    => 'Text',
      'es ind�gena'                 => 'Text',
      'etnia ind�gena'              => 'Text',
      'causaalta'                     => 'Text',
      'programa'                      => 'Text',
      'estado'                        => 'Text',
      'estado2'                       => 'Text',
      'situacion escolar'             => 'Text',
      'regi�n'                      => 'Text',
      'univ'                          => 'Text',
      'campo0'                        => 'Text',
    );
  }
}
