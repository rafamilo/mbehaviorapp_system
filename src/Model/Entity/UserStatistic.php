<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

/**
 * UserStatistic Entity.
 *
 * @property int $id
 * @property string $phone_brand
 * @property string $phone_carrier
 * @property string $phone_model
 * @property string $phone_number
 * @property string $phone_manufacturer
 * @property string $system_name
 * @property string $system_version
 * @property string $timezone
 * @property string $battery_level
 * @property string $ip
 * @property string $user_agent
 * @property string $air_plane_mode_on
 * @property string $is_emulator
 * @property string $is_tablet
 * @property string $is_landscape
 * @property string $device_type
 * @property string $connection_type
 * @property string $connection_effective_type
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $updated
 * @property int $created_by
 * @property int $updated_by
 * @property int $status
 * @property int $user_id
 */
class UserStatistic extends Entity
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
        'phone_brand' => true,
        'phone_carrier' => true,
        'phone_model' => true,
        'phone_number' => true,
        'phone_manufacturer' => true,
        'system_name' => true,
        'system_version' => true,
        'timezone' => true,
        'battery_level' => true,
        'ip' => true,
        'user_agent' => true,
        'air_plane_mode_on' => true,
        'is_emulator' => true,
        'is_tablet' => true,
        'is_landscape' => true,
        'device_type' => true,
        'connection_type' => true,
        'connection_effective_type' => true,
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
