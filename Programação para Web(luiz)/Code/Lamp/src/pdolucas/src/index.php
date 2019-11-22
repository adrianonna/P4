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
            <h1>Login</h1>
            <form class="col s4" method="POST">
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
                <a>Ainda não é cadastrado? <strong><a href="cadastrar.php">Cadastre-se já!</a></strong></a>
                <div class="row">
                    <div class="input-field col s12">
                        <a class="waves-effect waves-light btn">Login</a>

                    </div>
                </div>
                

            </form>
        </div>

    </div>
    

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>