<?php
$nom="Sebastià Sureda Riera";

function fullnamesplit($nom) {
  return (explode(" ",$nom));
}
$solucio=fullnamesplit($nom);
foreach ($solucio as $Value_1) {
    echo "$Value_1 </br> ";
  }

$pwd="12345678";
  function password($pwd) {
    return password_hash($pwd, PASSWORD_DEFAULT);
  }

    $sol=password($pwd); {
        echo "$sol </br> ";
}




 ?>
