<?php


class RefugioTable extends CentroTable
{
//    public function getListado($idsEstado) {
//
//        $q = $this->createQuery('r')
//                        ->select('*')
//                        ->whereIn('r.estado_id', $idsEstado)
//                        ->andWhere('r.deleted_at IS NULL');
//        return $q->execute();
//    }

     public function getListPager($ids, $page = 1, $limit = 15 )
    {
        $strSQL = Doctrine_Query::create()
                ->select()
                ->from('Refugio r')
                ->innerJoin('r.Estado e')
                ->whereIn('r.estado_id', $ids)
                ->andWhere('r.deleted_at IS NULL');
        $this->pagerLayout = new sfDoctrinePagerLayout(
                new Doctrine_Pager($strSQL, $page, $limit),
                new Doctrine_Pager_Range_Sliding(array('chunk' => 15)),
                'refugios/index?pagina={%page_number}');
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