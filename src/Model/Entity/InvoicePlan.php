<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * InvoicePlan Entity.
 *
 * @property int $id
 * @property string $name
 * @property int $entry_type_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $updated
 * @property int $created_by
 * @property int $updated_by
 * @property int $status
 */
class InvoicePlan extends Entity
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
        'entry_type_id' => true,
        'created' => true,
        'updated' => true,
        'created_by' => true,
        'updated_by' => true,
        'status' => true,
        'entry_type' => true,
        'block_invoices' => true,
        'user_invoices' => true,
    ];
}
