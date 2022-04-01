<?php

/**
 * Auteurs : Dylan Hentschel, Dylan Martins Fernandes, Kinan Jano, Aurélien Lahaye
 * Date: 28,03.2022
 * Contrôleur principal
 */

abstract class Controller {

/**
 * Méthode permettant d'appeler l'action 
 *
 * @return mixed
 */
public function display() {

    $page = $_GET['action'] . "Display";

    $this->$page();
}
}
?>