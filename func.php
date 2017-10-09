<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  	<?php
      $text = " ";
  		if(isset($_POST['massa'])) {
        $text = $text." Massa";

      if(isset($_POST['oregan'])) {
        $text = $text . " Oregan";

        if(isset($_POST['queso'])) {
        $text = $text . " Queso";
        }
        if(isset($_POST['tomate'])) {
          $text = $text . " Tomate";
        }
        if(isset($_POST['atun'])) {
          $text = $text . " Atun";
        }
        if(isset($_POST['piña'])) {
          $text = $text . " Piña";
        }
        if(isset($_POST['maiz'])) {
          $text = $text . " Maiz";
        }
        if(isset($_POST['pollo'])) {
          $text = $text . " Pollo";
        }
        if(isset($_POST['pimiento'])) {
          $text = $text . " Pimiento";
        }
        if(isset($_POST['bacon'])) {
          $text = $text . " Bacon";
        }
        if(isset($_POST['Salchichas'])) {
          $text = $text . " Salchicas";
        }
      }else{
        $text = "El oregan es necessari.";
      }
      
      }else{
        $text = "La massa es necessaria.";
      }


      echo $text;
    ?>
  </body>
</html>