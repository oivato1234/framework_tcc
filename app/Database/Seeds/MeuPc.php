<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MeuPc extends Seeder
{
    public function run()
    {
        $data =[
            'usuario'=>'admin',
            'senha'=> 'admin'
        ];
        $this->db->table('Login')->insert($data);
    }
}
