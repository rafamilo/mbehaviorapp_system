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

        $this->table('users');
        $this->displayField('name');
        $this->primaryKey('id');

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
            ->requirePresence('birthdate')
            ->notEmpty('birthdate');

        $validator
            ->integer('cpf')
            ->requirePresence('cpf')
            ->notEmpty('cpf');

        $validator
            ->integer('rg')
            ->requirePresence('rg')
            ->notEmpty('rg');

        $validator
            ->email('email')
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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['user_type_id'], 'UserTypes'));
        return $rules;
    }

    public function beforeFind(Event $event,Query $queryData)
    {
      $outer = Router::getRequest();
     if($outer->controller=='Users') {
    if (!empty($outer->query)) {
           foreach ($outer->query as $key => $value) {
                if (!empty($value) && substr_count($key, '__') == 1) {
                    if(substr_count($value, '/')){
                          if(substr_count($value, ':')){
                                $data = new DateTime();
                                $value = $data->createFromFormat('d/m/Y H:i',$value);
                                $queryData->andWhere([str_replace('__', '.', $key) => $value]);
                          }else{
                                $value = implode('-', array_reverse(explode('/', $value)));
                                $queryData->andWhere([str_replace('__', '.', $key) => $value]);
                          }
                    }else{
                                $queryData->andWhere(['UPPER('.str_replace('__', '.', $key).') like' => '%'.strtoupper($value).'%']);
                    }
                }
           }
        }
     }
       return $queryData;
    }


    public function beforeSave(Event $event)
    {
        $entity = $event->data['entity'];
        if($entity->isNew()) {
         }
        
        if(!is_object($entity->birthdate)){
           $inicio = new DateTime();
           $now = $inicio->createFromFormat('d/m/Y H:i',$entity->birthdate);
           $entity->birthdate = $now;
        }
         return true;
    }
}
