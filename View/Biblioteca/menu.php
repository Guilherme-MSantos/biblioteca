<?php
Session_start();
include_once '../../Model/conexao.php';

if(isset($_GET['mensagem'])){
    
    $mensagem = $_GET['mensagem'];

    if($mensagem == 'sucesso'){
        echo '<p class="bg.success">
                Cadastrado com sucesso!
              </p>';
    }elseif($mensagem == 'erro'){
        echo '<p class="bg-danger" >
                 Erro ao cadastrar
                </p>';
    }elseif($mensagem == 'excluido'){
        echo ' 
                  <p class="bg-success" style="font-weight:bold">Excluído com sucesso</p>
                  <br>';
    }

}
$id = $_SESSION['id_usuario'];
$usuario = $link->query("select * from usuarios where id = $id");

$affected_rows = mysqli_affected_rows($link);

$dados = $usuario->fetch_all();

echo '<p class="m-2">Seja bem vindo: '. $dados[0][4]. ' '. '  <a href="../../index.html "> sair</a> '. '</p>'; /// NOME DO USUÁRIO


$resul = $link->query("select * from livro");

$affected_rows = mysqli_affected_rows($link);

if($affected_rows > 0){
?>
  
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
       <link rel="stylesheet" href="../../src/css/style.css">
      <title>Document</title>
  </head>
  <body>
        <h3 class="mx-3">Livros cadastrados</h3>

        <?php
        

            echo "<div class='container b d-flex  align-items-center justify-content-center flex-wrap' style='min-height:50%'> ";
                while($row = $resul->fetch_assoc()) {
                    echo "<div class='position-relative card m-3 p-3 d-flex  align-items-center justify-content-center' style=' background-color:#35525B;width:300px;height:300px'>
                    <div class= 'card-body'>
                    ";

                        echo '<p class="card-title">Titulo: '.$row["titulo"] . '</p>'.
                        '<p>Gênero: ' . $row["genero"]. '</p>'.
                        '<p>Ano Lançamento : ' . $row["ano_lancamento"].'</p>'.
                        '<p>Editora:' . $row["editora"].'</p>';
                        $id = $row["id"];
                        
                        if($dados[0][3] != 'usuario'){ ?>
                                <div class='botao'><a class='' href='cadastrar.php?editar=<?php echo $id ?>'>Editar</a></div>
                                <div class='botao'><a class='' href='../../src/Controller/confirmar-delete.php?id=<?php echo $id?>'>Excluir</a></div>
                                <br>
                                <?php   
                                }
                    
                    
                    echo "
                    </div>
                    </div>";
                }
            echo "</div>"

        ?>


  </body>
  </html>
<?php
}else{
?>
    <h5 class="blue-grey-text center">Não há Livros Cadastrados</h5>
<?php
}

if($dados[0][3] != 'usuario'){
    echo "<a href='./cadastrar.php'><Button class='btn position-absolute fixed-top m-2' style='background-color:#EFC4E9;color:#35525B;width:300px; left:63%;top:4%'>Cadastrar novo livro</Button></a>";
}
?>