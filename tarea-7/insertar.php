<?php

include("conexion.php");

if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['nombre']) && !empty($_POST['nombre']) &&
        isset($_POST['apellido']) && !empty($_POST['apellido'])) {

    mysql_query("INSERT INTO tarea7 (email,Pw,nombre,apellido) VALUES ('$_POST[email]','$_POST[password]','$_POST[nombre]','$_POST[apellido]')", $con);
    echo "registro exitoso";
    header("Refresh: 5; index.html ");
} else {
    echo "registro imposible";
    header("Refresh: 5; Location: registro.html");
}
?>