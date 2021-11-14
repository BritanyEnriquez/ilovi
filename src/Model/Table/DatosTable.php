<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Datos Model
 *
 * @method \App\Model\Entity\Dato newEmptyEntity()
 * @method \App\Model\Entity\Dato newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Dato[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dato get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dato findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Dato patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dato[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dato|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dato saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dato[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dato[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dato[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dato[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DatosTable extends Table
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

        $this->setTable('datos');
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
            ->scalar('nombre')
            ->maxLength('nombre', 255)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('apellido')
            ->maxLength('apellido', 255)
            ->requirePresence('apellido', 'create')
            ->notEmptyString('apellido');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 255)
            ->requirePresence('descripcion', 'create')
            ->notEmptyString('descripcion');

        $validator
            ->scalar('genero')
            ->maxLength('genero', 100)
            ->requirePresence('genero', 'create')
            ->notEmptyString('genero');

        $validator
            ->integer('edad')
            ->requirePresence('edad', 'create')
            ->notEmptyString('edad');

        $validator
            ->scalar('gustos')
            ->maxLength('gustos', 255)
            ->requirePresence('gustos', 'create')
            ->notEmptyString('gustos');

        return $validator;
    }
    public function isOwnedBy($datosId, $userId)
{
    return $this->exists(['id' => $datosId, 'user_id' => $userId]);
}
}
