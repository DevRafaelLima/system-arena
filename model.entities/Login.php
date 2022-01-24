<?php
header("Location: index.php");
session_start();
class Login{
    //receberá dois atributos, a conexao ao banco de dados e um objeto do tipo usuário.
    private $conexao;
    private $user;

    public function __construct(Db $conexao,Cliente $user){
        $this->conexao = $conexao->getConnection();
        $this->usuario = $user;
    }
    //método que verifica que o email está cadastrado no banco de dados
    public function validaEmail(){
        
        $query = "SELECT email FROM tb_usuarios WHERE email = :email";
        $sql = $this->conexao->prepare($query);
        $sql->bindValue(":email", $this->usuario->getEmail());
        $sql->execute();
        if($sql->rowCount() > 0){
            return true;
        } else {
            return false;
        }
    }

    //método que verifica se a senha informada está cadastrado no bando de dados.
    public function validaSenha(){
         $query = "SELECT email FROM tb_usuarios WHERE senha = :senha AND email = :email";
         $sql = $this->conexao->prepare($query);
         $sql->bindValue(":email", $this->usuario->getEmail());
         $sql->bindValue(":senha", $this->usuario->getSenha());
         $sql->execute();

         if($sql->rowCount() > 0){
             return true;
         } else {
             return false;
         }
    }
    public function login(){
         
         $query = "SELECT * FROM tb_usuarios WHERE senha = :senha AND email = :email";
         $sql = $this->conexao->prepare($query);
         $sql->bindValue(":email", $this->usuario->getEmail());
         $sql->bindValue(":senha", $this->usuario->getSenha());
         $sql->execute();			

         if($sql->rowCount() > 0){
             $dados = $sql->fetch(PDO::FETCH_OBJ);
             $_SESSION['email'] = $dados->email;
             $_SESSION['tipoUser'] = $dados->codTipoUsuer;
             return true;
         } else {
             return false;
         }
    }

}
?>