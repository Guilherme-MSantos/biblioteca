<?php 
Session_start(); ?>

<?php
include_once '../../Model/conexao.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
 $_SESSION['id'] = $id; 

 if(isset($_GET['mensagem'])){
    
    $mensagem = $_GET['mensagem'];

    if($mensagem == 'sucesso'){
        echo '<div class="alert  alert-success " role="alert">
                Cadastrado com sucesso!
              </div>';
    }elseif($mensagem == 'erro'){
        echo '<div class="alert  alert-danger " role="alert" >
                 Erro ao cadastrar
                </div>';
    }elseif($mensagem == 'excluido'){
        echo ' 
                  Excluído com sucesso!';
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../../src/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> excluir livro</title>
</head>
<body>
   <section class="container d-flex flex-column align-items-center justify-content-center" style="height:100vh">
     <div class="card  d-flex flex-column align-items-center justify-content-center p-3" style="background-color:#8C78D7">
       <h2> Deseja excluir este livro ?</h2>
     <div>
       <button class='btn' style="background-color:#EFC4E9;"><a class='link-delete' href='biblioteca/excluir.php?id=<?=$id?>'>SIM</a></button>
       <button class='btn'style="background-color:#EFC4E9;color:#35525B;"><a href="../../View/Biblioteca/menu.php" class='link-delete' > NÃO</a></button>
     </div>
     </div>
   </section>
</body>
</html>