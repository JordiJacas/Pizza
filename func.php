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
          $text = $text." Massa";
          $preu_total +=0.5;

          if(isset($_POST['1'])) {
          $text = $text . " Oregan";
          $preu_total +=0.5;

            if(isset($_POST['2'])) {
              $text = $text . " Queso";
              $preu_total +=0.5;
            }
            if(isset($_POST['3'])) {
              $text = $text . " Tomate";
              $preu_total +=0.5;
            }
            if(isset($_POST['4'])) {
              $text = $text . " Atun";
              $preu_total +=0.5;
            }
            if(isset($_POST['5'])) {
              $text = $text . " Piña";
              $preu_total +=0.5;
            }
            if(isset($_POST['6'])) {
              $text = $text . " Maiz";
              $preu_total +=0.5;
            }
            if(isset($_POST['7'])) {
              $text = $text . " Pollo";
              $preu_total +=0.5;
            }
            if(isset($_POST['8'])) {
              $text = $text . " Pimiento";
              $preu_total +=0.5;
            }
            if(isset($_POST['9'])) {
              $text = $text . " Salchicas";
              $preu_total +=0.5;
            }



          }else{
            $text = "El oregan es necessari.";
          }
        }else{
          $text = "La massa es necessaria.";
        }

            echo "<h1>Has demanat una pizza amb el següents ingredients</h1>";
            echo $text ."<br>";
            echo "El preu total de la pizza és ". $preu_total;
    ?>
  </body>
</html>