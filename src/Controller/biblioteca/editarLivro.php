<?php
Session_start();
include_once '../../../Model/conexao.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
$paginas = filter_input(INPUT_POST, 'paginas', FILTER_SANITIZE_SPECIAL_CHARS);
$genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_SPECIAL_CHARS);
$editora = filter_input(INPUT_POST, 'editora', FILTER_SANITIZE_SPECIAL_CHARS);
$ano = filter_input(INPUT_POST, 'ano', FILTER_SANITIZE_SPECIAL_CHARS);
$autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_SPECIAL_CHARS);

var_dump($id);


$queryUpdate = $link->query("update livro set titulo = '$titulo', descricao = '$descricao', numero_paginas = '$paginas',
genero = '$genero', editora = '$editora', ano_lancamento = '$ano', autor = '$autor' where id = $id");

$affected_rows = mysqli_affected_rows($link);

if ($affected_rows > 0) {
    header("Location:../../../View/Biblioteca/cadastrar.php?mensagem=atualizado");
}else{
    header("Location:../../../View/Biblioteca/cadastrar.php?mensagem=erro");
}