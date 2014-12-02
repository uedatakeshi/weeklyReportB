<?php
namespace App\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use App\Model\Table\ReportsTable;
use Cake\TestSuite\TestCase;
use Cake\Log\Log;
use Cake\I18n\Time;

/**
 * App\Model\Table\ReportsTable Test Case
 */
class ReportsTableTest extends TestCase {
    public $fixtures = ['app.reports'];

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$config = TableRegistry::exists('Reports') ? [] : ['className' => 'App\Model\Table\ReportsTable'];
		$this->Reports = TableRegistry::get('Reports', $config);
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Reports);

		parent::tearDown();
	}

	public function testSelectReportsByDate($date = '2014-10-05'){
        $result = $this->Reports->selectReportsByDate($date);
        $this->assertInstanceOf('Cake\ORM\Query', $result);
        $result = $result->hydrate(false)->toArray();
        Log::write('debug', print_r($result, true));
        $expected = [
            [
                'id' => 1,
                'report_date' => new Time('2014-10-05'),
                'employee' => '山田太郎',
                'activity' => 'システム計画書を作成',
                'comments' => 'コードレビューの日程調整をお願いします',
                'created' => new Time('2014-10-05 01:59:14'),
                'modified' => new Time('2014-10-05 01:59:14')
            ]
        ];

        $this->assertEquals($expected, $result);
    }
}
