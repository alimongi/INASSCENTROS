<?php

/**
 * Centro filter form base class.
 *
 * @package    inasscentros
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCentroFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'estado_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'), 'add_empty' => true)),
      'municipio_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Municipio'), 'add_empty' => true)),
      'parroquia_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Parroquia'), 'add_empty' => true)),
      'direccion'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'responsable'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telf1'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telf2'           => new sfWidgetFormFilterInput(),
      'mail1'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mail2'           => new sfWidgetFormFilterInput(),
      'adultos_msalud'  => new sfWidgetFormFilterInput(),
      'adultos_fsalud'  => new sfWidgetFormFilterInput(),
      'adultos_msocial' => new sfWidgetFormFilterInput(),
      'adultos_fsocial' => new sfWidgetFormFilterInput(),
      'adultos_f'       => new sfWidgetFormFilterInput(),
      'adultos_m'       => new sfWidgetFormFilterInput(),
      'adultos_t'       => new sfWidgetFormFilterInput(),
      'latitud'         => new sfWidgetFormFilterInput(),
      'longitud'        => new sfWidgetFormFilterInput(),
      'type'            => new sfWidgetFormFilterInput(),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'deleted_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'estado_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Estado'), 'column' => 'id')),
      'municipio_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Municipio'), 'column' => 'id')),
      'parroquia_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Parroquia'), 'column' => 'id')),
      'direccion'       => new sfValidatorPass(array('required' => false)),
      'nombre'          => new sfValidatorPass(array('required' => false)),
      'responsable'     => new sfValidatorPass(array('required' => false)),
      'telf1'           => new sfValidatorPass(array('required' => false)),
      'telf2'           => new sfValidatorPass(array('required' => false)),
      'mail1'           => new sfValidatorPass(array('required' => false)),
      'mail2'           => new sfValidatorPass(array('required' => false)),
      'adultos_msalud'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'adultos_fsalud'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'adultos_msocial' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'adultos_fsocial' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'adultos_f'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'adultos_m'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'adultos_t'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'latitud'         => new sfValidatorPass(array('required' => false)),
      'longitud'        => new sfValidatorPass(array('required' => false)),
      'type'            => new sfValidatorPass(array('required' => false)),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'deleted_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('centro_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Centro';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'estado_id'       => 'ForeignKey',
      'municipio_id'    => 'ForeignKey',
      'parroquia_id'    => 'ForeignKey',
      'direccion'       => 'Text',
      'nombre'          => 'Text',
      'responsable'     => 'Text',
      'telf1'           => 'Text',
      'telf2'           => 'Text',
      'mail1'           => 'Text',
      'mail2'           => 'Text',
      'adultos_msalud'  => 'Number',
      'adultos_fsalud'  => 'Number',
      'adultos_msocial' => 'Number',
      'adultos_fsocial' => 'Number',
      'adultos_f'       => 'Number',
      'adultos_m'       => 'Number',
      'adultos_t'       => 'Number',
      'latitud'         => 'Text',
      'longitud'        => 'Text',
      'type'            => 'Text',
      'created_at'      => 'Date',
      'updated_at'      => 'Date',
      'deleted_at'      => 'Date',
    );
  }
}
