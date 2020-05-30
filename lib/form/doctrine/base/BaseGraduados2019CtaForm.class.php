<?php

/**
 * Graduados2019Cta form base class.
 *
 * @method Graduados2019Cta getObject() Returns the current form's model object
 *
 * @package    preinscripcion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseGraduados2019CtaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'n�'                                                   => new sfWidgetFormInputHidden(),
      'tipo de documentos de identidad (v,e,p)'                => new sfWidgetFormTextarea(),
      'doc_iden'                                               => new sfWidgetFormTextarea(),
      'apellido 1'                                             => new sfWidgetFormTextarea(),
      'apellido 2'                                             => new sfWidgetFormTextarea(),
      'nombres (cantidad de nombres del posible graduando (a)' => new sfWidgetFormTextarea(),
      'g�nero'                                               => new sfWidgetFormTextarea(),
      'titulo a obtener'                                       => new sfWidgetFormTextarea(),
      'pa�s de origen'                                       => new sfWidgetFormTextarea(),
      'estado'                                                 => new sfWidgetFormTextarea(),
      'cohorte'                                                => new sfWidgetFormTextarea(),
      'n�1'                                                  => new sfWidgetFormTextarea(),
      'banco'                                                  => new sfWidgetFormTextarea(),
      'cuenta'                                                 => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'n�'                                                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('n�')), 'empty_value' => $this->getObject()->get('n�'), 'required' => false)),
      'tipo de documentos de identidad (v,e,p)'                => new sfValidatorString(array('required' => false)),
      'doc_iden'                                               => new sfValidatorString(array('required' => false)),
      'apellido 1'                                             => new sfValidatorString(array('required' => false)),
      'apellido 2'                                             => new sfValidatorString(array('required' => false)),
      'nombres (cantidad de nombres del posible graduando (a)' => new sfValidatorString(array('required' => false)),
      'g�nero'                                               => new sfValidatorString(array('required' => false)),
      'titulo a obtener'                                       => new sfValidatorString(array('required' => false)),
      'pa�s de origen'                                       => new sfValidatorString(array('required' => false)),
      'estado'                                                 => new sfValidatorString(array('required' => false)),
      'cohorte'                                                => new sfValidatorString(array('required' => false)),
      'n�1'                                                  => new sfValidatorString(array('required' => false)),
      'banco'                                                  => new sfValidatorString(array('required' => false)),
      'cuenta'                                                 => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('graduados2019_cta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Graduados2019Cta';
  }

}
