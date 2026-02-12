<?php
require_once "templates/header.php";
require_once "libs/Pdo.php";
require_once "libs/User.php";

if (isset($_POST["email"], $_POST["password"])) {
    $isAllowed = loginUser($pdo, $_POST["email"], $_POST["password"]);

    if ($isAllowed) {
        // redirection vers la page profile
        header("Location: profile.php");
    }
}

?>

<h1>Connexion</h1>

<form action="" method="post">
    <p>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </p>
    <p>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password">
    </p>
    <input type="submit" value="Se connecter">
</form>
<?php if (isset($isAllowed) && !$isAllowed): ?>
    <p>Email ou mot de passe incorrecte.</p>
<?php endif; ?>

<?php require_once "templates/footer.php"; ?>