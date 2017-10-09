<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  	<?php
  		$ingredients = array(
  			0 => 'Massa',
  			1 => 'Oregan',
  			2 => 'Queso',
  			3 => 'Tomate',
  			4 => 'Atun',
  			5 => 'Piña',
  			6 => 'Maiz',
  			7 => 'Pollo',
  			8 => 'Bacon',
  			9 => 'salchichas');
  		$longitud = sizeof($ingredients);
  		echo "<form method='post' action='func.php'>";
  			for($i=0;$i<$longitud;$i++){
  				echo "<p>".$ingredients[$i]."<input type='checkbox' name='".$i."' value='".$i."'></p>";
  			}

  		echo "<input type='submit' value='Pedir'>";
  	?>




  </body>
</html>