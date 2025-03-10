<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        // Definir la estructura de la tabla 'Usuarios'
        $this->forge->addField([
            'user_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'cui' => [
                'type'       => 'VARCHAR',
                'constraint' => '13',
            ],
            'first_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'last_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'user_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '8',
                'unique'     => true,
            ],
            'gender' => [
                'type' => 'ENUM',
                'constraint' => ['M', 'F'],
                null => false,
            ],
            'birthdate' => [
                'type'       => 'DATE', 
                'null'      => true,  
            ],
            'branch' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'      => true,  
            ],
            'photo' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'      => true,  
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'      => true, 
            ],
            'role_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'  => true,
                'null'      => true, 
            ],
            'secret_2fa' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'      => true, // Permitir nulos si el 2FA no está habilitado
                'default'    => null,
            ],
            'is_2fa_enabled' => [
                'type'       => 'BOOLEAN',
                'default'    => false, // Por defecto, el 2FA está deshabilitado
            ],
        ]);

        // Definir la clave primaria
        $this->forge->addKey('user_id', true);

        // Definir la clave foránea
        $this->forge->addForeignKey('role_id', 'Roles', 'role_id', 'CASCADE', 'SET NULL');

        // Crear la tabla
        $this->forge->createTable('Users');
    }

    public function down()
    {
        // Eliminar la tabla 'Usuarios' si se revierte la migración
        $this->forge->dropTable('Users');
    }
}
