<?php
//meio que vai ser o roteador
$rota = $_SERVER["REQUEST_URI"];

switch ($rota) {
    case "/":
        require "galeria.php";
        break;

    case "/novo":
        require "cadastrar.php";
        break;
    
    default:
        require "404.php";
        break;
    
    
}
