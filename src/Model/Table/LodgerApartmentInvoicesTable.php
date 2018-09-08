<?php
namespace App\Model\Table;

use App\Model\Entity\LodgerApartmentInvoice;
use Cake\Event\Event;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Routing\Router;
use Cake\Validation\Validator;
use DateTime;

/**
 * LodgerApartmentInvoices Model
 *
 * @property \Cake\ORM\Association\BelongsTo $LodgerApartments

 */
class LodgerApartmentInvoicesTable extends Table
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

        $this->setTable('lodger_apartment_invoices');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('LodgerApartments', [
            'foreignKey' => 'lodger_apartment_id',
            'joinType' => 'INNER'
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
        $queryData->where(['LodgerApartmentInvoices.status !=' => 0]);
        return $queryData;
    }
}