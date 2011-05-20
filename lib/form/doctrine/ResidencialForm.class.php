<?php

/**
 * Residencial form.
 *
 * @package    inasscentros
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ResidencialForm extends BaseResidencialForm
{
  /**
   * @see CentroForm
   */
  public function configure()
  {
    parent::configure();
    sfContext::getInstance()->getConfiguration()->loadHelpers('Url');
    $ids = $this->getOption('ids');
    $ids = (count($ids) > 0) ? $ids : array(0);
      $this->setWidget('estado_id', new sfWidgetFormDoctrineChoice(array(
                    'model' => 'estado',
                    'add_empty' => '***** Seleccione *****',
                    'query' => Doctrine::getTable('estado')->createQuery('e')->whereIn('e.id', $ids),
                    'order_by' => array('nombre', 'asc')), array(
                    'onchange' => "cargarCombo('" . url_for('main/jsonMunicipios/') . "',this.value,'residencial_municipio_id')"
                )));
        if ($this->isNew()) {
            $this->setWidget('municipio_id', new sfWidgetFormSelect(array('choices' => array('***** Seleccione *****')), array('onchange' => "cargarCombo('" . url_for('main/jsonParroquias/') . "',this.value,'residencial_parroquia_id')")));
            $this->setWidget('parroquia_id', new sfWidgetFormSelect(array('choices' => array('***** Seleccione *****'))));
        } else {
            $idEst = $this->getObject()->getEstadoId();
            $idMun = $this->getObject()->getMunicipioId();
            $this->setWidget('municipio_id', new sfWidgetFormDoctrineChoice(array(
                        'model' => 'municipio',
                        'query' => Doctrine::getTable('municipio')->createQuery('m')->where('m.estado_id = ?', $idEst)
                    ), array(
                        'onchange' => "cargarCombo('" . url_for('main/jsonParroquias/') . "',this.value,'residencial_parroquia_id')"
                    )));
            $this->setWidget('parroquia_id', new sfWidgetFormDoctrineChoice(array(
                        'model' => 'parroquia',
                        'query' => Doctrine::getTable('parroquia')->createQuery('p')->where('p.municipio_id = ?', $idMun)
                    )));
        }
  }
}