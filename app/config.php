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

    $URL = "http://localhost/bd2";

    date_default_timezone_set('America/Lima');
    $fechaHora = date('Y-m-d H:i:s');


    if(isset($_SESSION['mensaje'])){
        $respuesta = $_SESSION['mensaje'];
    ?>
      <script>
            Swal.fire({
              position: 'top-end',
              icon: 'success',
              title: '<?php echo $respuesta ?>',
              showConfirmButton: false,
              timer: 2500
            })
      </script>
    <?php
      unset($_SESSION['mensaje']); //destruye la sesion de una variable especifica
    }


?>