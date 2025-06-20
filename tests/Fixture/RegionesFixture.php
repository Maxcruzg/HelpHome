<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RegionesFixture
 */
class RegionesFixture extends TestFixture
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
                'regiones' => 'Lorem ipsum dolor sit amet',
                'abreviatura' => 'Lorem ip',
                'capital' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
