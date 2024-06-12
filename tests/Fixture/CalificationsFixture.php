<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CalificationsFixture
 */
class CalificationsFixture extends TestFixture
{
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
                'service_id' => 1,
                'profesional_id' => 1,
                'user_id' => 1,
                'calificacion' => 1,
                'comentarios' => 'Lorem ipsum dolor sit amet',
                'fecha_calificacion' => '2024-04-23',
            ],
        ];
        parent::init();
    }
}
