<?php
session_start();
?>
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

    <section id="capa">
        <div class="container">
            <div class="capa-int">
                <div class="img">
                    imagem
                </div>
                <div class="conteudo">
                    <h1>Nome</h1>
                    <span>facabook</span>
                    <span>instagram</span>
                </div>
            </div>
        </div>
    </section>

    <section id="agendar">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                   <h3>Você Precisa está logado para agendar horário</h3>
                </div>
                <div class="col-sm">
                    <nav class="nav">
                            <?php if(isset($_SESSION['email']) && !empty($_SESSION['email'])):?>
                                <a href="agendar.php" style="color:#fff;" class="nav-item btn btn-primary btn-block">Agendar</a>
                            <?php else: ?>    
                                <a href="login.php" style="color:#fff;" class="nav-item btn btn-primary btn-block">Login</a>
                            <?php endif ?>    
                       
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section id="horarios">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="form-group row">
                        <label for="data" class="col-sm-3 col-form-label">Data: </label>
                        <input type="date" name="data" class="form-control col-sm-9">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group row">
                        <label for="turno" class="col-sm-4 col-form-label">Turno</label>
                        <select name="turno" id="turno" class="col-sm-8 form-control">
                            <option value=""></option>
                            <option value="manhã">Manhã</option>
                            <option value="tarde">Tarde</option>
                            <option value="noite">Noite</option>
                        </select>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group row">
                        <label for="horario" class="col-sm-3 col-form-label">Horário</label>
                        <select name="horario" id="horario" class="col-sm-9 form-control">
                            <option value=""></option>
                            <option value="">8:00</option>
                            <option value="">9:00</option>
                            <option value="">10:00</option>
                            <option value="">11:00</option>
                            <option value="">12:00</option>
                            <option value="">Todos os horários</option>
                        </select>
                    </div>
                </div>
                <div class="col-md">
                    <button class="btn btn-primary">Buscar</button>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">turno</th>
                    <th scope="col">Data</th>
                    <th scope="col">Horário</th>
                    <th scope="col">Arena</th>
                    <th scope="col">Preço</th>
                    <th scopw="col">Situação</th>
                    <th scope="col">Agendar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>manhã</td>
                        <td>12/01/2022</td>
                        <td>9:00</td>
                        <td>Arena 01</td>
                        <td>R$: 100.00</td>
                        <td>Livre</td>
                        <td>
                            <a href="" class="btn btn-success">Sim</a>
                            <a href="" class="btn btn-warning">Não</a>
                        </td>
                    </tr>
                    <tr>
                        <td>manhã</td>
                        <td>12/01/2022</td>
                        <td>9:00</td>
                        <td>Arena 01</td>
                        <td>R$: 100.00</td>
                        <td>Livre</td>
                        <td>
                            <a href="" class="btn btn-success">Sim</a>
                            <a href="" class="btn btn-warning">Não</a>
                        </td>
                    </tr>
                    <tr>
                        <td>manhã</td>
                        <td>12/01/2022</td>
                        <td>9:00</td>
                        <td>Arena 01</td>
                        <td>R$: 100.00</td>
                        <td>Livre</td>
                        <td>
                            <a href="" class="btn btn-success">Sim</a>
                            <a href="" class="btn btn-warning">Não</a>
                        </td>
                    </tr>
                    <tr>
                        <td>manhã</td>
                        <td>12/01/2022</td>
                        <td>9:00</td>
                        <td>Arena 01</td>
                        <td>R$: 100.00</td>
                        <td>Livre</td>
                        <td>
                            <a href="" class="btn btn-success">Sim</a>
                            <a href="" class="btn btn-warning">Não</a>
                        </td>
                    </tr>
                    <tr>
                        <td>manhã</td>
                        <td>12/01/2022</td>
                        <td>9:00</td>
                        <td>Arena 01</td>
                        <td>R$: 100.00</td>
                        <td>Livre</td>
                        <td>
                            <a href="" class="btn btn-success">Sim</a>
                            <a href="" class="btn btn-warning">Não</a>
                        </td>
                    </tr>
                    <tr>
                        <td>manhã</td>
                        <td>12/01/2022</td>
                        <td>9:00</td>
                        <td>Arena 01</td>
                        <td>R$: 100.00</td>
                        <td>Livre</td>
                        <td>
                            <a href="" class="btn btn-success">Sim</a>
                            <a href="" class="btn btn-warning">Não</a>
                        </td>
                    </tr>
                    <tr>
                        <td>manhã</td>
                        <td>12/01/2022</td>
                        <td>9:00</td>
                        <td>Arena 01</td>
                        <td>R$: 100.00</td>
                        <td>Livre</td>
                        <td>
                            <a href="" class="btn btn-success">Sim</a>
                            <a href="" class="btn btn-warning">Não</a>
                        </td>
                    </tr>
                    <tr>
                        <td>manhã</td>
                        <td>12/01/2022</td>
                        <td>9:00</td>
                        <td>Arena 01</td>
                        <td>R$: 100.00</td>
                        <td>Livre</td>
                        <td>
                            <a href="" class="btn btn-success">Sim</a>
                            <a href="" class="btn btn-warning">Não</a>
                        </td>
                    </tr>
                    <tr>
                        <td>manhã</td>
                        <td>12/01/2022</td>
                        <td>9:00</td>
                        <td>Arena 01</td>
                        <td>R$: 100.00</td>
                        <td>Livre</td>
                        <td>
                            <a href="" class="btn btn-success">Sim</a>
                            <a href="" class="btn btn-warning">Não</a>
                        </td>
                    </tr>
                    <tr>
                        <td>manhã</td>
                        <td>12/01/2022</td>
                        <td>9:00</td>
                        <td>Arena 01</td>
                        <td>R$: 100.00</td>
                        <td>Livre</td>
                        <td>
                            <a href="" class="btn btn-success">Sim</a>
                            <a href="" class="btn btn-warning">Não</a>
                        </td>
                    </tr>
                </tbody>
                </table>

        </div>


    </section>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>