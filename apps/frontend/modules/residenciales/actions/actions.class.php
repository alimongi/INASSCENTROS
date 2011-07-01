<?php

/**
 * residenciales actions.
 *
 * @package    inasscentros
 * @subpackage residenciales
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class residencialesActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
   $ids = $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados());
//   $this->residencials = Doctrine::getTable('Residencial')->getListado($ids);
    $page = $request->getParameter('pagina', 1);
    $this->residencials = Doctrine::getTable('Residencial')->getListPager($ids, $page);
    $this->haveToPaginate = Doctrine::getTable('Residencial')->haveToPaginate();
    $this->resultados = Doctrine::getTable('Residencial')->getTotalResult();
    $this->paginas = Doctrine::getTable('Residencial')->getTotalPages();
    $this->menu = Doctrine::getTable('Residencial')->getDisplay(array(), true);
  }

    public function executeResIndex(sfWebRequest $request)
  {
      $ids = $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados());
      $this->residenciales = Doctrine::getTable('Residencial')
      ->getListado($ids);
//      if($request->getParameter('formato') == 'excel') {
//          $this->setLayout(false);
//          $response = $this->getResponse();
//          $response->clearHttpHeaders();
//          $response->setContentType('application/vnd.ms-excel');
//          $response->setHttpHeader('Content-Type', 'application/vnd.ms-excel');
//          $response->setHttpHeader('Content-Disposition', 'attachment;filename=export12.xls');
//
//      }
  }



  public function executeShow(sfWebRequest $request)
  {
    $this->residencial = Doctrine::getTable('Residencial')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->residencial);
  }

  public function executeNew(sfWebRequest $request)
  {
    $ids = array('ids' => $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados()));
    $this->form = new ResidencialForm(array(),$ids);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ResidencialForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($residencial = Doctrine::getTable('Residencial')->find(array($request->getParameter('id'))), sprintf('Object residencial does not exist (%s).', $request->getParameter('id')));
    $ids = array('ids' => $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados()));
    $this->form = new ResidencialForm($residencial,$ids);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($residencial = Doctrine::getTable('Residencial')->find(array($request->getParameter('id'))), sprintf('Object residencial does not exist (%s).', $request->getParameter('id')));
    $this->form = new ResidencialForm($residencial);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($residencial = Doctrine::getTable('Residencial')->find(array($request->getParameter('id'))), sprintf('Object residencial does not exist (%s).', $request->getParameter('id')));
    $residencial->delete();

    $this->redirect('residenciales/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $residencial = $form->save();

      $this->redirect('residenciales/show?id='.$residencial->getId());
    }
  }
}
