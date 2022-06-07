<?php 

class Credit_Card {
    protected $number;
    protected $name;
    protected $surname;
    protected $month_expiration_date;
    protected $day_expiration_date;

    function __construct($_number, $_name, $_surname, $_month_expiration_date, $_year_expiration_date)
    {
        $this->number = $_number;
        $this->name = $_name;
        $this->surname = $_surname;
        $this->month_expiration_date = $_month_expiration_date;
        $this->year_expiration_date = $_year_expiration_date;
    }
    
    function getNumber(){
        return $this->number;
    }
    
    function getName()
    {
        return $this->name;
    }

    function getAnimal()
    {
        return $this->animal;
    }
    function getPrice()
    {
        return $this->price;
    }
    /////////////////////////////////////////
    function setName($_name)
    {
        $this->name = $_name;
    }
    function getExpirationMonth(){
        return $this->month_expiration_date;
    }
    function getExpirationYear()
    {
        return $this->year_expiration_date;
    }

    function setExpirationDate($_month_expiration_date)
    {
       $this->month_expiration_date = $_month_expiration_date;
    }
        
        
    
}