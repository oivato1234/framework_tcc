<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TCC4 extends Migration
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
    }

    public function down()
    {
        //
    }
}
