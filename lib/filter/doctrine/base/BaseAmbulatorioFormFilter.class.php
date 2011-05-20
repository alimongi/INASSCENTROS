<?php

/**
 * Ambulatorio filter form base class.
 *
 * @package    inasscentros
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAmbulatorioFormFilter extends CentroFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('ambulatorio_filters[%s]');
  }

  public function getModelName()
  {
    return 'Ambulatorio';
  }
}
