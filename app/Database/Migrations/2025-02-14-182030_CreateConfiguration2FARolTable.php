<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateConfiguration2FARolTable extends Migration
{
    public function up()
    {
        //
          // Definir la estructura de la tabla 'Configuracion_2FA_Rol'
          $this->forge->addField([
            'id_config_2fa_rol' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_rol' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'  => true,
            ],
            'requiere_2fa' => [
                'type'       => 'BOOLEAN',
                'default'    => false, // Por defecto, el 2FA no es requerido
            ],
        ]);

        // Definir la clave primaria
        $this->forge->addKey('id_config_2fa_rol', true);

        // Definir la clave foránea
        $this->forge->addForeignKey('id_rol', 'Roles', 'id_rol', 'CASCADE', 'CASCADE');

        // Definir la restricción UNIQUE para id_rol
        $this->forge->addUniqueKey(['id_rol']);

        // Crear la tabla
        $this->forge->createTable('Configuration_2FA_Rol');
    }

    public function down()
    {
        //
        $this->forge->dropTable('Configuration_2FA_Rol');
    }
}
