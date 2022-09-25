<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use Config\Migrations;

class pecas extends Migrations
{
    public function up()
    {
        $this->forge->addField([
            'id_placa' => [
            'type' => 'INT',
            'auto_increment' => true,
            'null' => false
            ],
            'nome' => [
            'type' => 'VARCHAR',
            'constraint' => 30,
            'null' => false
            ],
            'caracteristica' => [
            'type' => 'VARCHAR',
            'constraint' => 300,
            'null' => false
            ],
            'especificacao' => [
            'type' => 'VARCHAR',
            'constraint' => 300,
            'null' => false
            ],
            'chipset' => [
            'type' => 'VARCHAR',
            'constraint' => 50,
            'null' => false
            ],
            'memoria' => [
            'type' => 'VARCHAR',
            'constraint' => 10,
            'null' => false
            ],
            'bios' => [
                'type' => 'VARCHAR',
                'constraint' => 40,
                'null' => false
                ]
    
            ]);
    
            $this->forge->addPrimaryKey('id_end');    }

    public function down()
    {
        //
    }
}
