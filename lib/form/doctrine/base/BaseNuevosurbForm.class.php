<?php

/**
 * Nuevosurb form base class.
 *
 * @method Nuevosurb getObject() Returns the current form's model object
 *
 * @package    inasscentros
 * @subpackage form
 * @author     Alexis Limongi
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseNuevosurbForm extends CentroForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('nuevosurb[%s]');
  }

  public function getModelName()
  {
    return 'Nuevosurb';
  }

}
