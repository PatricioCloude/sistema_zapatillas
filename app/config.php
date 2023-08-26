<?php
    define('SERVIDOR','localhost');
    define('USUARIO','root');
    define('PASSWORD','');
    define('BD','sistemadezapatillas');

    $servidor = "mysql:dbname=".BD.";host".SERVIDOR;

    try{
        $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        //echo "La conexion a la base de datos fue existosa :D";
    }catch( PDOException $e){
        //print_r($e);
        echo "Error al conectar la base de datos D:";
    }
?>