<?php

//index.php

include 'item-array.php';

//display menu
function ShowMenu()
{
    global $items;
    
    foreach($items as $item)
    {
         
        echo '<h3>'.$item->ItemName.'</h3>'.'<p>'.'Description: '. $item->ItemDescription .'</p>'.'<p>'.'Price: $'. $item->ItemPrice .'</p>' . '<label><input type="checkbox" name="selected['.$item->ItemName.']" value="'.$item->ItemPrice.'"> Select this item</label><br/>' /*.'<label>Quantity<input type="number" name="quantity[]"  min="0" max="10"></label><br>'*/ ;
        
 //var_dump($item);
    }//End of foreach
     
}//end of ShowMenu()



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
        <form role="form" action="display.php" method="post">
                        <h2> Pizza : All pizzas are large (16")</h2>
                     <!--appied bootstrap stying no need for separate css page-->  
                        
                    <div class="well">
                        
                        <?php echo ShowMenu(); ?>
                        
                    </div>
                    
                <input type="submit" class="btn btn-info btn-md" value="Place Order">
          </form>
      
        <!--<div class="alert alert-info"><p><?php echo ShowOrder(); ?></p>
       </div>-->
     
    </div>
</body>
</html>