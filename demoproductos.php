<?php

// Conectando, seleccionando la base de datos
$link = mysql_connect('localhost', 'root', 'metalrearden')
   or die('No se pudo conectar: ' . mysql_error());
//echo 'Connected successfully';
mysql_select_db('tiendota') or die('No se pudo seleccionar la base de datos');

/*ejecutamos la consulta, que solicita nombre, precio y existencia de la
tabla productos */
$sql = "select nombre, precio, tamano FROM productos";
$result = mysql_query ($sql);
// verificamos que no haya error 
//if (! $result){
//   echo "La consulta SQL contiene errores.".mysql_error();
//   exit();
//}else {
// Imprimir los resultados en HTML
	$numimg=0;
  while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
      $numimg++;
      echo "<div class=\"productohome\">";
      echo "<figure><a href=\"#\"><img src=\"demoimg/productos/m-";
      if ($numimg<10) {
        echo "0";
      }
      echo $numimg;
      echo ".jpg\" alt=\"nombre producto\"></a></figure>";
      foreach ($line as $col_value) {
//        echo "<figure><a href=\"#\"><img src=\"demoimg/productos/m-";
//        echo "01";
//        echo ".jpg\" \\></a></figure>";
         	echo "<p class=\"infoproduct\">$col_value</p>";
    	}
      echo "</div>";
	}
//}

// Cerrar la conexión
mysql_close($link);
?>  


