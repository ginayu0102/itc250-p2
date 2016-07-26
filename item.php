<?php
//item.php

class item
{
    public $ItemName = '';
    public $ItemDescription ='';
    public $ItemPrice = '15.00';
   
    function __construct($name, $description, $price)
    {
        $this->ItemName = $name;
        $this->ItemDescription = $description;
        $this->itemPrice = $price;
    }
    
  /*  function GetItem()
    {
        echo $this->PizzaName = $name."<br>".
        $this->PizzaDescription = $description."<br>".
        $this->PizzaPrice = $price;
    }*/
    
}

?>