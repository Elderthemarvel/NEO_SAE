<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePermissionsTable extends Migration
{
    public function up()
    {
        // Definir la estructura de la tabla 'Permisos'
        $this->forge->addField([
            'permission_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'role_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'  => true,
            ],
            'module_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'  => true,
            ],
        ]);

        // Definir la clave primaria
        $this->forge->addKey('permission_id', true);

        // Definir las claves foráneas
        $this->forge->addForeignKey('role_id', 'Roles', 'role_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('module_id', 'Modules', 'module_id', 'CASCADE', 'CASCADE');

        // Definir la restricción UNIQUE para id_rol e id_modulo
        $this->forge->addUniqueKey(['role_id', 'module_id']);

        // Crear la tabla
        $this->forge->createTable('Permissions');
    }

    public function down()
    {
        // Eliminar la tabla 'Permisos' si se revierte la migración
        $this->forge->dropTable('Permissions');
    }
}
