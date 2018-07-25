<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ModalidadIngreso', 'doctrine');

/**
 * BaseModalidadIngreso
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $descripcion
 * @property Doctrine_Collection $Estudiante
 * 
 * @method integer             getId()          Returns the current record's "id" value
 * @method string              getDescripcion() Returns the current record's "descripcion" value
 * @method Doctrine_Collection getEstudiante()  Returns the current record's "Estudiante" collection
 * @method ModalidadIngreso    setId()          Sets the current record's "id" value
 * @method ModalidadIngreso    setDescripcion() Sets the current record's "descripcion" value
 * @method ModalidadIngreso    setEstudiante()  Sets the current record's "Estudiante" collection
 * 
 * @package    preinscripcion
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseModalidadIngreso extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('modalidad_ingreso');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'modalidad_ingreso_id',
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
        $this->hasMany('Estudiante', array(
             'local' => 'id',
             'foreign' => 'mod_ingreso_id'));
    }
}