<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HistorialCitas Model
 *
 * @property \App\Model\Table\CitasTable&\Cake\ORM\Association\BelongsTo $Citas
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\ProfesionalTable&\Cake\ORM\Association\BelongsTo $Profesional
 *
 * @method \App\Model\Entity\HistorialCita newEmptyEntity()
 * @method \App\Model\Entity\HistorialCita newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\HistorialCita[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HistorialCita get($primaryKey, $options = [])
 * @method \App\Model\Entity\HistorialCita findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\HistorialCita patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HistorialCita[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\HistorialCita|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HistorialCita saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HistorialCita[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\HistorialCita[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\HistorialCita[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\HistorialCita[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class HistorialCitasTable extends Table
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

        $this->setTable('historial_citas');
        $this->setDisplayField('estado_nuevo');
        $this->setPrimaryKey('id');

        $this->belongsTo('Citas', [
            'foreignKey' => 'cita_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Profesional', [
            'foreignKey' => 'profesional_id',
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
            ->integer('cita_id')
            ->notEmptyString('cita_id');

        $validator
            ->integer('user_id')
            ->notEmptyString('user_id');

        $validator
            ->integer('profesional_id')
            ->notEmptyString('profesional_id');

        $validator
            ->scalar('estado_nuevo')
            ->maxLength('estado_nuevo', 50)
            ->requirePresence('estado_nuevo', 'create')
            ->notEmptyString('estado_nuevo');

        $validator
            ->scalar('comentario')
            ->allowEmptyString('comentario');

        $validator
            ->dateTime('fecha')
            ->notEmptyDateTime('fecha');

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
        $rules->add($rules->existsIn('cita_id', 'Citas'), ['errorField' => 'cita_id']);
        $rules->add($rules->existsIn('user_id', 'Users'), ['errorField' => 'user_id']);
        $rules->add($rules->existsIn('profesional_id', 'Profesional'), ['errorField' => 'profesional_id']);

        return $rules;
    }
}
