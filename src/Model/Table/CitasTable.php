<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Citas Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Cita newEmptyEntity()
 * @method \App\Model\Entity\Cita newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Cita[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cita get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cita findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Cita patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cita[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cita|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cita saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cita[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cita[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cita[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cita[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CitasTable extends Table
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

        $this->setTable('citas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
            ->scalar('client_phone')
            ->maxLength('client_phone', 255)
            ->requirePresence('client_phone', 'create')
            ->notEmptyString('client_phone');

        $validator
            ->scalar('client_email')
            ->maxLength('client_email', 255)
            ->requirePresence('client_email', 'create')
            ->notEmptyString('client_email');

        $validator
            ->scalar('client_direction')
            ->maxLength('client_direction', 255)
            ->requirePresence('client_direction', 'create')
            ->notEmptyString('client_direction');

        $validator
            ->scalar('description')
            ->maxLength('description', 255)
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->date('fecha_cita')
            ->allowEmptyDate('fecha_cita');

        $validator
            ->requirePresence('profesional_id', 'create')
            ->notEmptyString('profesional_id');

        $validator
            ->notEmptyString('user_id');

        $validator
            ->requirePresence('estado', 'create')
            ->notEmptyString('estado');

        $validator
            ->scalar('comentarios')
            ->maxLength('comentarios', 255)
            ->requirePresence('comentarios', 'create')
            ->notEmptyString('comentarios');

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
        $rules->add($rules->existsIn('user_id', 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}
