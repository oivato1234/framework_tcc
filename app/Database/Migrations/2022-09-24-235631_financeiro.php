<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use Config\Migrations;

class financeiro extends Migrations
{
    public function up()
    {
        $this->forge->addField([

            'id_orcamento' => [
            'type' => 'INT',
            'auto_increment' => true,
            'null' => false
            ],
            'marca' => [
            'type' => 'VARCHAR',
            'constraint' => 8,
            'null' => false
            ],
            'peso' => [
            'type' => 'VARCHAR',
            'constraint' => 45,
            'null' => false
            ]
     
    
            ]);
    
            $this->forge->addPrimaryKey('id_orcamento');    }

    public function down()
    {
        //
    }
}
