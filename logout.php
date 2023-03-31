<?php

  include ('classes/Conexao.php');
  include ('classes/UsuarioDAO.php');

  $usuario = new UsuarioDAO();

  $logout = $usuario->logout();

 ?>