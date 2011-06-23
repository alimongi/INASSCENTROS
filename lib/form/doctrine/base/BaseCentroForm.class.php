<?php

/**
 * Centro form base class.
 *
 * @method Centro getObject() Returns the current form's model object
 *
 * @package    inasscentros
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCentroForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'estado_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'), 'add_empty' => false)),
      'municipio_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Municipio'), 'add_empty' => false)),
      'parroquia_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Parroquia'), 'add_empty' => false)),
      'direccion'       => new sfWidgetFormTextarea(),
      'nombre'          => new sfWidgetFormInputText(),
      'responsable'     => new sfWidgetFormInputText(),
      'telf1'           => new sfWidgetFormInputText(),
      'telf2'           => new sfWidgetFormInputText(),
      'mail1'           => new sfWidgetFormInputText(),
      'mail2'           => new sfWidgetFormInputText(),
      'adultos_msalud'  => new sfWidgetFormInputText(),
      'adultos_fsalud'  => new sfWidgetFormInputText(),
      'adultos_msocial' => new sfWidgetFormInputText(),
      'adultos_fsocial' => new sfWidgetFormInputText(),
      'adultos_f'       => new sfWidgetFormInputText(),
      'adultos_m'       => new sfWidgetFormInputText(),
      'adultos_t'       => new sfWidgetFormInputText(),
      'latitud'         => new sfWidgetFormInputText(),
      'longitud'        => new sfWidgetFormInputText(),
      'type'            => new sfWidgetFormInputText(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
      'deleted_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'estado_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'))),
      'municipio_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Municipio'))),
      'parroquia_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Parroquia'))),
      'direccion'       => new sfValidatorString(array('max_length' => 300, 'min_length' => 4)),
      'nombre'          => new sfValidatorString(array('max_length' => 120, 'min_length' => 4)),
      'responsable'     => new sfValidatorString(array('max_length' => 120, 'min_length' => 4)),
      'telf1'           => new sfValidatorString(array('max_length' => 120, 'min_length' => 4)),
      'telf2'           => new sfValidatorString(array('max_length' => 120, 'min_length' => 0, 'required' => false)),
      'mail1'           => new sfValidatorString(array('max_length' => 120, 'min_length' => 4)),
      'mail2'           => new sfValidatorString(array('max_length' => 120, 'min_length' => 0, 'required' => false)),
      'adultos_msalud'  => new sfValidatorInteger(array('required' => false)),
      'adultos_fsalud'  => new sfValidatorInteger(array('required' => false)),
      'adultos_msocial' => new sfValidatorInteger(array('required' => false)),
      'adultos_fsocial' => new sfValidatorInteger(array('required' => false)),
      'adultos_f'       => new sfValidatorInteger(array('required' => false)),
      'adultos_m'       => new sfValidatorInteger(array('required' => false)),
      'adultos_t'       => new sfValidatorInteger(array('required' => false)),
      'latitud'         => new sfValidatorPass(array('required' => false)),
      'longitud'        => new sfValidatorPass(array('required' => false)),
      'type'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
      'deleted_at'      => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('centro[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Centro';
  }

}
