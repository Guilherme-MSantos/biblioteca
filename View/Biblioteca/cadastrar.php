<?php
Session_start();
$mensagem;
$id = 0;

if(isset($_GET['editar'])){

    if(isset($_GET['editar'])){
        $id = $_GET['editar'];
    }


}

if(isset($_GET['mensagem'])){
    
    $mensagem = $_GET['mensagem'];

    if($mensagem == 'sucesso'){
        echo '<p class="bg-success"></p>';
    }elseif($mensagem == 'Erro'){
        echo '<p class="bg-danger">Erro ao cadastrar</p>';
    }elseif($mensagem == 'atualizado'){
        echo '<p class="bg-success>Atualizado com sucesso</p>';
    }

}


include_once '../../Model/conexao.php';

$resul = $link->query("select * from livro where id =".$id);

$affected_rows = mysqli_affected_rows($link);

$row = $resul->fetch_all();

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../src/css/style.css">
    <title>cadastrar livro</title>
</head>
<body>
  <div class="container  d-flex flex-column align-items-center justify-content-center" style="height:100vh; width:100%">
        <h1>Cadastrar Livro </h1>
    <form action="<?= $id != 0 ? '../../src/Controller/biblioteca/editarLivro.php?id='.$id.'': '../../src/Controller/biblioteca/cadastrarLivro.php' ?>" method="POST" class="form d-flex  align-items-center justify-content-center  flex-wrap  " style="min-height:50vh; width:50%">

      <div class="m-2">
            Titulo: <input type="text" name="titulo"  value='<?php echo isset($row[0][1])?$row[0][1]:''  ?>' style = "border: 2px solid #35525B;border-radius: 30px;width: 324px; height:42px; padding:16px" style = "border: 2px solid #35525B;border-radius: 30px;width: 324px; height:42px; padding:16px"><br>
      </div>

       <div class="m-2">
            Descrição: <input type="text" name="descricao"  value='<?php echo isset($row[0][1])?$row[0][2]:''  ?>'style = "border: 2px solid #35525B;border-radius: 30px;width: 324px; height:42px; padding:16px"  ><br>
       </div>

      <div class="m-2">  Número de Páginas: <input type="text" name="paginas"  value='<?php echo isset($row[0][1])?$row[0][3]:''  ?>'  style = "border: 2px solid #35525B;border-radius: 30px;width: 324px; height:42px; padding:16px"><br></div>

      <div class="m-2">
            Genêro: <input type="text" name="genero"  value='<?php echo isset($row[0][1])?$row[0][4]:''  ?>'  style = "border: 2px solid #35525B;border-radius: 30px;width: 324px; height:42px; padding:16px"><br>
      </div>

       <div class="m-2">
            Editora: <input type="text" name="editora"  value='<?php echo isset($row[0][1])?$row[0][5]:''  ?>' style = "border: 2px solid #35525B;border-radius: 30px;width: 324px; height:42px; padding:16px" ><br>
       </div>

      <div class="m-2">
            Ano de Lançamento: <input type="text" name="ano"  value='<?php echo isset($row[0][1])?$row[0][6]:''  ?>' style = "border: 2px solid #35525B;border-radius: 30px;width: 324px; height:42px; padding:16px" ><br>
      </div>

       <div class="m-2">
            Autor: <input type="text" name="autor"  value='<?php echo isset($row[0][1])?$row[0][7]:''  ?>' style = "border: 2px solid #35525B;border-radius: 30px;width: 324px; height:42px; padding:16px" ><br>
       </div>
        <br>
        <br>
        <div>
            <input type="submit" value="Confirmar" class="btn" style="background-color:#EFC4E9;color:#35525B;">
         <a href="menu.php">Voltar</a>
        </div>

    </form>
   
  </div>
    
</body>
</html>