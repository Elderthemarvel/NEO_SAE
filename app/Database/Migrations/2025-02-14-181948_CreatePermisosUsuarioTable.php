<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePermisosUsuarioTable extends Migration
{
    public function up()
    {
         // Definir la estructura de la tabla 'Permisos_Usuario'
         $this->forge->addField([
            'user_permission_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_id' => [
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
        $this->forge->addKey('user_permission_id', true);

        // Definir las claves foráneas
        $this->forge->addForeignKey('user_id', 'Users', 'user_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('module_id', 'Modules', 'module_id', 'CASCADE', 'CASCADE');

        // Definir la restricción UNIQUE para id_usuario e id_modulo
        $this->forge->addUniqueKey(['user_id', 'module_id']);

        // Crear la tabla
        $this->forge->createTable('User_Permissions');
    }

    public function down()
    {
        // Eliminar la tabla 'Permisos_Usuario' si se revierte la migración
        $this->forge->dropTable('User_Permissions');
    }
}
