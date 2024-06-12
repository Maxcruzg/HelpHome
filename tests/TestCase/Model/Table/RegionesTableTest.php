<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegionesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegionesTable Test Case
 */
class RegionesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RegionesTable
     */
    protected $Regiones;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Regiones',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Regiones') ? [] : ['className' => RegionesTable::class];
        $this->Regiones = $this->getTableLocator()->get('Regiones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Regiones);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RegionesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
