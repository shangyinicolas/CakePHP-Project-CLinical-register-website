<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Assigned Model
 *
 * @property \App\Model\Table\CliniciansTable&\Cake\ORM\Association\BelongsTo $Clinicians
 * @property \App\Model\Table\PatientsTable&\Cake\ORM\Association\BelongsTo $Patients
 *
 * @method \App\Model\Entity\Assigned newEmptyEntity()
 * @method \App\Model\Entity\Assigned newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Assigned[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Assigned get($primaryKey, $options = [])
 * @method \App\Model\Entity\Assigned findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Assigned patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Assigned[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Assigned|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Assigned saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Assigned[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Assigned[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Assigned[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Assigned[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AssignedTable extends Table
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

        $this->setTable('assigned');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Clinicians', [
            'foreignKey' => 'clinicians_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Patients', [
            'foreignKey' => 'patients_id',
            'joinType' => 'INNER',
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
        $rules->add($rules->existsIn(['clinicians_id'], 'Clinicians'), ['errorField' => 'clinicians_id']);
        $rules->add($rules->existsIn(['patients_id'], 'Patients'), ['errorField' => 'patients_id']);

        return $rules;
    }
}
