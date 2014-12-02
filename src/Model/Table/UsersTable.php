<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 */
class UsersTable extends Table {

/**
 * Initialize method
 *
 * @param array $config The configuration for the Table.
 * @return void
 */
	public function initialize(array $config) {
		$this->table('users');
		$this->displayField('name');
		$this->primaryKey('id');
		$this->addBehavior('Timestamp');
	}

/**
 * Default validation rules.
 *
 * @param \Cake\Validation\Validator $validator
 * @return \Cake\Validation\Validator
 */
	public function validationDefault(Validator $validator) {
		$validator
			->add('id', 'valid', ['rule' => 'numeric'])
			->allowEmpty('id', 'create')
			->validatePresence('username', 'create')
			->notEmpty('username')
			->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table'])
			->validatePresence('password', 'create')
			->notEmpty('password')
			->validatePresence('role', 'create')
			->notEmpty('role');

		return $validator;
	}

}
