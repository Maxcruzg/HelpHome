<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProvinciasFixture
 */
class ProvinciasFixture extends TestFixture
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
                'provincia' => 'Lorem ipsum dolor sit amet',
                'region_id' => 1,
            ],
        ];
        parent::init();
    }
}
