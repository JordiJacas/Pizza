<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  	<?php
        $text = " ";
        $preu_total = 5;
    		
        if(isset($_POST['0'])) {
          $text = $text." Massa<br>";
          $preu_total +=0.5;

          if(isset($_POST['1'])) {
          $text = $text . " Oregan<br>";
          $preu_total +=0.5;

            if(isset($_POST['2'])) {
              $text = $text . " Queso<br>";
              $preu_total +=0.5;
            }
            if(isset($_POST['3'])) {
              $text = $text . " Tomate<br>";
              $preu_total +=0.5;
            }
            if(isset($_POST['4'])) {
              $text = $text . " Atun<br>";
              $preu_total +=0.5;
            }
            if(isset($_POST['5'])) {
              $text = $text . " Piña<br>";
              $preu_total +=0.5;
            }
            if(isset($_POST['6'])) {
              $text = $text . " Maiz<br>";
              $preu_total +=0.5;
            }
            if(isset($_POST['7'])) {
              $text = $text . " Pollo<br>";
              $preu_total +=0.5;
            }
            if(isset($_POST['8'])) {
              $text = $text . " Pimiento<br>";
              $preu_total +=0.5;
            }
            if(isset($_POST['9'])) {
              $text = $text . " Salchicas<br>";
              $preu_total +=0.5;
            }

            echo "<h1>Has demanat una pizza amb el següents ingredients</h1>";
            echo $text ."<br>";
            echo "El preu total de la pizza és ". $preu_total;
  


          }else{
            echo "<h4>La pizza ha d'incloure massa</h4>";
          }
        }else{
          echo "<h4>La pizza ha d'incloure oregan</h4>";
        }
  ?>

  </body>
</html>