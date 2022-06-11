<?php
Session_start();
include_once '../../Model/conexao.php';

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);


$querInsert = $link->query("insert into usuarios (email,senha,tipo,nome) 
values('$email',$senha,'usuario','$nome')");

$affected_rows = mysqli_affected_rows($link);

if ($affected_rows > 0) {
    $_SESSION['id'][1] = "Sucesso!";

    header("Location:../../View/login.php");
}else{
    header("Location:../../View/cadastrar.php");
}
