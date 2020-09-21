<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Popsicles Model
 *
 * @property \App\Model\Table\FlavoursTable&\Cake\ORM\Association\BelongsTo $Flavours
 * @property \App\Model\Table\CategoriesTable&\Cake\ORM\Association\BelongsToMany $Categories
 *
 * @method \App\Model\Entity\Popsicle newEmptyEntity()
 * @method \App\Model\Entity\Popsicle newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Popsicle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Popsicle get($primaryKey, $options = [])
 * @method \App\Model\Entity\Popsicle findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Popsicle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Popsicle[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Popsicle|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Popsicle saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Popsicle[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Popsicle[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Popsicle[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Popsicle[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PopsiclesTable extends Table
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

        $this->setTable('popsicles');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Flavours', [
            'foreignKey' => 'flavour_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsToMany('Categories', [
            'foreignKey' => 'popsicle_id',
            'targetForeignKey' => 'category_id',
            'joinTable' => 'popsicles_categories',
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
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('description')
            ->maxLength('description', 100)
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->scalar('ingredient')
            ->maxLength('ingredient', 100)
            ->requirePresence('ingredient', 'create')
            ->notEmptyString('ingredient');

        $validator
            ->decimal('price')
            ->requirePresence('price', 'create')
            ->notEmptyString('price');

        $validator
            ->scalar('image')
            ->maxLength('image', 255)
            ->requirePresence('image', 'create')
            ->notEmptyFile('image');

        $validator
            ->allowEmptyFile('image')
            ->add('image',[
                'mimeType' => [
                    'rule' => ['mimeType',['image/jpg', 'image/png','image/jpeg']],
                    'message'=> 'Please upload only jpg and png.'
                ],
                'fileSize'=>[
                    'rule' => ['filesize','<=','1MB'],
                    'message' =>'Image file size must be less than 1MB.'
                ],
            ]);

        $validator
            ->integer('calorie')
            ->requirePresence('calorie', 'create')
            ->notEmptyString('calorie');

        $validator
            ->boolean('latest')
            ->requirePresence('latest', 'create')
            ->notEmptyString('latest');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['flavour_id'], 'Flavours'), ['errorField' => 'flavour_id']);

        return $rules;
    }
}
