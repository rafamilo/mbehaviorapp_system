<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

/**
 * User Entity.
 *
 * @property int $id
 * @property string $password
 * @property string $name
 * @property int $user_type_id
 * @property \Cake\I18n\FrozenTime $birthdate
 * @property string $cpf
 * @property string $rg
 * @property string $email
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $updated
 * @property int $created_by
 * @property int $updated_by
 * @property int $status
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'password' => true,
        'name' => true,
        'user_type_id' => true,
        'birthdate' => true,
        'cpf' => true,
        'rg' => true,
        'email' => true,
        'created' => true,
        'updated' => true,
        'created_by' => true,
        'updated_by' => true,
        'status' => true,
        'user_type' => true,
        'user_apps' => true,
        'user_statistics' => true,
    ];

    /**
     * Fields that are excluded from JSON an array versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
    protected function _getVirtualCreatedBy()
    {   
        return TableRegistry::get('Users')->get($this->_properties['created_by'])->name;
    }

    protected function _getVirtualUpdatedBy()
    {   
        return TableRegistry::get('Users')->get($this->_properties['updated_by'])->name;
    }
}
