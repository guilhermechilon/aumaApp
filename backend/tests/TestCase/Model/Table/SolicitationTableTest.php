<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SolicitationTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SolicitationTable Test Case
 */
class SolicitationTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SolicitationTable
     */
    public $Solicitation;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Solicitation',
        'app.Statuses',
        'app.Forklifts',
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
        $config = TableRegistry::getTableLocator()->exists('Solicitation') ? [] : ['className' => SolicitationTable::class];
        $this->Solicitation = TableRegistry::getTableLocator()->get('Solicitation', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Solicitation);

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
