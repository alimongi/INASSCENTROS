<?php

/**
 * ambulatorios actions.
 *
 * @package    inasscentros
 * @subpackage ambulatorios
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ambulatoriosActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $ids = $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados());
//      $this->ambulatorios = Doctrine::getTable('Ambulatorio')->getListado($ids);

    $page = $request->getParameter('pagina', 1);
    $this->ambulatorios = Doctrine::getTable('Ambulatorio')->getListPager($ids, $page);
    $this->haveToPaginate = Doctrine::getTable('Ambulatorio')->haveToPaginate();
    $this->resultados = Doctrine::getTable('Ambulatorio')->getTotalResult();
    $this->paginas = Doctrine::getTable('Ambulatorio')->getTotalPages();
    $this->menu = Doctrine::getTable('Ambulatorio')->getDisplay(array(), true);

  }

  public function executeAmbIndex(sfWebRequest $request)
  {
      $ids = $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados());
      $this->ambulatorios = Doctrine::getTable('Ambulatorio')
      ->getListado($ids);
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->ambulatorio = Doctrine::getTable('Ambulatorio')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->ambulatorio);
  }

  public function executeNew(sfWebRequest $request)
  {
    $ids = array('ids' => $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados()));
    $this->form = new AmbulatorioForm(array(),$ids);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AmbulatorioForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($ambulatorio = Doctrine::getTable('Ambulatorio')->find(array($request->getParameter('id'))), sprintf('Object ambulatorio does not exist (%s).', $request->getParameter('id')));
    $ids = array('ids' => $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados()));
    $this->form = new AmbulatorioForm($ambulatorio,$ids);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($ambulatorio = Doctrine::getTable('Ambulatorio')->find(array($request->getParameter('id'))), sprintf('Object ambulatorio does not exist (%s).', $request->getParameter('id')));
    $this->form = new AmbulatorioForm($ambulatorio);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($ambulatorio = Doctrine::getTable('Ambulatorio')->find(array($request->getParameter('id'))), sprintf('Object ambulatorio does not exist (%s).', $request->getParameter('id')));
    $ambulatorio->delete();

    $this->redirect('ambulatorios/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $ambulatorio = $form->save();

      $this->redirect('ambulatorios/show?id='.$ambulatorio->getId());
    }
  }
}
