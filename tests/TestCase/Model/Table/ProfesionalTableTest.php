<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProfesionalTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProfesionalTable Test Case
 */
class ProfesionalTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProfesionalTable
     */
    protected $Profesional;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Profesional',
        'app.Users',
        'app.Especialidad',
        'app.Calificaciones',
        'app.Citas',
        'app.HistorialCitas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Profesional') ? [] : ['className' => ProfesionalTable::class];
        $this->Profesional = $this->getTableLocator()->get('Profesional', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Profesional);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProfesionalTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ProfesionalTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
