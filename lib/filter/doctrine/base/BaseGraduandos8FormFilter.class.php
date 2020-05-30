<?php

/**
 * Graduandos8 filter form base class.
 *
 * @package    preinscripcion
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseGraduandos8FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'n'         => new sfWidgetFormFilterInput(),
      'tipo_doc'  => new sfWidgetFormFilterInput(),
      'doc_iden'  => new sfWidgetFormFilterInput(),
      'ape1'      => new sfWidgetFormFilterInput(),
      'ape2'      => new sfWidgetFormFilterInput(),
      'nombres'   => new sfWidgetFormFilterInput(),
      'gene'      => new sfWidgetFormFilterInput(),
      'pais_o'    => new sfWidgetFormFilterInput(),
      'estado'    => new sfWidgetFormFilterInput(),
      'municipio' => new sfWidgetFormFilterInput(),
      'parr'      => new sfWidgetFormFilterInput(),
      'asic'      => new sfWidgetFormFilterInput(),
      'cohorte'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'n'         => new sfValidatorPass(array('required' => false)),
      'tipo_doc'  => new sfValidatorPass(array('required' => false)),
      'doc_iden'  => new sfValidatorPass(array('required' => false)),
      'ape1'      => new sfValidatorPass(array('required' => false)),
      'ape2'      => new sfValidatorPass(array('required' => false)),
      'nombres'   => new sfValidatorPass(array('required' => false)),
      'gene'      => new sfValidatorPass(array('required' => false)),
      'pais_o'    => new sfValidatorPass(array('required' => false)),
      'estado'    => new sfValidatorPass(array('required' => false)),
      'municipio' => new sfValidatorPass(array('required' => false)),
      'parr'      => new sfValidatorPass(array('required' => false)),
      'asic'      => new sfValidatorPass(array('required' => false)),
      'cohorte'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('graduandos8_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Graduandos8';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'n'         => 'Text',
      'tipo_doc'  => 'Text',
      'doc_iden'  => 'Text',
      'ape1'      => 'Text',
      'ape2'      => 'Text',
      'nombres'   => 'Text',
      'gene'      => 'Text',
      'pais_o'    => 'Text',
      'estado'    => 'Text',
      'municipio' => 'Text',
      'parr'      => 'Text',
      'asic'      => 'Text',
      'cohorte'   => 'Text',
    );
  }
}
