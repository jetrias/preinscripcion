<?php

/**
 * EstadoTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class EstadoTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object EstadoTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Estado');
    }
    public static function getEstado(){
                $sql = "SELECT *
                FROM estado order by id";
        $q = Doctrine_Manager::getInstance()->getCurrentConnection()->fetchAssoc($sql);
        return $q;
    }
}