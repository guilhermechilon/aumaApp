<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FloorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FloorTable Test Case
 */
class FloorTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FloorTable
     */
    public $Floor;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Floor',
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
        $config = TableRegistry::getTableLocator()->exists('Floor') ? [] : ['className' => FloorTable::class];
        $this->Floor = TableRegistry::getTableLocator()->get('Floor', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Floor);

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
