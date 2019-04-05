<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BagtypecoffeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BagtypecoffeTable Test Case
 */
class BagtypecoffeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BagtypecoffeTable
     */
    public $Bagtypecoffe;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Bagtypecoffe',
        'app.TypeCoffes',
        'app.Bags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Bagtypecoffe') ? [] : ['className' => BagtypecoffeTable::class];
        $this->Bagtypecoffe = TableRegistry::getTableLocator()->get('Bagtypecoffe', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bagtypecoffe);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
