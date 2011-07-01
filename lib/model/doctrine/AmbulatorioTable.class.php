<?php

class AmbulatorioTable extends Doctrine_Table
{
//   public function getListado($idsEstado) {
//
//        $q = $this->createQuery('a')
//                ->select('*')
//                ->whereIn('a.estado_id', $idsEstado)
//                ->andWhere('a.deleted_at IS NULL');
//        return $q->execute();
//    }

    public function getListPager($ids, $page = 1, $limit = 10 )
    {
        $strSQL = Doctrine_Query::create()
                ->select()
                ->from('Ambulatorio a')
                ->innerJoin('a.Estado e')
                ->whereIn('a.estado_id', $ids)
                ->andWhere('a.deleted_at IS NULL');
        $this->pagerLayout = new sfDoctrinePagerLayout(
                new Doctrine_Pager($strSQL, $page, $limit),
                new Doctrine_Pager_Range_Sliding(array('chunk' => 15)),
                'ambulatorios/index?pagina={%page_number}');
        $this->pagerLayout->setTemplate('{link_to}{%page}{/link_to}');
	$this->pagerLayout->setSelectedTemplate('<span>{%page}</span>');
	$this->pagerLayout->setSeparatorTemplate('&nbsp;');
	$this->pager = $this->pagerLayout->getPager();

        return $this->pager->execute(array());
    }

    public function getDisplay($options = array(), $return = false) {
        if ($return)
            return $this->pagerLayout->display($options, $return);
    }

    public function getTotalResult() {
        return $this->pager->getNumResults();
    }

    public function getTotalPages() {
        return $this->pager->getLastPage();
    }

    public function haveToPaginate() {
        return $this->pager->haveToPaginate();
    }


}