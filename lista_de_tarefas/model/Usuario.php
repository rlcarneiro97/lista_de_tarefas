<?php

class Usuario{

    // singleton
    private static $instance;

    public static function getInstance($nome)
    {
        if(!isset(self::$instance))
        {
            self::$instance = new Usuario($nome);
        }

        return self::$instance;
    }

    private $nome;

    function __construct($nome){
        $this->nome = $nome;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

}

?>