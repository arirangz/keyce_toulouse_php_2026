<?php

function loginUser(PDO $pdo, string $email, string $password):bool
{
    // On essaye de récupérer un utilisateur à partir de l'email
    $query = $pdo->prepare("SELECT * FROM user WHERE email = :email");
    $query->bindValue(":email", $email, PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch(PDO::FETCH_ASSOC);
    
    // On a bien récupéré un utilisateur et le mot est correct
    if ($user && password_verify($password, $user["password"])) {
        // On va stocker l'utilisateur dans la session
        //regénéré l'id de dession (sécurité: fixation de session)
        session_regenerate_id(true);
        $_SESSION["id"] = $user["id"];
        $_SESSION["email"] = $user["email"];
        $_SESSION["nickname"] = $user["nickname"];

        return true;
    } else {
        // On a pas récupéré un utilisateur
        return false;
    }

}

function addUser(PDO $pdo, string $nickname, string $email, string $password):bool
{
    $query = $pdo->prepare("INSERT INTO user (nickname, email, password)
                            VALUE (:nickname, :email, :password)");
    $query->bindValue(":nickname", $nickname, PDO::PARAM_STR);
    $query->bindValue(":email", $email, PDO::PARAM_STR);

    // On va devoir hasher le mot de passe
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query->bindValue(":password", $hash, PDO::PARAM_STR);

    return $query->execute();
}


