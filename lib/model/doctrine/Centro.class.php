<?php

/**
 * Centro
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    inasscentros
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Centro extends BaseCentro
{

        public function  __toString() {
        return $this->getNombre();
        }

        public function  save(Doctrine_Connection $conn = null) {
        $conn = $conn ? $conn : $this->getTable()->getConnection();
        $conn->beginTransaction();
        try {
            $this->setAdultosM($this->getAdultosMsalud() + $this->getAdultosMsocial() + $this->getAdultosMeconomico() + $this->getAdultosMtecnica() + $this->getAdultosMproductiva());
            $this->setAdultosF($this->getAdultosFsalud() + $this->getAdultosFsocial() + $this->getAdultosFeconomico() + $this->getAdultosFtecnica() + $this->getAdultosFproductiva());
            $this->setAdultosT($this->getAdultosM() + $this->getAdultosF());
            $ret = parent::save($conn);
            $conn->commit();
            return $ret;
        }  catch (Exception $e) {
            $conn->rollback();
            throw $e;
        }

    }
}
