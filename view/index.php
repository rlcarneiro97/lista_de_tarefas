<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Lista de Tarefas</title>
</head>
<body>

    <h2>Lista de Tarefas</h2>
    <a href="../view/InserirTarefa.php" class="btn btn-success">Nova Tarefa</a>
    <a href="../view/ListarUsuario.php" class="btn btn-outline-primary">Usuários</a><br><br>

    <?php

        require_once "../controller/TarefaController.php";
        $listaTarefa = TarefaController::getInstance()->ListarTarefa();

        if($listaTarefa){

            echo "
            <table border='1'>
                <tr>
                    <td>Id</td>
                    <td>Responsável</td>
                    <td>Tarefa</td>
                    
                </tr>
            ";

            foreach($listaTarefa as $elem){

                //variavel necessaria para passar o id pelo metodo GET
                $id = $elem['id_tarefa'];

                echo "
                    <tr>
                        <td>" . $elem['id_tarefa'] . "</td>
                        <td>" . $elem['nome'] . "</td>
                        <td>" . $elem['tarefa'] . "</td>
                        <td><a href='../view/AlterarTarefa.php?id=$id' class=\"btn btn-warning\">Alterar</a></td>
                        <td><a href='../view/ExcluirTarefa.php?id=$id' class=\"btn btn-danger\">Excluir</a></td>
                    </tr>";

            }

        echo "</table>";

        }else{
            echo "Erro na Lista de Tarefas!";
        }

    ?>
    <script src="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>