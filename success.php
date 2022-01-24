<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- css personalizado -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Olá, mundo!</title>
  </head>
    <body> 
        <?php require("pages/header.php");?>

        <div class="container">
            <div class="row">
                <div class="col-sm">
                    Logo
                </div>
                <div class="w-100"></div>
                <div class="col text-center">
                    <h1 class="text-success">Cadastro concluído</h1>
                    <p class="lead">
                        Seu cadastro foi concluído com sucesso!
                    </p>
                    <p class="lead">Faça login para agendar seu horário</p>
                    <a href="login.php" class="btn btn-primary">Login</a>
                </div>
            </div>
        </div>
    </body>
</html>  