<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include('header.php');
?>



<div class="container">

  <form action="../Controller/inserirSerie.php" method="POST" class="row g-3">

    <div class="col-md-8">
      <label for="inputSerie" class="form-label">Série</label>
      <input type="text" name="serie" class="form-control" id="inputSerie">
    </div>

    <div class="col-4">
      <label for="inputGenero" class="form-label">Gênero</label>
      <input type="text" name="genero" class="form-control" id="inputGenero" placeholder="">
    </div>

    <div class="col-md-4">
      <label for="inputAno" class="form-label">Ano</label>
      <input type="text" name="ano" class="form-control" id="inputAno" placeholder="2000">
    </div>

    <div class="col-md-4">
      <label for="inputTemporada" class="form-label">Temporada</label>
      <input type="text" name="temporada" class="form-control" id="inputTemporada">
    </div>

    <div class="col-md-4">
      <label for="inputEpisodio" class="form-label">Episódio</label>
      <input type="text" name="episodio" class="form-control" id="inputEpisodio">
    </div>

    <div class="col-12">
      <label for="inputCapa" class="form-label">Capa</label>
      <input type="text" name="capa" class="form-control" id="inputCapa">
    </div>

    <div class="col-12">
      <label for="inputUrl" class="form-label">URL</label>
      <input type="text" name="url" class="form-control" id="inputUrl">
    </div>

    <div class="form-floating">
      <textarea class="form-control" name="sinopse" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
      <label for="floatingTextarea2">Sinopse</label>
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Cadastro</button>
    </div>

</div>

</form>


<?php
include('footer.php');
?>