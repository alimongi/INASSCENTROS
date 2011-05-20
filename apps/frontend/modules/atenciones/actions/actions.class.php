<?php

/**
 * atenciones actions.
 *
 * @package    inasscentros
 * @subpackage atenciones
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class atencionesActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
      $ids = $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados());
      $this->atencions = Doctrine::getTable('Atencion')
      ->getListado($ids);
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->atencion = Doctrine::getTable('Atencion')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->atencion);
  }

  public function executeNew(sfWebRequest $request)
  {
      $ids = array('ids' => $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados()));
      $this->form = new AtencionForm(array(),$ids);
      $this->form->setDefault('user_id', $this->getUser()->getGuardUser()->getId());

  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AtencionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($atencion = Doctrine::getTable('Atencion')->find(array($request->getParameter('id'))), sprintf('Object atencion does not exist (%s).', $request->getParameter('id')));
    $ids = array('ids' => $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados()));
    $this->form = new AtencionForm($atencion,$ids);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($atencion = Doctrine::getTable('Atencion')->find(array($request->getParameter('id'))), sprintf('Object atencion does not exist (%s).', $request->getParameter('id')));
    $this->form = new AtencionForm($atencion);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($atencion = Doctrine::getTable('Atencion')->find(array($request->getParameter('id'))), sprintf('Object atencion does not exist (%s).', $request->getParameter('id')));
    $atencion->delete();

    $this->redirect('atenciones/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $atencion = $form->save();

      $this->redirect('atenciones/edit?id='.$atencion->getId());
    }
  }
}
