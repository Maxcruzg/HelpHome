<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class AlterTablesCitasUsersProfesionals extends AbstractMigration
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

        // $users = $this->table('users');
        // // $users->addColumn('is_profesional', 'boolean', [
        // //     'default' => false,
        // //     'null' => false,
        // // ]);
        // $users->update();

        // $profesional = $this->table('profesional')

        // ->removeColumn('phone')
        // ->removeColumn('name')
        // ->dropForeignKey('fk_role_id')
        // ->removeColumn('role_id');
        // $profesional->update();

        // CREATE TABLE Citas (
        //     id_cita INT AUTO_INCREMENT PRIMARY KEY,
        //      VARCHAR(100) NOT NULL,
        //     telefono_cliente VARCHAR(20),
        //     correo_cliente VARCHAR(100),
        //     direccion_proyecto VARCHAR(255),
        //     descripcion_proyecto TEXT,
        //     fecha_cita DATE NOT NULL,
        //     hora_cita TIME NOT NULL,
        //     duracion_estimada INT, -- en minutos
        //     estado_cita VARCHAR(20) DEFAULT 'pendiente', -- ejemplo: pendiente, confirmada, cancelada, completada
        //     prioridad VARCHAR(10) DEFAULT 'media', -- ejemplo: alta, media, baja
        //     notas_adicionales TEXT,
        //     tipo_servicio VARCHAR(100),
        //     profesional_asignado VARCHAR(100),
        //     fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        //     fecha_actualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        //     costo_estimado DECIMAL(10, 2),
        //     confirmacion_cliente BOOLEAN DEFAULT FALSE,
        //     metodo_contacto_preferido VARCHAR(50), -- ejemplo: teléfono, correo electrónico
        //     recordatorio_enviado BOOLEAN DEFAULT FALSE,
        //     comentarios_cliente TEXT



        $citas = $this->table('citas')
            ->addColumn('client_phone', 'string', ['limit' => 255])
            ->addColumn('client_email', 'string', ['limit' => 255])
            ->addColumn('client_direction', 'string', ['limit' => 255])
            ->addColumn('description', 'string', ['limit' => 255])
            ->addColumn('fecha_cita', 'date', ['null' => true])
            ->addColumn('profesional_id', 'integer')
            ->addColumn('user_id', 'integer')
            ->addColumn('estado', 'integer')
            ->addColumn('comentarios', 'text', ['limit' => 500])

            ->addForeignKey('profesional_id', 'profesional', 'id', [
                'delete' => 'CASCADE',
                'update' => 'CASCADE',
            ]);

        $citas->save();

    }
}
