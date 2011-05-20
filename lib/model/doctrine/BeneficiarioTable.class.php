<?php


class BeneficiarioTable extends Doctrine_Table
{
    public function getListado($idsEstado) {

        $q = $this->createQuery('b')
                        ->select('*')
                        ->whereIn('b.estado_id', $idsEstado)
                        ->andWhere('b.deleted_at IS NULL');
        return $q->execute();
    }
}