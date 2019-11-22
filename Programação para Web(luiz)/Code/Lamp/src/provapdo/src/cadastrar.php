<?php
require_once 'classes/Usuario.php';
$u = new Usuario;
?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ProjetoPDO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/estilocadastrar.css">
</head>

<body>
<button type="button" class="btn btn-outline-primary float-right"><a href="index.php">Login</a></button>
    <div class="container-fluid w-50" id="login">
        <h1 class="cadastrar">Cadastrar</h1>
        <form method="POST" name="cadastrar">
            <div class="form-group">
                <label for="formGroupExampleInput">Nome completo</label>
                <input class="form-control" type="text" name="nome" placeholder="Nome completo" maxlength="50">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Telefone</label>
                <input class="form-control" type="text" name="telefone" placeholder="Telefone" maxlength="30">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter email" maxlength="40">
                <small id="emailHelp" class="form-text text-muted small">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" class="form-control" name="senha" placeholder="Enter password" maxlength="15">
                <label for="exampleInputPassword1">Confirmar senha</label>
                <input type="password" class="form-control" name="confSenha" placeholder="Enter password" maxlength="15">
            </div>
            <div class="buttons-login">
                <button type="submit" class="btn btn-primary" >Cadastrar</button>  <!-- onClick="javascript:enviarForm();" -->
            </div>
        </form>
        
    </div>

<?php
$u = new Usuario;


//isset — Informa se a variável(verifica pelo name) foi iniciada, se existe valor, ao clicar em cadastrar e enviar o form pelo method POST
if(isset($_POST['nome'])){
    $nome = addslashes($_POST['nome']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $confirmarSenha = addslashes($_POST['confSenha']);

    if ( !empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha)) {
        // $u->conectar("provapdo", "mysql", "root", "abc123");
        $u->conectar("mysql:dbname=provapdo;host=mysql;port=3306;", "root", "abc123");

        if ($u->msgErro=="") {
            if ($senha==$confirmarSenha) {
                if($u->cadastrar($nome, $telefone, $email, $senha)) {
                    ?>
                    <div id="msg-sucesso">Cadastrado com sucesso !</div>
                    <?php
                }else {
                    ?>
                    <div class="msg-erro">Email já cadastrado !</div>
                    <?php
                }
            }else {
                ?>
                <div class="msg-erro">Senha e confirmar senha não correspondem!</div>
                <?php
            }
        }else {
            ?>
            <div class="msg-erro"><?php echo "Erro: ".$u->msgErro?></div>
            <?php
        }
    }else {
        ?>
        <div class="msg-erro">Preencha todos os campos!</div>
        <?php
    }
}

?>

<script language="JavaScript" type="text/JavaScript">

function enviarForm() {
   document.cadastrar.action = "index.php";
   abreFormEnviado();
   document.cadastrar.target = "formulario";
   document.cadastrar.submit();
}

function abreFormEnviado() {
    javascript:alert('Cadastro realizado com sucesso!');
    javascript:window.location='index.php';
}
</script>



</body>

</html>