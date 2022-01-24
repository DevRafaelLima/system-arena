<?php
require("model.entities/Cliente.php");

class ClienteDao implements ClienteDaoMysql {
    private $conn;
    
    public function __construct(Db $db){
        
        $this->conn = $db->getConnection();
    }
    public function findAll(){

    }
    public function findByCod($cod){

    }
    public function insert(Cliente $c){
        $sql = $this->conn->prepare("INSERT INTO tb_usuarios(cod, nome, email, nascimento, contato, whatsapp, instagram, facebook, senha) VALUES 
        (NULL, :nome, :email, :nascimento, :contato, :whatsapp, :instagram, :facebook, :senha)");
        $sql->bindValue(":nome", $c->getNome());
        $sql->bindValue(":email", $c->getEmail());
        $sql->bindValue(":nascimento", $c->getData());
        $sql->bindValue(":contato", $c->getContato());
        $sql->bindValue(":whatsapp", $c->getWhatsapp());
        $sql->bindValue(":instagram", $c->getInstagram());
        $sql->bindValue(":facebook", $c->getFacebook());
        $sql->bindValue(":senha", $c->getSenha());
        $sql->execute();

        if($sql->rowCount() > 0){
            return true;
        }

        return false;
    }
    public function update(Cliente $c){

    }
    public function delete($id){

    }
    public function validaEmail($email){
        $sql = $this->conn->prepare("SELECT tb_usuarios.email FROM tb_usuarios WHERE tb_usuarios.email = :email");
        $sql->bindValue(":email", $email);
        $sql->execute();
        if($sql->rowCount() > 0){
            return false;
        } else {
            return true;
        }
    }
}
?>