<?php

/**
 * Graduados2019Cta filter form base class.
 *
 * @package    preinscripcion
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseGraduados2019CtaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipo de documentos de identidad (v,e,p)'                => new sfWidgetFormFilterInput(),
      'doc_iden'                                               => new sfWidgetFormFilterInput(),
      'apellido 1'                                             => new sfWidgetFormFilterInput(),
      'apellido 2'                                             => new sfWidgetFormFilterInput(),
      'nombres (cantidad de nombres del posible graduando (a)' => new sfWidgetFormFilterInput(),
      'g�nero'                                               => new sfWidgetFormFilterInput(),
      'titulo a obtener'                                       => new sfWidgetFormFilterInput(),
      'pa�s de origen'                                       => new sfWidgetFormFilterInput(),
      'estado'                                                 => new sfWidgetFormFilterInput(),
      'cohorte'                                                => new sfWidgetFormFilterInput(),
      'n�1'                                                  => new sfWidgetFormFilterInput(),
      'banco'                                                  => new sfWidgetFormFilterInput(),
      'cuenta'                                                 => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'tipo de documentos de identidad (v,e,p)'                => new sfValidatorPass(array('required' => false)),
      'doc_iden'                                               => new sfValidatorPass(array('required' => false)),
      'apellido 1'                                             => new sfValidatorPass(array('required' => false)),
      'apellido 2'                                             => new sfValidatorPass(array('required' => false)),
      'nombres (cantidad de nombres del posible graduando (a)' => new sfValidatorPass(array('required' => false)),
      'g�nero'                                               => new sfValidatorPass(array('required' => false)),
      'titulo a obtener'                                       => new sfValidatorPass(array('required' => false)),
      'pa�s de origen'                                       => new sfValidatorPass(array('required' => false)),
      'estado'                                                 => new sfValidatorPass(array('required' => false)),
      'cohorte'                                                => new sfValidatorPass(array('required' => false)),
      'n�1'                                                  => new sfValidatorPass(array('required' => false)),
      'banco'                                                  => new sfValidatorPass(array('required' => false)),
      'cuenta'                                                 => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('graduados2019_cta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Graduados2019Cta';
  }

  public function getFields()
  {
    return array(
      'n�'                                                   => 'Text',
      'tipo de documentos de identidad (v,e,p)'                => 'Text',
      'doc_iden'                                               => 'Text',
      'apellido 1'                                             => 'Text',
      'apellido 2'                                             => 'Text',
      'nombres (cantidad de nombres del posible graduando (a)' => 'Text',
      'g�nero'                                               => 'Text',
      'titulo a obtener'                                       => 'Text',
      'pa�s de origen'                                       => 'Text',
      'estado'                                                 => 'Text',
      'cohorte'                                                => 'Text',
      'n�1'                                                  => 'Text',
      'banco'                                                  => 'Text',
      'cuenta'                                                 => 'Text',
    );
  }
}
