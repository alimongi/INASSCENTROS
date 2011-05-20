<?php

/**
 * Atencion form.
 *
 * @package    inasscentros
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AtencionForm extends BaseAtencionForm
{
    public function configure()
  {
   unset($this['created_at'], $this['updated_at'], $this['deleted_at']);
   $this->widgetSchema['user_id'] = new sfWidgetFormInputHidden();
   parent::configure();
    sfContext::getInstance()->getConfiguration()->loadHelpers('Url');
    $ids = $this->getOption('ids');
    $ids = (count($ids) > 0) ? $ids : array(0);
      $this->setWidget('estado_id', new sfWidgetFormDoctrineChoice(array(
                    'model' => 'estado',
                    'add_empty' => '***** Seleccione *****',
                    'query' => Doctrine::getTable('estado')->createQuery('e')->whereIn('e.id', $ids),
                    'order_by' => array('nombre', 'asc')), array(
                    'onchange' => "cargarCombo('" . url_for('main/jsonCentros/') . "',this.value,'atencion_centro_id')"
                )));

   if ($this->isNew()) {
            $this->setWidget('centro_id', new sfWidgetFormSelect(array('choices' => array('***** Seleccione *****'))));
 } else {
            $idEst = $this->getObject()->getEstadoId();
            $this->setWidget('centro_id', new sfWidgetFormDoctrineChoice(array(
                        'model' => 'centro',
                        'query' => Doctrine::getTable('centro')->createQuery('c')->where('c.estado_id = ?', $idEst)
                    )));
          }
        }
  }

