<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
</head>
<body>

    <h2>Lista de Tarefas</h2>
    <button><a href="../view/InserirTarefa.php">Nova Tarefa</a></button>
    <button><a href="../view/ListarUsuario.php">Usuários</a></button><br><br>

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
                        <td><button><a href='../view/AlterarTarefa.php?id=$id'>Alterar</a></button></td>
                        <td><button><a href='../view/ExcluirTarefa.php?id=$id'>Excluir</a></button></td>
                    </tr>";

            }

        echo "</table>";

        }else{
            echo "Erro na Lista de Tarefas!";
        }

    ?>
</body>
</html>