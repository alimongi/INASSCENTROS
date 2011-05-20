<?php

/**
 * ProfileEstado form base class.
 *
 * @method ProfileEstado getObject() Returns the current form's model object
 *
 * @package    inasscentros
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProfileEstadoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'profile_id' => new sfWidgetFormInputHidden(),
      'estado_id'  => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'profile_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('profile_id')), 'empty_value' => $this->getObject()->get('profile_id'), 'required' => false)),
      'estado_id'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('estado_id')), 'empty_value' => $this->getObject()->get('estado_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('profile_estado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProfileEstado';
  }

}
