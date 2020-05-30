<?php

/**
 * EstudianteMmcEstado form base class.
 *
 * @method EstudianteMmcEstado getObject() Returns the current form's model object
 *
 * @package    preinscripcion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEstudianteMmcEstadoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                           => new sfWidgetFormInputHidden(),
      'a�o en curso'               => new sfWidgetFormTextarea(),
      'estado'                       => new sfWidgetFormTextarea(),
      'municipio'                    => new sfWidgetFormTextarea(),
      'parroquia'                    => new sfWidgetFormTextarea(),
      'asic'                         => new sfWidgetFormTextarea(),
      'id n�cleo docente'          => new sfWidgetFormTextarea(),
      'nombre'                       => new sfWidgetFormTextarea(),
      'apellido1'                    => new sfWidgetFormTextarea(),
      'apellido2'                    => new sfWidgetFormTextarea(),
      'sexo'                         => new sfWidgetFormTextarea(),
      'fecha de nacimiento'          => new sfWidgetFormTextarea(),
      'tipoidentidad'                => new sfWidgetFormTextarea(),
      'cedula'                       => new sfWidgetFormTextarea(),
      'n�mero de pasaporte'        => new sfWidgetFormTextarea(),
      'nacionalidad'                 => new sfWidgetFormTextarea(),
      'pa�s de origen'             => new sfWidgetFormTextarea(),
      'direcci�n particular'       => new sfWidgetFormTextarea(),
      'localizaci�n'               => new sfWidgetFormTextarea(),
      'tel�fono'                   => new sfWidgetFormTextarea(),
      'correo electr�nico'         => new sfWidgetFormTextarea(),
      'situaci�n escolar'          => new sfWidgetFormTextarea(),
      'procedencia escolar'          => new sfWidgetFormTextarea(),
      'a�o-todos.ratifmatr�cula' => new sfWidgetFormTextarea(),
      'cohorte'                      => new sfWidgetFormTextarea(),
      'fecha de matr�cula'         => new sfWidgetFormTextarea(),
      'no pasa de a�o'             => new sfWidgetFormTextarea(),
      'revisado'                     => new sfWidgetFormTextarea(),
      'expedienteincompleto'         => new sfWidgetFormTextarea(),
      'fotodig'                      => new sfWidgetFormTextarea(),
      'cemsorigen'                   => new sfWidgetFormTextarea(),
      'doble baja'                   => new sfWidgetFormTextarea(),
      'es ind�gena'                => new sfWidgetFormTextarea(),
      'etnia ind�gena'             => new sfWidgetFormTextarea(),
      'causaalta'                    => new sfWidgetFormTextarea(),
      'programa'                     => new sfWidgetFormTextarea(),
      'estado2'                      => new sfWidgetFormTextarea(),
      'situacion escolar'            => new sfWidgetFormTextarea(),
      'regi�n'                     => new sfWidgetFormTextarea(),
      'univ'                         => new sfWidgetFormTextarea(),
      'estado_id'                    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'a�o en curso'               => new sfValidatorString(array('required' => false)),
      'estado'                       => new sfValidatorString(array('required' => false)),
      'municipio'                    => new sfValidatorString(array('required' => false)),
      'parroquia'                    => new sfValidatorString(array('required' => false)),
      'asic'                         => new sfValidatorString(array('required' => false)),
      'id n�cleo docente'          => new sfValidatorString(array('required' => false)),
      'nombre'                       => new sfValidatorString(array('required' => false)),
      'apellido1'                    => new sfValidatorString(array('required' => false)),
      'apellido2'                    => new sfValidatorString(array('required' => false)),
      'sexo'                         => new sfValidatorString(array('required' => false)),
      'fecha de nacimiento'          => new sfValidatorString(array('required' => false)),
      'tipoidentidad'                => new sfValidatorString(array('required' => false)),
      'cedula'                       => new sfValidatorString(array('required' => false)),
      'n�mero de pasaporte'        => new sfValidatorString(array('required' => false)),
      'nacionalidad'                 => new sfValidatorString(array('required' => false)),
      'pa�s de origen'             => new sfValidatorString(array('required' => false)),
      'direcci�n particular'       => new sfValidatorString(array('required' => false)),
      'localizaci�n'               => new sfValidatorString(array('required' => false)),
      'tel�fono'                   => new sfValidatorString(array('required' => false)),
      'correo electr�nico'         => new sfValidatorString(array('required' => false)),
      'situaci�n escolar'          => new sfValidatorString(array('required' => false)),
      'procedencia escolar'          => new sfValidatorString(array('required' => false)),
      'a�o-todos.ratifmatr�cula' => new sfValidatorString(array('required' => false)),
      'cohorte'                      => new sfValidatorString(array('required' => false)),
      'fecha de matr�cula'         => new sfValidatorString(array('required' => false)),
      'no pasa de a�o'             => new sfValidatorString(array('required' => false)),
      'revisado'                     => new sfValidatorString(array('required' => false)),
      'expedienteincompleto'         => new sfValidatorString(array('required' => false)),
      'fotodig'                      => new sfValidatorString(array('required' => false)),
      'cemsorigen'                   => new sfValidatorString(array('required' => false)),
      'doble baja'                   => new sfValidatorString(array('required' => false)),
      'es ind�gena'                => new sfValidatorString(array('required' => false)),
      'etnia ind�gena'             => new sfValidatorString(array('required' => false)),
      'causaalta'                    => new sfValidatorString(array('required' => false)),
      'programa'                     => new sfValidatorString(array('required' => false)),
      'estado2'                      => new sfValidatorString(array('required' => false)),
      'situacion escolar'            => new sfValidatorString(array('required' => false)),
      'regi�n'                     => new sfValidatorString(array('required' => false)),
      'univ'                         => new sfValidatorString(array('required' => false)),
      'estado_id'                    => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('estudiante_mmc_estado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EstudianteMmcEstado';
  }

}
