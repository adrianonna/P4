<?php
phpinfo();

$dsn = 'mysql:host=mysql;dbname=egressos;port=3306;'; #dbname=egressos;port=3306 não precisa se ja ta criando o banco(abaixo)
$user = 'root';
$pass = 'abc123';
$pdo = new PDO($dsn, $user, $pass);
// $pdo->exec('create database egressos;
// use egressos;
// create table');
#$pdo->exec(file_get_contents('database.sql'));#criar o arquivo sql antes
header('Location: index.php');
$result = $pdo->query('SELECT * FROM usuarios;');
var_dump($result->fetchAll());
?>