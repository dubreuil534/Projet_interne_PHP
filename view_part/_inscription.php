<?php
var_dump($_POST);
$prenom_ok = false;
if (array_key_exists("prenom", $_POST)) {
    $prenom = filter_input(INPUT_POST,"prenom",FILTER_SANITIZE_MAGIC_QUOTES);
    $prenom_ok = (1 == preg_match("/^[a-z ,.'-]+$/i",$prenom));
}
var_dump($prenom_ok);
$nom_ok = false;
if (array_key_exists("nom", $_POST)) {
    $nom = filter_input(INPUT_POST,"nom",FILTER_SANITIZE_MAGIC_QUOTES);
    $nom_ok = (1 == preg_match("/^[a-z ,.'-]+$/i",$nom));
}
var_dump($nom_ok);
$courriel_ok = false;
if (array_key_exists("courriel", $_POST)) {
    $courriel_ok = (filter_input(INPUT_POST,"courriel",FILTER_VALIDATE_EMAIL));
}
var_dump($courriel_ok);
$passord_ok = false;
if (array_key_exists("password", $_POST)) {
    $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_MAGIC_QUOTES);
    $passord_ok = (1 == preg_match("/^[a-zA-Z0-9]{8,}$/",$password));
}
var_dump($passord_ok);


if ($prenom_ok && $nom_ok && $courriel_ok && $passord_ok == true){
    header("location: view_part/_validationOK.php");

}
?>


<div>
    <form id="formulaire" method="post" name="formulaire">
        <label for="prenom">Prenom :</label>
        <input type="text" name="prenom" id="prenom"/>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom"/>
        <label for="courriel">Courriel :</label>
        <input type="text" name="courriel" id="courriel"/>
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password"/>
        <input type="submit" value="S'inscrire"/>
    </form>
</div>