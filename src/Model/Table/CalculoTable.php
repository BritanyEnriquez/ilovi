<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Calculo Model
 *
 * @method \App\Model\Entity\Calculo newEmptyEntity()
 * @method \App\Model\Entity\Calculo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Calculo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Calculo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Calculo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Calculo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Calculo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Calculo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Calculo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Calculo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Calculo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Calculo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Calculo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CalculoTable extends Table
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

        $this->setTable('calculo');
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
            ->maxLength('nombre', 150)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('apellido')
            ->maxLength('apellido', 150)
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
            ->integer('responsabilidad')
            ->requirePresence('responsabilidad', 'create')
            ->notEmptyString('responsabilidad');

        $validator
            ->integer('extraversion')
            ->requirePresence('extraversion', 'create')
            ->notEmptyString('extraversion');

        $validator
            ->integer('amabilidad')
            ->requirePresence('amabilidad', 'create')
            ->notEmptyString('amabilidad');

        $validator
            ->integer('estabemocional')
            ->requirePresence('estabemocional', 'create')
            ->notEmptyString('estabemocional');

        return $validator;
    }
}
