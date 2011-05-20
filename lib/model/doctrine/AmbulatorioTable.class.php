<?php

class AmbulatorioTable extends Doctrine_Table
{
   public function getListado($idsEstado) {

        $q = $this->createQuery('a')
                ->select('*')
                ->whereIn('a.estado_id', $idsEstado)
                ->andWhere('a.deleted_at IS NULL');
        return $q->execute();
    }
}