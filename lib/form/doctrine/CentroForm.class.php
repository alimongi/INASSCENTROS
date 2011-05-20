<?php

/**
 * Centro form.
 *
 * @package    inasscentros
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CentroForm extends BaseCentroForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at'], $this['deleted_at'], $this['type'], $this['adultos_m'], $this['adultos_f'], $this['adultos_t']);
      $this->widgetSchema->setLabels(array(
          'direccion' => 'Dirección',
          'telf1' => 'Teléfono 1',
          'telf2' => 'Teléfono 2',
          'mail1' => 'Email 1',
          'mail2' => 'Email 2',
          'adultos_fsalud' => 'Adultas atendidas en Salud',
          'adultos_msalud' => 'Adultos atendidos en Salud',
          'adultos_fsocial' => 'Adultas atendidas en Social',
          'adultos_msocial' => 'Adultos atendidos en Social'
      ));
  }
}
