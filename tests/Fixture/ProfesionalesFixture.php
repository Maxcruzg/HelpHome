<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProfesionalesFixture
 */
class ProfesionalesFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'surname' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'phone' => 1,
                'created' => '2024-04-23 01:46:22',
                'region_id' => 1,
                'comuna_id' => 1,
                'role_id' => 1,
                'profesional_id' => 1,
                'provincia_id' => 1,
            ],
        ];
        parent::init();
    }
}
