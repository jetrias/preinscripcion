<?php

/**
 * EstudianteTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class EstudianteTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object EstudianteTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Estudiante');
    }
        public static function getEstudianteEstado($estado_id){
                $sql = "SELECT a.*,c.descripcion as estado,d.descripcion as pnf,
                    e.descripcion as municipio,f.descripcion as parroquia
                FROM preinscripcion_curso a 
                inner join estado c on a.estado_id=c.id
                inner join pnf d on a.pnf_id=d.id
                left join municipio e on a.municipio_id=e.id
                left join parroquia f on a.parroquia_id=f.id
                where a.estado_id='$estado_id' order by a.identificacion";
        $q = Doctrine_Manager::getInstance()->getCurrentConnection()->fetchAssoc($sql);
        return $q;
    }
            public static function getEstudiante(){
                $sql = "SELECT a.*,c.descripcion as estado,d.descripcion as pnf,
                    e.descripcion as municipio,f.descripcion as parroquia
                FROM preinscripcion_curso a 
                inner join estado c on a.estado_id=c.id
                inner join pnf d on a.pnf_id=d.id
                left join municipio e on a.municipio_id=e.id
                left join parroquia f on a.parroquia_id=f.id
                 order by a.identificacion";
        $q = Doctrine_Manager::getInstance()->getCurrentConnection()->fetchAssoc($sql);
        return $q;
    }
}