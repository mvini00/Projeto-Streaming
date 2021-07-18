<?php

include_once("../View/header.php");
include_once("../Model/bancoUsuario.php");
include_once("../Model/conexao.php");

extract($_REQUEST, EXTR_OVERWRITE);

if(deleteUsuario($conexao, $codusu)){
          
     echo("<div class='alert alert-success' role='alert'>O usuário foi excluído</div>");
    
}else{
     echo("<div class='alert alert-danger' role='alert'> O usuário não foi excluído</div>");
}


include_once("../View/footer.php");