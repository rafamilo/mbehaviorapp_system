<?php
namespace App\Model\Table;

use App\Model\Entity\UserStatistic;
use Cake\Event\Event;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Routing\Router;
use Cake\Validation\Validator;
use DateTime;

/**
 * UserStatistics Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users

 */
class UserStatisticsTable extends Table
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

        $this->setTable('user_statistics');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
            ->scalar('phone_brand')
            ->maxLength('phone_brand')
            ->requirePresence('phone_brand')
            ->notEmpty('phone_brand');

        $validator
            ->scalar('phone_carrier')
            ->maxLength('phone_carrier')
            ->requirePresence('phone_carrier')
            ->notEmpty('phone_carrier');

        $validator
            ->scalar('phone_model')
            ->maxLength('phone_model')
            ->requirePresence('phone_model')
            ->notEmpty('phone_model');

        $validator
            ->scalar('phone_number')
            ->maxLength('phone_number')
            ->requirePresence('phone_number')
            ->notEmpty('phone_number');

        $validator
            ->scalar('phone_manufacturer')
            ->maxLength('phone_manufacturer')
            ->requirePresence('phone_manufacturer')
            ->notEmpty('phone_manufacturer');

        $validator
            ->scalar('system_name')
            ->maxLength('system_name')
            ->requirePresence('system_name')
            ->notEmpty('system_name');

        $validator
            ->scalar('system_version')
            ->maxLength('system_version')
            ->requirePresence('system_version')
            ->notEmpty('system_version');

        $validator
            ->scalar('timezone')
            ->maxLength('timezone')
            ->requirePresence('timezone')
            ->notEmpty('timezone');

        $validator
            ->scalar('battery_level')
            ->maxLength('battery_level')
            ->requirePresence('battery_level')
            ->notEmpty('battery_level');

        $validator
            ->scalar('ip')
            ->maxLength('ip')
            ->requirePresence('ip')
            ->notEmpty('ip');

        $validator
            ->scalar('user_agent')
            ->maxLength('user_agent')
            ->requirePresence('user_agent')
            ->notEmpty('user_agent');

        $validator
            ->scalar('air_plane_mode_on')
            ->maxLength('air_plane_mode_on')
            ->requirePresence('air_plane_mode_on')
            ->notEmpty('air_plane_mode_on');

        $validator
            ->scalar('is_emulator')
            ->maxLength('is_emulator')
            ->requirePresence('is_emulator')
            ->notEmpty('is_emulator');

        $validator
            ->scalar('is_tablet')
            ->maxLength('is_tablet')
            ->requirePresence('is_tablet')
            ->notEmpty('is_tablet');

        $validator
            ->scalar('is_landscape')
            ->maxLength('is_landscape')
            ->requirePresence('is_landscape')
            ->notEmpty('is_landscape');

        $validator
            ->scalar('device_type')
            ->maxLength('device_type')
            ->requirePresence('device_type')
            ->notEmpty('device_type');

        $validator
            ->scalar('connection_type')
            ->maxLength('connection_type')
            ->requirePresence('connection_type')
            ->notEmpty('connection_type');

        $validator
            ->scalar('connection_effective_type')
            ->maxLength('connection_effective_type')
            ->requirePresence('connection_effective_type')
            ->notEmpty('connection_effective_type');

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
        $queryData->where(['UserStatistics.status !=' => 0]);
        return $queryData;
    }
}