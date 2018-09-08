<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BlockInvoicesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BlockInvoicesTable Test Case
 */
class BlockInvoicesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BlockInvoicesTable
     */
    public $BlockInvoices;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.block_invoices',
        'app.blocks',
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
        $config = TableRegistry::getTableLocator()->exists('BlockInvoices') ? [] : ['className' => BlockInvoicesTable::class];
        $this->BlockInvoices = TableRegistry::getTableLocator()->get('BlockInvoices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BlockInvoices);

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
