<?php

  $id_usuario_get = $_GET['id'];

  $sql_usuarios = "SELECT * FROM usuarios WHERE  id_usuario = '$id_usuario_get'";

  $query_usuarios = $pdo->prepare($sql_usuarios);
  $query_usuarios->execute();

  $usuarios_datos = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);

  foreach($usuarios_datos as $usuario_dato){
    $nombres    = $usuario_dato['nombres'];
    $email      = $usuario_dato['email'];
  }

?>