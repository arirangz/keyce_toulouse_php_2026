<?php require_once "templates/header.php"; ?>
<?php 
if (!isset($_SESSION["email"])) {
    header("Location: login.php");
}
?>

<h1>Mon profil</h1>
<p>Pseudo: <?= $_SESSION["nickname"]; ?> </p>
<p>Email: <?= $_SESSION["email"]; ?></p>

<?php require_once "templates/footer.php"; ?>

