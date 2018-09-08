<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BlockInvoice Entity.
 *
 * @property int $id
 * @property int $block_id
 * @property int $invoice_plan_id
 * @property float $value
 * @property \Cake\I18n\FrozenTime $issue_date
 * @property \Cake\I18n\FrozenTime $expiration_date
 * @property \Cake\I18n\FrozenTime $reference_date
 * @property int $payment_status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $updated
 * @property int $created_by
 * @property int $updated_by
 * @property int $status
 */
class BlockInvoice extends Entity
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
        'block_id' => true,
        'invoice_plan_id' => true,
        'value' => true,
        'issue_date' => true,
        'expiration_date' => true,
        'reference_date' => true,
        'payment_status' => true,
        'created' => true,
        'updated' => true,
        'created_by' => true,
        'updated_by' => true,
        'status' => true,
        'block' => true,
        'invoice_plan' => true,
    ];
}
