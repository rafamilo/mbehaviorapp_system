<?php
namespace App\Model\Table;

use App\Model\Entity\Cron;
use Cake\Event\Event;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Routing\Router;
use Cake\Validation\Validator;
use DateTime;

/**
 * Cron Model
 *

 */
class CronTable extends Table
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

        $this->setTable('cron');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('nome')
            ->maxLength('nome', 11)
            ->requirePresence('nome')
            ->notEmpty('nome');

        return $validator;
    }

    public function beforeFind(Event $event, Query $queryData)
    {
        $queryData->where(['Cron.status !=' => 0]);
        return $queryData;
    }
}