<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('PreinscripcionCurso', 'doctrine');

/**
 * BasePreinscripcionCurso
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nacionalidad
 * @property string $identificacion
 * @property string $pnombre
 * @property string $snombre
 * @property string $papellido
 * @property string $sapellido
 * @property string $genero
 * @property date $fnac
 * @property integer $pais_origen_id
 * @property integer $estado_id
 * @property integer $municipio_id
 * @property integer $parroquia_id
 * @property string $direccion
 * @property string $telefono
 * @property string $tlf_casa
 * @property string $tlf_contacto
 * @property string $correo
 * @property string $twitter
 * @property boolean $seleccionado
 * @property boolean $transferido
 * @property integer $pnf_id
 * @property Estado $Estado
 * @property Municipio $Municipio
 * @property PaisOrigen $PaisOrigen
 * @property Parroquia $Parroquia
 * @property Pnf $Pnf
 * 
 * @method integer             getId()             Returns the current record's "id" value
 * @method string              getNacionalidad()   Returns the current record's "nacionalidad" value
 * @method string              getIdentificacion() Returns the current record's "identificacion" value
 * @method string              getPnombre()        Returns the current record's "pnombre" value
 * @method string              getSnombre()        Returns the current record's "snombre" value
 * @method string              getPapellido()      Returns the current record's "papellido" value
 * @method string              getSapellido()      Returns the current record's "sapellido" value
 * @method string              getGenero()         Returns the current record's "genero" value
 * @method date                getFnac()           Returns the current record's "fnac" value
 * @method integer             getPaisOrigenId()   Returns the current record's "pais_origen_id" value
 * @method integer             getEstadoId()       Returns the current record's "estado_id" value
 * @method integer             getMunicipioId()    Returns the current record's "municipio_id" value
 * @method integer             getParroquiaId()    Returns the current record's "parroquia_id" value
 * @method string              getDireccion()      Returns the current record's "direccion" value
 * @method string              getTelefono()       Returns the current record's "telefono" value
 * @method string              getTlfCasa()        Returns the current record's "tlf_casa" value
 * @method string              getTlfContacto()    Returns the current record's "tlf_contacto" value
 * @method string              getCorreo()         Returns the current record's "correo" value
 * @method string              getTwitter()        Returns the current record's "twitter" value
 * @method boolean             getSeleccionado()   Returns the current record's "seleccionado" value
 * @method boolean             getTransferido()    Returns the current record's "transferido" value
 * @method integer             getPnfId()          Returns the current record's "pnf_id" value
 * @method Estado              getEstado()         Returns the current record's "Estado" value
 * @method Municipio           getMunicipio()      Returns the current record's "Municipio" value
 * @method PaisOrigen          getPaisOrigen()     Returns the current record's "PaisOrigen" value
 * @method Parroquia           getParroquia()      Returns the current record's "Parroquia" value
 * @method Pnf                 getPnf()            Returns the current record's "Pnf" value
 * @method PreinscripcionCurso setId()             Sets the current record's "id" value
 * @method PreinscripcionCurso setNacionalidad()   Sets the current record's "nacionalidad" value
 * @method PreinscripcionCurso setIdentificacion() Sets the current record's "identificacion" value
 * @method PreinscripcionCurso setPnombre()        Sets the current record's "pnombre" value
 * @method PreinscripcionCurso setSnombre()        Sets the current record's "snombre" value
 * @method PreinscripcionCurso setPapellido()      Sets the current record's "papellido" value
 * @method PreinscripcionCurso setSapellido()      Sets the current record's "sapellido" value
 * @method PreinscripcionCurso setGenero()         Sets the current record's "genero" value
 * @method PreinscripcionCurso setFnac()           Sets the current record's "fnac" value
 * @method PreinscripcionCurso setPaisOrigenId()   Sets the current record's "pais_origen_id" value
 * @method PreinscripcionCurso setEstadoId()       Sets the current record's "estado_id" value
 * @method PreinscripcionCurso setMunicipioId()    Sets the current record's "municipio_id" value
 * @method PreinscripcionCurso setParroquiaId()    Sets the current record's "parroquia_id" value
 * @method PreinscripcionCurso setDireccion()      Sets the current record's "direccion" value
 * @method PreinscripcionCurso setTelefono()       Sets the current record's "telefono" value
 * @method PreinscripcionCurso setTlfCasa()        Sets the current record's "tlf_casa" value
 * @method PreinscripcionCurso setTlfContacto()    Sets the current record's "tlf_contacto" value
 * @method PreinscripcionCurso setCorreo()         Sets the current record's "correo" value
 * @method PreinscripcionCurso setTwitter()        Sets the current record's "twitter" value
 * @method PreinscripcionCurso setSeleccionado()   Sets the current record's "seleccionado" value
 * @method PreinscripcionCurso setTransferido()    Sets the current record's "transferido" value
 * @method PreinscripcionCurso setPnfId()          Sets the current record's "pnf_id" value
 * @method PreinscripcionCurso setEstado()         Sets the current record's "Estado" value
 * @method PreinscripcionCurso setMunicipio()      Sets the current record's "Municipio" value
 * @method PreinscripcionCurso setPaisOrigen()     Sets the current record's "PaisOrigen" value
 * @method PreinscripcionCurso setParroquia()      Sets the current record's "Parroquia" value
 * @method PreinscripcionCurso setPnf()            Sets the current record's "Pnf" value
 * 
 * @package    preinscripcion
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePreinscripcionCurso extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('preinscripcion_curso');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'preinscripcion_curso_id',
             'length' => 4,
             ));
        $this->hasColumn('nacionalidad', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('identificacion', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('pnombre', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('snombre', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('papellido', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('sapellido', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('genero', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('fnac', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 25,
             ));
        $this->hasColumn('pais_origen_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('estado_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('municipio_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('parroquia_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('direccion', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('telefono', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('tlf_casa', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('tlf_contacto', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('correo', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('twitter', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('seleccionado', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('transferido', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 1,
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
        $this->hasOne('Estado', array(
             'local' => 'estado_id',
             'foreign' => 'id'));

        $this->hasOne('Municipio', array(
             'local' => 'municipio_id',
             'foreign' => 'id'));

        $this->hasOne('PaisOrigen', array(
             'local' => 'pais_origen_id',
             'foreign' => 'id'));

        $this->hasOne('Parroquia', array(
             'local' => 'parroquia_id',
             'foreign' => 'id'));

        $this->hasOne('Pnf', array(
             'local' => 'pnf_id',
             'foreign' => 'id'));
    }
}