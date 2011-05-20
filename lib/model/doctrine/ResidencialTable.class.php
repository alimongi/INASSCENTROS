<?php


class ResidencialTable extends Doctrine_Table
{
   public function getListado($idsEstado) {
       
        $q = $this->createQuery('r')
                ->select('*')
                ->whereIn('r.estado_id', $idsEstado)
                ->andWhere('r.deleted_at IS NULL');
        return $q->execute();
    }
}