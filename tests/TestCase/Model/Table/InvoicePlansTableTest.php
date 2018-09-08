<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InvoicePlansTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InvoicePlansTable Test Case
 */
class InvoicePlansTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InvoicePlansTable
     */
    public $InvoicePlans;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.invoice_plans',
        'app.entry_types',
        'app.block_invoices',
        'app.user_invoices'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('InvoicePlans') ? [] : ['className' => InvoicePlansTable::class];
        $this->InvoicePlans = TableRegistry::getTableLocator()->get('InvoicePlans', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InvoicePlans);

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
