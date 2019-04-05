<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bagtypecoffe Model
 *
 * @property \App\Model\Table\TypeCoffesTable|\Cake\ORM\Association\BelongsTo $TypeCoffes
 * @property \App\Model\Table\BagsTable|\Cake\ORM\Association\BelongsTo $Bags
 *
 * @method \App\Model\Entity\Bagtypecoffe get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bagtypecoffe newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Bagtypecoffe[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bagtypecoffe|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bagtypecoffe saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bagtypecoffe patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bagtypecoffe[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bagtypecoffe findOrCreate($search, callable $callback = null, $options = [])
 */
class BagtypecoffeTable extends Table
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

        $this->setTable('bagtypecoffe');
        $this->setDisplayField('typeCoffe_id');
        $this->setPrimaryKey(['typeCoffe_id', 'bag_id']);

        $this->belongsTo('TypeCoffes', [
            'foreignKey' => 'typeCoffe_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Bags', [
            'foreignKey' => 'bag_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['typeCoffe_id'], 'TypeCoffes'));
        $rules->add($rules->existsIn(['bag_id'], 'Bags'));

        return $rules;
    }
}
