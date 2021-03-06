<?php

/**
 * BaseAtencion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $beneficiario_id
 * @property integer $centro_id
 * @property integer $estado_id
 * @property enum $social
 * @property enum $salud
 * @property integer $user_id
 * @property Beneficiario $Beneficiario
 * @property Centro $Centro
 * @property Estado $Estado
 * @property sfGuardUser $User
 * 
 * @method integer      getId()              Returns the current record's "id" value
 * @method integer      getBeneficiarioId()  Returns the current record's "beneficiario_id" value
 * @method integer      getCentroId()        Returns the current record's "centro_id" value
 * @method integer      getEstadoId()        Returns the current record's "estado_id" value
 * @method enum         getSocial()          Returns the current record's "social" value
 * @method enum         getSalud()           Returns the current record's "salud" value
 * @method integer      getUserId()          Returns the current record's "user_id" value
 * @method Beneficiario getBeneficiario()    Returns the current record's "Beneficiario" value
 * @method Centro       getCentro()          Returns the current record's "Centro" value
 * @method Estado       getEstado()          Returns the current record's "Estado" value
 * @method sfGuardUser  getUser()            Returns the current record's "User" value
 * @method Atencion     setId()              Sets the current record's "id" value
 * @method Atencion     setBeneficiarioId()  Sets the current record's "beneficiario_id" value
 * @method Atencion     setCentroId()        Sets the current record's "centro_id" value
 * @method Atencion     setEstadoId()        Sets the current record's "estado_id" value
 * @method Atencion     setSocial()          Sets the current record's "social" value
 * @method Atencion     setSalud()           Sets the current record's "salud" value
 * @method Atencion     setUserId()          Sets the current record's "user_id" value
 * @method Atencion     setBeneficiario()    Sets the current record's "Beneficiario" value
 * @method Atencion     setCentro()          Sets the current record's "Centro" value
 * @method Atencion     setEstado()          Sets the current record's "Estado" value
 * @method Atencion     setUser()            Sets the current record's "User" value
 * 
 * @package    inasscentros
 * @subpackage model
 * @author     Alexis Limongi
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAtencion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('atencion');
        $this->hasColumn('id', 'integer', 4, array(
             'primary' => true,
             'type' => 'integer',
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('beneficiario_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('centro_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('estado_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('social', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'Si',
              1 => 'No',
             ),
             'notnull' => true,
             'notblank' => true,
             'default' => 'No',
             ));
        $this->hasColumn('salud', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'Si',
              1 => 'No',
             ),
             'notnull' => true,
             'notblank' => true,
             'default' => 'No',
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Beneficiario', array(
             'local' => 'beneficiario_id',
             'foreign' => 'id'));

        $this->hasOne('Centro', array(
             'local' => 'centro_id',
             'foreign' => 'id'));

        $this->hasOne('Estado', array(
             'local' => 'estado_id',
             'foreign' => 'id'));

        $this->hasOne('sfGuardUser as User', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $softdelete0 = new Doctrine_Template_SoftDelete();
        $this->actAs($timestampable0);
        $this->actAs($softdelete0);
    }
}