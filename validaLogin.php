<?php
require 'model.entities/Cliente.php';
require 'model.db/Db.php';
require 'model.entities/Login.php';

//filtro os input's enviado pelo usuário.
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
//se o email e senha foram preenchidos continuo o script, caso contrário redireciono o usuário para a página de login e informo para o usuário que deve preencher todos os campos.
if($email && $senha){
	//extância do objeto usuario
	$c = new Cliente();
    $c->setEmail($email);
    $c->setSenha($senha);
	//extância do objeto conexão
	$db = new Db();
	//extância do objeto login
	$login = new Login($db, $c);



	//verifico se o email está cadastrado no bando de dados, se não estiver, redireciono para a página de login informando para o usuário que o email informado não está cadastrado no banco de dados.
	if($login->validaEmail()){
		
		/* tomada de decisão par verificar se a senha do usuário está cadastrado no sistema. */
		if($login->validaSenha()){
			//realiza o login
			if($login->login()){
				header("Location: index.php");
				exit();
			} 
		} else {
			header("Location: login.php?acao=3");
			exit();
		}
	} else {
		header("Location: login.php?acao=2");
		exit();
	}
} else {
	header("Location: login.php?acao=1");
	exit();
}
?>