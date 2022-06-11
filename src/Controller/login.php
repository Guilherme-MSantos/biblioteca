<?php

Session_start();
include_once '../../Model/conexao.php';

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

$querInsert = $link->query("select * from usuarios where email = '$email' and senha = '$senha'");

$affected_rows = mysqli_affected_rows($link);

$row = $querInsert ->fetch_all();


if ($affected_rows > 0) {

    $_SESSION['id_usuario'] = $row[0][0];
    header("Location:../../View/Biblioteca/menu.php");
    
}else{
    $_SESSION['msg'][1] = "Erro!";

    header("Location:../../View/login.php?mensagem=erro");
}
