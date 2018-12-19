<?php
namespace App\Model\Table;

use App\Model\Entity\Company;
use Cake\Event\Event;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Routing\Router;
use Cake\Validation\Validator;
use DateTime;

/**
 * Companies Model
 *
 * @property \Cake\ORM\Association\HasMany $Users

 */
class CompaniesTable extends Table
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

        $this->setTable('companies');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Users', [
            'foreignKey' => 'company_id'
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
            ->scalar('cnpj')
            ->maxLength('cnpj')
            ->requirePresence('cnpj')
            ->notEmpty('cnpj');

        $validator
            ->scalar('place')
            ->maxLength('place')
            ->allowEmpty('place');

        $validator
            ->nonNegativeInteger('number')
            ->allowEmpty('number');

        $validator
            ->scalar('district')
            ->maxLength('district')
            ->requirePresence('district')
            ->notEmpty('district');

        $validator
            ->scalar('city')
            ->maxLength('city')
            ->requirePresence('city')
            ->notEmpty('city');

        $validator
            ->scalar('state')
            ->maxLength('state')
            ->requirePresence('state')
            ->notEmpty('state');

        $validator
            ->scalar('country')
            ->maxLength('country')
            ->requirePresence('country')
            ->notEmpty('country');

        $validator
            ->requirePresence('status')
            ->notEmpty('status');

        return $validator;
    }

    public function beforeFind(Event $event, Query $queryData)
    {
        $queryData->where(['Companies.status !=' => 0]);
        return $queryData;
    }
}