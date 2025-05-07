<?php
 require_once("config.php");
require_once 'function.php';
verifierConnexion(); // Vérifie si l'utilisateur est connecté

// Récupérer l'ID de l'administrateur connecté
$admin_id = $_SESSION['admin_id'];


// Modifier un événement
if (isset($_POST['modifier'])) {
    $id = (int)$_POST['id'];
    $titre =  $_POST['titre'];
    $description =$_POST['description'];
    $date = $_POST['date'];
    $places = (int)$_POST['places_disponibles'];

    $requete =mysqli_query($connect, "UPDATE evenements SET titre='$titre', dess='$description', date_lieu='$date', places=$places WHERE id=$id");
   
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Administration Mini-Événements</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container mt-5">
        <h1 class="text-center">Gestion des Événements</h1>

        <div class="b-example-divider"></div>

 <?php require_once("nav.php");?>

        <!-- Formulaire d'ajout -->
        <div class="card mb-4">
            <div class="card-header bg-success text-white">Ajouter un événement</div>
            <div class="card-body">
                <form action="" method="POST">
                    <input type="text" name="titre" class="form-control mb-2" placeholder="Titre" required>
                    <textarea name="description" class="form-control mb-2" placeholder="Description" required></textarea>
                    <input type="date" name="date" class="form-control mb-2" required>
                    <input type="number" name="places_disponibles" class="form-control mb-2" placeholder="Places disponibles" required>
                    <button type="submit" name="ajouter" class="btn btn-success">Ajouter</button>
                </form>
            </div>
        </div>
</body>
</html>

<p style="text-align: center"><a href="lougut.php">se deconnecter</a></p>
</body>
</html>

