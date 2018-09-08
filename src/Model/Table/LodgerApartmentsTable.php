<?php
namespace App\Model\Table;

use App\Model\Entity\LodgerApartment;
use Cake\Event\Event;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Routing\Router;
use Cake\Validation\Validator;
use DateTime;

/**
 * LodgerApartments Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Apartments
 * @property \Cake\ORM\Association\HasMany $LodgerApartmentInvoices

 */
class LodgerApartmentsTable extends Table
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

        $this->table('lodger_apartments');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'lodger_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Apartments', [
            'foreignKey' => 'apartment_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('LodgerApartmentInvoices', [
            'foreignKey' => 'lodger_apartment_id'
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
            ->requirePresence('init_date')
            ->notEmpty('init_date');

        $validator
            ->requirePresence('end_date')
            ->notEmpty('end_date');

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
        $queryData->where(['LodgerApartments.status !=' => 0]);
        return $queryData;
    }
}