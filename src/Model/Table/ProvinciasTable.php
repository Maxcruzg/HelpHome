<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Provincias Model
 *
 * @property \App\Model\Table\RegionsTable&\Cake\ORM\Association\BelongsTo $Regions
 * @property \App\Model\Table\ComunasTable&\Cake\ORM\Association\HasMany $Comunas
 *
 * @method \App\Model\Entity\Provincia newEmptyEntity()
 * @method \App\Model\Entity\Provincia newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Provincia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Provincia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Provincia findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Provincia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Provincia[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Provincia|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Provincia saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Provincia[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Provincia[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Provincia[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Provincia[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProvinciasTable extends Table
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

        $this->setTable('provincias');
        $this->setDisplayField('provincia');
        $this->setPrimaryKey('id');

        $this->belongsTo('Regions', [
            'foreignKey' => 'region_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Comunas', [
            'foreignKey' => 'provincia_id',
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
            ->scalar('provincia')
            ->maxLength('provincia', 40)
            ->requirePresence('provincia', 'create')
            ->notEmptyString('provincia');

        $validator
            ->integer('region_id')
            ->notEmptyString('region_id');

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
        $rules->add($rules->existsIn('region_id', 'Regions'), ['errorField' => 'region_id']);

        return $rules;
    }
}
