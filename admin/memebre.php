<?php
 require_once("config.php");
require_once 'function.php';
verifierConnexion(); // Vérifie si l'utilisateur est connecté

// Récupérer l'ID de l'administrateur connecté
$admin_id = $_SESSION['admin_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>espace des membres</title>
</head>
<body>
    <?php
    // Ajouter un événement
if (isset($_POST['ajouter'])) {
    $nom =  $_POST['nom'];
    $mdp = $_POST['mdp'];
    $requete =mysqli_query($connect,"INSERT INTO administrateur (nom,mdp) VALUES ('$nom', '$mdp')");
}

// Supprimer un administrateur
if (isset($_GET['supprimer'])) {
    $id = (int)$_GET['supprimer'];
   $requete = mysqli_query($connect, "DELETE FROM administrateur WHERE id = $id");
}
    
    ?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Administration Mini-Événements</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/brands.min.css">
    <?php require_once("nav.php");?>

</head>
<body>
    
    <div class="container mt-5">
        <h1 class="text-center">PROFILE DES ADMINISTRATEURES</h1>

        <div class="b-example-divider"></div>

       
        <!-- Formulaire d'ajout -->
        <div class="card mb-4">
            <div class="card-header bg-success text-white">Ajouter un événement</div>
            <div class="card-body">
                <form action="" method="POST">
                    <input type="text" name="nom" class="form-control mb-2" placeholder="NOM D'UTILISATEUR" required>
                    <textarea name="mdp" class="form-control mb-2" placeholder="MOT DE PASSE" required></textarea>
                    <button type="submit" name="ajouter" class="btn btn-success">Ajouter</button>
                </form>
            </div>
        </div>

        <!-- Liste des événements -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>nom d'utilisateur</th>
                    <th>mot de passe</th>
                </tr>
            </thead>
            <tbody>
                  <?php $result = mysqli_query($connect, "SELECT * FROM administrateur");?>
                <?php while ($parcourire = mysqli_fetch_array($result)){ ?>
                <tr>
                    <td><?php echo $parcourire['nom']; ?></td>
                    <td><?php echo $parcourire['mdp']; ?></td>
                    <td>
                        <a href="?supprimer=<?php echo $parcourire['id']; ?>" class="btn btn-danger btn-sm">Supprimer</a>
    
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>

    <p style="text-align: center;"><a href="lougut.php">Se déconnecter</a></p>
</body>
</html>