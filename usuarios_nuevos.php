<?php
    if (isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['apellido']) && !empty($_POST['apellido']) && isset($_POST['n_usuario']) && !empty($_POST['n_usuario']) && isset($_POST['contrasena']) && !empty($_POST['contrasena'])) {
        $n_usuario = $_POST['n_usuario'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $contrasena = $_POST['contrasena'];

        //variables de la conexion a la bd
        $db_host = 'localhost';
        $db_user = 'root';
        $db_password = '';
        $db_db = 'qatar_2022';

        //conexion a la bd
        $con_bd = mysqli_connect($db_host, $db_user, $db_password, $db_db) or die("No se pudo autentificar con la BD");
        mysqli_select_db($con_bd, $db_db) or die("No se puedo conectar a la BD");

        //query para insertar valores a la tabla usuarios
        $sql = "INSERT INTO signup_user (nombre, apellido, n_usuario, contrasena)
                VALUES ('$nombre', '$apellido', '$n_usuario', '$contrasena')";

        if ($con_bd -> query($sql) === TRUE) {
            echo 'Guardado correctamente <br>';
            echo "<a href = signup.html> Volver a formulario</a>"; 
        }else{
            echo 'Error: ' . $sql . '<br>' . $con_bd -> error; 
        }
    }else {
        echo 'Debe llenar los campos';
    }        
    ?>