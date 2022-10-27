<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use Config\Migrations;

class Endereco extends Migrations
{
    public function up()
    {
        $this->forge->addField([

            'id_end' => [
            'type' => 'INT',
            'auto_increment' => true,
            'null' => false
            ],
            'cep_end' => [
            'type' => 'VARCHAR',
            'constraint' => 8,
            'null' => false
            ],
            'logradouro_end' => [
            'type' => 'VARCHAR',
            'constraint' => 45,
            'null' => false
            ],
            'bairro_end' => [
            'type' => 'VARCHAR',
            'constraint' => 20,
            'null' => false
            ],
            'cidade_end' => [
            'type' => 'VARCHAR',
            'constraint' => 30,
            'null' => false
            ],
            'estado_end' => [
            'type' => 'VARCHAR',
            'constraint' => 2,
            'null' => false
            ]
            ]);
    
            $this->forge->addPrimaryKey('id_end');
            $this->forge->createTable('PlacaMae');
    }

    public function down()
    {
        //
    }
}
