<?php
 $menu_data = array(
   "Accueil" => "index.php",
   "formulaire" => "inscription.php",
   "Dashboard" => "dashboard.php",
 );?><ul><?php
 foreach ($menu_data as $link => $lienvalue ){
  echo "<li class='menu'><a href=".$lienvalue.">".$link."</a></li>";}
?></ul>









