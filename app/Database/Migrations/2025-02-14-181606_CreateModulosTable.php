<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateModulosTable extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'module_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'module_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'unique'     => true,
            ],
        ]);

        // Definir la clave primaria
        $this->forge->addKey('module_id', true);

        // Crear la tabla
        $this->forge->createTable('Modules');
    }

    public function down()
    {
        // Eliminar la tabla 'Modulos' si se revierte la migración
        $this->forge->dropTable('Modules');
    }
}
