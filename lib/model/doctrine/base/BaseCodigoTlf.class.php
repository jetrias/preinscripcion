<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('CodigoTlf', 'doctrine');

/**
 * BaseCodigoTlf
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $codigo
 * @property string $tipo
 * @property Doctrine_Collection $Estudiante
 * @property Doctrine_Collection $Estudiante_7
 * @property Doctrine_Collection $Estudiante_8
 * 
 * @method integer             getId()           Returns the current record's "id" value
 * @method string              getCodigo()       Returns the current record's "codigo" value
 * @method string              getTipo()         Returns the current record's "tipo" value
 * @method Doctrine_Collection getEstudiante()   Returns the current record's "Estudiante" collection
 * @method Doctrine_Collection getEstudiante7()  Returns the current record's "Estudiante_7" collection
 * @method Doctrine_Collection getEstudiante8()  Returns the current record's "Estudiante_8" collection
 * @method CodigoTlf           setId()           Sets the current record's "id" value
 * @method CodigoTlf           setCodigo()       Sets the current record's "codigo" value
 * @method CodigoTlf           setTipo()         Sets the current record's "tipo" value
 * @method CodigoTlf           setEstudiante()   Sets the current record's "Estudiante" collection
 * @method CodigoTlf           setEstudiante7()  Sets the current record's "Estudiante_7" collection
 * @method CodigoTlf           setEstudiante8()  Sets the current record's "Estudiante_8" collection
 * 
 * @package    preinscripcion
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCodigoTlf extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('codigo_tlf');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'codigo_tlf_id',
             'length' => 4,
             ));
        $this->hasColumn('codigo', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('tipo', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Estudiante', array(
             'local' => 'id',
             'foreign' => 'codigo_tlf_casa_id'));

        $this->hasMany('Estudiante as Estudiante_7', array(
             'local' => 'id',
             'foreign' => 'codigo_tlf_contacto'));

        $this->hasMany('Estudiante as Estudiante_8', array(
             'local' => 'id',
             'foreign' => 'codigo_tlf_id'));
    }
}