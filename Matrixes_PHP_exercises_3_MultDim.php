<?php

$FoodMenus=array(
    "Breakfast" => array ('Milk', 'coffee', 'toast', 'oats'),
    "Lunch" => array ('spanish omelet', 'spaguetti', 'beans', 'bacon'),
    "Dinner" => array ( 'soup', 'cheese', 'fruit', 'yogurt')
  );

  foreach ($FoodMenus as $Value_1 => $Value_2 ) {
    echo "<b>$Value_1</b>";
    echo ":";
    foreach ($Value_2 as $Value_3 => $Value_4)  {
   echo "$Value_4 ";
    }
    echo"</br>";
  }

 ?>
