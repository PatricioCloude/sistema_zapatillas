<?php
  session_start();
  if(isset($_SESSION['session_email'])){
    //echo "si existe sesion";
    $email_sesion = $_SESSION['session_email'];
    $sql = "SELECT u.id_usuario AS id_usuario, u.nombres AS nombres, u.email AS email, r.rol AS rol 
    FROM usuarios AS u 
    INNER JOIN roles AS r ON u.id_rol = r.id_rol WHERE email = '$email_sesion'";

    $query = $pdo->prepare($sql);
    $query->execute();

    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($usuarios as $usuario){
        $nombres_sesion = $usuario['nombres'];
        $rol_sesion = $usuario['rol'];
    }

  }else{
    echo "no existe sesion";
    header ('Location: '.$URL.'/login/ ');
  }
?>