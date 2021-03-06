<?php

/**
 * BaseParroquia
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $municipio_id
 * @property string $nombre
 * @property Municipio $Municipio
 * @property Doctrine_Collection $Centro
 * @property Doctrine_Collection $Beneficiario
 * 
 * @method integer             getId()           Returns the current record's "id" value
 * @method integer             getMunicipioId()  Returns the current record's "municipio_id" value
 * @method string              getNombre()       Returns the current record's "nombre" value
 * @method Municipio           getMunicipio()    Returns the current record's "Municipio" value
 * @method Doctrine_Collection getCentro()       Returns the current record's "Centro" collection
 * @method Doctrine_Collection getBeneficiario() Returns the current record's "Beneficiario" collection
 * @method Parroquia           setId()           Sets the current record's "id" value
 * @method Parroquia           setMunicipioId()  Sets the current record's "municipio_id" value
 * @method Parroquia           setNombre()       Sets the current record's "nombre" value
 * @method Parroquia           setMunicipio()    Sets the current record's "Municipio" value
 * @method Parroquia           setCentro()       Sets the current record's "Centro" collection
 * @method Parroquia           setBeneficiario() Sets the current record's "Beneficiario" collection
 * 
 * @package    inasscentros
 * @subpackage model
 * @author     Alexis Limongi
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseParroquia extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('parroquia');
        $this->hasColumn('id', 'integer', 4, array(
             'primary' => true,
             'type' => 'integer',
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('municipio_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombre', 'string', 120, array(
             'type' => 'string',
             'notnull' => true,
             'notblank' => true,
             'minlength' => 4,
             'length' => 120,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Municipio', array(
             'local' => 'municipio_id',
             'foreign' => 'id'));

        $this->hasMany('Centro', array(
             'local' => 'id',
             'foreign' => 'parroquia_id'));

        $this->hasMany('Beneficiario', array(
             'local' => 'id',
             'foreign' => 'parroquia_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $softdelete0 = new Doctrine_Template_SoftDelete();
        $this->actAs($timestampable0);
        $this->actAs($softdelete0);
    }
}