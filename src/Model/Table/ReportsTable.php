<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Reports Model
 */
class ReportsTable extends Table {

/**
 * Initialize method
 *
 * @param array $config The configuration for the Table.
 * @return void
 */
	public function initialize(array $config) {
		$this->table('reports');
		$this->displayField('id');
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
			->add('report_date', 'valid', ['rule' => 'date'])
			->allowEmpty('report_date')
			->allowEmpty('employee')
			->allowEmpty('activity')
			->allowEmpty('comments');

		return $validator;
	}

}
