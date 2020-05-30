<?php

/**
 * PnfPre form.
 *
 * @package    preinscripcion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PnfPreForm extends BasePnfPreForm
{
  public function configure()
  {
      $this->widgetSchema['descripcion'] = new sfWidgetFormChoice(array(
            'choices' => array('' => 'Seleccione',    
                "PNF EN MEDICINA INTEGRAL COMUNITARIA"	=>	"PNF EN MEDICINA INTEGRAL COMUNITARIA",
                "PNF EN ENFERMERÍA INTEGRAL COMUNITARIA"	=>	"PNF EN ENFERMERÍA INTEGRAL COMUNITARIA",
                "PNF EN RADIOIMAGENEOLOGÍA"	=>	"PNF EN RADIOIMAGENEOLOGÍA",
                "PNF EN FISIOTERAPIA"	=>	"PNF EN FISIOTERAPIA",
                "PNF EN ODONTOLOGÍA"	=>	"PNF EN ODONTOLOGÍA",
                "PNF EN FONOAUDIOLOGÍA"	=>	"PNF EN FONOAUDIOLOGÍA",
                "PNF EN TERAPIA OCUPACIONAL"	=>	"PNF EN TERAPIA OCUPACIONAL",
                "PNF EN OPTOMETRÍA Y ÓPTICA"	=>	"PNF EN OPTOMETRÍA Y ÓPTICA",
          )));

  }
}
