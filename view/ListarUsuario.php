<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Lista de Tarefas - Usuários</title>
</head>
<body>
    <h2>Lista de Usuários</h2>

    <a href="../view/InserirUsuario.php" class="btn btn-success">Novo Usuário</a><br><br>

    <?php

        require_once "../controller/UsuarioController.php";
        $listaUsuario = UsuarioController::getInstance()->ListarUsuario();

        if($listaUsuario){

            echo "
            <table border='1'>
                <tr>
                    <td>Id</td>
                    <td>Usuário</td> 
                </tr>
            ";

            foreach($listaUsuario as $elem){

                //variavel necessaria para passar o id pelo metodo GET
                $id = $elem['id_usuario'];

                echo "
                    <tr>
                        <td>" . $elem['id_usuario'] . "</td>
                        <td>" . $elem['nome'] . "</td>
                        <td><a href='../view/AlterarUsuario.php?id=$id' class=\"btn btn-warning\">Alterar</a></td>
                        <td><a href='../view/ExcluirUsuario.php?id=$id' class=\"btn btn-danger\">Excluir</a></td>
                    </tr>";

            }

        echo "</table>";

        }else{
            echo "Erro na Lista de Tarefas!";
        }

    ?>
    <br>
    <a href="../view/index.php" class="btn btn-outline-primary">Voltar</a>
    <script src="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>