<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PartyHallSchedulesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PartyHallSchedulesTable Test Case
 */
class PartyHallSchedulesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PartyHallSchedulesTable
     */
    public $PartyHallSchedules;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.party_hall_schedules',
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
        $config = TableRegistry::getTableLocator()->exists('PartyHallSchedules') ? [] : ['className' => PartyHallSchedulesTable::class];
        $this->PartyHallSchedules = TableRegistry::getTableLocator()->get('PartyHallSchedules', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PartyHallSchedules);

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
