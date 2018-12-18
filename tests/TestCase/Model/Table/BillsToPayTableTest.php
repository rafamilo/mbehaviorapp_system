<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BillsToPayTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BillsToPayTable Test Case
 */
class BillsToPayTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BillsToPayTable
     */
    public $BillsToPay;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bills_to_pay',
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
        $config = TableRegistry::getTableLocator()->exists('BillsToPay') ? [] : ['className' => BillsToPayTable::class];
        $this->BillsToPay = TableRegistry::getTableLocator()->get('BillsToPay', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BillsToPay);

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
