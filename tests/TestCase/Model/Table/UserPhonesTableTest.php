<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserPhonesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserPhonesTable Test Case
 */
class UserPhonesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserPhonesTable
     */
    public $UserPhones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_phones',
        'app.users',
        'app.phone_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UserPhones') ? [] : ['className' => UserPhonesTable::class];
        $this->UserPhones = TableRegistry::getTableLocator()->get('UserPhones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserPhones);

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
