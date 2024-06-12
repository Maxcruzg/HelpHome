<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ComunasFixture
 */
class ComunasFixture extends TestFixture
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
                'comuna' => 'Lorem ipsum dolor sit amet',
                'provincia_id' => 1,
            ],
        ];
        parent::init();
    }
}
