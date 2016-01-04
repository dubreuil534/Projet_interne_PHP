<h1>Inscription</h1>
<?php
var_dump($_POST);  //inspecter les données post
require_once "_defines.php";
require_once "data/_main_data.php";
require_once "view_part/_page_base.php";
$site_data[PAGE_ID] = "inscription";
?>

<div id="main">
    <?php require_once "view_part/_inscription.php"; ?></div>


