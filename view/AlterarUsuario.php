<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Lista de Tarefas - Alterar Usuário</title>
</head>
<body>

    <?php
        require_once "../controller/UsuarioController.php";

        $nome_usuario = UsuarioController::getInstance()->BuscarUsuario($_GET['id']);

        if(isset($_POST['nome'])){
            $retorno = UsuarioController::getInstance()->AlterarUsuario();
        }

    ?>

    <form action="" method="POST">
        <h2>Alterar Usuário</h2>
        <input type="text" 
        value="<?php 
                    foreach($nome_usuario as $elem){ 
                        if($_GET['id'] == $elem['id_usuario']){
                            echo (string) $elem['nome'];
                        }
                    }  
                ?>"
        placeholder="Nome" name="nome" id="nome" required /><br><br>
        <button type="submit" class="btn btn-success">Enviar</button>
        <a href="../view/ListarUsuario.php" class="btn btn-primary">Voltar</a>
    </form>
    <script src="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>