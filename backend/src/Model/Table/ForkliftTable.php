<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Forklift Model
 *
 * @property \App\Model\Table\SolicitationTable|\Cake\ORM\Association\HasMany $Solicitation
 *
 * @method \App\Model\Entity\Forklift get($primaryKey, $options = [])
 * @method \App\Model\Entity\Forklift newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Forklift[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Forklift|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Forklift saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Forklift patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Forklift[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Forklift findOrCreate($search, callable $callback = null, $options = [])
 */
class ForkliftTable extends Table
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

        $this->setTable('forklift');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Solicitation', [
            'foreignKey' => 'forklift_id'
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

        $validator
            ->scalar('name')
            ->maxLength('name', 65)
            ->requirePresence('name', 'create')
            ->allowEmptyString('name', false);

        return $validator;
    }
}
