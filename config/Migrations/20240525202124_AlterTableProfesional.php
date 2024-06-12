<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AlterTableProfesional extends AbstractMigration
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
        ->addColumn('especialidad_id','integer', ['limit' => '200'])
        ->addForeignKey('especialidad_id', 'especialidad', 'id', [
            'delete' => 'CASCADE',
            'update' => 'CASCADE',
        ]);
        $profesional->update();
    }
}
