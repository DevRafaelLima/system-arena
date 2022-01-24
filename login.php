<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Cadastre-se</title>
  </head>
  <body id="cadastre_se">
    <div class="container">
        <div class="row">
            <div class="col-md logo">
                <div class="imagem">
    
                </div>
                <div class="conteudo">
                   <p class="h1">Arena x</p>
                </div>

            </div>
            <div class="col-md formulario">
                <h1>Login</h1>
                <div class="info">
                    Os campos que tiverem com <span>*</span> são obrigatórios
                </div>
                <div class="alert">
                        <?php if(isset($_GET['error']) && $_GET['error'] == "emailExistente") :?>
                            <div class="alert alert-warning" role="alert">
                                Email já cadastrado, faça seu login <a href="login.php">aqui</a>.
                            </div>
                        <?php endif ?>    
                </div>
                <form method="post" action="validaLogin.php">
                    <?php if(isset($_GET['acao']) && $_GET['acao'] == 1) {?>
                    <div class="alert alert-warning">
                        Preencha todos os campos
                    </div>
                    <?php } else if (isset($_GET['acao']) && $_GET['acao'] == 2){?>
                    <div class="alert alert-warning">
                        Email não está cadastrado.
                    </div>	
                    <?php } else if(isset($_GET['acao']) && $_GET['acao'] == 3) {?>
                    <div class="alert alert-warning">
                        Senha inválida
                    </div>
                    <?php } ?>
                    <div class="form-group">
                        <label for="email">Email: </label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="senha">Senha: </label>
                        <input type="password" name="senha" id="senha" class="form-control">
                    </div>

                    <input type="submit" value="logar" class="btn btn-primary">

                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>