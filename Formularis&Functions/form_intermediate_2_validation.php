<?php
$nom="Sebastià Sureda Riera";
function fullnamesplit($nom) {
  return (explode(" ",$nom));
}
$solucio=fullnamesplit($nom);
foreach ($solucio as $Value_1) {
    echo "$Value_1 </br> ";
  }
 ?>
