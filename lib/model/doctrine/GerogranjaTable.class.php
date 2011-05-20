<?php

class GerogranjaTable extends Doctrine_Table
{
   public function getListado($idsEstado) {

        $q = $this->createQuery('g')
                ->select('*')
                ->whereIn('g.estado_id', $idsEstado)
                ->andWhere('g.deleted_at IS NULL');
        return $q->execute();
    }
}