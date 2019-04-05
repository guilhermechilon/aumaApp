<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StreetTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StreetTable Test Case
 */
class StreetTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StreetTable
     */
    public $Street;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Street',
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
        $config = TableRegistry::getTableLocator()->exists('Street') ? [] : ['className' => StreetTable::class];
        $this->Street = TableRegistry::getTableLocator()->get('Street', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Street);

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
