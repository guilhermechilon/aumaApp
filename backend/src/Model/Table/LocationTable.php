<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Location Model
 *
 * @property \App\Model\Table\StreetsTable|\Cake\ORM\Association\BelongsTo $Streets
 * @property \App\Model\Table\AvenuesTable|\Cake\ORM\Association\BelongsTo $Avenues
 * @property \App\Model\Table\FloorsTable|\Cake\ORM\Association\BelongsTo $Floors
 * @property \App\Model\Table\PositionsTable|\Cake\ORM\Association\BelongsTo $Positions
 * @property \App\Model\Table\BagTable|\Cake\ORM\Association\HasMany $Bag
 *
 * @method \App\Model\Entity\Location get($primaryKey, $options = [])
 * @method \App\Model\Entity\Location newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Location[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Location|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Location saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Location patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Location[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Location findOrCreate($search, callable $callback = null, $options = [])
 */
class LocationTable extends Table
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

        $this->setTable('location');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Streets', [
            'foreignKey' => 'street_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Avenues', [
            'foreignKey' => 'avenue_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Floors', [
            'foreignKey' => 'floor_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Positions', [
            'foreignKey' => 'position_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Bag', [
            'foreignKey' => 'location_id'
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
            ->allowEmptyString('id', 'create');

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
        $rules->add($rules->existsIn(['street_id'], 'Streets'));
        $rules->add($rules->existsIn(['avenue_id'], 'Avenues'));
        $rules->add($rules->existsIn(['floor_id'], 'Floors'));
        $rules->add($rules->existsIn(['position_id'], 'Positions'));

        return $rules;
    }
}
