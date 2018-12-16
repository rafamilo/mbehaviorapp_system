<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\Event\Event;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Routing\Router;
use Cake\Validation\Validator;
use DateTime;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\BelongsTo $UserTypes
 * @property \Cake\ORM\Association\HasMany $Announcements
 * @property \Cake\ORM\Association\HasMany $PartyHallSchedules
 * @property \Cake\ORM\Association\HasMany $UserInvoices
 * @property \Cake\ORM\Association\HasMany $UserPhones

 */
class UsersTable extends Table
{

    /**
     * testando geracao de codigos
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('UserTypes', [
            'foreignKey' => 'user_type_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Announcements', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('PartyHallSchedules', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('UserInvoices', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('UserPhones', [
            'foreignKey' => 'user_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id');

        $validator
            ->scalar('name')
            ->maxLength('name', 50)
            ->requirePresence('name')
            ->notEmpty('name');

        $validator
            ->scalar('password')
            ->maxLength('password', 100)
            ->requirePresence('password')
            ->notEmpty('password');

        $validator
            ->requirePresence('birthdate')
            ->notEmpty('birthdate');

        $validator
            ->scalar('cpf')
            ->maxLength('cpf', 11)
            ->requirePresence('cpf')
            ->notEmpty('cpf');

        $validator
            ->scalar('rg')
            ->maxLength('rg', 9)
            ->requirePresence('rg')
            ->notEmpty('rg');

        $validator
            ->email('email')
            ->maxLength('email', 50)
            ->requirePresence('email')
            ->notEmpty('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('answerable')
            ->allowEmpty('answerable');

        $validator
            ->integer('created_by')
            ->requirePresence('created_by')
            ->notEmpty('created_by');

        $validator
            ->integer('updated_by')
            ->requirePresence('updated_by')
            ->notEmpty('updated_by');

        $validator
            ->requirePresence('status')
            ->notEmpty('status');

        return $validator;
    }

    public function beforeFind(Event $event, Query $queryData)
    {
        $queryData->where(['Users.status !=' => 0]);
        return $queryData;
    }

    public function beforeSave($event, $entity, $options)
    {
        if(isset($entity->birthdate))
            $entity->birthdate = date_create_from_format("d/m/Y",$entity->birthdate);
        
        $entity->user_type_id = 1;
        return true;
    }
}