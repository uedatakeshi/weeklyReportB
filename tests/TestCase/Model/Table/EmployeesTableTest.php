<?php
namespace App\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use App\Model\Table\EmployeesTable;
use Cake\TestSuite\TestCase;
use Cake\I18n\Time;

/**
 * App\Model\Table\EmployeesTable Test Case
 */
class EmployeesTableTest extends TestCase {

    public $fixtures = ['app.employees'];
/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$config = TableRegistry::exists('Employees') ? [] : ['className' => 'App\Model\Table\EmployeesTable'];
		$this->Employees = TableRegistry::get('Employees', $config);
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Employees);

		parent::tearDown();
	}

	public function testFind() {
		$query = $this->Employees->find();
		$this->assertInstanceOf('Cake\ORM\Query', $query);
		$result = $query->hydrate(false)->toArray();
		$expected = [
			[
				'id' => 1,
				'employee_number' => 'A0123DES',
				'name' => '佐藤一郎',
				'created' => new Time('2014-10-07 12:14:47'),
				'modified' => new Time('2014-10-07 12:14:47')
			]
		];

		$this->assertEquals($expected, $result);
	}
}
