<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use Config\Migrations;

class armazenamento extends Migrations
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
