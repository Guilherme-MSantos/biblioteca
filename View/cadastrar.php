<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../src/css/style.css">
    <title>Cadastrar</title>
</head>
<body>
   <div class="container-fluid d-flex flex-column align-items-center justify-content-center" style=" height:100vh;">
   <section class="d-flex justify-content-between" style="width:100%">
        <h1>Fazer cadastro</h1>
        <div class="d-flex align-items-center justify-content-between"style="width:23rem">
            <a href="../index.html">Home</a>
             <a href="./login.php">Fazer Login</a>
            <a href="./cadastrar.php">Cadastrar-se</a>
        </div>
    </section>
        
   <section class="d-flex align-items-center justify-content-between" style="width:100%">
  
        <div class="d-flex flex-column align-items-center justify-content-center">
            <form action="../src/Controller/cadastrar.php" method="POST"  class="form d-flex flex-column align-items-center justify-content-center">
               

        Nome: <input type="text" name="nome" style = "border: 2px solid #35525B;border-radius: 30px;width:324px;height: 42px; padding:16px" placeholder="Digite seu nome"><br>

        E-mail: <input type="email" name="email" style = "border: 2px solid #35525B;border-radius: 30px;width:324px;height: 42px; padding:16px" placeholder="Digite o seu email"><br>

        Senha: <input type="password" name="senha" style = "border: 2px solid #35525B;border-radius: 30px;width:324px;height: 42px; padding:16px" placeholder="Digite sua senha"><br>


        <input type="submit" value="Cadastrar" class="btn "style="background-color:#EFC4E9;color:#35525B;width: 326px;height: 42px;">

    </form>
</div>
        <div>
            <img src="../src/img/login-img.svg" alt="imagem de login"  style="width: 30rem; height:30rem"> 
        </div>
   </section>
   </div>
    
</body>
</html>