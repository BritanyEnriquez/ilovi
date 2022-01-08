<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Correo Model
 *
 * @method \App\Model\Entity\Correo newEmptyEntity()
 * @method \App\Model\Entity\Correo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Correo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Correo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Correo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Correo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Correo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Correo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Correo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Correo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Correo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Correo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Correo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CorreoTable extends Table
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

        $this->setTable('correo');
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
            ->scalar('emisor')
            ->maxLength('emisor', 255)
            ->requirePresence('emisor', 'create')
            ->notEmptyString('emisor');

        $validator
            ->scalar('receptor')
            ->maxLength('receptor', 255)
            ->requirePresence('receptor', 'create')
            ->notEmptyString('receptor');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 255)
            ->requirePresence('descripcion', 'create')
            ->notEmptyString('descripcion');

        $validator
            ->scalar('estado')
            ->maxLength('estado', 100)
            ->requirePresence('estado', 'create')
            ->notEmptyString('estado');

        return $validator;
    }
}
