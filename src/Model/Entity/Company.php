<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

/**
 * Company Entity.
 *
 * @property int $id
 * @property string $name
 * @property string $cnpj
 * @property string $place
 * @property int $number
 * @property string $district
 * @property string $city
 * @property string $state
 * @property string $country
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $updated
 * @property int $status
 */
class Company extends Entity
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
        'cnpj' => true,
        'place' => true,
        'number' => true,
        'district' => true,
        'city' => true,
        'state' => true,
        'country' => true,
        'created' => true,
        'updated' => true,
        'status' => true,
        'users' => true,
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
