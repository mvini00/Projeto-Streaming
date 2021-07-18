<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Acesso ao sistema de Streaming</title>
</head>

<body>
    <div class="container">

        <form id="formlogin" action="../Controller/logarMain.php" method="POST">
            <?php
            session_start();
            $msg = isset($_SESSION["msg"]) ? $_SESSION["msg"] : "";
            echo ($msg);
            ?>
            <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Senha</label>
                <div class="col-sm-10">
                    <input type="password" name="senha" class="form-control" id="inputPassword">
                </div>
            </div>
            <!-- melhorar -->
            <button type="submit" class="btn btn-primary">Logar</button>
            <a class="btn btn-danger" href="formEsqueciSenha.php">Esqueci a senha</a>
        </form>

    </div>
</body>


</html>