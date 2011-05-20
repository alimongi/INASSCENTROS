<?php

/**
 * Beneficiario form.
 *
 * @package    inasscentros
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class BeneficiarioForm extends BaseBeneficiarioForm
{
  public function configure()
  {

   $today = array(
   'year' => date('Y'),
   'month' => date('n'),
   'day' => date('j')
   );
   $years = range(date('Y') + 5, date('Y') - 110);

 $this->widgetSchema['fnacimiento'] = new sfWidgetFormDate(array('format' => '%day%/%month%/%year%', 'default' => $today, 'years' => array_combine($years, $years)));


      unset($this['created_at'], $this['updated_at'], $this['deleted_at']);
      $this->widgetSchema->setLabels(array(
          'ci' => 'Cedula',
          'fnacimiento' => 'Fecha de Nacimiento',
          'estado_civ' => 'Estado Civil',
          'direccion' => 'Dirección',
          'telf1' => 'Teléfono 1',
          'telf2' => 'Teléfono 2',
          'mail1' => 'Email 1',
          'telf_fam' => 'Teléfono Familiar'
      ));

    parent::configure();
    sfContext::getInstance()->getConfiguration()->loadHelpers('Url');
    $ids = $this->getOption('ids');
    $ids = (count($ids) > 0) ? $ids : array(0);
      $this->setWidget('estado_id', new sfWidgetFormDoctrineChoice(array(
                    'model' => 'estado',
                    'add_empty' => '***** Seleccione *****',
                    'query' => Doctrine::getTable('estado')->createQuery('e')->whereIn('e.id', $ids),
                    'order_by' => array('nombre', 'asc')), array(
                    'onchange' => "cargarCombo('" . url_for('main/jsonMunicipios/') . "',this.value,'beneficiario_municipio_id')"
                )));
        if ($this->isNew()) {
            $this->setWidget('municipio_id', new sfWidgetFormSelect(array('choices' => array('***** Seleccione *****')), array('onchange' => "cargarCombo('" . url_for('main/jsonParroquias/') . "',this.value,'beneficiario_parroquia_id')")));
            $this->setWidget('parroquia_id', new sfWidgetFormSelect(array('choices' => array('***** Seleccione *****'))));
        } else {
            $idEst = $this->getObject()->getEstadoId();
            $idMun = $this->getObject()->getMunicipioId();
            $this->setWidget('municipio_id', new sfWidgetFormDoctrineChoice(array(
                        'model' => 'municipio',
                        'query' => Doctrine::getTable('municipio')->createQuery('m')->where('m.estado_id = ?', $idEst)
                    ), array(
                        'onchange' => "cargarCombo('" . url_for('main/jsonParroquias/') . "',this.value,'beneficiario_parroquia_id')"
                    )));
            $this->setWidget('parroquia_id', new sfWidgetFormDoctrineChoice(array(
                        'model' => 'parroquia',
                        'query' => Doctrine::getTable('parroquia')->createQuery('p')->where('p.municipio_id = ?', $idMun)
                    )));
        }

        $this->setValidator('ci', new sfValidatorNumber(array('required' => true), array('required' => 'La cédula es obligatoria')));
        $this->validatorSchema->setPostValidator(new sfValidatorDoctrineUnique(array('model' => 'Beneficiario', 'column' => array('ci')), array('invalid' => 'Ya existe esta Cédula')));
  }
}
