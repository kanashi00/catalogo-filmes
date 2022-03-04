<?php

abstract class Conexao{

    public static function criar(){
        $host = "localhost";
        $usuario = "root";
        $senha = "";
        $banco  = "catalogo-filmes";
        return (new mysqli($host,$usuario,$senha,$banco)); //conectando ao bd

    }

}