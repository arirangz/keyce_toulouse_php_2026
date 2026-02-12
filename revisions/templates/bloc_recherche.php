<form action="" method="get">
    <label for="search">Rechercher: </label>
    <input type="text" name="search" id="search">
    <input type="submit" value="Rerchecher">
</form>
<p id="resultat">
    <?php

    if (isset($_GET["search"])) {
        echo "Votre recherche: " . htmlentities($_GET["search"]);
    }
    ?>
</p>