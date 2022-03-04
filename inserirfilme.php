<?php
session_start();

require_once "repository/FilmesRepositoryPDO.php";
require_once "model/Filme.php";

$filmesRepository = new FilmesRepositoryPDO();
$filme = new Filme();

$filme->titulo = ($_POST["titulo"]); //deixar mais seguro a entrada de dados
$filme->nota   = ($_POST["nota"]);
$filme->poster = ($_POST["poster"]);

if ($filmesRepository->salvar($filme)) $_SESSION["msg"] = "Filme cadastrado com sucesso";

else  $_SESSION["msg"]="Erro ao cadastrar o filme";

header("Location: galeria.php");

?>
