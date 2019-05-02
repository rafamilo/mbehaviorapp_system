<?php
namespace App\Model\Table;

use App\Model\Entity\Award;
use Cake\Event\Event;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Routing\Router;
use Cake\Validation\Validator;
use DateTime;

/**
 * Awards Model
 *

 */
class AwardsTable extends Table
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

        $this->setTable('awards');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->maxLength('name', 255)
            ->requirePresence('name')
            ->notEmpty('name');

        $validator
            ->requirePresence('sort_date')
            ->notEmpty('sort_date');

        $validator
            ->scalar('description')
            ->requirePresence('description')
            ->notEmpty('description');

        $validator
            ->integer('created_by')
            ->requirePresence('created_by', 'create')
            ->notEmpty('created_by');

        $validator
            ->integer('updated_by')
            ->requirePresence('updated_by', 'create')
            ->notEmpty('updated_by');

        $validator
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }

    public function beforeFind(Event $event, Query $queryData)
    {
        $queryData->where(['Awards.status !=' => 0]);
        return $queryData;
    }
}