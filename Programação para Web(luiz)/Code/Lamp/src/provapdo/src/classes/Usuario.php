<?php

Class Usuario{
    private $pdo;
    public $msgErro="";

    // public function conectar($nome, $host, $usuario, $senha){
    //     global $pdo;
    //     global $msgErro;
    //     try {
    //         $pdo = new PDO("mysql:dbname=".$nome.";host=".$host.";port:3306", $usuario, $senha);
    //     } catch (PDOException $e) {
    //         $msgErro = $e->getMessage();
    //     }
    // }

    public function conectar($dsn, $usuario, $senhabd){
        global $pdo;
        global $msgErro;
        try {
            $pdo = new PDO($dsn, $usuario, $senhabd);
        } catch (PDOException $e) {
            $msgErro = $e->getMessage();
        }
    }


    public function cadastrar($nome, $telefone, $email, $senha){
        global $pdo;

        $sql = $pdo->prepare("SELECT idusuario FROM usuarios WHERE email = :e");
        $sql->bindValue(":e",$email);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            return false; //já está cadastrada
        }else{
            $sql = $pdo->prepare("INSERT INTO usuarios(nome, telefone, email, senha) VALUES(:n, :t, :e, :s)");
            $sql->bindValue(":n",$nome);
            $sql->bindValue(":t",$telefone);
            $sql->bindValue(":e",$email);
            $sql->bindValue(":s",md5($senha));
            $sql->execute();
            return true;
        }
    }


    public function logar(){
        global $pdo;

        $sql = $pdo->prepare("SELECT idusuario FROM usuarios WHERE email = :e AND senha = :s");
        $sql->bindValue(":e",$email);
        $sql->bindValue(":s",md5($senha));
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();
            session_start();
            $_SESSION['idsusario'] = $dado['idusuario'];
            return true;
        }else{
            return false;
        }
    }
}


?>