<?php
/**
 * ETML
 * Auteurs :  Dylan Hentschel, Dylan Martins Fernandes, Kinan Jano, Aurélien Lahaye
 * Date: 28,03.2022
 * Projet web 2
 */
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ressources/bootsrap/css/bootstrap.css">
    <div class="container">
    <?php include_once "Views/header.html"; ?>

    <?php include_once "Views/footer.html"; ?>
    </div>

</head>

<?php
$debug = false;

if ($debug) {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

}
date_default_timezone_set('Europe/Zurich');




include_once 'controllers/Controller.php';
include_once 'controllers/HomeController.php';

include "Views/page/home/homePage.php";
?>