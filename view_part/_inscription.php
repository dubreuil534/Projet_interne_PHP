<?php

$in_post = array_key_exists("register",$_POST); //Permet d'effectuer un neutrage sur le programme sans mettre false.

//var_dump($_POST);
$prenom_ok = false;
$prenom_msg = ""; //Message de feedback validation. affichier sinon vide
if (array_key_exists("prenom", $_POST)) {
    $prenom = filter_input(INPUT_POST, "prenom", FILTER_SANITIZE_STRING);
    $prenom_ok = (1 == preg_match("/^[a-z ,.'-]+$/i",$prenom));
    If (! $prenom_ok){ // le prénom n'est pas valide.
        $prenom_msg = "Le prénom ne fonctionne pas ... Recommencer (Min 2 caractère).";
    }
}
var_dump($prenom_ok);
$nom_ok = false;
if (array_key_exists("nom", $_POST)) {
    $nom = filter_input(INPUT_POST,"nom",FILTER_SANITIZE_STRING);
    $nom_ok = (1 == preg_match("/^[a-z ,.'-]+$/i",$nom));
}
//var_dump($nom_ok);
$courriel_ok = false;
if (array_key_exists("courriel", $_POST)) {
    $courriel = filter_input(INPUT_POST,"courriel",FILTER_SANITIZE_EMAIL);
    $courriel = (filter_var($courriel,FILTER_VALIDATE_EMAIL));
    $courriel_ok = (false !== $courriel);
}
//var_dump($courriel_ok);
$passord_ok = false;
if (array_key_exists("password", $_POST)) {
    $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_STRING);
    $passord_ok = (1 == preg_match("/^[a-zA-Z0-9%&$!*?]{8,}$/",$password));
}
//var_dump($passord_ok);


if ($prenom_ok && $nom_ok && $courriel_ok && $passord_ok == true){
    header("location: validationOK.php");
    exit;
}
?>

<div>
    <form id="formulaire" method="post" name="formulaire">
        <label for="prenom">Prenom :</label>
        <input type="text" name="prenom" id="prenom"
        class="<?php echo $in_post && $prenom_msg ?>"/>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom"/>
        <label for="courriel">Courriel :</label>
        <input type="text" name="courriel" id="courriel"/>
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password"/>
        <input type="submit" name="register" value="S'inscrire"/>
    </form>
</div>