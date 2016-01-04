<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= SITE_NAME . ' - ' . ucfirst($site_data[PAGE_ID]) ?></title>
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
</head>
<body>
<div id="main">


<p class="validation"><?php
echo "Vous avez reussie votre inscription !!!  Nous allons vous redirigez vers la page d'accueil" ;?></p>
<?php header( "refresh:5;url=../index.php" ); ?>