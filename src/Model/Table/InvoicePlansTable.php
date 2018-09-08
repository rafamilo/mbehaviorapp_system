<?php
namespace App\Model\Table;

use App\Model\Entity\InvoicePlan;
use Cake\Event\Event;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Routing\Router;
use Cake\Validation\Validator;
use DateTime;

/**
 * InvoicePlans Model
 *
 * @property \Cake\ORM\Association\BelongsTo $EntryTypes
 * @property \Cake\ORM\Association\HasMany $BlockInvoices
 * @property \Cake\ORM\Association\HasMany $UserInvoices

 */
class InvoicePlansTable extends Table
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

        $this->setTable('invoice_plans');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('EntryTypes', [
            'foreignKey' => 'entry_type_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('BlockInvoices', [
            'foreignKey' => 'invoice_plan_id'
        ]);
        $this->hasMany('UserInvoices', [
            'foreignKey' => 'invoice_plan_id'
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
            ->maxLength('name')
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
        $queryData->where(['InvoicePlans.status !=' => 0]);
        return $queryData;
    }
}