<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * IsProfesionalFixture
 */
class IsProfesionalFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'is_profesional';
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
                'opciones' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
