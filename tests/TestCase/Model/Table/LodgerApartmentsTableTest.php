<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LodgerApartmentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LodgerApartmentsTable Test Case
 */
class LodgerApartmentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LodgerApartmentsTable
     */
    public $LodgerApartments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.lodger_apartments',
        'app.users',
        'app.apartments',
        'app.lodger_apartment_invoices'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('LodgerApartments') ? [] : ['className' => LodgerApartmentsTable::class];
        $this->LodgerApartments = TableRegistry::getTableLocator()->get('LodgerApartments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LodgerApartments);

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
