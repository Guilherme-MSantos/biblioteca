<?php
Session_start();
include_once '../../../Model/conexao.php';

$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
$paginas = filter_input(INPUT_POST, 'paginas', FILTER_SANITIZE_SPECIAL_CHARS);
$genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_SPECIAL_CHARS);
$editora = filter_input(INPUT_POST, 'editora', FILTER_SANITIZE_SPECIAL_CHARS);
$ano = filter_input(INPUT_POST, 'ano', FILTER_SANITIZE_SPECIAL_CHARS);
$autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_SPECIAL_CHARS);


$querInsert = $link->query("insert into livro (titulo,descricao,numero_paginas,genero,editora,ano_lancamento,autor) 
values('$titulo','$descricao','$paginas','$genero','$editora','$ano','$autor')");

$affected_rows = mysqli_affected_rows($link);

if ($affected_rows > 0) {
    header("Location:../../../View/Biblioteca/cadastrar.php?mensagem=sucesso");
}else{
    header("Location:../../../View/Biblioteca/cadastrar.php?mensagem=erro");
}