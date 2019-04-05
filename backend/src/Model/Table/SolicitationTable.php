<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Solicitation Model
 *
 * @property \App\Model\Table\StatusesTable|\Cake\ORM\Association\BelongsTo $Statuses
 * @property \App\Model\Table\ForkliftsTable|\Cake\ORM\Association\BelongsTo $Forklifts
 * @property \App\Model\Table\BagsTable|\Cake\ORM\Association\BelongsTo $Bags
 *
 * @method \App\Model\Entity\Solicitation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Solicitation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Solicitation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Solicitation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Solicitation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Solicitation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Solicitation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Solicitation findOrCreate($search, callable $callback = null, $options = [])
 */
class SolicitationTable extends Table
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

        $this->setTable('solicitation');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Statuses', [
            'foreignKey' => 'status_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Forklifts', [
            'foreignKey' => 'forklift_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Bags', [
            'foreignKey' => 'bag_id',
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
            ->allowEmptyString('id', 'create');

        $validator
            ->dateTime('dateTime')
            ->requirePresence('dateTime', 'create')
            ->allowEmptyDateTime('dateTime', false);

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
        $rules->add($rules->existsIn(['status_id'], 'Statuses'));
        $rules->add($rules->existsIn(['forklift_id'], 'Forklifts'));
        $rules->add($rules->existsIn(['bag_id'], 'Bags'));

        return $rules;
    }
}
