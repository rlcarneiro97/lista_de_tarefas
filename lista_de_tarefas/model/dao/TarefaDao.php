<?php

require_once "../model/dao/Conexao.php";

class TarefaDao{

    // singleton
    private static $instance;

    public static function getInstance()
    {
        if(!isset(self::$instance))
        {
            self::$instance = new TarefaDao();
        }

        return self::$instance;
    }

    public function BuscarTarefaDAO($id){

        $conexaoDB = Conexao::getInstance();
        $sql = "SELECT t.tarefa FROM tarefa t WHERE id_tarefa = ".$id;
        $infos = $conexaoDB->query($sql);
        $conexaoDB = null;

        return $infos;

    }

    public function ListarTarefaDAO(){

        $conexaoDB = Conexao::getInstance();
        $sql = "SELECT t.id_tarefa, u.nome, t.tarefa FROM tarefa AS t INNER JOIN usuario AS u ON t.id_usuario = u.id_usuario ORDER BY u.nome";
        $listaTarefas = $conexaoDB->query($sql);
        $conexaoDB = null;

        return $listaTarefas;

    }

    public function InserirTarefaDAO(Tarefa $tarefa){

        $conexaoDB = Conexao::getInstance();
        
        $sql = "INSERT INTO tarefa (tarefa, id_usuario) VALUES (?, ?)";
        $query = $conexaoDB->prepare($sql);
        $query->bindValue(1, $tarefa->getTarefa());
        $query->bindValue(2, $tarefa->getId_usuario());
        $query->execute();

        $conexaoDB = null;

    }

    public function AlterarTarefaDAO(Tarefa $tarefa, $id){

        $conexaoDB = Conexao::getInstance();

        $sql = "UPDATE tarefa t SET t.tarefa = ?, t.id_usuario = ? WHERE id_tarefa = ?";
        $query = $conexaoDB->prepare($sql);
        $query->bindValue(1, $tarefa->getTarefa());
        $query->bindValue(2, $tarefa->getId_usuario());
        $query->bindValue(3, $id);
        $query->execute();

        $conexaoDB = null;

    }
    
    public function ExcluirTarefaDAO($id){
        
        $conexaoDB = Conexao::getInstance();

        $sql = "DELETE FROM tarefa WHERE id_tarefa = ?";
        $query = $conexaoDB->prepare($sql);
        $query->bindValue(1, $id);
        $query->execute();

        $conexaoDB = null;

    }
}

?>