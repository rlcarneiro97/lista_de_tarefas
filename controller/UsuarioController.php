<?php

require_once "../model/Usuario.php";
require_once "../model/dao/UsuarioDao.php";

class UsuarioController{

    // singleton
    private static $instance;

    public static function getInstance()
    {
        if(!isset(self::$instance))
        {
            self::$instance = new UsuarioController();
        }

        return self::$instance;
    }

    public function BuscarUsuario(){
        $buscarUsuario = UsuarioDao::getInstance()->ListarUsuarioDAO();
        return $buscarUsuario;
    }

    public function ListarUsuario(){
        $listaUsuario = UsuarioDao::getInstance()->ListarUsuarioDAO();
        return $listaUsuario;
    }

    public function InserirUsuario(){

        $nome = $_POST['nome'];

        $usuario = Usuario::getInstance($nome);
        UsuarioDao::getInstance()->InserirUsuarioDAO($usuario);
        header('Location: ../view/ListarUsuario.php');

    }


    public function AlterarUsuario(){

        $usuario = $_POST['nome'];
        $id_usuario = $_GET['id'];

        $usuario = Usuario::getInstance($usuario);
        usuarioDao::getInstance()->AlterarUsuarioDAO($usuario, $id_usuario);
        header('Location: ../view/ListarUsuario.php');

    }

    public function ExcluirUsuario(){

        $id = $_GET['id'];

        UsuarioDao::getInstance()->ExcluirUsuarioDAO($id);
        header('Location: ../view/ListarUsuario.php');

    }

}

?>