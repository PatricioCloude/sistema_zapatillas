<?php
    include ('../../../app/config.php');

    $id_usuario    = $_POST['id_usuario'];


        $sentencia = $pdo->prepare("DELETE FROM usuarios WHERE id_usuario =:id_usuario");

        $sentencia->bindParam('id_usuario',$id_usuario);

        $sentencia->execute();

        session_start();
        $_SESSION['mensaje'] = "Se elimino exitosamente al usuario";
        $_SESSION['icono'] = "success";
        header('Location: '.$URL.'/usuarios/ ');


?>