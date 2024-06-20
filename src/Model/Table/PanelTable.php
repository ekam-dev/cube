<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Panel Model
 *
 * @method \App\Model\Entity\Panel newEmptyEntity()
 * @method \App\Model\Entity\Panel newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Panel> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Panel get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Panel findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Panel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Panel> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Panel|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Panel saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Panel>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Panel>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Panel>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Panel> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Panel>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Panel>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Panel>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Panel> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PanelTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('panel');
        $this->setDisplayField('app_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('app_name')
            ->maxLength('app_name', 255)
            ->requirePresence('app_name', 'create')
            ->notEmptyString('app_name');

        $validator
            ->scalar('username')
            ->maxLength('username', 255)
            ->allowEmptyString('username');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->allowEmptyString('password');

        $validator
            ->scalar('url')
            ->maxLength('url', 255)
            ->allowEmptyString('url');

        $validator
            ->scalar('file')
            ->maxLength('file', 255)
            ->allowEmptyFile('file');

        $validator
            ->scalar('docs_file')
            ->maxLength('docs_file', 255)
            ->allowEmptyFile('docs_file');

        $validator
            ->scalar('public_key')
            ->maxLength('public_key', 255)
            ->allowEmptyString('public_key');

        $validator
            ->scalar('secret_key')
            ->maxLength('secret_key', 255)
            ->allowEmptyString('secret_key');

        $validator
            ->scalar('api_key')
            ->maxLength('api_key', 255)
            ->allowEmptyString('api_key');

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
        //$rules->add($rules->isUnique(['username']), ['errorField' => 'username']);

        return $rules;
    }
}
