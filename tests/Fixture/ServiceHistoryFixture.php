<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ServiceHistoryFixture
 */
class ServiceHistoryFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'service_history';
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
                'profesional_id' => 1,
                'service_id' => 1,
                'fecha_servicio' => '2024-04-23',
                'descripcion' => 'Lorem ipsum dolor sit amet',
                'Observaciones' => 1,
            ],
        ];
        parent::init();
    }
}
