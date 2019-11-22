<?php

Class Usuario
{
    public $msgError = "";
    private $pdo;
    public function conectar($nome, $host, $usuario, $senha)
    {   
        global $msgError;
        global $pdo;
        try 
        {
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host.";port:3306", $usuario, $senha);
        } catch (PDOException $e) {
            $msgError = $e->getMessage();
            echo $msgError;
        }
    }
    public function cadastrar($nome, $email, $senha)
    {
        global $pdo;
        $sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :e");
        $sql->bindValue(":e", $email);
        $sql->execute();
        if($sql->rowCount()>0){
            return false;
        }else{
            $sql = $pdo->prepare(
                "INSERT INTO usuarios(nome, email, senha) VALUES (:n,:e, :s)"
            );
            $sql->bindValue(":n", $nome);
            $sql->bindValue(":e", $email);
            $sql->bindValue(":s", $senha);
            $sql->execute();
            return true;
        }
    }
    public function logar($email, $senha)
    {
        global $pdo;
        $sql = $pdo->prepare(
            "SEELECT id FROM usuarios WHERE
            email = :e AND senha = :s"
        );
        $sql->bindValue(":e", $email);
        $sql->bindValue(":s", $senha);
        $sql->execute();
        if($sql->rowCount()>0){
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id'] = $dado['id'];
            return true;
        }else{
            return false;
        }
    }

}

?>