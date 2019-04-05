<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BagTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BagTable Test Case
 */
class BagTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BagTable
     */
    public $Bag;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Bag',
        'app.Locations',
        'app.Users',
        'app.Bagtypecoffe',
        'app.Solicitation'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Bag') ? [] : ['className' => BagTable::class];
        $this->Bag = TableRegistry::getTableLocator()->get('Bag', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bag);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
