<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Rezagados', 'doctrine');

/**
 * BaseRezagados
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $id_alumno
 * @property string $id_malla
 * @property string $id_uc
 * @property string $seccion
 * @property string $periodo
 * @property string $nota
 * @property string $id_estado
 * @property string $id_tipo_aldea
 * @property string $certificaci�n
 * @property string $idestado
 * @property string $fecha
 * @property string $asignatura
 * @property integer $estudiante_id
 * @property integer $unidad_curricular_id
 * @property integer $pnf_id
 * 
 * @method integer   getId()                   Returns the current record's "id" value
 * @method string    getIdAlumno()             Returns the current record's "id_alumno" value
 * @method string    getIdMalla()              Returns the current record's "id_malla" value
 * @method string    getIdUc()                 Returns the current record's "id_uc" value
 * @method string    getSeccion()              Returns the current record's "seccion" value
 * @method string    getPeriodo()              Returns the current record's "periodo" value
 * @method string    getNota()                 Returns the current record's "nota" value
 * @method string    getIdEstado()             Returns the current record's "id_estado" value
 * @method string    getIdTipoAldea()          Returns the current record's "id_tipo_aldea" value
 * @method string    getCertificaci�()         Returns the current record's "certificaci�" value
 * @method string    getIdestado()             Returns the current record's "idestado" value
 * @method string    getFecha()                Returns the current record's "fecha" value
 * @method string    getAsignatura()           Returns the current record's "asignatura" value
 * @method integer   getEstudianteId()         Returns the current record's "estudiante_id" value
 * @method integer   getUnidadCurricularId()   Returns the current record's "unidad_curricular_id" value
 * @method integer   getPnfId()                Returns the current record's "pnf_id" value
 * @method Rezagados setId()                   Sets the current record's "id" value
 * @method Rezagados setIdAlumno()             Sets the current record's "id_alumno" value
 * @method Rezagados setIdMalla()              Sets the current record's "id_malla" value
 * @method Rezagados setIdUc()                 Sets the current record's "id_uc" value
 * @method Rezagados setSeccion()              Sets the current record's "seccion" value
 * @method Rezagados setPeriodo()              Sets the current record's "periodo" value
 * @method Rezagados setNota()                 Sets the current record's "nota" value
 * @method Rezagados setIdEstado()             Sets the current record's "id_estado" value
 * @method Rezagados setIdTipoAldea()          Sets the current record's "id_tipo_aldea" value
 * @method Rezagados setCertificaci�()         Sets the current record's "certificaci�" value
 * @method Rezagados setIdestado()             Sets the current record's "idestado" value
 * @method Rezagados setFecha()                Sets the current record's "fecha" value
 * @method Rezagados setAsignatura()           Sets the current record's "asignatura" value
 * @method Rezagados setEstudianteId()         Sets the current record's "estudiante_id" value
 * @method Rezagados setUnidadCurricularId()   Sets the current record's "unidad_curricular_id" value
 * @method Rezagados setPnfId()                Sets the current record's "pnf_id" value
 * 
 * @package    preinscripcion
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRezagados extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('rezagados');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => 8,
             ));
        $this->hasColumn('id_alumno', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('id_malla', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('id_uc', 'string', null, array(
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
        $this->hasColumn('periodo', 'string', null, array(
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
        $this->hasColumn('id_estado', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('id_tipo_aldea', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('certificaci�n', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('idestado', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('fecha', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('asignatura', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('estudiante_id', 'integer', 4, array(
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
        $this->hasColumn('pnf_id', 'integer', 4, array(
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