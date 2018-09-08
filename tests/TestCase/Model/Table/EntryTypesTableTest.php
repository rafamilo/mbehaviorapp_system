<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EntryTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EntryTypesTable Test Case
 */
class EntryTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EntryTypesTable
     */
    public $EntryTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.entry_types',
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
        $config = TableRegistry::getTableLocator()->exists('EntryTypes') ? [] : ['className' => EntryTypesTable::class];
        $this->EntryTypes = TableRegistry::getTableLocator()->get('EntryTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EntryTypes);

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
