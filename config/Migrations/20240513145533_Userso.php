<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class Userso extends AbstractMigration
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
        $profesional = $this->table('profesional')
            ->addColumn('user_id', 'integer', ['limit' => 100])
            ->addColumn('phone', 'integer', ['limit' => 9])
            ->addColumn('name', 'string', ['limit' => 100])
            ->addColumn('role_id', 'integer', ['limit' => 100])
            ->addColumn('path', 'string', [
                'limit' => 255,
                'default' => null,
                'null' => true
            ])
            ->addForeignKey('role_id', 'roles', 'id', [
                'delete' => 'CASCADE',
                'update' => 'CASCADE',
            ])
            ->AddForeignKey('user_id', 'users', 'id', [
                'delete' => 'CASCADE',
                'update' => 'CASCADE',
            ]);
        $profesional->save();
        $citas = $this->table('citas')
            ->addColumn('profesional_id', 'integer', ['limit' => 100])

            ->addForeignKey('profesional_id', 'profesional', 'id', [
                'delete' => 'CASCADE',
                'update' => 'CASCADE',
            ]);
        $citas->update();
        $historial = $this->table('service_history')
            ->addColumn('profesional_id', 'integer', ['limit' => 100])
            ->addForeignKey('profesional_id', 'profesional', 'id', [
                'delete' => 'CASCADE',
                'update' => 'CASCADE',
            ]);
        $historial->update();
    }
}
