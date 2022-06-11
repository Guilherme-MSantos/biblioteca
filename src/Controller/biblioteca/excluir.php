<?php
Session_start();
include_once '../../../Model/conexao.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);


$queryUpdate = $link->query("delete from livro where id = $id");

$affected_rows = mysqli_affected_rows($link);

// if ($affected_rows > 0) {
//     header("Location:../confirmar-delete.php?mensagem=excluido");
// }else{
//     header("Location:../confirmar-delete.php?mensagem=erro");
// }

if ($affected_rows > 0) {
    header("Location:../../../View/Biblioteca/menu.php?mensagem=excluido");
}else{
    header("Location:../../../View/Biblioteca/menu.php?mensagem=erro");
}