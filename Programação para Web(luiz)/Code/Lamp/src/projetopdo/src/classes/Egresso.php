<?php

Class Egresso{
    private $pdo;
    public $msgErro="";

    public function conectar($nome, $host, $usuario, $senha){
        global $pdo;
        global $msgErro;
        try {
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host.";port:3306", $usuario, $senha);
        } catch (PDOException $e) {
            $msgErro = $e->getMessage();
            echo $msgError;
        }
    }


    public function cadastrar($id, $nomeCompactado, $nome, $email, $linkedin, $github, $curso, $campus, $egresso){
        global $pdo;
        $sql = $pdo->prepare("SELECT id FROM egressos WHERE id = :id");
        $sql->bindValue(":id",$id);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return false; //já está cadastrada
        }else{
            $sql = $pdo->prepare("INSERT INTO egressos(id, nomeCompactado, nome, email, linkedin, github, curso, campus, egresso)
                                VALUES(:id, :nc, :n, :em, :l, :g, :cu, :ca, :eg)");
            $sql->bindValue(":id",$id);
            $sql->bindValue(":nc",$nomeCompactado);
            $sql->bindValue(":n",$nome);
            $sql->bindValue(":em",$email);
            $sql->bindValue(":l",$linkedin);
            $sql->bindValue(":g",$github);
            $sql->bindValue(":cu",$curso);
            $sql->bindValue(":ca",$campus);
            $sql->bindValue(":eg",$egresso, PDO::PARAM_BOOL);
            //$sql->bindValue(":s",md5($senha));
            var_dump($sql->fetch());
            $sql->execute();
            return true;
        }
    }





}
?>