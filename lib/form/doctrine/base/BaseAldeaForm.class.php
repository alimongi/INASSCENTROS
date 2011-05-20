<?php

/**
 * Aldea form base class.
 *
 * @method Aldea getObject() Returns the current form's model object
 *
 * @package    inasscentros
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAldeaForm extends CentroForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('aldea[%s]');
  }

  public function getModelName()
  {
    return 'Aldea';
  }

}
