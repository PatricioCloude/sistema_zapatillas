<?php

  $id_usuario_get = $_GET['id'];

  $sql_usuarios = "SELECT u.id_usuario AS id_usuario, u.nombres AS nombres, u.email AS email, rol.rol AS rol 
                 FROM usuarios AS u 
                 INNER JOIN roles AS rol ON u.id_rol = rol.id_rol 
                 WHERE u.id_usuario = '$id_usuario_get'";


  $query_usuarios = $pdo->prepare($sql_usuarios);
  $query_usuarios->execute();

  $usuarios_datos = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);

  foreach($usuarios_datos as $usuario_dato){
    $nombres    = $usuario_dato['nombres'];
    $email      = $usuario_dato['email'];
    $rol      = $usuario_dato['rol'];
  }

?>