<?php
var_dump($_POST);
// validation ici
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