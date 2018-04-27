<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('EtniaIndigena', 'doctrine');

/**
 * BaseEtniaIndigena
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
 * @method EtniaIndigena       setId()          Sets the current record's "id" value
 * @method EtniaIndigena       setDescripcion() Sets the current record's "descripcion" value
 * @method EtniaIndigena       setEstudiante()  Sets the current record's "Estudiante" collection
 * 
 * @package    preinscripcion
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEtniaIndigena extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('etnia_indigena');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'etnia_indigena_id',
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
             'foreign' => 'etnia_indigena_id'));
    }
}