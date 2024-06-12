<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Comunas Model
 *
 * @property \App\Model\Table\ProvinciasTable&\Cake\ORM\Association\BelongsTo $Provincias
 * @property \App\Model\Table\ProfesionalsTable&\Cake\ORM\Association\HasMany $Profesionals
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Comuna newEmptyEntity()
 * @method \App\Model\Entity\Comuna newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Comuna[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Comuna get($primaryKey, $options = [])
 * @method \App\Model\Entity\Comuna findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Comuna patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Comuna[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Comuna|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Comuna saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Comuna[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Comuna[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Comuna[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Comuna[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ComunasTable extends Table
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

        $this->setTable('comunas');
        $this->setDisplayField('comuna');
        $this->setPrimaryKey('id');

        $this->belongsTo('Provincias', [
            'foreignKey' => 'provincia_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Profesionals', [
            'foreignKey' => 'comuna_id',
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'comuna_id',
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
            ->scalar('comuna')
            ->maxLength('comuna', 100)
            ->requirePresence('comuna', 'create')
            ->notEmptyString('comuna');

        $validator
            ->integer('provincia_id')
            ->notEmptyString('provincia_id');

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
        $rules->add($rules->existsIn('provincia_id', 'Provincias'), ['errorField' => 'provincia_id']);

        return $rules;
    }
}
