
<?php

include_once("../View/header.php");
require_once("../Model/bancoFuncionario.php");
require_once("../Model/conexao.php");

extract($_REQUEST, EXTR_OVERWRITE);

if(insereFun($conexao, $codusuFK, $nomefun, $fonefun, $funcaofun)){
    $_SESSION["emailusubusca"] = "/";
    echo("<div class='alert alert-success' role='alert'>Funcionário cadastrado com sucesso</div>");
}else{
    echo("<div class='alert alert-danger' role='alert'>O funcionário não foi para o banco de dados<div>");
}

include_once ("../View/footer.php");

