<?php include "cabecalho.php";
session_start();

include_once "repository/FilmesRepositoryPDO.php";
include_once "util/Mensagem.php";?>

<?php
$filmesRepository = new FilmesRepositoryPDO();
$filmes = $filmesRepository->listarTodos();
?>
<script>
    let el = document.getElementById('galeria');
    el.classList.add('active');
</script>
<main>
        <div class="nav-content">
                <!-- foi adicionado a cor: #00acc1 cyan darken-1, que tb foi retirado do materalize-->
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a href="#test1" class="active">Todos</a></li>
                    <li class="tab"><a href="#test2">Assistidos</a></li>
                    <li class="tab"><a href="#test3">Favoritos</a></li> 
                    <!--<li class="tab disabled"><a href="#test3">Favoritos</a></li> => isso é o que tava antes, na class o disabled deixa desativado para clicar-->
                </ul>
            </div>


    <!-- um modo de fazer -->
    <div class="container">
    <div class="row">
        <?php //adaptado
        foreach($filmes as $filme): ?> 
            <div class="col s12 m6 l3"><!--inicio card-->
                <div class="card hoverable" > <!-- esse hoverable faz uma sombra no card-->
                    <div class="card-image">
                        <img src="<?php echo $filme["poster"]?>" >
                        <a class="btn-floating halfway-fab waves-effect waves-light" class=><i class="material-icons">favorite_border</i></a>
                    </div>
                    <div class="card-content">
                        <p class="valign-wrapper"><i class="material-icons amber-text">star</i><?= $filme["nota"]?>/10</p> <!--class="valign-wrapper -> alinha verticalmente-->
                        <span class="card-title"><?= $filme["titulo"]?></span> <!--outra forma abreviada de mandar o php escrever algo-->
                    </div>
                </div>
            </div><!-- fim do card-->
        <?php endforeach ?>
    </div> 
    </div>

</main>
<?= Mensagem::mostrar();?>

</body>
</html>

