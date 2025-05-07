<?php
session_start();

//inclure le fichier de connexion de la base de donnee et le 
//fichier header qui contient notre bar de navigation et les lien comme bootstrap
require_once("../admin/config.php");
require_once("../header.php");

 //verification si l'utilisateur est bien connecter avec la session
if (!isset($_SESSION['utilisateur_id'])) {
    echo "Veuillez vous connecter.";
    exit();
}

//si l'utilisateur se connecte et fait des reservation,
//on recupere ses rservation et l'inserer sur la table de reservation en utilisant les jointuere
$reservation = mysqli_query($connect,"
    SELECT e.titre, e.date_lieu, e.dess, sum(r.places) AS total_places, u.prenom, u.nom, u.adresse
    FROM reservation r
    JOIN evenement e ON r.evenement_id = e.id
    JOIN inscription u ON r.utilisateur_id = u.id
    WHERE r.utilisateur_id = {$_SESSION['utilisateur_id']}");
?>

<div class="container mt-5">
    <h2 class="text-center">Votre Panier</h2>
       <!------ on verifier s'il y'a des rservations disponibles--->
    <?php if (mysqli_num_rows($reservation) > 0) { ?>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr style="text-align: center;">
                    
                    <th>Titre</th>
                    <th>Description</th>
                     <th>Date</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>QUANTITE</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              <!-- si y'a des reservation disponibles on l'affiche sous forme d'un tableau associatif--->
                <?php while ($row = mysqli_fetch_array($reservation)) { ?>
                    <tr style="text-align: center;">
                        
                        <td><?php echo $row['titre']; ?></td>
                        <td><?php echo $row['dess']; ?></td>
                        <td><?php echo $row['date_lieu']; ?></td>
                        <td><?php echo $row['prenom']; ?></td>
                        <td><?php echo $row['nom']; ?></td>
                        <td><?php echo $row['adresse']; ?></td>
                        <td><?php echo $row['total_places']; ?></td>
                        <td>
                          <!--- cet lien nous permet de supprimer une rservation--->
                        <a href="supp.php?id=echo$row['id'];?> "class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
            
        </table>
    <?php } else { ?>
        <div class="alert alert-warning text-center">Votre panier est vide.</div>
    <?php } ?>
</div>
