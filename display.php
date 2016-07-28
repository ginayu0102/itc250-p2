<?php
    
//display.php
    
//Quantity is still not working
function ShowOrder()
{
    
    global $items;

    //$quantity = $_POST['quantity']; 
    $tax = .09;
        
    if(isset($_POST['selected']))
    {
        $quantity = $_POST['quantity'];
        
        echo 'You ordered:<br>';
        
        foreach($_POST['selected'] as $name => $value)
        {
         
            
            $cost += $value;
            echo $name.' $:'.$value.'<br>';       



          /*echo "<pre>";              
           var_dump($_POST['selected']);
           die;
           echo "</pre>";*/



        }//end of foreach loop
        
        $tax_total = $cost*$tax;
        $total = $cost + $tax_total;
        
        echo '<div class="alert alert-success">'.'Subtotal: $ '.$cost.'<br>'.'Tax: $'.$tax_total.'<br/>'.'Total : $ ' .$total. "</div>";

    }//End if

/* NOT WORKING
    if(isset($_POST['quantity'])) 
    {
        foreach($_POST['quantity'] as $key => $value)
        {
            
            
            echo "<pre>";              
            var_dump($key);
            die;
            echo "</pre>";
            
            
            echo $key.' '. $value;
            
        }//End of foreach
    }//End if
*/           
    
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

        <form role="form" action="index-2.php" method="post">

            <input type="submit" class="btn btn-info btn-md" value="Back to Menu">

        </form>
     
        <!--echo order-->
        <div class="alert alert-info"><p><?php echo ShowOrder(); ?></p>
       </div>
     
    </div>
</body>
</html>