<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TokenFixture
 */
class TokenFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'token';
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
                'token' => 'Lorem ipsum dolor sit amet',
                'expiration' => '2024-05-17 22:14:40',
                'created' => '2024-05-17 22:14:40',
            ],
        ];
        parent::init();
    }
}
