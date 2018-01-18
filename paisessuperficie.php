<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Superficie de Paises</title>
  </head>
  <body>

    <!--Hacemos el menu -->
    <a href="anoindependencia.php">Año independencia</a>
   <a href="paiscontinente.php">Paises por continente</a>


    <h1>Superficie de Paises</h1>
    <?php
//Realizamos conexion a la BD
    $conector = new mysqli("localhost", "root", "", "world");
    if ($conector->connect_errno) {
        echo "Fallo al conectar a MySQL: " .
         $conector->connect_error;
    }



  //Hacemos una consulta

  	$consulta = $conector->query("SELECT Name,SurfaceArea FROM country ORDER BY SurfaceArea DESC");
    
  	//Cuantas filas nos devuelve
  	echo "El numero de paises son: ".$consulta->num_rows."<br>";
    echo "<br>";

      //Recorremos la base de datos para luego mostrar datos
  	while($fila=$consulta->fetch_assoc()){
    	  echo "El pais ".$fila['Name']."<br>";
         echo "Su area es ".$fila['SurfaceArea']."<br>";
         echo "<br>";
  	}


     ?>


  </body>
</html>
