<?php
    require_once 'usuarios.php';
    $u = new Usuario;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prova-php</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
    <div class="container">

        <div id="row-form" class="row">
            <h1>Cadastrar</h1>
            <form class="col s4" method="POST">
            <div class="row">
                    <div class="input-field col s12">
                        <input id="nome"  class="validate" name="nome">
                        <label for="nome">Nome</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate" name="email">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate" name="senha">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input class="waves-effect waves-light btn" type="submit" value="Cadastrar">
                    </div>
                </div>
                

            </form>
        </div>

    </div>

    <?php
    if(isset($_POST['nome'])){
        $nome = addslashes($_POST['nome']);
        $email  = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
    
        if(!empty($nome) && !empty($email) && !empty($senha)){
            $u->conectar("prova", "mysql", "root", "abc123");
            if($u->msgError == ""){
                if($u->cadastrar($nome, $email, $senha)){
                    echo "Cadastrado com sucesso!!";
                }else{
                    echo "Email já cadastrado";
                }
            }else{
                echo "Erro: ".$u->msgError;
            }
        }else{
            echo "Preencha todos os campos!";
        }
    }

    ?>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>