<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCiSessionsTable extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type' => 'VARCHAR',
                'constraint' => '128',
                'null' => false,
            ],
            'ip_address' => [
                'type' => 'VARCHAR',
                'constraint' => '45',
                'null' => false,
            ],
            'timestamp' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'null' => false,
                'default' => '0',
            ],
            'data' => [
                'type' => 'TEXT',
                'null' => false,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addKey('timestamp');

        $this->forge->createTable('Ci_sessions', true);
    }

    public function down()
    {
        //
        $this->forge->dropTable('Ci_sessions', true);
    }
}
