<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>tarea7</title>
        <link rel="shortcut icon" href="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTWZ9fHpO2lZzxduamzTsDnZyLYmoBU8PCtYcAH9-LVXweX724uEw">
        <link rel="stylesheet" type="text/css" href="estilos.css" />
    </head>
    <body>
        <div class="logo">
            <div class="formulario">
                <?php
                session_start();
                if (isset($_SESSION['username'])) {
                    echo "<p> hola " . $_SESSION['username'] . "</p>";
                    ?>

                    <input type='button' value='logout' onClick="location.href = 'destruir.php'" </input>
                </div>
            </div>
            <?php
        } else {
            echo "No puedes ver esta pagina, registrate e inicia sesion";
        }
        ?>
    </body>
</html>

