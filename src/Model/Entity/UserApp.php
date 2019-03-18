<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

/**
 * UserApp Entity.
 *
 * @property int $id
 * @property string $name
 * @property int $usage_time
 * @property int $last_usage_time
 * @property int $usage_in_this_session
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $updated
 * @property int $created_by
 * @property int $updated_by
 * @property int $status
 * @property int $user_id
 */
class UserApp extends Entity
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
        'name' => true,
        'usage_time' => true,
        'last_usage_time' => true,
        'usage_in_this_session' => true,
        'created' => true,
        'updated' => true,
        'created_by' => true,
        'updated_by' => true,
        'status' => true,
        'user_id' => true,
        'user' => true,
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
