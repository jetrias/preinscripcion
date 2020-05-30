<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Matricula', 'doctrine');

/**
 * BaseMatricula
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $tipo_id
 * @property string $numero_id
 * @property string $primer_apellido
 * @property string $segundo_apellido
 * @property string $nombres
 * @property string $estado
 * @property string $municipio
 * @property string $parroquia
 * @property string $asic
 * @property string $ano_curso
 * @property string $pnf
 * 
 * @method integer   getId()               Returns the current record's "id" value
 * @method string    getTipoId()           Returns the current record's "tipo_id" value
 * @method string    getNumeroId()         Returns the current record's "numero_id" value
 * @method string    getPrimerApellido()   Returns the current record's "primer_apellido" value
 * @method string    getSegundoApellido()  Returns the current record's "segundo_apellido" value
 * @method string    getNombres()          Returns the current record's "nombres" value
 * @method string    getEstado()           Returns the current record's "estado" value
 * @method string    getMunicipio()        Returns the current record's "municipio" value
 * @method string    getParroquia()        Returns the current record's "parroquia" value
 * @method string    getAsic()             Returns the current record's "asic" value
 * @method string    getAnoCurso()         Returns the current record's "ano_curso" value
 * @method string    getPnf()              Returns the current record's "pnf" value
 * @method Matricula setId()               Sets the current record's "id" value
 * @method Matricula setTipoId()           Sets the current record's "tipo_id" value
 * @method Matricula setNumeroId()         Sets the current record's "numero_id" value
 * @method Matricula setPrimerApellido()   Sets the current record's "primer_apellido" value
 * @method Matricula setSegundoApellido()  Sets the current record's "segundo_apellido" value
 * @method Matricula setNombres()          Sets the current record's "nombres" value
 * @method Matricula setEstado()           Sets the current record's "estado" value
 * @method Matricula setMunicipio()        Sets the current record's "municipio" value
 * @method Matricula setParroquia()        Sets the current record's "parroquia" value
 * @method Matricula setAsic()             Sets the current record's "asic" value
 * @method Matricula setAnoCurso()         Sets the current record's "ano_curso" value
 * @method Matricula setPnf()              Sets the current record's "pnf" value
 * 
 * @package    preinscripcion
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMatricula extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('matricula');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => 8,
             ));
        $this->hasColumn('tipo_id', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('numero_id', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('primer_apellido', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('segundo_apellido', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('nombres', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('estado', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('municipio', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('parroquia', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('asic', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('ano_curso', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('pnf', 'string', null, array(
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