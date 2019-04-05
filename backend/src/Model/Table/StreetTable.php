<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Street Model
 *
 * @property \App\Model\Table\LocationTable|\Cake\ORM\Association\HasMany $Location
 *
 * @method \App\Model\Entity\Street get($primaryKey, $options = [])
 * @method \App\Model\Entity\Street newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Street[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Street|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Street saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Street patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Street[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Street findOrCreate($search, callable $callback = null, $options = [])
 */
class StreetTable extends Table
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

        $this->setTable('street');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Location', [
            'foreignKey' => 'street_id'
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
            ->scalar('description')
            ->maxLength('description', 1)
            ->requirePresence('description', 'create')
            ->allowEmptyString('description', false);

        return $validator;
    }
}
