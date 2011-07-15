<?php

/**
 * Ambulatorio form base class.
 *
 * @method Ambulatorio getObject() Returns the current form's model object
 *
 * @package    inasscentros
 * @subpackage form
 * @author     Alexis Limongi
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAmbulatorioForm extends CentroForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('ambulatorio[%s]');
  }

  public function getModelName()
  {
    return 'Ambulatorio';
  }

}
