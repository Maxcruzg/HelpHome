<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EspecialidadTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EspecialidadTable Test Case
 */
class EspecialidadTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EspecialidadTable
     */
    protected $Especialidad;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Especialidad',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Especialidad') ? [] : ['className' => EspecialidadTable::class];
        $this->Especialidad = $this->getTableLocator()->get('Especialidad', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Especialidad);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EspecialidadTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
