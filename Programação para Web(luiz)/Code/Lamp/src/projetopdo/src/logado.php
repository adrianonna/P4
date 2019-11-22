<?php
require_once 'classes/Egresso.php';
$e = new Egresso;

session_start();
if(!isset($_SESSION['idusuario'])){
    header("location: index.php");
    exit;
}

if(isset($_POST['id'])){
    $id = addslashes($_POST['id']);
    $nomeCompactado = addslashes($_POST['nomeCompac']);
    $nome = addslashes($_POST['nomeCompl']);
    $email = addslashes($_POST['email']);
    $linkedin = addslashes($_POST['linkedin']);
    $github = addslashes($_POST['github']);
    $curso = addslashes($_POST['curso']);
    $campus = addslashes($_POST['campus']);
    $egresso = true;

    if (!empty($id) && !empty($nomeCompactado) && !empty($nome) && !empty($curso) && !empty($campus)) {
        $e->conectar("provapdo", "mysql", "root", "abc123");
        if ($e->msgErro=="") {
            if($e->cadastrar($id, $nomeCompactado, $nome, $email, $linkedin, $github, $curso, $campus, $egresso)){
                $msg = '<div id="msg-sucesso">Cadastrado com sucesso!</div>';
            }else{
                $msg = '<div class="msg-erro">Matrícula já cadastrada!</div>';
            }
        }else{
            $msg = '<div class="msg-erro"> Erro: '.$u->msgErro.'</div>';
        }
    }else{
        $msg = '<div class="msg-erro">Preencha todos os campos obrigatórios!</div>';
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Egressos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/estilologado.css">

</head>

<body>
    <div class="container-fluid w-50" id="login">
        <form method="POST">
            <!-- <button type="submit" class="btn btn-primary btnlogout">Logout</button> -->
        </form>
        <h1 class="cadastrar">Cadastrar Egresso</h1>
        <form method="POST">
            <div class="form-group">
                <label for="formGroupExampleInput">*Matrícula</label>
                <input class="form-control form-control-sm" type="text" name="id" placeholder="Matrícula"
                    maxlength="11">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">*Nome compactado</label>
                <input class="form-control form-control-sm" type="text" name="nomeCompac" placeholder="Nome compactado"
                    maxlength="30">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">*Nome completo</label>
                <input class="form-control form-control-sm" type="text" name="nomeCompl" placeholder="Nome completo"
                    maxlength="60">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control form-control-sm" name="email" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Email" maxlength="50">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">LinkedIn</label>
                <input class="form-control form-control-sm" type="text" name="linkedin" placeholder="LinkedIn"
                    maxlength="90">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">GitHub</label>
                <input class="form-control form-control-sm" type="text" name="github" placeholder="GitHub"
                    maxlength="90">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">*Curso</label>
                <input class="form-control form-control-sm" type="text" name="curso" placeholder="Curso" maxlength="25">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">*Campus</label>
                <input class="form-control form-control-sm" type="text" name="campus" placeholder="Campus"
                    maxlength="20">
            </div>
            <div class="buttons">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <!-- <button type="submit" class="btn btn-primary">Listar</button> -->
            </div>
        </form>

    </div>

    <!-- <div class="container">
        <table class="table-striped">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Curso</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">LinkedIn</th>
                </tr>
            </thead>
            <tbody class="data">
            </tbody>
        </table>
    </div>

    <script>
        let data = document.querySelector(".data");
        fetch('https://raw.githubusercontent.com/ifpb/egressos/master/data/egressos.json')
            .then(response => response.json())
            .then(json => {
                json.forEach(element => {
                    data.insertAdjacentHTML(
                        "beforeend",
                        `<tr>
                            <td>${element.nome}</td>
                            <td>${element.curso}</td>
                            <td>${element.email}</td>
                            <td>${element.linkedin}</td>
                        </tr>`
                    )
                });
            })    
    </script> -->
</body>

</html>