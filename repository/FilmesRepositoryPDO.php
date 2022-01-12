<?php
require_once "Conexao.php";
class FilmesRepositoryPDO{
    private $conexão;

    public function __construct() {
        $this->conexão = $bd = Conexao::criar(); //assima conexão está para todos dessa classe
    }

    public function listarTodos():array{
        $filmesLista = array(); //array vazio

        $sql = ("SELECT * FROM filmes");
        $filmes = $this->conexão->query($sql); //rs vai ser um conjunto de registros
        while ($filme = $filmes->fetch_array()){
            array_push($filmesLista, $filme);
        }
        return $filmesLista;
    }

    public function salvar(Filme $filme):bool{

        $titulo = $this->conexão->escape_string($_POST["titulo"]); //deixar mais seguro a entrada de dados
        $nota = $this->conexão->escape_string($_POST["nota"]);
        $poster = $this->conexão->escape_string($_POST["poster"]);


        $sql = "INSERT INTO filmes(id,titulo,nota,poster) VALUES ('DEFAULT','$titulo','$nota','$poster')";
        header("Location: galeria.php?msg=filme+cadastrado+com+sucesso");

        return mysqli_query($this->conexão,$sql);
    }
}