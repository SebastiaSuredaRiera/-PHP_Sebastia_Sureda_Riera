<?php
$euros=$pounds=0;
$exchange=0.89;

if ($_GET)
      $euros=$_GET['euros'];

if ($_GET)
      $pounds=$_GET['pounds'];

#----------------------------------FUNCTION----------------------------------#
function multiplicacio($euros, $exchange)
{
    return ($euros * $exchange);
}

 ?>

 <HTML>
 <head>
     <meta charset="UTF-8">
     <title>Advance Form</title>
 </head>
 <body>
     <H2>Currency Converter</H2>
   <FORM ACTION="<?php echo $_SERVER["PHP_SELF"];?>" METHOD="GET">
     <p>EUROS: <input type="number" name="euros" value="<?php echo $euros;?>" /></p>
     <p>EXCHANGE RATE: <input type="tel" name="exchange" value="<?php echo $exchange;?>" /></p>
     <p>POUNDS: <input type="number" name="pounds"  value="<?php echo multiplicacio($euros, $exchange);?>"/></p>
       <INPUT TYPE="submit" VALUE="Enviar">
     </FORM>
   </body>
   </HTML>
   <?php
