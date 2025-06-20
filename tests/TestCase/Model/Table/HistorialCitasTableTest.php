<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HistorialCitasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HistorialCitasTable Test Case
 */
class HistorialCitasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HistorialCitasTable
     */
    protected $HistorialCitas;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.HistorialCitas',
        'app.Citas',
        'app.Users',
        'app.Profesional',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('HistorialCitas') ? [] : ['className' => HistorialCitasTable::class];
        $this->HistorialCitas = $this->getTableLocator()->get('HistorialCitas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->HistorialCitas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\HistorialCitasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\HistorialCitasTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
