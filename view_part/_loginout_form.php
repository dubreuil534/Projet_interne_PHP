<?php

$servername = "localhost";
$username = "root";
$password = " ";
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
// connection a la base de donnee mysql
    $conn = new mysqli($servername, $username, $password);
    echo '<p>' . "on est connecter" . '</p>';

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
}

 if( !$site_data[USER_IS_LOGGED]){
?>
    <form id="login" name="login" method="post">
        <label for="username">Pseudo :</label>
        <input type="text" name="username" id="username" />
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" />
        <input type="submit" name="dologin" value="Entrer"/>
    </form>
<?php } else { ?>
    <form id="logout" name="logout">
        <input type="submit" name="login" value="Sortir"/>
    </form>
<?php } ?>
