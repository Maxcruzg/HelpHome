<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateTableEspecialidad extends AbstractMigration
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

        $especialidad = $this->table('especialidad')
        ->addColumn('name', 'string', ['limit' => 255]);
        $especialidad->save();
    }
}
