<?php

require_once dirname(__FILE__).'/../lib/preinscripcionGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/preinscripcionGeneratorHelper.class.php';

/**
 * preinscripcion actions.
 *
 * @package    preinscripcion
 * @subpackage preinscripcion
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class preinscripcionActions extends autoPreinscripcionActions
{
     public function executeIndex(sfWebRequest $request){
         $this->getUser()->setFlash('error', sprintf('Se ha detectado una acción inválida en el sistema!'));
        
         $this->redirect('@preinscripcion_new');
     }
      public function executeEdit(sfWebRequest $request)
  {
    $this->getUser()->setFlash('error', sprintf('Se ha detectado una acción inválida en el sistema!'));
    $this->redirect('@preinscripcion_new');
  }
protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

      $preinscripcion = $form->save();

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $preinscripcion)));

      if ($request->hasParameter('_save_and_add'))
      {
        $this->getUser()->setFlash('notice', $notice.' You can add another one below.');

        $this->redirect('@preinscripcion_new');
      }
      else
      {
        $this->getUser()->setFlash('notice', $notice);

        $this->redirect(array('sf_route' => 'preinscripcion_edit', 'sf_subject' => $preinscripcion));
      }
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }
  public function executeBuscar(sfWebRequest $request){
      $this->buscar = $this->getRequestParameter('buscar');
      $this->cedula = $this->getRequestParameter('cedula');
      if($this->buscar=='BUSCAR'){
          $result=PreinscripcionTable::getPre($this->cedula);
      }
      
  }
}
