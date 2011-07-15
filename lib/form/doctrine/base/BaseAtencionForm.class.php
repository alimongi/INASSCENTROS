<?php

/**
 * Atencion form base class.
 *
 * @method Atencion getObject() Returns the current form's model object
 *
 * @package    inasscentros
 * @subpackage form
 * @author     Alexis Limongi
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAtencionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'beneficiario_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Beneficiario'), 'add_empty' => true)),
      'centro_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Centro'), 'add_empty' => true)),
      'estado_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'), 'add_empty' => true)),
      'social'          => new sfWidgetFormChoice(array('choices' => array('Si' => 'Si', 'No' => 'No'))),
      'salud'           => new sfWidgetFormChoice(array('choices' => array('Si' => 'Si', 'No' => 'No'))),
      'user_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
      'deleted_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'beneficiario_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Beneficiario'), 'required' => false)),
      'centro_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Centro'), 'required' => false)),
      'estado_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'), 'required' => false)),
      'social'          => new sfValidatorChoice(array('choices' => array(0 => 'Si', 1 => 'No'), 'required' => false)),
      'salud'           => new sfValidatorChoice(array('choices' => array(0 => 'Si', 1 => 'No'), 'required' => false)),
      'user_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'required' => false)),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
      'deleted_at'      => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('atencion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Atencion';
  }

}
