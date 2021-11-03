<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas - Inserir Tarefa</title>
</head>
<body>

    <?php
        require_once "../controller/TarefaController.php";
        require_once "../controller/UsuarioController.php";
        
        $nomes_usuario = UsuarioController::getInstance()->ListarUsuario();

        if(isset($_POST['tarefa']) && isset($_POST['id_usuario'])){
            $retorno = TarefaController::getInstance()->InserirTarefa();
        }

    ?>

    <form action="" method="POST">
        <h2>Inserir Tarefa</h2>
        <input type="text" placeholder="Tarefa" name="tarefa" id="tarefa" required /><br><br>
        <label>Responsável: </label>
        <select name="id_usuario" id="id_usuario" required>     
            <?php
                foreach($nomes_usuario as $elem){
                    echo "<option value=\"".$elem['id_usuario']."\">".$elem['nome']."</option>";
                }
            ?>
        </select><br><br>
        <button type="submit">Enviar</button>
        <button><a href="../view/index.php">Voltar</a></button>
    </form>

</body>
</html>