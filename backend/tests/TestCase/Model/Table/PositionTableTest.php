<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PositionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PositionTable Test Case
 */
class PositionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PositionTable
     */
    public $Position;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Position',
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
        $config = TableRegistry::getTableLocator()->exists('Position') ? [] : ['className' => PositionTable::class];
        $this->Position = TableRegistry::getTableLocator()->get('Position', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Position);

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
