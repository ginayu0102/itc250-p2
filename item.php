<?php
//item.php


class item
{
    public $ItemName = '';
    public $ItemDescription ='';
    public $ItemPrice = '15.00';
   
    function __construct($ItemName, $ItemDescription, $ItemPrice)
    {
        $this->ItemName = $ItemName;
        $this->ItemDescription = $ItemDescription;
        $this->ItemPrice = $ItemPrice;
    }
    
}
?>


