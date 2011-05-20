<?php

/**
 * beneficiarios actions.
 *
 * @package    inasscentros
 * @subpackage beneficiarios
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class beneficiariosActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
      $ids = $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados());
      $this->beneficiarios = Doctrine::getTable('Beneficiario')
      ->getListado($ids);
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->beneficiario = Doctrine::getTable('Beneficiario')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->beneficiario);
  }

  public function executeNew(sfWebRequest $request)
  {
    $ids = array('ids' => $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados()));
    $this->form = new BeneficiarioForm(array(),$ids);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new BeneficiarioForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($beneficiario = Doctrine::getTable('Beneficiario')->find(array($request->getParameter('id'))), sprintf('Object beneficiario does not exist (%s).', $request->getParameter('id')));
    $ids = array('ids' => $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados()));
    $this->form = new BeneficiarioForm($beneficiario,$ids);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($beneficiario = Doctrine::getTable('Beneficiario')->find(array($request->getParameter('id'))), sprintf('Object beneficiario does not exist (%s).', $request->getParameter('id')));
    $this->form = new BeneficiarioForm($beneficiario);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($beneficiario = Doctrine::getTable('Beneficiario')->find(array($request->getParameter('id'))), sprintf('Object beneficiario does not exist (%s).', $request->getParameter('id')));
    $beneficiario->delete();

    $this->redirect('beneficiarios/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $beneficiario = $form->save();

      $this->redirect('beneficiarios/edit?id='.$beneficiario->getId());
    }
  }
}
