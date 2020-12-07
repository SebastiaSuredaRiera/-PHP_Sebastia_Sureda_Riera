<?php
/*
1. Given the matrix below,
develop the code you need to show the city and its assigned IES each one in one different line
exemple of what is expected in the screen:
Manacor: IES Manacor
......
*/
$citiesIES=array( "Manacor"=>"IES Manacor", "Palma"=>"IES Borja Moll",
"Inca"=> "IES Pau de Cases Noves", "Porto Cristo"=>"IES Porto Cristo de la Mar",
"Calvia"=>"IES Son Ferrer");

foreach ($citiesIES as $Value_1 => $Value_2 ) {
  echo "$Value_1: $Value_2";
  echo"</br>";
}

echo "<hr>";
/*
2. Orden in alphabetical order the array of the exercise 1 using the php function
asort($array);
Show the same info than in exercise 1 but in alphabetical order
*/
asort($citiesIES);
foreach ($citiesIES as $Value_1 => $Value_2 ) {
  echo "$Value_1: $Value_2";
  echo"</br>";
}
echo "<hr>";

/*
3. Transform the exercise 1 into a matrix using the structure of Associative matrixes:
$array['stringKey']=elementvalue;
and show the same info than in exercise 1
*/
$CitiesIES['Manacor']="IES Manacor";
$CitiesIES['Palma']="IES Borja Moll";
$CitiesIES['Inca']="IES Pau de Cases Noves";
$CitiesIES['Porto Cristo']="IES Porto Cristo de la Mar";
$CitiesIES['Calvia']="IES Son Ferrer";

foreach ($CitiesIES as $Value_1 => $Value_2 ) {
  echo "$Value_1: $Value_2";
  echo"</br>";
}














 ?>
