<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BillsToReceiveTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BillsToReceiveTable Test Case
 */
class BillsToReceiveTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BillsToReceiveTable
     */
    public $BillsToReceive;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bills_to_receive',
        'app.users',
        'app.invoice_plans'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('BillsToReceive') ? [] : ['className' => BillsToReceiveTable::class];
        $this->BillsToReceive = TableRegistry::getTableLocator()->get('BillsToReceive', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BillsToReceive);

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
