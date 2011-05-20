<?php

/**
 * main actions.
 *
 * @package    inasscentros
 * @subpackage main
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mainActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {

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

     public function executeAmbIndex(sfWebRequest $request)
  {
      $ids = $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados());
      $this->ambulatorios = Doctrine::getTable('Ambulatorio')
      ->getListado($ids);
  }

      public function executeGerIndex(sfWebRequest $request)
  {
     $ids = $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados());
     $this->gerogranjas = Doctrine::getTable('Gerogranja')
    ->getListado($ids);  
  }

        public function executeAldIndex(sfWebRequest $request)
  {
      $ids = $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados());
      $this->aldeas = Doctrine::getTable('Aldea')
      ->getListado($ids);
  }

          public function executeRefIndex(sfWebRequest $request)
  {
     $ids = $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados());
      $this->refugios = Doctrine::getTable('Refugio')
    ->getListado($ids);
  }


  public function executeJsonMunicipios(sfWebRequest $request)
  {
      $response = $this->getResponse();
      $response->setContentType('application/json');
      $output = Doctrine::getTable('Municipio')->getJson($request->getParameter('id'));
      return $this->renderText($output);
  }

  public function executeJsonParroquias(sfWebRequest $request)
  {
      $response = $this->getResponse();
      $response->setContentType('application/json');
      $output = Doctrine::getTable('Parroquia')->getJson($request->getParameter('id'));
      return $this->renderText($output);
  }

    public function executeJsonCentros(sfWebRequest $request)
  {
      $response = $this->getResponse();
      $response->setContentType('application/json');
      $output = Doctrine::getTable('Centro')->getJson($request->getParameter('id'));
      return $this->renderText($output);
  }

      public function executeJsonBeneficiarios(sfWebRequest $request)
  {
      $response = $this->getResponse();
      $response->setContentType('application/json');
      $output = Doctrine::getTable('Beneficiario')->getJson($request->getParameter('id'));
      return $this->renderText($output);
  }


}
