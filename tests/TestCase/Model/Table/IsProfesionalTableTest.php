<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IsProfesionalTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IsProfesionalTable Test Case
 */
class IsProfesionalTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IsProfesionalTable
     */
    protected $IsProfesional;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.IsProfesional',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('IsProfesional') ? [] : ['className' => IsProfesionalTable::class];
        $this->IsProfesional = $this->getTableLocator()->get('IsProfesional', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->IsProfesional);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\IsProfesionalTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
