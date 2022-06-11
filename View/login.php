<!-- <?php
Session_start();
$mensagem;
if(isset($_GET['mensagem'])){
    
    $mensagem = $_GET['mensagem'];

    if($mensagem == 'logar'){
        echo 'Digite seu email e senha para entrar na plataforma';
    }elseif($mensagem == 'erro'){
        echo '<p class="bg-danger position-absolute">Erro ao tentar se logar</p>';
    }

}
?> -->

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../src/css/style.css">
    <title>login</title>
</head>
<body>
  <div class="container-fluid d-flex flex-column align-items-center justify-content-center" style=" height:100vh;">
        <section class="d-flex justify-content-between" style="width:100%">
        <h1>Faça seu login</h1>
        <div class="d-flex align-items-center justify-content-between"style="width:23rem">
            <a href="../index.html">Home</a>
             <a href="./login.php">Fazer Login</a>
            <a href="./cadastrar.php">Cadastrar-se</a>
        </div>
    </section>
        
        
      <section class="d-flex align-items-center justify-content-between" style="width:100%">

        <div  class="d-flex flex-column align-items-center justify-content-center">
               <form action="../src/Controller/login.php" method="POST" class="form d-flex flex-column align-items-center justify-content-center">

        E-mail <input type="email" name="email" placeholder = "Digite seu E-mail" style = "border: 2px solid #35525B;border-radius: 30px;width: 324px; height:42px; padding:16px"><br>

        Senha <input type="password" name="senha" placeholder = "Digite sua Senha" style = "border: 2px solid #35525B;border-radius: 30px;width:324px;height: 42px; padding:16px"><br>
        
        <input class="btn" type="submit" value="Entrar" style="background-color:#EFC4E9;color:#35525B;width: 326px;height: 42px;">

    </form>
        </div>

    <div>
        <img src="../src/img/login-img.svg" alt="imagem de login"  style="width: 30rem; height:30rem">    
    </div>
      </section>

  <p style="color:white; font-weight:bold">Para ter acesso as opções de deletar,adicionar e editar é necessario fazer o seguinte  login: email : admin@gmail.com | senha : 123</p> 
    
  </div>
   
</body>
</html>