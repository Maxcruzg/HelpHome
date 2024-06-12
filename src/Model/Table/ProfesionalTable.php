<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Profesional Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\EspecialidadTable&\Cake\ORM\Association\BelongsTo $Especialidad
 * @property \App\Model\Table\CalificacionesTable&\Cake\ORM\Association\HasMany $Calificaciones
 * @property \App\Model\Table\CitasTable&\Cake\ORM\Association\HasMany $Citas
 * @property \App\Model\Table\HistorialCitasTable&\Cake\ORM\Association\HasMany $HistorialCitas
 *
 * @method \App\Model\Entity\Profesional newEmptyEntity()
 * @method \App\Model\Entity\Profesional newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Profesional[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Profesional get($primaryKey, $options = [])
 * @method \App\Model\Entity\Profesional findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Profesional patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Profesional[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Profesional|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profesional saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profesional[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Profesional[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Profesional[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Profesional[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProfesionalTable extends Table
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

        $this->setTable('profesional');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Especialidad', [
            'foreignKey' => 'especialidad_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Calificaciones', [
            'foreignKey' => 'profesional_id',
        ]);
        $this->hasMany('Citas', [
            'foreignKey' => 'profesional_id',
        ]);
        $this->hasMany('HistorialCitas', [
            'foreignKey' => 'profesional_id',
        ]);
    }


    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('user_id')
            ->notEmptyString('user_id');

        $validator
            ->scalar('path')
            ->maxLength('path', 255)
            ->requirePresence('path', 'create')
            ->notEmptyString('path', 'Tiene que subir un archivo para.');

        $validator
            ->integer('value')
            ->requirePresence('value', 'create')
            ->notEmptyString('value');

        $validator
            ->scalar('experiencia')
            ->maxLength('experiencia', 100)
            ->requirePresence('experiencia', 'create')
            ->notEmptyString('experiencia');

        $validator
            ->integer('especialidad_id')
            ->notEmptyString('especialidad_id');

        return $validator;
    }


    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('user_id', 'Users'), ['errorField' => 'user_id']);
        $rules->add($rules->existsIn('especialidad_id', 'Especialidad'), ['errorField' => 'especialidad_id']);

        return $rules;
    }

    public function getAverageRating($profesionalId)
    {
        $calificaciones = $this->Calificaciones->find()
            ->where(['profesional_id' => $profesionalId])
            ->all();

        $total = 0;
        $count = $calificaciones->count();

        foreach ($calificaciones as $calificacion) {
            $total += $calificacion->calificacion;
        }

        return $count ? $total / $count : 0;
    }

    public function getCountCitas($profesionalId)
    {
        $citas = $this->Citas->find()
            ->where(['profesional_id' => $profesionalId])
            ->all();

        $total = $citas->count();

        return $total;
    }
}
