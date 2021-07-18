<?php

function insereFun($conexao, $codusuFK, $nomefun, $fonefun, $funcaofun)
{
    $query = "insert into tbfuncionario(codusuFK,nomefun,fonefun,funcaofun) values ('{$codusuFK}', '{$nomefun}', '{$fonefun}', '{$funcaofun}')";
    $resultado = mysqli_query($conexao, $query);

    return $resultado;
};

function limpaCadastroFun()
{
    session_destroy();
}

function visuNomeFuncaoFuncionario($conexao, $nomeFuncionario, $funcaoFuncionario)
{
    if ($nomeFuncionario == "") {
        $query = "Select * from tbfuncionario where funcaofun = '{$funcaoFuncionario}'";
    } elseif ($funcaoFuncionario == "") {
        $query = "Select * from tbfuncionario where nomefun like '%{$nomeFuncionario}%'";
    } else {
        $query = "Select * from tbfuncionario where nomefun like '%{$nomeFuncionario}%' and funcaofun = '{$funcaoFuncionario}'";
    }

    $resultado = mysqli_query($conexao, $query);

    return $resultado;
}


function alteraFuncionario($conexao, $codFuncionario, $nomeFuncionario, $foneFuncionario, $funcaoFuncionario)
{
    $query = "update tbfuncionario set nomefun='{$nomeFuncionario}', fonefun='{$foneFuncionario}', funcaofun ='{$funcaoFuncionario}' where codfun='{$codFuncionario}' ";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function visuCodigoFuncionario($conexao, $codigo)
{
    $query = "Select * from tbfuncionario where codfun={$codigo}";
    $resultado = mysqli_query($conexao, $query);

    return $resultado;
}

function deleteFuncionario($conexao, $codfun)
{

    $query = "delete from tbfuncionario where codfun='{$codfun}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}
