<?php

session_start();
include 'conexion.php';
if (isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['pw']) && !empty($_POST['pw'])) {
    $sel = mysql_query("SELECT email,Pw FROM tarea7 WHERE email='$_POST[user]'", $con);
    $sesion = mysql_fetch_array($sel);
    if ($_POST['pw'] == $sesion['Pw']) {
        $_SESSION['username'] = $_POST['user'];
        echo "session exitosa";
        header("Location: user.php");
    } else {
        echo "<script type=\"text/javascript\">alert(\"No esta registrado vuelva a intentarlo\");document.location=('./index.html')</script>";
    }
}
?>
