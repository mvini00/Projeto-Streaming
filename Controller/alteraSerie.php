<?php
include_once('../View/header.php');
include_once('../Model/conexao.php');
include_once('../Model/bancoSerie.php');

extract($_REQUEST, EXTR_OVERWRITE);


if(alterSerie($conexao, $codserie, $serie, $ano, $temporada, $episodio, $genero, $capa, $url, $sinopse)){
    echo("<p class='alert alert-primary' role='alert'>A série foi alterada com sucesso!</p>");
}else{
    echo("<p class='alert alert-danger' role='alert'>A série não foi alterada!</p>");
}


include_once('../View/footer.php');

?>