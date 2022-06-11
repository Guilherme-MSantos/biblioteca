<?php
session_start();
include_once './Model/conexao.php';

$id = 0;
if(isset($_GET['excluir'])){
    $id = $_GET['excluir'];
}

$queryDelete = $link -> query ("delete from produtos where id = '$id'");

echo mysqli_affected_rows($link);

if (mysqli_affected_rows($link) > 0):
    $_SESSION['msg'] = '<p class="center red-text">Produto Excluido com sucesso!</p>' . "<br>";
    header("Location:../../produtos.php");
endif;