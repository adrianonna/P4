<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ProjetoPDO</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/estiloindex.css">
</head>

<body>
  <!-- <div class="login">
        <h1>Entrar</h1>
        <form method="POST" action="process.php">
            <input type="text" placeholder="Usuário">
            <input type="password" name="" id="" placeholder="Senha">
            <input type="submit" value="Acessar">
             <a href="">Ainda não é inscrito?<strong> Cadastrar!</strong></a>
        </form>
    </div> -->






  <div class="container-fluid w-50" id="login">
    <h1 class="logar">Logar</h1>
     <form method="POST" name="index"> <!-- action="process.php" se for usar em outro arquivo -->
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
          placeholder="Enter email" maxlenght="40">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Enter password" maxlenght="15">
      </div>
      <div class="buttons-login">
        <button type="submit" class="btn btn-primary">Entrar</button>
        <h6>Ainda não é cadastrado? <a href="cadastrar.php"><strong> Cadastre-se!</strong></a></h6>
      </div>
    </form>
  </div>




</body>

</html>