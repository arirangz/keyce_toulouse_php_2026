<?php 
require_once "templates/header.php"; 
require_once "libs/Pdo.php";
require_once "libs/User.php";

if (isset($_POST["nickname"], $_POST["email"], $_POST["password"])) {
    $result = addUser($pdo, $_POST["nickname"], $_POST["email"], $_POST["password"]);
    if ($result) {
        // On redirige l'utilisateur vers la page de login
        header("Location: login.php");
    } else {
        $error = true;
    }
}

?>

<h1>Inscription</h1>
<?php if (isset($error) && $error): ?>
    <p>Une erreur s'est produite pendant l'inscription</p>
<?php endif; ?>

<form action="" method="post">
    <p>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </p>
    <p>
        <label for="nickname">Pseudo</label>
        <input type="text" name="nickname" id="nickname">
    </p>
    <p>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password">
    </p>
    <input type="submit" value="S'inscrire">
</form>

<?php require_once "templates/footer.php"; ?>

