<?php

function  emailvalidation($email){
  return filter_var($email,FILTER_VALIDATE_EMAIL);
}

$email = "Basti@gmail.com";

 if (emailvalidation($email) == True){
   echo "El correu de $email es valid";}
 else {
  echo "El correu de $email es INvalid";
 }

// if (!emailvalidation($email))
// echo "El correu de $email es invalid";

echo "</br>";
echo "</br>";

function passwordvalidation($Val_1,$Val_2){
if  (strcmp($Val_1,$Val_2) == 0)
  return false;
return True;
}

echo passwordvalidation("123","123");













 ?>
