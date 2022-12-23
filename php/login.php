<?php
require 'conexao.php';
require 'Usuario.class.php';


$u = new Usuario();



if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    $u->login($email,$senha);
    die();
}
    header("location: ../index.php");




?>
