<?php

require_once "../model/Tarefa.php";
require_once "../model/dao/TarefaDao.php";

class TarefaController{

    // singleton
    private static $instance;

    public static function getInstance()
    {
        if(!isset(self::$instance))
        {
            self::$instance = new TarefaController();
        }

        return self::$instance;
    }

    public function BuscarTarefa($id){

        $infos = TarefaDao::getInstance()->BuscarTarefaDAO($id);
        return $infos;

    }

    public function ListarTarefa(){
        $listaTarefa = TarefaDao::getInstance()->ListarTarefaDAO();
        return $listaTarefa;
    }

    public function InserirTarefa(){

        $tarefa = $_POST['tarefa'];
        $id_usuario = $_POST['id_usuario'];

        $tarefa = Tarefa::getInstance($tarefa, $id_usuario);
        TarefaDao::getInstance()->InserirTarefaDAO($tarefa);
        header('Location: ../view/index.php');

    }

    public function AlterarTarefa(){

        $tarefa = $_POST['tarefa'];
        $id_usuario = $_POST['id_usuario'];
        $id = $_GET['id'];

        $tarefa = Tarefa::getInstance($tarefa, $id_usuario);
        TarefaDao::getInstance()->AlterarTarefaDAO($tarefa, $id);
        header('Location: ../view/index.php');

    }

    public function ExcluirTarefa(){

        $id = $_GET['id'];

        TarefaDao::getInstance()->ExcluirTarefaDAO($id);
        header('Location: ../view/index.php');

    }

}

?>