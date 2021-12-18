<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Data Model
 *
 * @method \App\Model\Entity\Data newEmptyEntity()
 * @method \App\Model\Entity\Data newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Data[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Data get($primaryKey, $options = [])
 * @method \App\Model\Entity\Data findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Data patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Data[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Data|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Data saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Data[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Data[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Data[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Data[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DataTable extends Table
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

        $this->setTable('data');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('Weight')
            ->requirePresence('Weight', 'create')
            ->notEmptyString('Weight');

        $validator
            ->integer('InsulinLevel')
            ->requirePresence('InsulinLevel', 'create')
            ->notEmptyString('InsulinLevel');

        $validator
            ->integer('GlucoseLevel')
            ->requirePresence('GlucoseLevel', 'create')
            ->notEmptyString('GlucoseLevel');

        $validator
            ->integer('KetoneLevel')
            ->requirePresence('KetoneLevel', 'create')
            ->notEmptyString('KetoneLevel');

        $validator
            ->integer('BloodPressure')
            ->requirePresence('BloodPressure', 'create')
            ->notEmptyString('BloodPressure');

        $validator
            ->integer('ReadingTime')
            ->requirePresence('ReadingTime', 'create')
            ->notEmptyString('ReadingTime');

        return $validator;
    }
}
