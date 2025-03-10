<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRolesTable extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'role_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'role_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'unique'     => true,
            ],
        ]);

        // Definir la clave primaria
        $this->forge->addKey('role_id', true);

        // Crear la tabla
        $this->forge->createTable('Roles');
    }

    public function down()
    {
        // Eliminar la tabla 'Modulos' si se revierte la migración
        $this->forge->dropTable('Roles');
    }
}
