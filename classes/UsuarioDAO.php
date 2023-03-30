<?php


class UsuarioDAO{
    private $conexao;


    public function login($login,$senha){
        $sql = "SELECT * FROM usuario WHERE loginUsuario = '$login' AND senha = '$senha'";

        $executa = mysqli_query($this->conexao->getCon(), $sql);

        if(mysqli_num_rows($executa) > 0){
            return true;
        }{
            return false;
        }
    }

    public function unico($login){
        $sql = "SELECT * FROM usuario WHERE loginUsuario = '$login'";

        $exec = mysqly_query($this->conexao->getCon(),$sql);

        if(mysqli_num_rows($exec) > 0){
            return false;
        }else{
            return true;
        }
    }

    public function cadastra($login,$nome,$email,$senha,$confirmar_senha){

        $sql = "INSERT usuario(loginUsuario,nome,email,senha,confirmar_senha) VALUES ('$login','$nome','$email','$senha','$confirmar_senha')";

        $executa = mysqli_query($this->conexao->getCon(), $sql);

        if(mysqli_affected_rows($this->conexao->getCon()) > ){
            return true;
        }else{
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