<?php include "cabecalho.php";  ?>
<body>
    <main>
        <div class="container">
        <div class="row">
            <form action="inserirfilme.php" method="POST">
            <div class="col s6 offset-s3">
                <!-- o ofsset fez ficar no meio-->
                <div class="card accent-2">
                    <div class="card-content">
                        <span class="card-title"><h3>Cadastrar Filmes</h3></span>
                        
                        <!--esse é o inicio de um aúnica cx do forms-->
                        <div class="row">
                            <div class="input-field col s12">
                                <input  id="titulo" type="text" class="validate" name="titulo" required> 
                                <label for="titulo">Título</label>
                            </div>
                        </div>
                        <!--esse é o fim de um aúnica cx do forms-->

                        <!--esse é o inicio da classificaçã dos filmes-->
                        <div class="row">
                            <div class="input-field col s4">
                                <input  id="Nota" type="number" class="validate" name="nota" required step=".5" min=0 max=10>
                                <label for="nota">Nota</label>
                            </div>
                        </div>
                        <!--esse é o fim da classificação dos filmes-->

                        <!--input da capa do filme-->
                            <div class="file-field">
                            <div class="btn blue lighten-2 black-text">
                                <span>UPLOAD CAPA</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" name="poster" required>
                            </div>
                            </div>

                    </div>
                    </form>
                    <div class="card-action">
                        <a href="/" class="waves-effect waves-light btn grey">Cancelar</a>
                        <button type="submit" class="waves-effect waves-light btn #00acc1 cyan darken-1">Cadastrar</button> <!-- botão de ação principal-->
                    </div>
                </div>
            </div>
            </form>
        </div>
        </div>

    </main>


</body>
<script>
    let elem = document.getElementById('cadastro');
    elem.classList.add('active');
</script>

</html>