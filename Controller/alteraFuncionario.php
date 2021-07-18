<?php
include_once('../View/header.php');
include_once('../Model/conexao.php');
include_once('../Model/bancoFuncionario.php');

extract($_REQUEST, EXTR_OVERWRITE);


if(alteraFuncionario($conexao, $codFuncionario, $nomeFuncionario, $foneFuncionario, $funcaoFuncionario)){
    echo("<p class='alert alert-primary' role='alert'>O dados do funcionário foram alterados com sucesso!</p>");
}else{
    echo("<p class='alert alert-danger' role='alert'>Os dados do funcionário não foram alterados!</p>");
}


include_once('../View/footer.php');

?>