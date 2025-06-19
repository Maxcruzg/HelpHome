<?php

declare(strict_types=1);

use Migrations\AbstractMigration;
use Phinx\Db\Action\AddColumn;

class CreateTableUser extends AbstractMigration
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
        $profesionals = $this->table('is_profesional')
        ->addColumn('opciones', 'string', ['limit' => 40]);
        $profesionals->save();

        $regiones = $this->table('regions')
            ->addColumn('regiones', 'string', ['limit' => 40])
            ->addColumn('abreviatura', 'string', ['limit' => 10])
            ->addColumn('capital', 'string', ['limit' => 30]);
        $regiones->save();

        $provincias = $this->table('provincias')
            ->addColumn('provincia', 'string', ['limit' => 40])
            ->addColumn('region_id', 'integer', ['limit' => 100])
            ->AddForeignKey('region_id', 'regions', 'id', [
                'delete' => 'CASCADE',
                'update' => 'CASCADE',
            ]);
        $provincias->save();

        $comunas = $this->table('comunas')
            ->addColumn('comuna', 'string', ['limit' => 100])
            ->addColumn('provincia_id', 'integer', ['limit' => 100])
            ->AddForeignKey('provincia_id', 'provincias', 'id', [
                'delete' => 'CASCADE',
                'update' => 'CASCADE',
            ]);
        $comunas->save();


        $roles = $this->table('roles')
            ->addColumn('name', 'string', ['limit' => 100])
            ->addColumn('descripcion', 'string', ['limit' => 100]);
        $roles->save();



        $users = $this->table('users')
            ->addColumn('name', 'string', ['limit' => 100])
            ->addColumn('surname', 'string', ['limit' => 100])
            ->addColumn('password', 'string', ['limit' => 50])
            ->addColumn('email', 'string', ['limit' => 100])
            ->addColumn('phone', 'integer', ['limit' => 9])           
            ->addColumn('created', 'datetime', ['null' => true])
            ->addColumn('region_id', 'integer', ['limit' => 100])
            ->addColumn('profesional_id', 'integer', ['limit' => 100])
            ->addColumn('comuna_id', 'integer', ['limit' => 100])
            ->addColumn('role_id', 'integer', ['limit' => 100])
            ->addColumn('provincia_id', 'integer', [
                'limit' => 100
            ])
            ->addColumn('path', 'string', [
                'limit' => 255,
                'default' => null,
                'null' => true
            ])
            ->addForeignKey('role_id', 'roles', 'id', [
                'delete' => 'CASCADE',
                'update' => 'CASCADE',
            ])
            ->AddForeignKey('comuna_id', 'comunas', 'id', [
                'delete' => 'CASCADE',
                'update' => 'CASCADE',
            ])
            ->AddForeignKey('region_id', 'regions', 'id', [
                'delete' => 'CASCADE',
                'update' => 'CASCADE',
            ])
            ->AddForeignKey('provincia_id', 'provincias', 'id', [
                'delete' => 'CASCADE',
                'update' => 'CASCADE',
            ])
            ->AddForeignKey('profesional_id', 'is_profesional', 'id', [
                'delete' => 'CASCADE',
                'update' => 'CASCADE',
            ]);
        $users->save();

        $resetPassword = $this->table('token')
            ->addColumn('token', 'string', ['limit' => 100])
            ->addColumn('user_id', 'integer', ['limit' => 20])
            ->addForeignKey('user_id', 'users', 'id', [
                'delete' => 'CASCADE',
                'update' => 'CASCADE',
            ]);
        $resetPassword->save();

        $services = $this->table('services')
            ->addColumn('name', 'string', ['limit' => 100])
            ->addColumn('descripccion', 'string', ['limit' => 100])
            ->addColumn('disponibilidad', 'integer', ['limit' => 100])
            ->addColumn('duracion', 'integer', ['limit' => 100]);
        $services->save();

        $historial = $this->table('service_history')
            ->addColumn('user_id', 'integer', ['limit' => 100])
            ->addColumn('service_id', 'integer', ['limit' => 100])
            ->addColumn('fecha_servicio', 'date', ['null' => true])
            ->addColumn('descripcion', 'string', ['limit' => 200])
            ->addColumn('Observaciones', 'integer', ['limit' => 100])
            ->addForeignKey('user_id', 'users', 'id', [
                'delete' => 'CASCADE',
                'update' => 'CASCADE',
            ])
            ->addForeignKey('service_id', 'services', 'id', [
                'delete' => 'CASCADE',
                'update' => 'CASCADE',
            ]);
        $historial->save();
        $calificacion = $this->table('califications')
            ->addColumn('service_id', 'integer', ['limit' => 100])
            ->addColumn('user_id', 'integer', ['limit' => 100])
            ->addColumn('calificacion', 'integer', ['limit' => 200])
            ->addColumn('comentarios', 'string', ['limit' => 200])
            ->addColumn('fecha_calificacion', 'date', ['null' => true])
            ->addForeignKey('user_id', 'users', 'id', [
                'delete' => 'CASCADE',
                'update' => 'CASCADE',
            ]);
        $calificacion->save();
    }
}
