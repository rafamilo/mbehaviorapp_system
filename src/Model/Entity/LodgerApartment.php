<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LodgerApartment Entity.
 *
 * @property int $id
 * @property int $lodger_id
 * @property int $apartment_id
 * @property \Cake\I18n\FrozenTime $init_date
 * @property \Cake\I18n\FrozenTime $end_date
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $updated
 * @property int $created_by
 * @property int $updated_by
 * @property int $status
 */
class LodgerApartment extends Entity
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
        'lodger_id' => true,
        'apartment_id' => true,
        'init_date' => true,
        'end_date' => true,
        'created' => true,
        'updated' => true,
        'created_by' => true,
        'updated_by' => true,
        'status' => true,
        'user' => true,
        'apartment' => true,
        'lodger_apartment_invoices' => true,
    ];
}
