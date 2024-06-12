<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateTableHistorialCitas extends AbstractMigration
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
        $historial = $this->table('historial_citas');
        $historial->addColumn('cita_id', 'integer', ['null' => false]);
        $historial->addColumn('user_id', 'integer', ['null' => false]);
        $historial->addColumn('profesional_id', 'integer', ['null' => false]);
        $historial->addColumn('estado_nuevo', 'string', ['limit' => 50, 'null' => false]);
        $historial->addColumn('comentario', 'text', ['null' => true]);
        $historial->addColumn('fecha', 'datetime', ['default' => 'CURRENT_TIMESTAMP']);
        $historial->addForeignKey('cita_id', 'citas', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE']);
        $historial->addForeignKey('user_id', 'users', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE']);
        $historial->addForeignKey('profesional_id', 'profesional', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE']);
        $historial->create();

        $califications = $this->table('calificaciones');
        $califications->addColumn('user_id', 'integer', ['null' => false]);
        $califications->addColumn('profesional_id', 'integer', ['null' => false]);
        $califications->addColumn('calificacion', 'integer', ['limit' => 11, 'null' => false]);
        $califications->addColumn('comentario', 'text', ['null' => true]);
        $califications->addColumn('fecha_creacion', 'datetime', ['default' => 'CURRENT_TIMESTAMP']);
        $califications->addForeignKey('user_id', 'users', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE']);
        $califications->addForeignKey('profesional_id', 'profesional', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE']);
        $califications->create();
    }
}
