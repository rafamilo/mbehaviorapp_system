<?php
namespace App\Model\Table;

use App\Model\Entity\Block;
use Cake\Event\Event;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Routing\Router;
use Cake\Validation\Validator;
use DateTime;

/**
 * Blocks Model
 *
 * @property \Cake\ORM\Association\HasMany $BlockInvoices

 */
class BlocksTable extends Table
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

        $this->setTable('blocks');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('BlockInvoices', [
            'foreignKey' => 'block_id'
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
        $queryData->where(['Blocks.status !=' => 0]);
        return $queryData;
    }
}