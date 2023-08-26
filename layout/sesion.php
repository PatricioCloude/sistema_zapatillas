<?php
  session_start();
  if(isset($_SESSION['session_email'])){
    //echo "si existe sesion";
    $email_sesion = $_SESSION['session_email'];
    $sql = "SELECT * FROM usuarios WHERE email = '$email_sesion'";

    $query = $pdo->prepare($sql);
    $query->execute();

    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($usuarios as $usuario){
        $nombres_sesion = $usuario['nombres'];
    }

  }else{
    echo "no existe sesion";
    header ('Location: '.$URL.'/login/ ');
  }
?>