<?php 

//pizza-list.php

$pepperoni = 'Pepperoni';
$sausage = 'Sausage';
$cheese = 'Cheese';
$salad = 'Salad';
$breadstick = 'Breadstick';
$sides_price = 6;
$p_price = 15;
$s_price = 15;
$c_price = 13;
/*
*not used yet
$p_qty = $_POST['p_qty'];
$s_qty = $_POST['s_qty'];
$c_qty = $_POST['c_qty'];
$salad_qty = $_POST['salad_qty'];
$bs_qty = $_POST['bs_qty'];
*/

function ShowOrder() //quantity need to be added
{
    if(isset($_POST['check1']))
    {
        echo $pepperoni . $p_price ;
    }else if(isset($_POST['check2']))
    {
        echo $sausage . $s_price ;
    }else if(isset($_POST['check3']))
    {
        echo $cheese . $c_price ;
    }else if(isset($_POST['check4']))
    {
        echo $salad  . $sides_price ;
    }else if(isset($_POST['check5']))
    {
        echo $breadstick . $sides_price ;
    }else{
        echo 'No items was selected!';
    }

}
?>


<html>
    <head>
      <title>Food Truck</title>
    </head>
    
    <body>
         <h1>Pizza Pizza Pizza!</h1>
         
        <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          
                  <h3> Pizza </h3>
                
                    <label><input type="checkbox" name="check1" >Pepperoni</label>
                      <p>Description: Best pepperoni pizza in town!</p>
                      <p>Price: $15.00</p><br/>
                      
                    <label><input type="checkbox" name="check2" >Sausage</label>
                      <p>Description: Homemade sausage!</p>
                      <p>Price: $15.00</p><br/>
                      
                    <label><input type="checkbox" name="check3" >Cheese</label>
                      <p>Description: Simply cheese with fresh tomato sauce</p>
                      <p>Price: $13.00</p><br/>
                                                        
              

                <h3> Sides </h3>
                 
                    <label><input type="checkbox" name="check4" >Cesar Salad</label>
                      <p>Description: Signature cesar salad!</p>
                      <p>Price: $6.00</p><br/>
                    <label><input type="checkbox" name="check5" >Breadstick</label>
                      <p>Description: freshly baked!</p>
                      <p>Price: $6.00</p><br/>


                
                    <button type="submit" name="button" value="View Order">View Order</button> <!--not sure if this should be button tag or input tag-->
     
              
            
            <?php if(isset($_POST['button'])) { 
                echo ShowOrder();
    
                } ?>
            
        </form>
    
    </body>
</html>


