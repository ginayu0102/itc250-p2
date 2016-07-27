<?php
//menu.php
require_once 'item.php';
class menu {

  private $menu;

  public function __construct() {
//menu is an empty array defined with no elements 
    $this->menu = [];
//using array_push to add to array, and then to the end of the array after the first line
    array_push($this->menu, new item('Pepperoni', 'Best pepperoni pizza in town!', 15.00));
    array_push($this->menu, new item('Sausage', 'Homemade sausage!', 15.00));
    array_push($this->menu, new item('Cheese Lover', 'Simply cheese with fresh tomato sauce', 15.00));
    array_push($this->menu, new item('Caesar Salad', 'Signature caesar salad! Great for a lunch or for sharing.', 6.00));
    array_push($this->menu, new item('Breadsticks: Basket of 3', 'freshly baked!', 6.00));
  }

  public function show() {
    // Using a hidden to align the menu entries 
    foreach($this->menu as $index => $item) {
      echo  '<div class="row well">'.
              '<h3>'.$item->ItemName.'</h3>'.
              '<p>'.$item->ItemDescription.'</p>'.
              '<p>$'.number_format($item->ItemPrice,2).'</p>'.
              '<div class="form-group"><input type="hidden" class="form-control" id="name'.$index.'" name="index[]" value=" '.$index.' "></div>'.
              '<div class="form-group form-inline">
                <label for="quantity'.$index.'">Quantity</label>
                <input type="number" class="form-control" id="quantity'.$index.'" name="quantity[]" min="1" max="10">
              </div>
            </div>';
    }
  }

  public function getItem($item_index) {
    return($this->menu[$item_index]);
  }
}
?>
