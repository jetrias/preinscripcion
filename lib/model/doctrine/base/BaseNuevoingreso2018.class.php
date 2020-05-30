<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Nuevoingreso2018', 'doctrine');

/**
 * BaseNuevoingreso2018
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $tipo_identificacion
 * @property string $identificacion
 * @property string $primer_nombre
 * @property string $segundo_nombre
 * @property string $primer_apellido
 * @property string $segundo_apellido
 * @property integer $sexo_id
 * @property date $fecha_nacimiento
 * @property integer $pais_origen_id
 * @property integer $estado_id
 * @property integer $municipio_id
 * @property integer $parroquia_id
 * @property string $direccion
 * @property string $punto_referencia
 * @property integer $asic_estado_id
 * @property integer $asic_municipio_id
 * @property integer $asic_id
 * @property decimal $telefono
 * @property decimal $telefono_casa
 * @property string $correo_electronico
 * @property string $persona_contacto
 * @property integer $estado_civil_id
 * @property decimal $n_hijos
 * @property string $ano_curso
 * @property string $cohorte
 * @property integer $etnia_indigena_id
 * @property boolean $elam
 * @property string $idmatricula
 * @property string $trabaja
 * @property string $lugar
 * @property string $horario
 * @property string $ingresos
 * @property decimal $telefono_trabajo
 * @property string $centro_poblado_id
 * @property string $foto
 * @property string $tipo_empresa
 * @property string $estatus
 * @property string $banco
 * @property string $tipo_cuenta
 * @property string $cuenta
 * @property boolean $cta_social
 * @property boolean $cta_personal
 * @property boolean $no_cta
 * @property boolean $n_ingreso
 * @property boolean $opsu
 * @property boolean $postulado
 * @property date $registro
 * @property boolean $verificado
 * @property date $fecha_verificacion
 * @property string $notas
 * @property string $pnf
 * @property integer $codigo_tlf_id
 * @property integer $codigo_tlf_casa_id
 * @property string $parentesco
 * @property integer $codigo_tlf_contacto
 * @property decimal $telefono_contacto
 * @property string $situacion_academica
 * @property string $carnet_patria
 * @property string $serial_carnet_patria
 * @property string $dedicacion_laboral
 * @property boolean $lgbt
 * @property boolean $afrodescendiente
 * @property integer $asic_parroquia_id
 * @property integer $asic_hab_id
 * @property integer $mod_ingreso_id
 * @property boolean $convocatoria
 * 
 * @method integer          getId()                   Returns the current record's "id" value
 * @method string           getTipoIdentificacion()   Returns the current record's "tipo_identificacion" value
 * @method string           getIdentificacion()       Returns the current record's "identificacion" value
 * @method string           getPrimerNombre()         Returns the current record's "primer_nombre" value
 * @method string           getSegundoNombre()        Returns the current record's "segundo_nombre" value
 * @method string           getPrimerApellido()       Returns the current record's "primer_apellido" value
 * @method string           getSegundoApellido()      Returns the current record's "segundo_apellido" value
 * @method integer          getSexoId()               Returns the current record's "sexo_id" value
 * @method date             getFechaNacimiento()      Returns the current record's "fecha_nacimiento" value
 * @method integer          getPaisOrigenId()         Returns the current record's "pais_origen_id" value
 * @method integer          getEstadoId()             Returns the current record's "estado_id" value
 * @method integer          getMunicipioId()          Returns the current record's "municipio_id" value
 * @method integer          getParroquiaId()          Returns the current record's "parroquia_id" value
 * @method string           getDireccion()            Returns the current record's "direccion" value
 * @method string           getPuntoReferencia()      Returns the current record's "punto_referencia" value
 * @method integer          getAsicEstadoId()         Returns the current record's "asic_estado_id" value
 * @method integer          getAsicMunicipioId()      Returns the current record's "asic_municipio_id" value
 * @method integer          getAsicId()               Returns the current record's "asic_id" value
 * @method decimal          getTelefono()             Returns the current record's "telefono" value
 * @method decimal          getTelefonoCasa()         Returns the current record's "telefono_casa" value
 * @method string           getCorreoElectronico()    Returns the current record's "correo_electronico" value
 * @method string           getPersonaContacto()      Returns the current record's "persona_contacto" value
 * @method integer          getEstadoCivilId()        Returns the current record's "estado_civil_id" value
 * @method decimal          getNHijos()               Returns the current record's "n_hijos" value
 * @method string           getAnoCurso()             Returns the current record's "ano_curso" value
 * @method string           getCohorte()              Returns the current record's "cohorte" value
 * @method integer          getEtniaIndigenaId()      Returns the current record's "etnia_indigena_id" value
 * @method boolean          getElam()                 Returns the current record's "elam" value
 * @method string           getIdmatricula()          Returns the current record's "idmatricula" value
 * @method string           getTrabaja()              Returns the current record's "trabaja" value
 * @method string           getLugar()                Returns the current record's "lugar" value
 * @method string           getHorario()              Returns the current record's "horario" value
 * @method string           getIngresos()             Returns the current record's "ingresos" value
 * @method decimal          getTelefonoTrabajo()      Returns the current record's "telefono_trabajo" value
 * @method string           getCentroPobladoId()      Returns the current record's "centro_poblado_id" value
 * @method string           getFoto()                 Returns the current record's "foto" value
 * @method string           getTipoEmpresa()          Returns the current record's "tipo_empresa" value
 * @method string           getEstatus()              Returns the current record's "estatus" value
 * @method string           getBanco()                Returns the current record's "banco" value
 * @method string           getTipoCuenta()           Returns the current record's "tipo_cuenta" value
 * @method string           getCuenta()               Returns the current record's "cuenta" value
 * @method boolean          getCtaSocial()            Returns the current record's "cta_social" value
 * @method boolean          getCtaPersonal()          Returns the current record's "cta_personal" value
 * @method boolean          getNoCta()                Returns the current record's "no_cta" value
 * @method boolean          getNIngreso()             Returns the current record's "n_ingreso" value
 * @method boolean          getOpsu()                 Returns the current record's "opsu" value
 * @method boolean          getPostulado()            Returns the current record's "postulado" value
 * @method date             getRegistro()             Returns the current record's "registro" value
 * @method boolean          getVerificado()           Returns the current record's "verificado" value
 * @method date             getFechaVerificacion()    Returns the current record's "fecha_verificacion" value
 * @method string           getNotas()                Returns the current record's "notas" value
 * @method string           getPnf()                  Returns the current record's "pnf" value
 * @method integer          getCodigoTlfId()          Returns the current record's "codigo_tlf_id" value
 * @method integer          getCodigoTlfCasaId()      Returns the current record's "codigo_tlf_casa_id" value
 * @method string           getParentesco()           Returns the current record's "parentesco" value
 * @method integer          getCodigoTlfContacto()    Returns the current record's "codigo_tlf_contacto" value
 * @method decimal          getTelefonoContacto()     Returns the current record's "telefono_contacto" value
 * @method string           getSituacionAcademica()   Returns the current record's "situacion_academica" value
 * @method string           getCarnetPatria()         Returns the current record's "carnet_patria" value
 * @method string           getSerialCarnetPatria()   Returns the current record's "serial_carnet_patria" value
 * @method string           getDedicacionLaboral()    Returns the current record's "dedicacion_laboral" value
 * @method boolean          getLgbt()                 Returns the current record's "lgbt" value
 * @method boolean          getAfrodescendiente()     Returns the current record's "afrodescendiente" value
 * @method integer          getAsicParroquiaId()      Returns the current record's "asic_parroquia_id" value
 * @method integer          getAsicHabId()            Returns the current record's "asic_hab_id" value
 * @method integer          getModIngresoId()         Returns the current record's "mod_ingreso_id" value
 * @method boolean          getConvocatoria()         Returns the current record's "convocatoria" value
 * @method Nuevoingreso2018 setId()                   Sets the current record's "id" value
 * @method Nuevoingreso2018 setTipoIdentificacion()   Sets the current record's "tipo_identificacion" value
 * @method Nuevoingreso2018 setIdentificacion()       Sets the current record's "identificacion" value
 * @method Nuevoingreso2018 setPrimerNombre()         Sets the current record's "primer_nombre" value
 * @method Nuevoingreso2018 setSegundoNombre()        Sets the current record's "segundo_nombre" value
 * @method Nuevoingreso2018 setPrimerApellido()       Sets the current record's "primer_apellido" value
 * @method Nuevoingreso2018 setSegundoApellido()      Sets the current record's "segundo_apellido" value
 * @method Nuevoingreso2018 setSexoId()               Sets the current record's "sexo_id" value
 * @method Nuevoingreso2018 setFechaNacimiento()      Sets the current record's "fecha_nacimiento" value
 * @method Nuevoingreso2018 setPaisOrigenId()         Sets the current record's "pais_origen_id" value
 * @method Nuevoingreso2018 setEstadoId()             Sets the current record's "estado_id" value
 * @method Nuevoingreso2018 setMunicipioId()          Sets the current record's "municipio_id" value
 * @method Nuevoingreso2018 setParroquiaId()          Sets the current record's "parroquia_id" value
 * @method Nuevoingreso2018 setDireccion()            Sets the current record's "direccion" value
 * @method Nuevoingreso2018 setPuntoReferencia()      Sets the current record's "punto_referencia" value
 * @method Nuevoingreso2018 setAsicEstadoId()         Sets the current record's "asic_estado_id" value
 * @method Nuevoingreso2018 setAsicMunicipioId()      Sets the current record's "asic_municipio_id" value
 * @method Nuevoingreso2018 setAsicId()               Sets the current record's "asic_id" value
 * @method Nuevoingreso2018 setTelefono()             Sets the current record's "telefono" value
 * @method Nuevoingreso2018 setTelefonoCasa()         Sets the current record's "telefono_casa" value
 * @method Nuevoingreso2018 setCorreoElectronico()    Sets the current record's "correo_electronico" value
 * @method Nuevoingreso2018 setPersonaContacto()      Sets the current record's "persona_contacto" value
 * @method Nuevoingreso2018 setEstadoCivilId()        Sets the current record's "estado_civil_id" value
 * @method Nuevoingreso2018 setNHijos()               Sets the current record's "n_hijos" value
 * @method Nuevoingreso2018 setAnoCurso()             Sets the current record's "ano_curso" value
 * @method Nuevoingreso2018 setCohorte()              Sets the current record's "cohorte" value
 * @method Nuevoingreso2018 setEtniaIndigenaId()      Sets the current record's "etnia_indigena_id" value
 * @method Nuevoingreso2018 setElam()                 Sets the current record's "elam" value
 * @method Nuevoingreso2018 setIdmatricula()          Sets the current record's "idmatricula" value
 * @method Nuevoingreso2018 setTrabaja()              Sets the current record's "trabaja" value
 * @method Nuevoingreso2018 setLugar()                Sets the current record's "lugar" value
 * @method Nuevoingreso2018 setHorario()              Sets the current record's "horario" value
 * @method Nuevoingreso2018 setIngresos()             Sets the current record's "ingresos" value
 * @method Nuevoingreso2018 setTelefonoTrabajo()      Sets the current record's "telefono_trabajo" value
 * @method Nuevoingreso2018 setCentroPobladoId()      Sets the current record's "centro_poblado_id" value
 * @method Nuevoingreso2018 setFoto()                 Sets the current record's "foto" value
 * @method Nuevoingreso2018 setTipoEmpresa()          Sets the current record's "tipo_empresa" value
 * @method Nuevoingreso2018 setEstatus()              Sets the current record's "estatus" value
 * @method Nuevoingreso2018 setBanco()                Sets the current record's "banco" value
 * @method Nuevoingreso2018 setTipoCuenta()           Sets the current record's "tipo_cuenta" value
 * @method Nuevoingreso2018 setCuenta()               Sets the current record's "cuenta" value
 * @method Nuevoingreso2018 setCtaSocial()            Sets the current record's "cta_social" value
 * @method Nuevoingreso2018 setCtaPersonal()          Sets the current record's "cta_personal" value
 * @method Nuevoingreso2018 setNoCta()                Sets the current record's "no_cta" value
 * @method Nuevoingreso2018 setNIngreso()             Sets the current record's "n_ingreso" value
 * @method Nuevoingreso2018 setOpsu()                 Sets the current record's "opsu" value
 * @method Nuevoingreso2018 setPostulado()            Sets the current record's "postulado" value
 * @method Nuevoingreso2018 setRegistro()             Sets the current record's "registro" value
 * @method Nuevoingreso2018 setVerificado()           Sets the current record's "verificado" value
 * @method Nuevoingreso2018 setFechaVerificacion()    Sets the current record's "fecha_verificacion" value
 * @method Nuevoingreso2018 setNotas()                Sets the current record's "notas" value
 * @method Nuevoingreso2018 setPnf()                  Sets the current record's "pnf" value
 * @method Nuevoingreso2018 setCodigoTlfId()          Sets the current record's "codigo_tlf_id" value
 * @method Nuevoingreso2018 setCodigoTlfCasaId()      Sets the current record's "codigo_tlf_casa_id" value
 * @method Nuevoingreso2018 setParentesco()           Sets the current record's "parentesco" value
 * @method Nuevoingreso2018 setCodigoTlfContacto()    Sets the current record's "codigo_tlf_contacto" value
 * @method Nuevoingreso2018 setTelefonoContacto()     Sets the current record's "telefono_contacto" value
 * @method Nuevoingreso2018 setSituacionAcademica()   Sets the current record's "situacion_academica" value
 * @method Nuevoingreso2018 setCarnetPatria()         Sets the current record's "carnet_patria" value
 * @method Nuevoingreso2018 setSerialCarnetPatria()   Sets the current record's "serial_carnet_patria" value
 * @method Nuevoingreso2018 setDedicacionLaboral()    Sets the current record's "dedicacion_laboral" value
 * @method Nuevoingreso2018 setLgbt()                 Sets the current record's "lgbt" value
 * @method Nuevoingreso2018 setAfrodescendiente()     Sets the current record's "afrodescendiente" value
 * @method Nuevoingreso2018 setAsicParroquiaId()      Sets the current record's "asic_parroquia_id" value
 * @method Nuevoingreso2018 setAsicHabId()            Sets the current record's "asic_hab_id" value
 * @method Nuevoingreso2018 setModIngresoId()         Sets the current record's "mod_ingreso_id" value
 * @method Nuevoingreso2018 setConvocatoria()         Sets the current record's "convocatoria" value
 * 
 * @package    preinscripcion
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseNuevoingreso2018 extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('nuevoingreso_2018');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('tipo_identificacion', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('identificacion', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('primer_nombre', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('segundo_nombre', 'string', null, array(
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
        $this->hasColumn('sexo_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('fecha_nacimiento', 'date', 25, array(
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
             'notnull' => false,
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
        $this->hasColumn('punto_referencia', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('asic_estado_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('asic_municipio_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('asic_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('telefono', 'decimal', 18, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 18,
             ));
        $this->hasColumn('telefono_casa', 'decimal', 18, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 18,
             ));
        $this->hasColumn('correo_electronico', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('persona_contacto', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('estado_civil_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('n_hijos', 'decimal', 18, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 18,
             ));
        $this->hasColumn('ano_curso', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('cohorte', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('etnia_indigena_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('elam', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('idmatricula', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('trabaja', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('lugar', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('horario', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('ingresos', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('telefono_trabajo', 'decimal', 18, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 18,
             ));
        $this->hasColumn('centro_poblado_id', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('foto', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('tipo_empresa', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('estatus', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('banco', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('tipo_cuenta', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('cuenta', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('cta_social', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('cta_personal', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('no_cta', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('n_ingreso', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('opsu', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('postulado', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('registro', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 25,
             ));
        $this->hasColumn('verificado', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('fecha_verificacion', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 25,
             ));
        $this->hasColumn('notas', 'string', null, array(
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
        $this->hasColumn('codigo_tlf_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('codigo_tlf_casa_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('parentesco', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('codigo_tlf_contacto', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('telefono_contacto', 'decimal', 18, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 18,
             ));
        $this->hasColumn('situacion_academica', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('carnet_patria', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('serial_carnet_patria', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('dedicacion_laboral', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('lgbt', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('afrodescendiente', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('asic_parroquia_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('asic_hab_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('mod_ingreso_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('convocatoria', 'boolean', 1, array(
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