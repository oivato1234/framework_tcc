<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TCC5 extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id_armazenamento' => [
            'type' => 'INT',
            'auto_increment' => true,
            'null' => false
            ],
            'nome_armazenamento' => [
            'type' => 'VARCHAR',
            'constraint' => 30,
            'null' => false
            ],
            'características' => [
            'type' => 'VARCHAR',
            'constraint' => 200,
            'null' => false
            ],
            'requisitos_sistema ' => [
            'type' => 'VARCHAR',
            'constraint' => 200,
            'null' => false
            ]

            ]);
    
            $this->forge->addPrimaryKey('id_armazenamento');    }

    public function down()
    {
        //
    }
}
