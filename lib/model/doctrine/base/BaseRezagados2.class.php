<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Rezagados2', 'doctrine');

/**
 * BaseRezagados2
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $periodo
 * @property string $pasaporte
 * @property integer $codigo_carrera
 * @property string $unidad_curricular
 * @property string $seccion
 * @property string $nota
 * @property string $cedula
 * @property integer $pnf_id
 * @property integer $estudiante_id
 * @property integer $codigo2
 * @property integer $unidad_curricular_id
 * 
 * @method integer    getId()                   Returns the current record's "id" value
 * @method string     getPeriodo()              Returns the current record's "periodo" value
 * @method string     getPasaporte()            Returns the current record's "pasaporte" value
 * @method integer    getCodigoCarrera()        Returns the current record's "codigo_carrera" value
 * @method string     getUnidadCurricular()     Returns the current record's "unidad_curricular" value
 * @method string     getSeccion()              Returns the current record's "seccion" value
 * @method string     getNota()                 Returns the current record's "nota" value
 * @method string     getCedula()               Returns the current record's "cedula" value
 * @method integer    getPnfId()                Returns the current record's "pnf_id" value
 * @method integer    getEstudianteId()         Returns the current record's "estudiante_id" value
 * @method integer    getCodigo2()              Returns the current record's "codigo2" value
 * @method integer    getUnidadCurricularId()   Returns the current record's "unidad_curricular_id" value
 * @method Rezagados2 setId()                   Sets the current record's "id" value
 * @method Rezagados2 setPeriodo()              Sets the current record's "periodo" value
 * @method Rezagados2 setPasaporte()            Sets the current record's "pasaporte" value
 * @method Rezagados2 setCodigoCarrera()        Sets the current record's "codigo_carrera" value
 * @method Rezagados2 setUnidadCurricular()     Sets the current record's "unidad_curricular" value
 * @method Rezagados2 setSeccion()              Sets the current record's "seccion" value
 * @method Rezagados2 setNota()                 Sets the current record's "nota" value
 * @method Rezagados2 setCedula()               Sets the current record's "cedula" value
 * @method Rezagados2 setPnfId()                Sets the current record's "pnf_id" value
 * @method Rezagados2 setEstudianteId()         Sets the current record's "estudiante_id" value
 * @method Rezagados2 setCodigo2()              Sets the current record's "codigo2" value
 * @method Rezagados2 setUnidadCurricularId()   Sets the current record's "unidad_curricular_id" value
 * 
 * @package    preinscripcion
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRezagados2 extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('rezagados2');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => 8,
             ));
        $this->hasColumn('periodo', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('pasaporte', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('codigo_carrera', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('unidad_curricular', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('seccion', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('nota', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('cedula', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('pnf_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('estudiante_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('codigo2', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('unidad_curricular_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}