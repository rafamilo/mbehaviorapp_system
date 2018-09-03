<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity.
 *
 * @property int $id
 * @property string $name
 * @property int $user_type_id
 * @property \Cake\I18n\FrozenTime $birthdate
 * @property int $cpf
 * @property int $rg
 * @property string $email
 * @property int $answerable
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
        'name' => true,
        'user_type_id' => true,
        'birthdate' => true,
        'cpf' => true,
        'rg' => true,
        'email' => true,
        'answerable' => true,
        'created' => true,
        'updated' => true,
        'created_by' => true,
        'updated_by' => true,
        'status' => true,
        'user_type' => true,
        'announcements' => true,
        'party_hall_schedules' => true,
        'user_invoices' => true,
        'user_phones' => true,
    ];
}
