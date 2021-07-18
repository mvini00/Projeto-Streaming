<?php

include_once("../View/header.php");
include_once("../Model/bancoFilme.php");
include_once("../Model/conexao.php");

extract($_REQUEST, EXTR_OVERWRITE);

if(deleteFilme($conexao, $codfil)){
     
    echo("<div class='alert alert-success' role='alert'>O filme foi excluído</div>");
    
}else{
    echo("<div class='alert alert-danger' role='alert'>O filme não foi excluído</div>");
}


include_once("../View/footer.php");

?>

