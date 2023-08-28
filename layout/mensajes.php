<?php

    if((isset($_SESSION['mensaje'])) && (isset($_SESSION['icono'])) ){
        $respuesta = $_SESSION['mensaje']; 
        $icono = $_SESSION['icono']; 
?>
        <script>
            Swal.fire({
                position: 'top-end',
                icon: '<?php echo$icono; ?>',
                title: '<?php echo$respuesta; ?>',
                showConfirmButton: false,
                timer: 2000
            })
        </script>
<?php   
        unset($_SESSION['mensaje']); //destruye la sesion de una variable especifica 
        unset($_SESSION['icono']); //destruye la sesion de una variable especifica 
    }

?>