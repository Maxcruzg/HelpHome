<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CitasFixture
 */
class CitasFixture extends TestFixture
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
                'client_phone' => 1,
                'client_email' => 'Lorem ipsum dolor sit amet',
                'client_direction' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet',
                'fecha_cita' => '2024-06-13',
                'profesional_id' => 1,
                'user_id' => 1,
                'estado' => 1,
                'comentarios' => 'Lorem ipsum dolor sit amet',
                'value' => 1,
            ],
        ];
        parent::init();
    }
}
