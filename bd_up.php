<pre><?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco  = "catalogo-filmes";

$bd = new mysqli($host,$usuario,$senha,$banco);

if ($bd->connect_errno) echo "Falha na conexao";

?></pre>