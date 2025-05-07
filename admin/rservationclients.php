<?php
require_once("config.php");
require_once 'function.php';
verifierConnexion(); // Vérifie si l'utilisateur est connecté

// Récupérer l'ID de l'administrateur connecté
$admin_id = $_SESSION['admin_id'];

$affichage_des_clients=mysqli_query($connect,"SELECT e.titre, e.date_lieu, e.dess, r.places, i.prenom, i.nom, i.adresse
FROM reservation r
JOIN evenement e ON evenement_id = e.id
JOIN inscription i ON r.utilisateur_id = i.id");


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
<h1 class="text-center">RESERVATIONS DISPONIBLES</h1>

    </div>
  </header>
</div>

        <!-- Liste des événements -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr style="text-align: center;">
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>EMALI</th>
                    <th>PLACES</th>
                    <th>RESERVATION</th>
                    <th>description</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php while ($parcourire = mysqli_fetch_array($affichage_des_clients)){ ?>
                <tr style="text-align: center;">
                        <td><?php echo $parcourire['nom'];?></td>
                        <td><?php echo $parcourire['prenom'];?></td>
                        <td><?php echo $parcourire['adresse'];?></td>
                        <td><?php echo $parcourire['places'];?></td>
                        <td><?php echo $parcourire['titre'];?></td>
                        <td><?php echo $parcourire['dess'];?></td>
                       
                   
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>

    <p style="text-align: center;"><a href="lougut.php">Se déconnecter</a></p>
</body>
</html>