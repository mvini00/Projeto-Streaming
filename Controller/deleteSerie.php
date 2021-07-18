<?php

include_once("../View/header.php");
include_once("../Model/bancoSerie.php");
include_once("../Model/conexao.php");

extract($_REQUEST, EXTR_OVERWRITE);

if(deleteSerie($conexao, $codserie)){
     
    echo("<div class='alert alert-success' role='alert'>A série foi excluída</div>");
    

}else{
    
    echo("<div class='alert alert-danger' role='alert'>A série não foi excluída</div>");    
}


include_once("../View/footer.php");

?>
