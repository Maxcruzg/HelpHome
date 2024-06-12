<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProfesionalFixture
 */
class ProfesionalFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'profesional';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_id' => 1,
                'path' => 'Lorem ipsum dolor sit amet',
                'value' => 1,
                'experiencia' => 'Lorem ipsum dolor sit amet',
                'especialidad_id' => 1,
            ],
        ];
        parent::init();
    }
}
