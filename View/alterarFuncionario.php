<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include_once('header.php');
include_once('../Model/conexao.php');
include_once('../Model/bancoFuncionario.php');

$codigo = $_GET["codigo"];

$resul = visuCodigoFuncionario($conexao, $codigo);
$funcionario = mysqli_fetch_assoc($resul);

?>
<div class="Border m-4">
<form action="../Controller/alteraFuncionario.php" method="post" class="row g-3 ">

<div class="col-2">
      <label for="inputCodigo" class="form-label">Código</label>
      <input type="text" readonly value="<?=$funcionario['codfun']?>"name="codFuncionario" class="form-control" id="inputCodigo">
    </div>
              
        <div class="col-10">
            <label for="inputNome" class="form-label">Nome</label>
            <input type="text" name="nomeFuncionario" value="<?=$funcionario['nomefun']?>" class="form-control" id="inputNome">
        </div>

        <div class="col-md-4">
            <label for="inputFone" class="form-label">Fone</label>
            <input type="text" name="foneFuncionario" value="<?=$funcionario['fonefun']?>" class="form-control" id="inputFone">
        </div>

        <div class="col-md-8">
            <label for="inputFone" class="form-label">Função</label>
            <select required name="funcaoFuncionario" class="form-select form-select" aria-label=".form-select-lg example">
                <option value="<?=$funcionario['funcaofun']?>" selected > <?=$funcionario['funcaofun']?> </option>
                <option value="Gerente">Gerente</option>
                <option value="Operador">Operador</option>

            </select>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Alterar</button>
 
        </div>
    </form>
    </div>
    <?php
include('footer.php')
?>