<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include_once('header.php');
include_once('../Model/conexao.php');
include_once('../Model/bancoSerie.php');

$codigo = $_GET["codigo"];

$resul = visuCodigoSerie($conexao, $codigo);
$serie = mysqli_fetch_assoc($resul);

?>

<div class="container">

  <form action="../Controller/alteraSerie.php" method="POST" class="row g-3">

  <div class="col-md-1">
      <label for="inputCodigo" class="form-label">Código</label>
      <input type="text" readonly value="<?=$serie['codserie']?>" name="codserie" class="form-control" id="inputCodigo">
    </div>

    <div class="col-md-8">
      <label for="inputSerie" class="form-label">Série</label>
      <input type="text" value="<?=$serie['nomeserie']?>"name="serie" class="form-control" id="inputSerie">
    </div>

    <div class="col-md-3">
      <label for="inputGenero" class="form-label">Gênero</label>
      <input type="text" value="<?=$serie['generoserie']?>" name="genero" class="form-control" id="inputGenero">
    </div>

    <div class="col-2">
      <label for="inputAno" class="form-label">Ano</label>
      <input type="text" value="<?=$serie['anoserie']?>" name="ano" class="form-control" id="inputAno" placeholder="2000">
    </div>
    <div class="col-md-10">
      <label for="inputCapa" class="form-label">Capa</label>
      <input type="text" value="<?=$serie['capaserie']?>" name="capa" class="form-control" id="inputCapa">
    </div>

    <div class="col-md-6">
      <label for="inputTemporada" class="form-label">Temporada</label>
      <input type="text" value="<?=$serie['temporadaserie']?>" name="temporada" class="form-control" id="inputTemporada">
    </div>

    <div class="col-md-6">
      <label for="inputEpisodio" class="form-label">Episódio</label>
      <input type="text" value="<?=$serie['episodioserie']?>" name="episodio" class="form-control" id="inputEpisodio">
    </div>


    <div class="col-md-12">
      <label for="inputUrl" class="form-label">URL</label>
      <input type="text" value="<?=$serie['urlserie']?>" name="url" class="form-control" id="inputUrl">
    </div>

    <div class="form-floating">
      <textarea class="form-control" name="sinopse" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"><?=$serie['sinopseserie']?></textarea>
      <label for="floatingTextarea2">Sinopse</label>
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Alterar</button>
    </div>

</div>

</form>


<?php
include('footer.php');
?>