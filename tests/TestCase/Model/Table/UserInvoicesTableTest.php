<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserInvoicesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserInvoicesTable Test Case
 */
class UserInvoicesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserInvoicesTable
     */
    public $UserInvoices;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_invoices',
        'app.users',
        'app.apartments',
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
        $config = TableRegistry::getTableLocator()->exists('UserInvoices') ? [] : ['className' => UserInvoicesTable::class];
        $this->UserInvoices = TableRegistry::getTableLocator()->get('UserInvoices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserInvoices);

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
