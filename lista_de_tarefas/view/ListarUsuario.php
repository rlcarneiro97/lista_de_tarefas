<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas - Usuários</title>
</head>
<body>
    <h2>Lista de Usuários</h2>

    <button><a href="../view/InserirUsuario.php">Novo Usuário</a></button><br><br>

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
                        <td><button><a href='../view/AlterarUsuario.php?id=$id'>Alterar</a></button></td>
                        <td><button><a href='../view/ExcluirUsuario.php?id=$id'>Excluir</a></button></td>
                    </tr>";

            }

        echo "</table>";

        }else{
            echo "Erro na Lista de Tarefas!";
        }

    ?>
    <br>
    <button><a href="../view/index.php">Voltar</a></button>

</body>
</html>