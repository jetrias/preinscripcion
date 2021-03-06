<?php

require_once dirname(__FILE__).'/../lib/preinscripcion_cursoGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/preinscripcion_cursoGeneratorHelper.class.php';

/**
 * preinscripcion_curso actions.
 *
 * @package    preinscripcion
 * @subpackage preinscripcion_curso
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class preinscripcion_cursoActions extends autoPreinscripcion_cursoActions
{
    public function executeGeneralPnf(){
        $this->pnf=  PreinscripcionCursoTable::getTotalPnf();
    }public function executePnfEstado(){
        $this->pnf=  PreinscripcionCursoTable::getTotalPnfEstado();
    }
    public function executeEstado(){
        $this->estado=  EstadoTable::getEstado();
    }
    public function executeMostrarListado(sfWebRequest $request){
        
        $this->estado = $this->getRequestParameter('estado');
        $this->estudiantes =  EstudianteTable::getEstudianteEstado($this->estado);
        $this->setLayout(false);
   
    }
    public function executeMostrarListado2(sfWebRequest $request){
        
        $this->estudiantes =  EstudianteTable::getEstudiante();
        $this->setLayout(false);
   
    }
}
