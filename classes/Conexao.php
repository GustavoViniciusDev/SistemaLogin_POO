<?php

class Conexao{
    private $user = "root";
    private $pass = "";
    private $host = "localhost";
    private $data = "cadastro";
    private $con;

    public function __construct(){
        $this->con = mysqli_connect($this->host, $this->user, $this->pass) or die ("Conexão com o banco de dados falhou". mysqli_error($this->con));

        mysqli_select_db($this->con, $this->banco) or die ("Conexao com o banco de dados falhou". musqli_error($this->con));
    }

    public function getCon(){
        return $this->con;
    }
    
}