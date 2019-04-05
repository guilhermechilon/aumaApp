<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AvenueTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AvenueTable Test Case
 */
class AvenueTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AvenueTable
     */
    public $Avenue;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Avenue',
        'app.Location'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Avenue') ? [] : ['className' => AvenueTable::class];
        $this->Avenue = TableRegistry::getTableLocator()->get('Avenue', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Avenue);

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
}
