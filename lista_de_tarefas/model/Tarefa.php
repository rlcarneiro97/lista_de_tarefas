<?php

class Tarefa{

    // singleton
    private static $instance;

    public static function getInstance($tarefa, $id_usuario)
    {
        if(!isset(self::$instance))
        {
            self::$instance = new Tarefa($tarefa, $id_usuario);
        }

        return self::$instance;
    }

    private $tarefa;
    private $id_usuario;

    function __construct($tarefa, $id_usuario){
        $this->tarefa = $tarefa;
        $this->id_usuario = $id_usuario;
    }

    /**
     * Get the value of tarefa
     */ 
    public function getTarefa()
    {
        return $this->tarefa;
    }

    /**
     * Set the value of tarefa
     *
     * @return  self
     */ 
    public function setTarefa($tarefa)
    {
        $this->tarefa = $tarefa;

        return $this;
    }

    /**
     * Get the value of id_usuario
     */ 
    public function getId_usuario()
    {
        return $this->id_usuario;
    }

    /**
     * Set the value of id_usuario
     *
     * @return  self
     */ 
    public function setId_usuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;

        return $this;
    }
    
}

?>