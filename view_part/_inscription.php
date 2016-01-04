<?php
var_dump($_POST);
$prenom_ok = false;
if (array_key_exists("prenom", $_POST)) {
    $prenom = filter_input(INPUT_POST,"prenom",FILTER_SANITIZE_MAGIC_QUOTES);
    $prenom_ok = (1 == preg_match("/^[a-z]{4,}$/",$prenom));
}



if ($prenom_ok == true){
    header("location: index.php");

}
?>


<div>
    <form id="formulaire" method="post" name="formulaire">
        <label for="prenom">Prenom :</label>
        <input type="text" name="prenom" id="prenom"/>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom"/>
        <label for="courriel">Courriel :</label>
        <input type="email" name="courriel" id="courriel"/>
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password"/>
        <input type="submit" value="S'inscrire"/>
    </form>
</div>