    <header class="header">
        <div class="container">

            <div class="row">
                <div class="col">
                    logo
                </div>
                <div class="col menu">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#capa">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#agendar">Agendar Horário</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#horarios">Horários</a>
                        </li>
                        
                        <?php if(isset($_SESSION['email']) && !empty($_SESSION['email']) && $_SESSION['tipoUser'] == 1):?>
                            <li class="nav-item">
                                <a class="nav-link" href="minha-area.php">Minha Área</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sair.php">Sair</a>
                            </li>
                        <?php elseif(isset($_SESSION['email']) && !empty($_SESSION['email'])):?>    
                            <li class="nav-item">
                                <a class="nav-link" href="sair.php">Sair</a>
                            </li>
                        <?php else: ?>    
                            <li class="nav-item">
                                <a class="nav-link" href="cadastrar.php">Cadastre-se</a>    
                            </li>                    
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Login</a>    
                            </li>
                        <?php endif ?>      
                        
                    </ul>
                </div>
            </div>
        </div>
    </header>