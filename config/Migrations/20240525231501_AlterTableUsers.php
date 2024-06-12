<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AlterTableUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {

    //     $users = $this->table('users')
    //     ->addColumn('profesional_id','integer', ['limit' => '200'])
    //     ->addForeignKey('profesional_id', 'profesional', 'id', [
    //         'delete' => 'CASCADE',
    //         'update' => 'CASCADE',
    //     ]);
    //     $users->update();

     }
}
