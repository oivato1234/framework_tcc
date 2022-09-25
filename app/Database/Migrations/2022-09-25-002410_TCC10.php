<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TCC10 extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id_fonte ' => [
            'type' => 'INT',
            'auto_increment' => true,
            'null' => false
            ],
            'nome_fonte ' => [
            'type' => 'VARCHAR',
            'constraint' => 30,
            'null' => false
            ],
            'especificações ' => [
            'type' => 'VARCHAR',
            'constraint' => 300,
            'null' => false
            ],
            'certificações ' => [
            'type' => 'VARCHAR',
            'constraint' => 50,
            'null' => false
            ],
            'energia ' => [
            'type' => 'VARCHAR',
            'constraint' => 100,
            'null' => false
            ],
            'resfriamento ' => [
            'type' => 'VARCHAR',
            'constraint' => 60,
            'null' => false
            ],
            'conectores  ' => [
            'type' => 'VARCHAR',
             'constraint' => 100,
             'null' => false
            ]
    
            ]);    }

    public function down()
    {
        //
    }
}
