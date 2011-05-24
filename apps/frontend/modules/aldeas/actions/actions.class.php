<?php

/**
 * aldeas actions.
 *
 * @package    inasscentros
 * @subpackage aldeas
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class aldeasActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $ids = $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados());
    $this->aldeas = Doctrine::getTable('Aldea')
    ->getListado($ids);
  }

  public function executeAldIndex(sfWebRequest $request)
  {
      $ids = $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados());
      $this->aldeas = Doctrine::getTable('Aldea')
      ->getListado($ids);
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->aldea = Doctrine::getTable('Aldea')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->aldea);
  }

  public function executeNew(sfWebRequest $request)
  {
      $ids = array('ids' => $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados()));
      $this->form = new AldeaForm(array(),$ids);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AldeaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($aldea = Doctrine::getTable('Aldea')->find(array($request->getParameter('id'))), sprintf('Object aldea does not exist (%s).', $request->getParameter('id')));
    $ids = array('ids' => $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados()));
    $this->form = new AldeaForm($aldea,$ids);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($aldea = Doctrine::getTable('Aldea')->find(array($request->getParameter('id'))), sprintf('Object aldea does not exist (%s).', $request->getParameter('id')));
    $this->form = new AldeaForm($aldea);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($aldea = Doctrine::getTable('Aldea')->find(array($request->getParameter('id'))), sprintf('Object aldea does not exist (%s).', $request->getParameter('id')));
    $aldea->delete();

    $this->redirect('aldeas/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $aldea = $form->save();

      $this->redirect('aldeas/show?id='.$aldea->getId());
    }
  }
}
