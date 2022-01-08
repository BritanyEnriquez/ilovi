<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Puntaje Model
 *
 * @method \App\Model\Entity\Puntaje newEmptyEntity()
 * @method \App\Model\Entity\Puntaje newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Puntaje[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Puntaje get($primaryKey, $options = [])
 * @method \App\Model\Entity\Puntaje findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Puntaje patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Puntaje[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Puntaje|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Puntaje saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Puntaje[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Puntaje[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Puntaje[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Puntaje[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PuntajeTable extends Table
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

        $this->setTable('puntaje');
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
            ->scalar('usuario')
            ->maxLength('usuario', 255)
            ->requirePresence('usuario', 'create')
            ->notEmptyString('usuario');

        $validator
            ->integer('apertExp')
            ->requirePresence('apertExp', 'create')
            ->notEmptyString('apertExp');

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
            ->integer('establEmocional')
            ->requirePresence('establEmocional', 'create')
            ->notEmptyString('establEmocional');

        return $validator;
    }
}
