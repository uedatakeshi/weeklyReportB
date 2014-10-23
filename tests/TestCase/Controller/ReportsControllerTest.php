<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ReportsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ReportsController Test Case
 */
class ReportsControllerTest extends IntegrationTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = [
		'app.reports'
	];

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$this->get('/Reports');

		$this->assertResponseOk();
		$this->assertResponseContains('Reports');
		$this->assertResponseContains('山田太郎');
	}

/**
 * testSearch method
 *
 * @return void
 */
	public function testSearch() {
		$data = [
			'date' => '2014-10-05'
		];
		$this->post('/Reports/search', $data);

		$this->assertResponseOk();
		$this->assertResponseContains('Reports');
		$this->assertResponseContains('山田太郎');
	}
}
