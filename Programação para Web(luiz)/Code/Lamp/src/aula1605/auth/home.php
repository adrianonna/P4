<?php
  session_start();
  if(!isset($_SESSION['auth']) || $_SESSION['auth'] === false)
    header('Location: login.html');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>Home</h1>
  <h3> <?php echo "Olá ".$_SESSION['senha'] ?> </h3>
  <a href="logout.php">logout</a>
</body>
</html>