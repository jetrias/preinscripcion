<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('GrupoFamiliar', 'doctrine');

/**
 * BaseGrupoFamiliar
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $descripcion
 * @property Doctrine_Collection $EstudioSocioeconomico
 * 
 * @method integer             getId()                    Returns the current record's "id" value
 * @method string              getDescripcion()           Returns the current record's "descripcion" value
 * @method Doctrine_Collection getEstudioSocioeconomico() Returns the current record's "EstudioSocioeconomico" collection
 * @method GrupoFamiliar       setId()                    Sets the current record's "id" value
 * @method GrupoFamiliar       setDescripcion()           Sets the current record's "descripcion" value
 * @method GrupoFamiliar       setEstudioSocioeconomico() Sets the current record's "EstudioSocioeconomico" collection
 * 
 * @package    preinscripcion
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGrupoFamiliar extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('grupo_familiar');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'grupo_familiar_id',
             'length' => 4,
             ));
        $this->hasColumn('descripcion', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('EstudioSocioeconomico', array(
             'local' => 'id',
             'foreign' => 'grupo_familiar_id'));
    }
}