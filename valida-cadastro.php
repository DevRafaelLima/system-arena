<?php
require("model.db/Db.php");
require("model.dao/ClienteDao.php");
$conn = new Db();
$cliente = new Cliente();
$clienteDAO = new ClienteDao($conn);
$nome = $_GET['name'];
$email = $_GET['email'];
$data = $_GET['data'];
$contato = $_GET['contato'];
$whatsapp = $_GET['what'];
$instagram = $_GET['insta'];
$facebook = $_GET['face'];
$senha = $_GET['senha'];

$cliente->setNome($_GET['name']);
$cliente->setEmail($_GET['email']);
$cliente->setData($_GET['data']);
$cliente->setContato($_GET['contato']);
$cliente->setWhatsapp($_GET['what']);
$cliente->setInstagram($_GET['insta']);
$cliente->setFacebook($_GET['face']);
$cliente->setSenha($_GET['senha']);

if($clienteDAO->validaEmail($cliente->getEmail())){
    if($clienteDAO->insert($cliente)){
        header("Location: success.php");
    }
} else {
    header("Location: cadastrar.php?error=emailExistente");
}

?>