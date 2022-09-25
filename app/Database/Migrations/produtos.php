<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use Config\Migrations;

class produtos extends Migrations
{
    public function up()
    {
        $this->forge->addField([

            'id_produtos ' => [
            'type' => 'INT',
            'auto_increment' => true,
            'null' => false
            ],
            'nome_produto ' => [
            'type' => 'VARCHAR',
            'constraint' => 30,
            'null' => false
            ],
            'especificações_produto ' => [
            'type' => 'VARCHAR',
            'constraint' => 300,
            'null' => false
            ],
            'certificações_produto ' => [
            'type' => 'VARCHAR',
            'constraint' => 50,
            'null' => false
            ],
            'caracteristicas_produto' => [
                'type' => 'VARCHAR',
                'constraint' => 300,
                'null' => false
                ],

    
            ]);    }

    public function down()
    {
        //
    }
}