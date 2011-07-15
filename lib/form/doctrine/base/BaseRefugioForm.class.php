<?php

/**
 * Refugio form base class.
 *
 * @method Refugio getObject() Returns the current form's model object
 *
 * @package    inasscentros
 * @subpackage form
 * @author     Alexis Limongi
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRefugioForm extends CentroForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('refugio[%s]');
  }

  public function getModelName()
  {
    return 'Refugio';
  }

}
