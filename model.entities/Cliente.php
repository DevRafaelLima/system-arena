<?php
class Cliente {
    private $cod;
    private $nome;
    private $email;
    private $data;
    private $contato;
    private $whatsapp;
    private $instagram;
    private $facebook;
    private $senha;

    public function __construct(){

    }
    public function setCod($cod){$this->cod = $cod;}
    public function setNome($nome){$this->nome = $nome;}
    public function setEmail($email){$this->email = $email;}
    public function setData($data){$this->data = $data;}
    public function setContato($contato){$this->contato = $contato;}
    public function setWhatsapp($whatsapp){$this->whatsapp = $whatsapp;}
    public function setInstagram($x){$this->instagram = $x;}
    public function setFacebook($f){$this->facebook = $f;}
    public function setSenha($s){$this->senha = md5($s);}

    public function getCod(){return $this->cod;}
    public function getNome(){return $this->nome;}
    public function getEmail(){return $this->email;}
    public function getData(){return $this->data;}
    public function getContato(){return $this->contato;}
    public function getWhatsapp(){return $this->whatsapp;}
    public function getInstagram(){return $this->instagram;}
    public function getFacebook(){return $this->facebook;}
    public function getSenha(){return $this->senha;}
}

interface ClienteDaoMysql{
    public function findAll();
    public function findByCod($cod);
    public function insert(Cliente $c);
    public function update(Cliente $c);
    public function delete($id);
    public function validaEmail($email);
}

?>