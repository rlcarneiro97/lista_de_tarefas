<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas - Excluir Usuário</title>
</head>
<body>

    <?php

        require_once "../controller/UsuarioController.php";

        if(isset($_GET['id'])){
            UsuarioController::getInstance()->ExcluirUsuario($_GET['id']);
            echo "<h2>Excluido com Sucesso!</h2>";
        }
        else{
            echo "<h2>Ocorreu um erro!</h2>";
        }

    ?>

    <a href="../view/index.php" class="btn btn-outline-primary">Voltar</a>
    <script src="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>