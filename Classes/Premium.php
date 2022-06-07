<?php 
require_once __DIR__.'/User.php';
require_once __DIR__.'/Credit_Card.php';


class Premium extends User {
    protected $prodottiscontati=[];

    function __construct($_nome, $_cognome, $_email, $_prodottiscontati=[])
    {
        parent::__construct($_nome, $_cognome, $_email);
        $this->prodottiscontati = $_prodottiscontati;
    }

    function getProdottiScontati(){
        return $this->prodottiscontati;
    }
    
    function setProdottiScontati($prodotto) {
        $prodotto->setPrice($prodotto->getPrice()*0.2);
        array_push($this->prodottiscontati, $prodotto);
    }

    function setCreditCard($_credit_card)
    {
        $date = getdate()['year'];
        
        if($_credit_card->getExpirationYear() > $date){
            echo 'carta valida';
            $this->credit_card = $_credit_card; 
        }else{
            echo 'carta non valida';
        }
       var_dump($date);
    }
}