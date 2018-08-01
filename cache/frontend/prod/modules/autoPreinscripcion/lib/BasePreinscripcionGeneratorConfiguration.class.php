<?php

/**
 * preinscripcion module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage preinscripcion
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 12474 2008-10-31 10:41:27Z fabien $
 */
class BasePreinscripcionGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getCredentials($action)
  {
    if (0 === strpos($action, '_'))
    {
      $action = substr($action, 1);
    }

    return isset($this->configuration['credentials'][$action]) ? $this->configuration['credentials'][$action] : array();
  }

  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array(  '_save' => NULL,);
  }

  public function getEditActions()
  {
		//  added show view
	  // return array(  '_delete' => NULL,  '_list' => NULL,  '_show' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  
    return array();
  }

  public function getListObjectActions()
  {
		// =============== Added show view
	  return array(  '_show' => NULL,  '_edit' => NULL,  '_delete' => NULL,);
  
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%id%% - %%nacionalidad%% - %%identificacion%% - %%pnombre%% - %%snombre%% - %%papellido%% - %%sapellido%% - %%genero%% - %%fnac%% - %%pais_origen_id%% - %%estado_id%% - %%municipio_id%% - %%parroquia_id%% - %%direccion%% - %%telefono%% - %%correo%% - %%twitter%% - %%titulo_id%% - %%uni_pre%% - %%mgi%% - %%uni_mgi%% - %%otra%% - %%uni_otra%% - %%art_8%% - %%pnfa_id%% - %%otra_especializacion%% - %%ano_pre%% - %%ano_mgi%% - %%ano_otra%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Preinscripcion List';
  }

  public function getEditTitle()
  {
    return 'Edit Preinscripcion';
  }

  public function getNewTitle()
  {
    return 'Matrícula de Aspirantes';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'id',  1 => 'nacionalidad',  2 => 'identificacion',  3 => 'pnombre',  4 => 'snombre',  5 => 'papellido',  6 => 'sapellido',  7 => 'genero',  8 => 'fnac',  9 => 'pais_origen_id',  10 => 'estado_id',  11 => 'municipio_id',  12 => 'parroquia_id',  13 => 'direccion',  14 => 'telefono',  15 => 'correo',  16 => 'twitter',  17 => 'titulo_id',  18 => 'uni_pre',  19 => 'mgi',  20 => 'uni_mgi',  21 => 'otra',  22 => 'uni_otra',  23 => 'art_8',  24 => 'pnfa_id',  25 => 'otra_especializacion',  26 => 'ano_pre',  27 => 'ano_mgi',  28 => 'ano_otra',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'nacionalidad' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'identificacion' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Número de Identificación',),
      'pnombre' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Primer Nombre',),
      'snombre' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Segundo Nombre',),
      'papellido' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Primer apellido',),
      'sapellido' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Segundo apellido',),
      'genero' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Género',),
      'fnac' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',  'label' => 'Fecha de nacimiento',),
      'pais_origen_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',  'label' => 'País Origen',),
      'estado_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'municipio_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'parroquia_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'direccion' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Dirección',),
      'telefono' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Teléfono',),
      'correo' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'twitter' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'titulo_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',  'label' => 'Título de pregrado',),
      'uni_pre' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Indique el nombre de la universidad que acreditó el Pregrado.',),
      'mgi' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Realizó la especialización en MGI?',),
      'uni_mgi' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Indique el nombre de la universidad que acreditó el MGI.',),
      'otra' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Realizó otra especialización?',),
      'uni_otra' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Indique la especialidad y el nombre de la universidad donde cursó el Postgrado',),
      'art_8' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Cumplió con el artículo 8?',),
      'pnfa_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',  'label' => 'Seleccione el PNFA que aspira cursar',),
      'otra_especializacion' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'ano_pre' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Indique el año de egreso de pregrado',),
      'ano_mgi' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Indique el año de egreso de MGI',),
      'ano_otra' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Indique el año de egreso de la epecialización',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'nacionalidad' => array(),
      'identificacion' => array(),
      'pnombre' => array(),
      'snombre' => array(),
      'papellido' => array(),
      'sapellido' => array(),
      'genero' => array(),
      'fnac' => array(),
      'pais_origen_id' => array(),
      'estado_id' => array(),
      'municipio_id' => array(),
      'parroquia_id' => array(),
      'direccion' => array(),
      'telefono' => array(),
      'correo' => array(),
      'twitter' => array(),
      'titulo_id' => array(),
      'uni_pre' => array(),
      'mgi' => array(),
      'uni_mgi' => array(),
      'otra' => array(),
      'uni_otra' => array(),
      'art_8' => array(),
      'pnfa_id' => array(),
      'otra_especializacion' => array(),
      'ano_pre' => array(),
      'ano_mgi' => array(),
      'ano_otra' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'nacionalidad' => array(),
      'identificacion' => array(),
      'pnombre' => array(),
      'snombre' => array(),
      'papellido' => array(),
      'sapellido' => array(),
      'genero' => array(),
      'fnac' => array(),
      'pais_origen_id' => array(),
      'estado_id' => array(),
      'municipio_id' => array(),
      'parroquia_id' => array(),
      'direccion' => array(),
      'telefono' => array(),
      'correo' => array(),
      'twitter' => array(),
      'titulo_id' => array(),
      'uni_pre' => array(),
      'mgi' => array(),
      'uni_mgi' => array(),
      'otra' => array(),
      'uni_otra' => array(),
      'art_8' => array(),
      'pnfa_id' => array(),
      'otra_especializacion' => array(),
      'ano_pre' => array(),
      'ano_mgi' => array(),
      'ano_otra' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'nacionalidad' => array(),
      'identificacion' => array(),
      'pnombre' => array(),
      'snombre' => array(),
      'papellido' => array(),
      'sapellido' => array(),
      'genero' => array(),
      'fnac' => array(),
      'pais_origen_id' => array(),
      'estado_id' => array(),
      'municipio_id' => array(),
      'parroquia_id' => array(),
      'direccion' => array(),
      'telefono' => array(),
      'correo' => array(),
      'twitter' => array(),
      'titulo_id' => array(),
      'uni_pre' => array(),
      'mgi' => array(),
      'uni_mgi' => array(),
      'otra' => array(),
      'uni_otra' => array(),
      'art_8' => array(),
      'pnfa_id' => array(),
      'otra_especializacion' => array(),
      'ano_pre' => array(),
      'ano_mgi' => array(),
      'ano_otra' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'nacionalidad' => array(),
      'identificacion' => array(),
      'pnombre' => array(),
      'snombre' => array(),
      'papellido' => array(),
      'sapellido' => array(),
      'genero' => array(),
      'fnac' => array(),
      'pais_origen_id' => array(),
      'estado_id' => array(),
      'municipio_id' => array(),
      'parroquia_id' => array(),
      'direccion' => array(),
      'telefono' => array(),
      'correo' => array(),
      'twitter' => array(),
      'titulo_id' => array(),
      'uni_pre' => array(),
      'mgi' => array(),
      'uni_mgi' => array(),
      'otra' => array(),
      'uni_otra' => array(),
      'art_8' => array(),
      'pnfa_id' => array(),
      'otra_especializacion' => array(),
      'ano_pre' => array(),
      'ano_mgi' => array(),
      'ano_otra' => array(),
    );
  }

  public function getFieldsShow()
  {
    return array(
      'id' => array(),
      'nacionalidad' => array(),
      'identificacion' => array(),
      'pnombre' => array(),
      'snombre' => array(),
      'papellido' => array(),
      'sapellido' => array(),
      'genero' => array(),
      'fnac' => array(),
      'pais_origen_id' => array(),
      'estado_id' => array(),
      'municipio_id' => array(),
      'parroquia_id' => array(),
      'direccion' => array(),
      'telefono' => array(),
      'correo' => array(),
      'twitter' => array(),
      'titulo_id' => array(),
      'uni_pre' => array(),
      'mgi' => array(),
      'uni_mgi' => array(),
      'otra' => array(),
      'uni_otra' => array(),
      'art_8' => array(),
      'pnfa_id' => array(),
      'otra_especializacion' => array(),
      'ano_pre' => array(),
      'ano_mgi' => array(),
      'ano_otra' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'nacionalidad' => array(),
      'identificacion' => array(),
      'pnombre' => array(),
      'snombre' => array(),
      'papellido' => array(),
      'sapellido' => array(),
      'genero' => array(),
      'fnac' => array(),
      'pais_origen_id' => array(),
      'estado_id' => array(),
      'municipio_id' => array(),
      'parroquia_id' => array(),
      'direccion' => array(),
      'telefono' => array(),
      'correo' => array(),
      'twitter' => array(),
      'titulo_id' => array(),
      'uni_pre' => array(),
      'mgi' => array(),
      'uni_mgi' => array(),
      'otra' => array(),
      'uni_otra' => array(),
      'art_8' => array(),
      'pnfa_id' => array(),
      'otra_especializacion' => array(),
      'ano_pre' => array(),
      'ano_mgi' => array(),
      'ano_otra' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'preinscripcionForm';
  }

  public function getFormOptions()
  {
    return array();
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'preinscripcionFormFilter';
  }

	  protected function getConfig()
  {
    $configuration = parent::getConfig();
    $configuration['show'] = $this->getFieldsShow();
    return $configuration;
  }

  protected function compile()
  {
    parent::compile();
    
    $config = $this->getConfig();
    
    // add configuration for the show view 
    $this->configuration['show'] = array( 'fields'         => array(),
                                          'title'          => $this->getShowTitle(),
                                          'actions'        => $this->getShowActions(),
                                          'display'        => $this->getShowDisplay(),
                                        ) ;

    foreach (array('show') as $context)
    {
      foreach ($this->configuration[$context]['actions'] as $action => $parameters)
      {
        $this->configuration[$context]['actions'][$action] = $this->fixActionParameters($action, $parameters);
      }
    }


  }

  public function getShowActions()
  {
    return array(  '_list' => NULL,  '_edit' => NULL, '_delete' => NULL);
  }

  
  public function getShowTitle()
  {
    return 'View Preinscripcion';
  }

  public function getShowDisplay()
  {
      return array(  0 => 'id',  1 => 'nacionalidad',  2 => 'identificacion',  3 => 'pnombre',  4 => 'snombre',  5 => 'papellido',  6 => 'sapellido',  7 => 'genero',  8 => 'fnac',  9 => 'pais_origen_id',  10 => 'estado_id',  11 => 'municipio_id',  12 => 'parroquia_id',  13 => 'direccion',  14 => 'telefono',  15 => 'correo',  16 => 'twitter',  17 => 'titulo_id',  18 => 'uni_pre',  19 => 'mgi',  20 => 'uni_mgi',  21 => 'otra',  22 => 'uni_otra',  23 => 'art_8',  24 => 'pnfa_id',  25 => 'otra_especializacion',  26 => 'ano_pre',  27 => 'ano_mgi',  28 => 'ano_otra',);
  }

  public function getFilterForm($filters)
  {
    $class = $this->getFilterFormClass();

    return new $class($filters, $this->getFilterFormOptions());
  }

  public function getFilterFormOptions()
  {
    return array();
  }

  public function getFilterDefaults()
  {
    return array();
  }

  public function getPager($model)
  {
    $class = $this->getPagerClass();

    return new $class($model, $this->getPagerMaxPerPage());
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }

  public function getConnection()
  {
    return null;
  }
}
