<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserAppsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserAppsTable Test Case
 */
class UserAppsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserAppsTable
     */
    public $UserApps;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_apps',
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
        $config = TableRegistry::getTableLocator()->exists('UserApps') ? [] : ['className' => UserAppsTable::class];
        $this->UserApps = TableRegistry::getTableLocator()->get('UserApps', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserApps);

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
