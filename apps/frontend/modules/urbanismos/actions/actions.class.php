<?php

/**
 * urbanismos actions.
 *
 * @package    inasscentros
 * @subpackage urbanismos
 * @author     Alexis Limongi
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class urbanismosActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $ids = $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados());
//    $this->nuevosurbs = Doctrine::getTable('nuevosurb')->getListado($ids);}
    $page = $request->getParameter('pagina', 1);
    $this->nuevosurbs = Doctrine::getTable('Nuevosurb')->getListPager($ids, $page);
    $this->haveToPaginate = Doctrine::getTable('Nuevosurb')->haveToPaginate();
    $this->resultados = Doctrine::getTable('Nuevosurb')->getTotalResult();
    $this->paginas = Doctrine::getTable('Nuevosurb')->getTotalPages();
    $this->menu = Doctrine::getTable('Nuevosurb')->getDisplay(array(), true);
  }

  public function executeUrbIndex(sfWebRequest $request)
  {
      $ids = $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados());
      $this->nuevosurbs = Doctrine::getTable('Nuevosurb')->getListPager($ids, 0, 0);
  }


  public function executeShow(sfWebRequest $request)
  {
    $this->nuevosurb = Doctrine::getTable('Nuevosurb')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->nuevosurb);
  }

  public function executeNew(sfWebRequest $request)
  {
      $ids = array('ids' => $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados()));
      $this->form = new NuevosurbForm(array(),$ids);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new NuevosurbForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($nuevosurb = Doctrine::getTable('Nuevosurb')->find(array($request->getParameter('id'))), sprintf('Object Nuevo Urbanismo does not exist (%s).', $request->getParameter('id')));
    $ids = array('ids' => $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados()));
    $this->form = new NuevosurbForm($nuevosurb,$ids);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($nuevosurb = Doctrine::getTable('Nuevosurb')->find(array($request->getParameter('id'))), sprintf('Object Nuevo Urbanismo does not exist (%s).', $request->getParameter('id')));
    $this->form = new NuevosurbForm($nuevosurb);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($nuevosurb = Doctrine::getTable('Nuevosurb')->find(array($request->getParameter('id'))), sprintf('Object Nuevo Urbanismo does not exist (%s).', $request->getParameter('id')));
    $nuevosurb->delete();

    $this->redirect('urbanismos/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $nuevosurb = $form->save();

      $this->redirect('urbanismos/show?id='.$nuevosurb->getId());
    }
  }
}
