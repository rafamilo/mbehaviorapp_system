<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

/**
 * Block Entity.
 *
 * @property int $id
 * @property string $name
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $updated
 * @property int $created_by
 * @property int $updated_by
 * @property int $status
 */
class Block extends Entity
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
        'created' => true,
        'updated' => true,
        'created_by' => true,
        'updated_by' => true,
        'status' => true,
        'block_invoices' => true,
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
