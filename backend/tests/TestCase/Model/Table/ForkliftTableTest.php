<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ForkliftTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ForkliftTable Test Case
 */
class ForkliftTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ForkliftTable
     */
    public $Forklift;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Forklift',
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
        $config = TableRegistry::getTableLocator()->exists('Forklift') ? [] : ['className' => ForkliftTable::class];
        $this->Forklift = TableRegistry::getTableLocator()->get('Forklift', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Forklift);

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
