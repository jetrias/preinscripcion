<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('PeriodoLectivo', 'doctrine');

/**
 * BasePeriodoLectivo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $descripcion
 * @property date $fecha_desde
 * @property date $fecha_hasta
 * @property boolean $activo
 * 
 * @method integer        getId()          Returns the current record's "id" value
 * @method string         getDescripcion() Returns the current record's "descripcion" value
 * @method date           getFechaDesde()  Returns the current record's "fecha_desde" value
 * @method date           getFechaHasta()  Returns the current record's "fecha_hasta" value
 * @method boolean        getActivo()      Returns the current record's "activo" value
 * @method PeriodoLectivo setId()          Sets the current record's "id" value
 * @method PeriodoLectivo setDescripcion() Sets the current record's "descripcion" value
 * @method PeriodoLectivo setFechaDesde()  Sets the current record's "fecha_desde" value
 * @method PeriodoLectivo setFechaHasta()  Sets the current record's "fecha_hasta" value
 * @method PeriodoLectivo setActivo()      Sets the current record's "activo" value
 * 
 * @package    preinscripcion
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePeriodoLectivo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('periodo_lectivo');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'periodo_lectivo_id',
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
        $this->hasColumn('fecha_desde', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 25,
             ));
        $this->hasColumn('fecha_hasta', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 25,
             ));
        $this->hasColumn('activo', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}