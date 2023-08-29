<?php
    include ('../../../app/config.php');

    $rol            = $_POST['rol'];
    $id_rol    = $_POST['id_rol'];

    
    $sentencia = $pdo->prepare("UPDATE  roles
    SET   rol           =:rol,
                  fyh_actualizacion =:fyh_actualizacion
    WHERE id_rol        =:id_rol");
    
    $sentencia->bindParam('rol',$rol);
    $sentencia->bindParam('fyh_actualizacion',$fechaHora);
    $sentencia->bindParam('id_rol',$id_rol);
    
    if($sentencia->execute()){

        session_start();
        $_SESSION['mensaje'] = "Se actualizo exitosamente al rol";
        $_SESSION['icono'] = "success";
        header('Location: '.$URL.'/roles/ ');

    }else{

        //echo "Las contraseñas no son iguales";
        session_start();
        $_SESSION['mensaje'] = "Error al actualizar el rol";
        $_SESSION['icono'] = "error";
        header('Location: '.$URL.'/roles/update.php?id='.$id_rol);

    }
    
?>