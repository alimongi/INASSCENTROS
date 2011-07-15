<?php

/**
 * Aldea filter form base class.
 *
 * @package    inasscentros
 * @subpackage filter
 * @author     Alexis Limongi
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAldeaFormFilter extends CentroFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('aldea_filters[%s]');
  }

  public function getModelName()
  {
    return 'Aldea';
  }
}
