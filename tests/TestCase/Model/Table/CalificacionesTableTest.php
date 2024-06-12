<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CalificacionesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CalificacionesTable Test Case
 */
class CalificacionesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CalificacionesTable
     */
    protected $Calificaciones;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Calificaciones',
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
        $config = $this->getTableLocator()->exists('Calificaciones') ? [] : ['className' => CalificacionesTable::class];
        $this->Calificaciones = $this->getTableLocator()->get('Calificaciones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Calificaciones);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CalificacionesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CalificacionesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
