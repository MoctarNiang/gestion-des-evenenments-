<?php
//pour creer  variable d'estockage temporaire, on utilise cette fonction
session_start();


//inclure le fichier de connexion de la base de donnee et le 
//fichier header qui contient notre bar de navigation et les lien comme bootstrap

require_once("../admin/config.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $requete =mysqli_query( $connect,"SELECT * FROM inscription WHERE adresse = '$email'");
   
    $user = mysqli_fetch_array($requete);

     //verification du mot de passe saisie avec celui qui est dans la table d'inscripion
    if ($user && password_verify($password, $user["mdp"])) {

        //on utilise la session pour verifier si l'utilisateur est connecté
        $_SESSION["utilisateur_id"] = $user["id"];

        // si ce bon redrige nous sur la page d'evenement
        header("Location: evenement.php");
    } else {
        echo "<div class='alert alert-danger text-center'>Email ou mot de passe incorrect.</div>";
    }
}
?>
                                <!----notre formulaire html-------->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
<div class="container mt-5">
    <h2 class="text-center">Connexion</h2>
    <form method="POST" class="shadow p-4 rounded mx-auto" style="max-width: 400px;">
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Mot de passe</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Se connecter</button>
        <div class="card-footer text-center">
                        <small>Pas encore inscrit ? <a href="inscription.php">Créer un compte</a></small>
                    </div>
    </form>
</div>
