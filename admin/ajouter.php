<?php
 require_once("config.php");
require_once 'function.php';
verifierConnexion(); // Vérifie si l'utilisateur est connecté

// Récupérer l'ID de l'administrateur connecté
$admin_id = $_SESSION['admin_id'];
?>
<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    
    <p>ID de l'administrateur connecté : <?php echo $admin_id; ?></p>
    <?php

// Ajouter un événement
if (isset($_POST['ajouter'])) {
    $titre =  $_POST['titre'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $places = $_POST['places_disponibles'];
    $requete =mysqli_query($connect,"INSERT INTO evenement (titre, dess, date_lieu, places) VALUES ('$titre', '$description', '$date', '$places')");
}

// Récupérer la liste des événements
$result = mysqli_query($connect, "SELECT * FROM evenement");

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Administration Mini-Événements</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <?php require_once("nav.php");?>
    
    
    <div class="container mt-5">
        <h1 class="text-center">Gestion des Événements</h1>

        <div class="b-example-divider"></div>

  </header>
</div>

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
                <!-- Liste des événements -->
                <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Places disponibles</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($parcourire = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $parcourire['titre']; ?></td>
                    <td><?php echo $parcourire['dess']; ?></td>
                    <td><?php echo $parcourire['date_lieu']; ?></td>
                    <td><?php echo $parcourire['places']; ?></td>
                    <td>
                        <a href="?supprimer=<?php echo $parcourire['id']; ?>" class="btn btn-danger btn-sm">Supprimer</a>
                        <a href="modifier.php?id=<?php echo $parcourire['id']; ?>" class="btn btn-warning btn-sm">Modifier</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <p style="text-align: center;"><a href="lougut.php">Se déconnecter</a></p>

</body>
</html>