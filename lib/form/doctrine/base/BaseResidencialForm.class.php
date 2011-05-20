<?php

/**
 * Residencial form base class.
 *
 * @method Residencial getObject() Returns the current form's model object
 *
 * @package    inasscentros
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseResidencialForm extends CentroForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('residencial[%s]');
  }

  public function getModelName()
  {
    return 'Residencial';
  }

}
