<?php
//order.php
require_once 'item.php';
require_once 'menu.php';

class order {

  private $order;
  private $menu;

  public function __construct() {
    $this->order = [];
    // If our Post Array has data, process it

    if(isset($_POST) && !empty($_POST['index']) && !empty($_POST['quantity'])) {

      $this->menu = new menu();

      $index = $_POST['index'];
      $quantity = $_POST['quantity'];

      foreach($index as $item) {
        if(!empty($quantity[$item])) { array_push($this->order, [$item, $quantity[$item]]); }
      }
    }
  }

  public function show() {
    $cost = 0.00;
    $tax_total = 0.00;
    $total = 0.00;
    echo '<div class="well">';
    echo '<p>You Ordered:</p><p>';

    // List each item in order
    foreach($this->order as $item) {
      $menu_entry = $this->menu->getItem($item[0]);
      //var_dump($menu_entry);
      echo $item[1].'x '.$menu_entry->ItemName.'<BR>';
      // $item[1] is quantity
      $cost += $menu_entry->ItemPrice * $item[1];
    }

    // Summary
    echo '</p><p>';
    echo 'Subtotal: $'.number_format($cost,2).'<BR>';
    echo 'Tax: $'.number_format($cost * TAX,2).'<BR>';
    echo 'Total: $'.number_format($cost + ($cost * TAX),2);
    echo '</p></div>';
  }
}

?>
