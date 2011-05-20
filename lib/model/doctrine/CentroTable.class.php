<?php


class CentroTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Centro');
    }

        public function getJson($id) {
        $_rs = $this->createQuery('c')
                        ->where('c.estado_id = ?', $id)
                        ->orderBy('c.nombre')
                        ->execute();
        $_json[] = array('id' => 0, 'descripcion' => '***** Seleccione *****');
        foreach ($_rs as $rs) {
            $_json[] = array('id' => $rs->getId(), 'descripcion' => $rs->getNombre());
        }
        return json_encode(array('datos' => $_json));
    }


}