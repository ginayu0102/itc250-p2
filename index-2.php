<?php

//index.php

include 'item-array.php';

//I put ShowMenu in a function just so we can call the function in html form and continue using existing stylesheet.
function ShowMenu()
{
    global $items;
    
    foreach($items as $item)
    {
         
        echo '<h3>'.$item->ItemName.'</h3>'.'<p>'. $item->ItemDescription .'</p>'.'<p>'. $item->ItemPrice .'</p>' . '<label><input type="checkbox" name="selected['.$item->ItemName.']" value="'.$item->ItemPrice.'"> Select this item</label><br/>' .'<label>Quantity<input type="number" name="quantity[]"  min="0" max="10"></label><br>' ;
        
 //var_dump($item);
    }
     
}


//there are errors in this function
function ShowOrder()
{
    
    global $items;

    //$quantity = $_POST['quantity']; 
    $tax = .09;
        
    if(isset($_POST['selected']))
    {
        $quantity = $_POST['quantity'];
        
        foreach($_POST['selected'] as $name => $value)
        {
         
            
            $cost += $value;
            $order = $name.' '.$value.'<br>';       



          /*echo "<pre>";              
           var_dump($_POST['selected']);
           die;
           echo "</pre>";*/



        }//end of foreach loop
        
        $tax_total = $cost*$tax;
        $total = $cost + $tax_total;
        
        echo '<div class="alert alert-success">'.'You ordered ('. $order .')'.'Subtotal: $ '.$cost.'<br>'.'Tax: $'.$tax_total.'<br/>'.'Total : $ ' .$total. "</div>";

    }//End if


    if(isset($_POST['quantity']) && $_POST['quantity'] >0) 
    {
        foreach($_POST['quantity'] as $key => $value)
        {
            echo $key.' '. $value;
        }//End of foreach
    }//End if
            
    
}//End of ShowOrder()
    

?>


<!DOCTYPE html>
<html>
<head>
    <title>Pizza Truck Order Form</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
<body>
  <div class="container">
  <div class="page-header">     
   <h1>Curbside Pizza</h1>
      </div>          
        <!--form starts here-->
        <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <h2> Pizza : All pizzas are large (16")</h2>
                     <!--appied bootstrap stying no need for separate css page-->  
                        
                    <div class="well">
                        
                        <?php echo ShowMenu(); ?>
                        
                    </div>
                    
                <input type="submit" class="btn btn-info btn-md" value="Place Order">
          </form>
      
        <div class="alert alert-info"><p><?php echo ShowOrder(); ?></p>
       </div>
     
    </div>
</body>
</html>
