<?php 
require_once __DIR__.'/User.php';


class Premium extends User {
    protected $_prodottiscontati;

    function __construct($_nome, $_cognome, $_email, $_prodottiscontati=[])
    {
        parent::__construct($_nome, $_cognome, $_email);
        $this->prodottiscontati = $_prodottiscontati;
    }

    function getProdottiScontati(){
        return $this->prodottiscontati;
    }
    
    function setProdottiScontati($_prodottiscontati) {
        $this->prodottiscontati[] = $_prodottiscontati;
    }  
}