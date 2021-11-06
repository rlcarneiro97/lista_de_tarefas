<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
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
        <button type="submit" class="btn btn-success">Enviar</button>
        <a href="../view/index.php" class="btn btn-primary">Voltar</a>
    </form>
    <script src="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>