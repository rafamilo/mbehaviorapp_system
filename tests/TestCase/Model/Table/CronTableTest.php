<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CronTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CronTable Test Case
 */
class CronTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CronTable
     */
    public $Cron;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cron'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Cron') ? [] : ['className' => CronTable::class];
        $this->Cron = TableRegistry::getTableLocator()->get('Cron', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cron);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test beforeFind method
     *
     * @return void
     */
    public function testBeforeFind()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
