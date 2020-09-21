<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Flavours Model
 *
 * @property \App\Model\Table\PopsiclesTable&\Cake\ORM\Association\HasMany $Popsicles
 *
 * @method \App\Model\Entity\Flavour newEmptyEntity()
 * @method \App\Model\Entity\Flavour newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Flavour[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Flavour get($primaryKey, $options = [])
 * @method \App\Model\Entity\Flavour findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Flavour patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Flavour[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Flavour|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Flavour saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Flavour[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Flavour[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Flavour[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Flavour[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FlavoursTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('flavours');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Popsicles', [
            'foreignKey' => 'flavour_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('flavour')
            ->maxLength('flavour', 100)
            ->requirePresence('flavour', 'create')
            ->notEmptyString('flavour');

        return $validator;
    }
}
