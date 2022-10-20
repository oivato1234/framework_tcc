<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use Config\Migrations;

class Usuarios extends Migrations
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
            $this->forge->createTable('Usuario');
    }

    public function down()
    {
        $this->forge->dropTable('Fonte');
    }
}
