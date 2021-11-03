<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas - Excluir Tarefa</title>
</head>
<body>

    <?php

    require_once "../controller/TarefaController.php";

    if(isset($_GET['id'])){
        TarefaController::getInstance()->ExcluirTarefa($_GET['id']);
        echo "<h2>Excluido com Sucesso!</h2>";
    }
    else{
        echo "<h2>Ocorreu um erro!</h2>";
    }

    ?>

    <button><a href="../view/index.php">Voltar</a></button>

</body>
</html>