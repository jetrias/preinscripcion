<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Traslado', 'doctrine');

/**
 * BaseTraslado
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $estudiante_id
 * @property integer $estado_emisor_id
 * @property integer $municipio_emisor_id
 * @property integer $asic_emisor_id
 * @property integer $estado_receptor_id
 * @property integer $municipio_receptor_id
 * @property integer $asic_receptor_id
 * @property date $fecha_emision
 * @property date $fecha_recepcion
 * @property string $tipo_traslado
 * @property string $estatus_expediente
 * @property string $observacion
 * @property Estado $Estado
 * @property Estudiante $Estudiante
 * @property Estado $Estado_3
 * @property Municipio $Municipio
 * @property Municipio $Municipio_5
 * @property Asic $Asic
 * @property Asic $Asic_7
 * 
 * @method integer    getId()                    Returns the current record's "id" value
 * @method integer    getEstudianteId()          Returns the current record's "estudiante_id" value
 * @method integer    getEstadoEmisorId()        Returns the current record's "estado_emisor_id" value
 * @method integer    getMunicipioEmisorId()     Returns the current record's "municipio_emisor_id" value
 * @method integer    getAsicEmisorId()          Returns the current record's "asic_emisor_id" value
 * @method integer    getEstadoReceptorId()      Returns the current record's "estado_receptor_id" value
 * @method integer    getMunicipioReceptorId()   Returns the current record's "municipio_receptor_id" value
 * @method integer    getAsicReceptorId()        Returns the current record's "asic_receptor_id" value
 * @method date       getFechaEmision()          Returns the current record's "fecha_emision" value
 * @method date       getFechaRecepcion()        Returns the current record's "fecha_recepcion" value
 * @method string     getTipoTraslado()          Returns the current record's "tipo_traslado" value
 * @method string     getEstatusExpediente()     Returns the current record's "estatus_expediente" value
 * @method string     getObservacion()           Returns the current record's "observacion" value
 * @method Estado     getEstado()                Returns the current record's "Estado" value
 * @method Estudiante getEstudiante()            Returns the current record's "Estudiante" value
 * @method Estado     getEstado3()               Returns the current record's "Estado_3" value
 * @method Municipio  getMunicipio()             Returns the current record's "Municipio" value
 * @method Municipio  getMunicipio5()            Returns the current record's "Municipio_5" value
 * @method Asic       getAsic()                  Returns the current record's "Asic" value
 * @method Asic       getAsic7()                 Returns the current record's "Asic_7" value
 * @method Traslado   setId()                    Sets the current record's "id" value
 * @method Traslado   setEstudianteId()          Sets the current record's "estudiante_id" value
 * @method Traslado   setEstadoEmisorId()        Sets the current record's "estado_emisor_id" value
 * @method Traslado   setMunicipioEmisorId()     Sets the current record's "municipio_emisor_id" value
 * @method Traslado   setAsicEmisorId()          Sets the current record's "asic_emisor_id" value
 * @method Traslado   setEstadoReceptorId()      Sets the current record's "estado_receptor_id" value
 * @method Traslado   setMunicipioReceptorId()   Sets the current record's "municipio_receptor_id" value
 * @method Traslado   setAsicReceptorId()        Sets the current record's "asic_receptor_id" value
 * @method Traslado   setFechaEmision()          Sets the current record's "fecha_emision" value
 * @method Traslado   setFechaRecepcion()        Sets the current record's "fecha_recepcion" value
 * @method Traslado   setTipoTraslado()          Sets the current record's "tipo_traslado" value
 * @method Traslado   setEstatusExpediente()     Sets the current record's "estatus_expediente" value
 * @method Traslado   setObservacion()           Sets the current record's "observacion" value
 * @method Traslado   setEstado()                Sets the current record's "Estado" value
 * @method Traslado   setEstudiante()            Sets the current record's "Estudiante" value
 * @method Traslado   setEstado3()               Sets the current record's "Estado_3" value
 * @method Traslado   setMunicipio()             Sets the current record's "Municipio" value
 * @method Traslado   setMunicipio5()            Sets the current record's "Municipio_5" value
 * @method Traslado   setAsic()                  Sets the current record's "Asic" value
 * @method Traslado   setAsic7()                 Sets the current record's "Asic_7" value
 * 
 * @package    preinscripcion
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTraslado extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('traslado');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'traslado_id',
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
        $this->hasColumn('estado_emisor_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('municipio_emisor_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('asic_emisor_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('estado_receptor_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('municipio_receptor_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('asic_receptor_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('fecha_emision', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 25,
             ));
        $this->hasColumn('fecha_recepcion', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 25,
             ));
        $this->hasColumn('tipo_traslado', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('estatus_expediente', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('observacion', 'string', null, array(
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
        $this->hasOne('Estado', array(
             'local' => 'estado_emisor_id',
             'foreign' => 'id'));

        $this->hasOne('Estudiante', array(
             'local' => 'estudiante_id',
             'foreign' => 'id'));

        $this->hasOne('Estado as Estado_3', array(
             'local' => 'estado_receptor_id',
             'foreign' => 'id'));

        $this->hasOne('Municipio', array(
             'local' => 'municipio_emisor_id',
             'foreign' => 'id'));

        $this->hasOne('Municipio as Municipio_5', array(
             'local' => 'municipio_receptor_id',
             'foreign' => 'id'));

        $this->hasOne('Asic', array(
             'local' => 'asic_emisor_id',
             'foreign' => 'id'));

        $this->hasOne('Asic as Asic_7', array(
             'local' => 'asic_receptor_id',
             'foreign' => 'id'));
    }
}