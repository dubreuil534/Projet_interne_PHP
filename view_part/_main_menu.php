<?php
 $menu_data = array(
   "Accueil" => "index.php",
   "Menu" => "menu.php",
   "Contact" => "contact.php",
 );?><ul><?php

foreach ($menu_data as $link => $lienvalue ){

 echo "<li><a href=".$lienvalue.">".$link."</a></li>";
}
?></ul>









