
<?php 
session_start();
 //print_r($_SESSION);
 if((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
 {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    //header('Location: login.php');
 }
 
//$logado = $_SESSION['email'];

?>