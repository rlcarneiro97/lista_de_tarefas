<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas - Inserir Usuário</title>
</head>
<body>

    <?php
        require_once "../controller/UsuarioController.php";

        if(isset($_POST['nome'])){
            $retorno = UsuarioController::getInstance()->InserirUsuario();
        }

    ?>

    <form action="" method="POST">
        <h2>Inserir Usuário</h2>
        <input type="text" placeholder="Nome" name="nome" id="nome" required /><br><br>
        <button type="submit">Enviar</button>
        <button><a href="../view/ListarUsuario.php">Voltar</a></button>
    </form>

</body>
</html>