<?php
namespace App\Test\TestCase\View\Helper;

use App\View\Helper\IconHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\IconHelper Test Case
 */
class IconHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\View\Helper\IconHelper
     */
    public $Icon;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->Icon = new IconHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Icon);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
