<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LodgerApartmentInvoicesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LodgerApartmentInvoicesTable Test Case
 */
class LodgerApartmentInvoicesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LodgerApartmentInvoicesTable
     */
    public $LodgerApartmentInvoices;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.lodger_apartment_invoices',
        'app.lodger_apartments'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('LodgerApartmentInvoices') ? [] : ['className' => LodgerApartmentInvoicesTable::class];
        $this->LodgerApartmentInvoices = TableRegistry::getTableLocator()->get('LodgerApartmentInvoices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LodgerApartmentInvoices);

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
