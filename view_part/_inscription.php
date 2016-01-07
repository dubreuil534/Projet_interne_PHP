<?php


$in_post = array_key_exists("register",$_POST); //Permet d'effectuer un neutrage sur le programme sans mettre false.

//var_dump($_POST);
$prenom_ok = false;
$prenom_msg = ""; //Message de feedback validation. affichier sinon vide
if (array_key_exists("prenom", $_POST)) {
    $prenom = filter_input(INPUT_POST, "prenom", FILTER_SANITIZE_STRING);
    $prenom_ok = (1 == preg_match("/^[a-z ,.'-]+$/i",$prenom));
    If (! $prenom_ok){ // le prénom n'est pas valide.
        $prenom_msg = "(Min 2 caractères et minuscule seulement).";
    }
}
//var_dump($prenom_ok);
$nom_ok = false;
$nom_msg = ""; //Message de feedback validation. affichier sinon vide
if (array_key_exists("nom", $_POST)) {
    $nom = filter_input(INPUT_POST, "nom",FILTER_SANITIZE_STRING);
    $nom_ok = (1 == preg_match("/^[a-z ,.'-]+$/i",$nom));
    If (! $nom_ok){ // le prénom n'est pas valide.
        $nom_msg = "(Min 2 caractères et minuscule seulement).";
    }
}
//var_dump($nom_ok);
$courriel_ok = false;
$courriel_msg = ""; //Message de feedback validation. affichier sinon vide
if (array_key_exists("courriel", $_POST)) {
    $courriel = filter_input(INPUT_POST,"courriel",FILTER_SANITIZE_EMAIL);
    $courriel = (filter_var($courriel,FILTER_VALIDATE_EMAIL));
    $courriel_ok = (false !== $courriel);
    If (! $courriel_ok){ // le prénom n'est pas valide.
        $courriel_msg = "(Votre email n'est pas valide).";
    }
}
//var_dump($courriel_ok);
$passord_ok = false;
$password_msg = ""; //Message de feedback validation. affichier sinon vide
if (array_key_exists("password", $_POST)) {
    $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_STRING);
    $passord_ok = (1 == preg_match("/^[a-zA-Z0-9%&$!*?]{8,}$/",$password));
    If (! $passord_ok){ // le prénom n'est pas valide.
        $password_msg = "(Votre mot de passe n'est pas valise).";
    }
}

$pseudo_ok = false;
$pseudo_msg = ""; //Message de feedback validation. affichier sinon vide
if (array_key_exists("pseudo", $_POST)) {
    $pseudo = filter_input(INPUT_POST,"pseudo",FILTER_SANITIZE_STRING);
    require_once "db/_user.php";
    $pseudo_ok = (1 == preg_match("/^[a-zA-Z0-9]{4,}$/",$pseudo));
    If (! $pseudo_ok){ // le prénom n'est pas valide.
        $pseudo_msg = "(Votre mot de passe n'est pas valise).";
    }
    if ($pseudo_ok){

        echo "Le username ".$pseudo. " est déja pris";
    };

}
//var_dump($passord_ok);


if ($prenom_ok && $nom_ok && $courriel_ok && $passord_ok && $pseudo_ok == true){
    $createuser = user_add($pseudo, $password, $prenom, $nom, $courriel);
    header("location: validationOK.php");
    exit;
}
?>

<div>
    <form id="formulaire" method="post" name="formulaire">
        <label for="pseudo">Pseudo : </label>
        <input type="text" name="pseudo" id="pseudo" value="<?php echo array_key_exists('pseudo', $_POST) ? $_POST['pseudo'] : '' ?>"/>
        <span class="<?php echo $in_post && ! $pseudo_ok ? 'error' : '';?>"> <?php echo $pseudo_msg;?></span>
        <label for="prenom">Prénom : </label>
        <input type="text" name="prenom" id="prenom" value="<?php echo array_key_exists('prenom', $_POST) ? $_POST['prenom'] : '' ?>"/>
        <span class="<?php echo $in_post && ! $prenom_ok ? 'error' : '';?>"> <?php echo $prenom_msg;?></span>
        <label for="nom">Nom : </label>
        <input type="text" name="nom" id="nom" value="<?php echo array_key_exists('nom', $_POST) ? $_POST['nom'] : '' ?>"/>
        <span class="<?php echo $in_post && ! $nom_ok ? 'error' : '';?>"> <?php echo $nom_msg;?></span>
        <label for="courriel">Courriel : </label>
        <input type="text" name="courriel" id="courriel" value="<?php echo array_key_exists('courriel', $_POST) ? $_POST['courriel'] : '' ?>"/>
        <span class="<?php echo $in_post && ! $courriel_ok ? 'error' : '';?>"> <?php echo $courriel_msg;?></span>
        <label for="password">Password : </label>
        <input type="password" name="password" id="password" value="<?php echo array_key_exists('mot_passe', $_POST) ? $_POST['mot_passe'] : '' ?>"/>
        <span class="<?php echo $in_post && ! $passord_ok ? 'error' : '';?>"> <?php echo $password_msg;?></span>
        <input class="submit" type="submit" name="register" id="register" value="S'inscrire"/>

    </form>
</div>