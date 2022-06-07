<?php

class User {
    protected $nome;
    protected $cognome;
    protected $email;

    function __construct($_nome, $_cognome, $_email)
    {
        $this->nome = $_nome;
        $this->cognome= $_cognome;
        $this->email = $_email;
    }
    
    function getNome(){
        return $this->nome;
    }
    function getCognome(){
        return $this->cognome;
    }
    function getEmail(){
        return $this->email;
    }
/////////////////////////////////////////////
    function setNome($_nome)
    {
        $this->nome = $_nome;
    }
    function setCognome($_cognome)
    {
       $this->cognome = $_cognome;
    }
    function setEmail($_email)
    {
        if(!strpos($_email, '@') || !strpos($_email, '.')) {
            throw new Exception('E mail non valida!');
        }
        $this->email = $_email;
    }
}
?>