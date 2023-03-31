<?php

private $id;
private $login;
private $email;
private $senha;
private $logado;

  // getters
   function getId() {
    return $this->id;
  }
  
  
   function getLogin() {
    return $this->login;
  }
  
   function getEmail() {
    return $this->email;
  }
  
   function getSenha() {
    return $this->senha;
  }
  
 
  
   function getLogado() {
    return $this->logado;
  }
  
  // setters
   function setId($id) {
    $this->id = $id;
  }
  
   function setLogin($login) {
    $this->login = $login;
  }
  
   function setEmail($email) {
    $this->email = $email;
  }
  
   function setSenha($senha) {
    $this->senha = $senha;
  }
  
   function setLogado($logado) {
    $this->logado = $logado;
  }


