
<?php

require_once("../Model/bancoSerie.php");
require_once("../Model/conexao.php");

extract($_REQUEST, EXTR_OVERWRITE);

if(insereSerie($conexao, $serie, $ano, $temporada, $episodio, $genero, $capa, $url, $sinopse)){
    echo("Série cadastrada com sucesso");
}else{
    echo("A série não foi para o banco de dados");
}