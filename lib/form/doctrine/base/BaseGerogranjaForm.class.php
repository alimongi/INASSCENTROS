<?php

/**
 * Gerogranja form base class.
 *
 * @method Gerogranja getObject() Returns the current form's model object
 *
 * @package    inasscentros
 * @subpackage form
 * @author     Alexis Limongi
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseGerogranjaForm extends CentroForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('gerogranja[%s]');
  }

  public function getModelName()
  {
    return 'Gerogranja';
  }

}
