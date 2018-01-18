<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Año independencia</title>
  </head>
  <body>

<!--Hacemos el menu -->
  <a href="paisessuperficie.php">Paises por superficie</a>
  <a href="paiscontinente.php">Paises por continente</a>

    <h1>Año independencia</h1>
    <?php
//Realizamos conexion a la BD
    $conector = new mysqli("localhost", "root", "", "world");
    if ($conector->connect_errno) {
        echo "Fallo al conectar a MySQL: " .
         $conector->connect_error;
    }



  //Hacemos una consulta
  	$consulta = $conector->query("SELECT Name,IndepYear FROM country");
    
  	//Cuantas filas nos devuelve
  	echo "El numero de paises son: ".$consulta->num_rows."<br>";
    echo "<br>";

  //Recorremos la base de datos para luego mostrar datos
  	while($fila=$consulta->fetch_assoc()){

    	  echo "El pais ".$fila['Name']."<br>";
         echo "Su año de independizacion es: ".$fila['IndepYear'];
         echo "<br>";

         //Si el campo en NULL hacemos un if para mostrarlo
         if ($fila['IndepYear']==NULL) {
           echo "<b> No se ha independizado </b>";
           echo "<br>";
         }
         echo "<br>";
  	}


     ?>


  </body>
</html>
