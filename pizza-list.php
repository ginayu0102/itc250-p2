<?php
$total = 0;
$cost =0;
$items = [];
$tax = .09;
$info  = 'Would you like to order something?';

// form submitted 
if( !empty( $_POST['choice'] )) /*Took out && is_array( $_POST['choice'] )*/
       {
           // loop all item choices
           foreach( $_POST['choice'] as $item )
             {
               // filter item info
                $name     = trim( $item['name'] );
                $price    = $item['price']; //Took out floatval
                $quantity = $item['quantity']; //Took out intval
               
               // only add if item was checked and quantity is more than 0
                if( isset( $item['checked'] ) && $quantity > 0 )
                {
                    $items[] = $quantity .' '. $name;
                    $cost  += $price * $quantity;
                    $tax_total = $tax * $cost; //added tax total
                    $total = $cost + $tax * $cost;
                } 
            }
        }

// update info if items were selected show sales tax and total after tax added
if( count( $items ) )
    {      //bootstrap style on the output info
           $info = "<div class='alert alert-success'>".'You ordered ('.implode( ', ', $items ).') '.'<br>'
               .'Subtotal: $ '.$cost.'<br>'.'Tax: $'.$tax_total.'<br/>'.
               'Total : $ ' .$total. "</div>";
    }
    
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
               <!--start form and set checkboxes-->
                    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <h2> Pizza : All pizzas are large (16")</h2>
                     <!--appied bootstrap stying no need for separate css page-->  
                        
                    <div class="well"> 
                        <h3>Pepperoni</h3>
                        <p>Description: Best pepperoni pizza in town!</p>
                        <p>Price: $15.00</p>
                        <label><input type="checkbox" name="choice[0][checked]" > Select this item</label><br/>
                        <label>Quantity <input type="number" name="choice[0][quantity]"  min="1" max="10"></label>
                        <input type="hidden" name="choice[0][price]" value="15">
                        <input type="hidden" name="choice[0][name]" value="Pepperoni Pizza">
           
                    </div>
                   
                    <div class="well "> 
                        <h3>Sausage</h3>
                        <p>Description: Homemade sausage!</p>
                        <p>Price: $15.00</p>
                        <label><input type="checkbox" name="choice[1][checked]" > Select this item</label><br/>
                        <label>Quantity <input type="number" name="choice[1][quantity]"  min="1" max="10"></label>
                        <input type="hidden" name="choice[1][price]" value="15">
                        <input type="hidden" name="choice[1][name]" value="Sausage Pizza">
        
                    </div>
                    
                    <div class="well"> 
                        <h3>Cheese Lover</h3>
                       <p>Description: Simply cheese with fresh tomato sauce</p>
                       <p>Price: $13.00</p>
                        <label><input type="checkbox" name="choice[2][checked]" > Select this item</label><br/>
                        <label>Quantity <input type="number" name="choice[2][quantity]"  min="1" max="10"></label>
                        <input type="hidden" name="choice[2][price]" value="15">
                        <input type="hidden" name="choice[2][name]" value="Cheese Pizza">
        
                    </div>
                    
                   <div class="page-header">  <h3> Sides </h3></div>

                    <div class="well"> 
                        <h3>Caesar Salad</h3>
                            <p>Description: Signature cesar salad! Great for a lunch or for sharing.</p>
                            <p>Price: $6.00</p>
                            <label><input type="checkbox" name="choice[3][checked]" > Select this item</label><br/>
                            <label>Quantity <input type="number" name="choice[3][quantity]"  min="1" max="10"></label>
                            <input type="hidden" name="choice[3][price]" value="6" />
                            <input type="hidden" name="choice[3][name]" value="Caesar Salad" />
         
                    </div>
                    
                    <div class="well">
                        <h3> Breadsticks: Basket of (3)</h3>
                        <p>Description: freshly baked!</p>
                        <p>Price: $6.00</p>
                        <label><input type="checkbox" name="choice[4][checked]" > Select this item</label><br/>
                        <label>Quantity <input type="number" name="choice[4][quantity]"  min="1" max="10"></label>
                        <input type="hidden" name="choice[4][price]" value="6" />
                        <input type="hidden" name="choice[4][name]" value="Breadsticks" />

                    </div>          
                    
                <input type="submit" class="btn btn-info btn-md" value="Place Order">
          </form>
     
       <!--End of Form then echo order-->
       <div class="alert alert-info"><p><?= $info ?></p>
       </div>
     
    </div>
</body>
</html>


