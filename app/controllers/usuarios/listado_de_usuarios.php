<?php

    $sql_usuarios = "SELECT u.id_usuario AS id_usuario, u.nombres AS nombres, u.email AS email, r.rol AS rol 
                    FROM usuarios AS u 
                    INNER JOIN roles AS r ON u.id_rol = r.id_rol";


    $query_usuarios = $pdo->prepare($sql_usuarios);
    $query_usuarios->execute();

    $usuarios_datos = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);

?>