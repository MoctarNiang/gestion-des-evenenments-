<?php
require_once("config.php");
require_once 'function.php';
verifierConnexion(); // Vérifie si l'utilisateur est connecté

// Récupérer l'ID de l'administrateur connecté
$admin_id = $_SESSION['admin_id'];

$affichage_des_clients=mysqli_query($connect,"SELECT * FROM inscription");

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Administration Mini-Événements</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php require_once("nav.php");?>
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center">REGISTRE D'INSCRIPTION</h1>

        <div class="b-example-divider"></div>

     
  </header>
</div>

        <!-- Liste des événements -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr style="text-align: center;">
                    <th>ID</th>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>ADRESSES EMALI</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($parcourire = mysqli_fetch_array($affichage_des_clients)) { ?>
                <tr style="text-align: center;">
                    <td><?php echo $parcourire['id']; ?></td>
                    <td><?php echo $parcourire['nom']; ?></td>
                    <td><?php echo $parcourire['prenom']; ?></td>
                    <td><?php echo $parcourire['adresse']; ?></td>
                   
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>

    <p><a href="lougut.php">Se déconnecter</a></p>
</body>
</html>