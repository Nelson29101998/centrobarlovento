<?php
session_start();
if ((!isset($_SESSION["usuario"]) && !isset($_SESSION["rut"])) ||
    (!isset($_COOKIE['nameCookieProf']) && !isset($_COOKIE['userCookieProf']) &&
        !isset($_COOKIE['rutCookieProf']))
) {
    header("location: ../../inicio.php");
} else {
    if (
        isset($_COOKIE['nameCookieProf']) && isset($_COOKIE['userCookieProf']) &&
        isset($_COOKIE['rutCookieProf'])
    ) {
        $use = $_COOKIE['userCookieProf'];
        $rut = $_COOKIE['rutCookieProf'];
        $nombreBienv = $_COOKIE['nameCookieProf'];
    } else {
        $use = $_SESSION["usuario"];
        $rut = $_SESSION["rut"];
        $nombreBienv = $_SESSION['nombre'];
    }

    $_SESSION["usuario"] = $use;
    $_SESSION["rut"] = $rut;
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../disenoMejor/bootstrap/css/bootstrap.min.css">
        <script src="../../disenoMejor/bootstrap/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="../../disenoMejor/fontawesome/css/all.min.css">
        <script script="../../disenoMejor/fontawesome/js/all.min.js"></script>

        <link rel="stylesheet" href="../../disenoMejor/MDBootstrap/css/mdb.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <title>Menu</title>
        
        <?php
        //! Favicon
        $direccion = "../../";
        include_once $direccion . "ajuste/favicon.php";
        ?>

        <style>
            h1 {
                font-family: "Comic Sans", "Comic Sans MS", "Chalkboard", "ChalkboardSE-Regular", sans-serif;
            }

            body {
                background-color: #2689F9;
                color: white;
            }
        </style>
    </head>

    <body>
        <?php
        //*SideNav
        include_once "navMenus/sideNav.php";
        ?>
        <br>
        <div class="animate__animated animate__backInUp">
            <div class="container text-center">
                <h1>¡Bienvenido <span><?php echo $nombreBienv; ?>!</span></h1>
                <br>

            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </body>

    </html>

<?php
}
?>