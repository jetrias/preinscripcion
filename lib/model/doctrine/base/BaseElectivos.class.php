<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Electivos', 'doctrine');

/**
 * BaseElectivos
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $id_alumno
 * @property string $id_malla
 * @property string $id_uc
 * @property string $seccion
 * @property string $id_periodo
 * @property string $fecha_re
 * @property string $hora_re
 * @property string $nota
 * @property string $asistencia
 * @property string $docente
 * @property string $id_tipo_aldea
 * @property string $certificacion
 * @property string $estado
 * 
 * @method integer   getId()            Returns the current record's "id" value
 * @method string    getIdAlumno()      Returns the current record's "id_alumno" value
 * @method string    getIdMalla()       Returns the current record's "id_malla" value
 * @method string    getIdUc()          Returns the current record's "id_uc" value
 * @method string    getSeccion()       Returns the current record's "seccion" value
 * @method string    getIdPeriodo()     Returns the current record's "id_periodo" value
 * @method string    getFechaRe()       Returns the current record's "fecha_re" value
 * @method string    getHoraRe()        Returns the current record's "hora_re" value
 * @method string    getNota()          Returns the current record's "nota" value
 * @method string    getAsistencia()    Returns the current record's "asistencia" value
 * @method string    getDocente()       Returns the current record's "docente" value
 * @method string    getIdTipoAldea()   Returns the current record's "id_tipo_aldea" value
 * @method string    getCertificacion() Returns the current record's "certificacion" value
 * @method string    getEstado()        Returns the current record's "estado" value
 * @method Electivos setId()            Sets the current record's "id" value
 * @method Electivos setIdAlumno()      Sets the current record's "id_alumno" value
 * @method Electivos setIdMalla()       Sets the current record's "id_malla" value
 * @method Electivos setIdUc()          Sets the current record's "id_uc" value
 * @method Electivos setSeccion()       Sets the current record's "seccion" value
 * @method Electivos setIdPeriodo()     Sets the current record's "id_periodo" value
 * @method Electivos setFechaRe()       Sets the current record's "fecha_re" value
 * @method Electivos setHoraRe()        Sets the current record's "hora_re" value
 * @method Electivos setNota()          Sets the current record's "nota" value
 * @method Electivos setAsistencia()    Sets the current record's "asistencia" value
 * @method Electivos setDocente()       Sets the current record's "docente" value
 * @method Electivos setIdTipoAldea()   Sets the current record's "id_tipo_aldea" value
 * @method Electivos setCertificacion() Sets the current record's "certificacion" value
 * @method Electivos setEstado()        Sets the current record's "estado" value
 * 
 * @package    preinscripcion
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseElectivos extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('electivos');
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
        $this->hasColumn('id_periodo', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('fecha_re', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('hora_re', 'string', null, array(
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
        $this->hasColumn('asistencia', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('docente', 'string', null, array(
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
        $this->hasColumn('certificacion', 'string', null, array(
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
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}