<?php
/**
 * ETML
 * Auteurs :  Dylan Hentschel, Dylan Martins Fernandes, Kinan Jano, Aurélien Lahaye
 * Date: 28,03.2022
 * Projet web 2
 */

$debug = false;

if ($debug) {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

}
date_default_timezone_set('Europe/Zurich');

include_once 'controller/Controller.php';
include_once 'controller/HomeController.php';

?>