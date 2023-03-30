<?php

private $id;
private $nome;
private $login;
private $email;
private $senha;
private $confirmar_senha;
private $logado;

  // getters
  public function getId() {
    return $this->id;
  }
  
  public function getNome() {
    return $this->nome;
  }
  
  public function getLogin() {
    return $this->login;
  }
  
  public function getEmail() {
    return $this->email;
  }
  
  public function getSenha() {
    return $this->senha;
  }
  
  public function getConfirmarSenha() {
    return $this->confirmar_senha;
  }
  
  public function getLogado() {
    return $this->logado;
  }
  
  // setters
  public function setId($id) {
    $this->id = $id;
  }
  
  public function setNome($nome) {
    $this->nome = $nome;
  }
  
  public function setLogin($login) {
    $this->login = $login;
  }
  
  public function setEmail($email) {
    $this->email = $email;
  }
  
  public function setSenha($senha) {
    $this->senha = $senha;
  }
  
  public function setConfirmarSenha($confirmar_senha) {
    $this->confirmar_senha = $confirmar_senha;
  }
  
  public function setLogado($logado) {
    $this->logado = $logado;
  }
}

