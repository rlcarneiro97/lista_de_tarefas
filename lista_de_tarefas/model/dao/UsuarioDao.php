<?php

require_once "../model/dao/Conexao.php";

class UsuarioDao{

    // singleton
    private static $instance;

    public static function getInstance()
    {
        if(!isset(self::$instance))
        {
            self::$instance = new UsuarioDao();
        }

        return self::$instance;
    }

    public function BuscarUsuarioDAO($id){

        $conexaoDB = Conexao::getInstance();
        $sql = "SELECT u.nome FROM usuario u WHERE id_usuario = ".$id;
        $infos = $conexaoDB->query($sql);
        $conexaoDB = null;

        return $infos;

    }

    public function ListarUsuarioDAO(){

        $conexaoDB = Conexao::getInstance();
        $sql = "SELECT * FROM usuario";
        $listaUsuario = $conexaoDB->query($sql);
        $conexaoDB = null;

        return $listaUsuario;

    }

    public function InserirUsuarioDAO(Usuario $usuario){

        $conexaoDB = Conexao::getInstance();
        
        $sql = "INSERT INTO usuario (nome) VALUES (?)";
        $query = $conexaoDB->prepare($sql);
        $query->bindValue(1, $usuario->getNome());
        $query->execute();

        $conexaoDB = null;

    }

    public function AlterarUsuarioDAO(Usuario $usuario, $id){

        $conexaoDB = Conexao::getInstance();

        $sql = "UPDATE usuario u SET u.nome = ? WHERE id_usuario = ?";
        $query = $conexaoDB->prepare($sql);
        $query->bindValue(1, $usuario->getNome());
        $query->bindValue(2, $id);
        $query->execute();

        $conexaoDB = null;

    }
    
    public function ExcluirUsuarioDAO($id){
        
        $conexaoDB = Conexao::getInstance();

        $sql = "DELETE FROM usuario WHERE id_usuario = ?";
        $query = $conexaoDB->prepare($sql);
        $query->bindValue(1, $id);
        $query->execute();

        $conexaoDB = null;

    }

}

?>