<?php
/* visusi corrections - KO   - A aquest exercici encara no haviem vist vectors / matrius associatives, les que empren una clau de cadena com a index de l'array
-  sustiruir la clau de cadena per la posicio*/
/*1.Vector:hora de la finestra del dia*/
  $M_days[0]="Mati"; //visusi - exemple - $M_days[0]="Mati";
  $M_days[1]="Migdia";
  $M_days[2]="Tarda";
  $M_days[3]="Vespre";
  $M_days[4]="Nit";

echo "1.Vector:hora de la finestra del dia";
echo "<br>";
echo "Nombre d'elements:";
echo  sizeof($M_days); // visusi OK
echo "<br>";

    foreach ($M_days as $M_day)
    {
      echo "$M_day <br>";
    }

/*2.Vector:Contingut plat dels restaurants*/
    $Plats[0]="Vadella amb salsa de bolets"; //visusi - exemple - $M_days[0]="Mati";
    $Plats[1]="Espagueti carbonats";
    $Plats[2]="Truita española";

      echo "<br>";
      echo "2.Vector:Contingut plat dels restaurants";
      echo "<br>";
      echo "Nombre d'elements:";
      echo  sizeof($Plats);
      echo "<br>";

      foreach ($Plats as $Plat)
      {
        echo "$Plat <br>";
      }

/*3.Vector:Alarma*/
   $Alarma=array(8,12,12,16,20); //visusi - no cal que siguen string, millor si son numeros. Exemple: array(8,12 .......

   echo "</br>";
   echo "3.Vector:Alarma";
   echo "</br>";

      foreach ($Alarma as $value_2){
      echo "$value_2</br>";
          }
          echo "Nombre d'elements:";
          echo  sizeof($Alarma);
          echo "<br>";

  /*4.Vector:LLista de components*/
      $Components=array("PC","Ratolí","Teclat","I3 core","8 GB de RAM","1 TB"); //visusi - OK

        echo "</br>";
        echo "4.Vector: LLista de components";
        echo "</br>";

          foreach ($Components as $value_2){
              echo "$value_2</br>";
                  }

                    echo "Nombre d'elements:";
                    echo  sizeof($Components);
?>
