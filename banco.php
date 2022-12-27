
<?php include 'Usuario.class.php' ?>
<!DOCTYPE html>

<html lang="pt-br">
    <head>

        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport"content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/nstyle.css">

        <title>bancoWiti</title>

    </head>

    <body>

        <div id="login">

            <form class="card" action="../bancoWiti/php/login.php" method="POST">

                <div class="card-header">
                <label for="usuario">Bem vindo ao banco Witi!!</label> 
                    <h2><?php echo $dado['nome']?>bancoWiti</h2>
                    
                </div>

                <div class="card-content">

                    <div class="card-content-area">

                       
                        <div class="card-content-area">

                <label for="usuario">Saldo</label>
                        

                    </div>

            </form>

        </div>

    </body>
