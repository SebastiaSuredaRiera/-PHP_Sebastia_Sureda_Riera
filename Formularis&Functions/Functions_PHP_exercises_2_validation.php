<?php
//visusi corrections - KO
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
if  (strcmp($Val_1,$Val_2) == 0)//visusi corrections - quan strcmp retorna 0 es que  les cadenes string comparades  son iguals
  return false; // visusi - Ha de ser True - Corregir
return True;// visusi - Ha de ser False- Corregir
}

echo passwordvalidation("123","123"); //visusi corrections - Com la funcio retorna True o False no se mostra cap missatge. 
                                                              //canviar per a que se mostre un missatge. de "paswords iguals" quan la funció retorne True i "No son iguals" en cas contrari 













 ?>
