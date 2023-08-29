<?php
    include ('../../config.php');
    
    $rol            = $_POST['rol'];


    $sentencia = $pdo->prepare("INSERT INTO roles
                      (rol, fyh_creacion)
                VALUES( :rol, :fyh_creacion)");
    $sentencia->bindParam('rol',$rol);
    $sentencia->bindParam('fyh_creacion',$fechaHora);


    if($sentencia->execute()){ 
        session_start();
        $_SESSION['mensaje'] = "Se registro exitosamente el nuevo rol";
        $_SESSION['icono'] = "success";
        header('Location: '.$URL.'/roles/ ');
    }else{
        //echo "Las contraseñas no son iguales";
        session_start();
        $_SESSION['mensaje'] = "Error al registrar el nuevo rol";
        $_SESSION['icono'] = "error";
        header('Location: '.$URL.'/roles/create.php');
    }

?>