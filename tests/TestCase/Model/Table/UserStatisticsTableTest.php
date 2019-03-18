<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserStatisticsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserStatisticsTable Test Case
 */
class UserStatisticsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserStatisticsTable
     */
    public $UserStatistics;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_statistics',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UserStatistics') ? [] : ['className' => UserStatisticsTable::class];
        $this->UserStatistics = TableRegistry::getTableLocator()->get('UserStatistics', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserStatistics);

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
