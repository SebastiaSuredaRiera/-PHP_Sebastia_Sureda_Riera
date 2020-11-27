<?php
//visusi corrections - OK
$genero = "$_GET[genero]";
$Termes = "$_GET[Termes]";
$PWD = "$_GET[PWD]";
$Aniversari = "$_GET[Aniversari]";
$Comentari = "$_GET[Comentari]";
$Cicles = "$_GET[Cicles]";
?>
<HTML>

<head>

    <title>Un exemple amb un formulari</title>

</head>

<body>
    <!--   <form action="SeleccioMultiple.php" method="POST">-->
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET">
      <p><b>elegeix el teu gènere</b></p>
      <input type="radio" name="genero" value="Dona">
      <label for="Dona">Dona</label><br>
      <input type="radio" name="genero" value="Home">
      <label for="Home">Home</label><br>
      <input type="radio" name="genero" value="Altres">
      <label for="Altres">Altres</label>
    </br>
    <p><b>Acceptes tots els termes?</b></p>
    <input type="checkbox" name="Termes" value="agreed"></br>

      <label for="PWD"><b>contrasenya del teu moodle:</b></label>
      <input type="password"  name="PWD" minlength="6" maxlength="15"><br></br>

      <label for="birthday"><b>fecha del teu aniversari:</br></label></br>
      <input type="date" name="Aniversari"></br>

      <p><br>Aportacion a la millora de la funcionalitat del centre:</br></p>
      <textarea name="Comentari" rows="5" cols="50"></textarea></br></br>

      <p><b>Selecciona el teu cicle formatiu:</br><p>
      <select name="Cicles">
          <option value="ASIX">ASIX</option>
          <option value="DAU">DAU</option>
      </select></br>

    </br><input type="submit"></br>
    </form>

</body>
</HTML>
<?php
echo "</br> el teu genere es: $genero</br>";
echo "</br>estas $Termes amb els termes</br>";
echo "</br> la teva contrasenya es: $PWD</br>";
echo "</br> la teva fecha d'aniversari es: $Aniversari </br>";
echo "</br> els aspectes a millor del centre desde el teu puntd e vista son: $Comentari </br>";
echo "</br> has seleccionat $Cicles com el teu cicle formatiu </br>";
?>
