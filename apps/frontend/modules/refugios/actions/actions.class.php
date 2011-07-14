<?php

/**
 * refugios actions.
 *
 * @package    inasscentros
 * @subpackage refugios
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class refugiosActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
     $ids = $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados());
//      $this->refugios = Doctrine::getTable('Refugio')->getListado($ids);

    $page = $request->getParameter('pagina', 1);
    $this->refugios = Doctrine::getTable('Refugio')->getListPager($ids, $page);
    $this->haveToPaginate = Doctrine::getTable('Refugio')->haveToPaginate();
    $this->resultados = Doctrine::getTable('Refugio')->getTotalResult();
    $this->paginas = Doctrine::getTable('Refugio')->getTotalPages();
    $this->menu = Doctrine::getTable('Refugio')->getDisplay(array(), true);
  }
  
  public function executeRefIndex(sfWebRequest $request)
  {
     $ids = $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados());
      $this->refugios = Doctrine::getTable('Refugio')->getListPager($ids);
  }


  public function executeShow(sfWebRequest $request)
  {
    $this->refugio = Doctrine::getTable('Refugio')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->refugio);
  }

  public function executeNew(sfWebRequest $request)
  {
      $ids = array('ids' => $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados()));
      $this->form = new RefugioForm(array(),$ids);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new RefugioForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($refugio = Doctrine::getTable('Refugio')->find(array($request->getParameter('id'))), sprintf('Object refugio does not exist (%s).', $request->getParameter('id')));
    $ids = array('ids' => $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados()));
    $this->form = new RefugioForm($refugio,$ids);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($refugio = Doctrine::getTable('Refugio')->find(array($request->getParameter('id'))), sprintf('Object refugio does not exist (%s).', $request->getParameter('id')));
    $this->form = new RefugioForm($refugio);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($refugio = Doctrine::getTable('Refugio')->find(array($request->getParameter('id'))), sprintf('Object refugio does not exist (%s).', $request->getParameter('id')));
    $refugio->delete();

    $this->redirect('refugios/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $refugio = $form->save();

      $this->redirect('refugios/show?id='.$refugio->getId());
    }
  }
}
