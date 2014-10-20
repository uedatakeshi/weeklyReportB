<?php
namespace App\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use App\Model\Table\ReportsTable;
use Cake\TestSuite\TestCase;
use Cake\Log\Log;

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
            ['id' => 1,
			'report_date' => '2014-10-05',
			'employee' => 'Lorem ipsum dolor sit amet',
			'activity' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'comments' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2014-10-05 01:59:14',
			'modified' => '2014-10-05 01:59:14'
        ]
        ];

        $this->assertEquals($expected, $result);
    }
}
