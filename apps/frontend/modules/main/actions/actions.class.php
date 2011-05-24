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
      $ids = $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados());
      $this->centros = Doctrine::getTable('Centro')
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
