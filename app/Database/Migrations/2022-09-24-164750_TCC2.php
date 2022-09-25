<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TCC2 extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id_usuario' => [
            'type' => 'INT',
            'auto_increment' => true,
            'null' => false
            ],
            'telefone' => [
            'type' => 'VARCHAR',
            'constraint' => 11,
            'null' => false
            ],
            'email' => [
            'type' => 'VARCHAR',
            'constraint' => 45,
            'null' => false
            ],
            'nome' => [
            'type' => 'VARCHAR',
            'constraint' => 20,
            'null' => false
            ],
    
            'idade' => [
            'type' => 'VARCHAR',
            'constraint' => 2,
            'null' => false
            ]
    
            ]);
    
            $this->forge->addPrimaryKey('id_usuario');
    }

    public function down()
    {
        //
    }
}
