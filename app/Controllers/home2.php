<?php
defined('BASEPATH') OR exit('No direct script acess allowed');


class home2 extends CIController {
public function index()
{
   $texto = "oioi";
   $dados = array("mensagem" => $texto);
   $this->load->view("home/home");
    }
}
