<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include_once("header.php");
include_once("../Model/bancoSerie.php");
include_once("../Model/conexao.php");

?>

<div class="container">

    <form action="" method="POST" class="row g-3">

        <div class="col-12">
            <label class="form-label">Digite o Nome da Série:</label>
            <input type="text" required name="série" class="form-control">
        </div>

        <div class="col-12">
            <label class="form-label">Escolha o Gênero da Série:</label>
            <input type="text" required name="generoSerie" class="form-control">
        </div>
        
        <div class="col-12">
            <label class="form-label">Digite o Ano da série:</label>
            <input type="number" min="1900" max="2050" required name="anoSerie" class="form-control">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Localizar</button>
        </div>

    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Série</th>
                <th scope="col">Gênero</th>
                <th scope="col">Ano</th>
                <th scope="col">Capa</th>
                <th scope="col">Alterar</th>
                <th scope="col">Apagar</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $serie = isset($_POST["serie"]) ? $_POST["serie"] : "";
            $dado = visuNomeSerie($conexao, $serie);
            foreach ($dado as $dados) :

            ?>
                <tr>
                    <th scope="row"><?= $dados["codserie"] ?></th>
                    <td><?= $dados["nomeserie"] ?></td>
                    <td><?= $dados["generoserie"] ?></td>
                    <td><?= $dados["anoserie"] ?></td>
                    <td><img src="<?= $dados["capaserie"] ?>" width="70"></td>
                    <td>
                        <a class="btn btn-primary" href="alterarSerie.php?codigo=<?= $dados["codserie"] ?>">Alterar</a>
                    </td>
                    <td>
                        <form action="../Controller/deleteSerie.php" method="Post">
                            <input type="hidden" name="codserie" value="<?= $dados["codserie"] ?>">
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </td>
                </tr>
            <?php
            endforeach
            ?>
        </tbody>
    </table>


    <?php
    include_once("footer.php");
    ?>