<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bag Model
 *
 * @property \App\Model\Table\LocationsTable|\Cake\ORM\Association\BelongsTo $Locations
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\BagtypecoffeTable|\Cake\ORM\Association\HasMany $Bagtypecoffe
 * @property \App\Model\Table\SolicitationTable|\Cake\ORM\Association\HasMany $Solicitation
 *
 * @method \App\Model\Entity\Bag get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bag newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Bag[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bag|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bag saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bag patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bag[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bag findOrCreate($search, callable $callback = null, $options = [])
 */
class BagTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('bag');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Locations', [
            'foreignKey' => 'location_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Bagtypecoffe', [
            'foreignKey' => 'bag_id'
        ]);
        $this->hasMany('Solicitation', [
            'foreignKey' => 'bag_id'
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
            ->allowEmptyString('id', 'create');

        $validator
            ->date('entryData')
            ->requirePresence('entryData', 'create')
            ->allowEmptyDate('entryData', false);

        $validator
            ->date('outDate')
            ->allowEmptyDate('outDate');

        $validator
            ->scalar('lot')
            ->maxLength('lot', 35)
            ->requirePresence('lot', 'create')
            ->allowEmptyString('lot', false);

        $validator
            ->requirePresence('weight', 'create')
            ->allowEmptyString('weight', false);

        $validator
            ->scalar('producerName')
            ->maxLength('producerName', 65)
            ->requirePresence('producerName', 'create')
            ->allowEmptyString('producerName', false);

        $validator
            ->scalar('producerFarm')
            ->maxLength('producerFarm', 65)
            ->requirePresence('producerFarm', 'create')
            ->allowEmptyString('producerFarm', false);

        $validator
            ->integer('city_user')
            ->requirePresence('city_user', 'create')
            ->allowEmptyString('city_user', false);

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
        $rules->add($rules->existsIn(['location_id'], 'Locations'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
