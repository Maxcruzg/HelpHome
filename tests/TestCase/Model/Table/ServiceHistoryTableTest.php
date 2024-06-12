<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServiceHistoryTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServiceHistoryTable Test Case
 */
class ServiceHistoryTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ServiceHistoryTable
     */
    protected $ServiceHistory;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ServiceHistory',
        'app.Users',
        'app.Profesionals',
        'app.Services',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ServiceHistory') ? [] : ['className' => ServiceHistoryTable::class];
        $this->ServiceHistory = $this->getTableLocator()->get('ServiceHistory', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ServiceHistory);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ServiceHistoryTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ServiceHistoryTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
