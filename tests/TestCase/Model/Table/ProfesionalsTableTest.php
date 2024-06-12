<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProfesionalsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProfesionalsTable Test Case
 */
class ProfesionalsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProfesionalsTable
     */
    protected $Profesionals;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Profesionals',
        'app.Regions',
        'app.Comunas',
        'app.Roles',
        'app.Califications',
        'app.Citas',
        'app.ServiceHistory',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Profesionals') ? [] : ['className' => ProfesionalsTable::class];
        $this->Profesionals = $this->getTableLocator()->get('Profesionals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Profesionals);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProfesionalsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ProfesionalsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
