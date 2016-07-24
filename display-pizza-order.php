<?php
    
//order-display.php
    
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

        <form role="form" action="pizza-menu.php" method="post">

            <input type="submit" class="btn btn-info btn-md" value="Back to Menu">

        </form>
     
        <!--echo order-->
        <div class="alert alert-info"><p><?= $info ?></p>
       </div>
     
    </div>
</body>
</html>
