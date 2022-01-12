<?php

class  Mensagem{
    public function mostrar(){
        session_start();
        if (isset($_SESSION["msg"])){
            $msg = $_SESSION["msg"];
            return "<script>

                M.toast({ html: '<?= $_SESSION["msg"] ?>' });
            
            </script>";
            
        }
    }
}