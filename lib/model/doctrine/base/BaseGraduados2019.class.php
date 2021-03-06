<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Graduados2019', 'doctrine');

/**
 * BaseGraduados2019
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $cedula
 * @property string $univ
 * 
 * @method integer       getId()     Returns the current record's "id" value
 * @method string        getCedula() Returns the current record's "cedula" value
 * @method string        getUniv()   Returns the current record's "univ" value
 * @method Graduados2019 setId()     Sets the current record's "id" value
 * @method Graduados2019 setCedula() Sets the current record's "cedula" value
 * @method Graduados2019 setUniv()   Sets the current record's "univ" value
 * 
 * @package    preinscripcion
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGraduados2019 extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('graduados2019');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => 8,
             ));
        $this->hasColumn('cedula', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('univ', 'string', null, array(
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
        
    }
}