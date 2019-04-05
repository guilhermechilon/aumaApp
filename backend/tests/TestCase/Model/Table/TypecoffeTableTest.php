<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypecoffeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypecoffeTable Test Case
 */
class TypecoffeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TypecoffeTable
     */
    public $Typecoffe;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Typecoffe'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Typecoffe') ? [] : ['className' => TypecoffeTable::class];
        $this->Typecoffe = TableRegistry::getTableLocator()->get('Typecoffe', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Typecoffe);

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
