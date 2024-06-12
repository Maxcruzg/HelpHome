<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Especialidad Model
 *
 * @method \App\Model\Entity\Especialidad newEmptyEntity()
 * @method \App\Model\Entity\Especialidad newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Especialidad[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Especialidad get($primaryKey, $options = [])
 * @method \App\Model\Entity\Especialidad findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Especialidad patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Especialidad[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Especialidad|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Especialidad saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Especialidad[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Especialidad[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Especialidad[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Especialidad[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EspecialidadTable extends Table
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

        $this->setTable('especialidad');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Profesional', [
            'foreignKey' => 'especialidad_id',
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        return $validator;
    }
}
