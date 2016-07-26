<?php
//index.php
include 'item-array.php';



    
      
    foreach($items as $item)
    {
         
        echo '<h3>'.$item->ItemName.'</h3>'.'<p>'. $item->ItemDescription .'</p>'.'<p>'. $item->ItemPrice .'</p>' . '<label><input type="checkbox" name="selected" > Select items</label><br/>' . '<label>Quantity<input type="number" name="quantity"  min="1" max="10"></label><br>' ;
        
          echo '<input type="submit" value="Submit">';
    }
     

//echo ShowMenu();
function ShowOrder()
{
    
  
    
    if (isset( $_POST['selected']) &&( $_POST['quantity']> 0 )) 
       {
            $quantity = $_POST['quantity']; 
            $tax = .09;
        
           foreach( $items as $item )
             {
               
               $displayItem = $quantity .' '. $item->ItemName;
               $cost  += $item->ItemPrice * $quantity;
               $tax_total = $tax * $cost;
               $total = $cost + $tax * $cost;
                
            }
        }
    
}
?>
