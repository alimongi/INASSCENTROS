<?php

/**
 * gerogranjas actions.
 *
 * @package    inasscentros
 * @subpackage gerogranjas
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class gerogranjasActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
     $ids = $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados());
//     $this->gerogranjas = Doctrine::getTable('Gerogranja')->getListado($ids);

    $page = $request->getParameter('pagina', 1);
    $this->gerogranjas = Doctrine::getTable('Gerogranja')->getListPager($ids, $page);
    $this->haveToPaginate = Doctrine::getTable('Gerogranja')->haveToPaginate();
    $this->resultados = Doctrine::getTable('Gerogranja')->getTotalResult();
    $this->paginas = Doctrine::getTable('Gerogranja')->getTotalPages();
    $this->menu = Doctrine::getTable('Gerogranja')->getDisplay(array(), true);
  }

  public function executeGerIndex(sfWebRequest $request)
  {
     $ids = $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados());
     $this->gerogranjas = Doctrine::getTable('Gerogranja')->getListPager($ids, 0, 0);
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->gerogranja = Doctrine::getTable('Gerogranja')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->gerogranja);
  }

  public function executeNew(sfWebRequest $request)
  {
    $ids = array('ids' => $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados()));
    $this->form = new GerogranjaForm(array(),$ids);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new GerogranjaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($gerogranja = Doctrine::getTable('Gerogranja')->find(array($request->getParameter('id'))), sprintf('Object gerogranja does not exist (%s).', $request->getParameter('id')));
    $ids = array('ids' => $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados()));
    $this->form = new GerogranjaForm($gerogranja,$ids);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($gerogranja = Doctrine::getTable('Gerogranja')->find(array($request->getParameter('id'))), sprintf('Object gerogranja does not exist (%s).', $request->getParameter('id')));
    $this->form = new GerogranjaForm($gerogranja);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($gerogranja = Doctrine::getTable('Gerogranja')->find(array($request->getParameter('id'))), sprintf('Object gerogranja does not exist (%s).', $request->getParameter('id')));
    $gerogranja->delete();

    $this->redirect('gerogranjas/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $gerogranja = $form->save();

      $this->redirect('gerogranjas/show?id='.$gerogranja->getId());
    }
  }
}
