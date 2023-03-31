<?php


class UsuarioDAO{
    private $conexao;


    public function __construct() {
        $this->conexao = new Conexao();
      }
  

    public function login($login,$senha){
        $sql = "SELECT * FROM usuario WHERE nomeUsuario = '$login' AND senha = '$senha'";

        $executa = mysqli_query($this->conexao->getCon(), $sql);

        if(mysqli_num_rows($executa) > 0){
            return true;
        }{
            return false;
        }
    }

    public function unico($login){
        $unic = "SELECT * FROM usuario WHERE nomeUsuario = '$login'";

        $exec = mysqli_query($this->conexao->getCon(), $unic);

        if(mysqli_num_rows($exec) > 0){
            return false;
        }else{
            return true;
        }
    }

    public function cadastra($login,$email,$senha){

        $sql = "INSERT usuario(nomeUsuario,email,senha) VALUES ('$login','$email','$senha')";

        $executa = mysqli_query($this->conexao->getCon(), $sql);

        if(mysqli_affected_rows($this->conexao->getCon()) > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function logout(){

        session_start();

        session_destroy();

        header("Location:index.php?success=logout");
        exit();
    }


}