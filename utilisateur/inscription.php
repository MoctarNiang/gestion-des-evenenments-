<?php
require_once("../admin/config.php");


//verifier si tous les champs sonr remplir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);//je crypt le mot de passe pour des raison de secrute

    $sql =mysqli_query( $connect,"INSERT INTO inscription(nom, prenom, adresse, mdp) VALUES ('$nom','$prenom', '$email', '$password')");

    //redirige nous sur la page de connexion
    header("Location: connexion.php");
}
?>


                                        <!---- Notre formualire html--------->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Inscription</h2>
    <form method="POST" class="shadow p-4 rounded mx-auto" style="max-width: 400px;">
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Prenom</label>
            <input type="text" name="prenom" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Mot de passe</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">S'inscrire</button>
        <div class="card-footer text-center">
          <small>Déjà inscrit  ? <a href="connexion.php">Se connecter</a></small>
        </div>
    </form>
</div>
</body>
</html>
