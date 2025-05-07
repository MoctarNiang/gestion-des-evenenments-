<?php
session_start();
//inclure le fichier de connexion de la base de donnee et le 
//fichier header qui contient notre bar de navigation et les lien comme bootstrap
require_once("../admin/config.php");

if (!isset($_SESSION['utilisateur_id'])) {
    echo "<div class='alert alert-danger text-center'>Veuillez vous connecter.</div>";
    exit();
}
 //on recupere l'ID d'evenement reserver par l'url
$reservation_id = $_GET['id'];

// Obtenir l'événement lié à la réservation pour remettre la place
$evenement =mysqli_query($connect,"SELECT evenement_id, places FROM reservation WHERE id = $reservation_id ");
$parcourire_evenement = mysqli_fetch_assoc($evenement);
$evenement_id = $parcourire_evenement['evenement_id'];
$places_a_remettre = $parcourire_evenement['places'];

// Supprimer la réservation
$sql_delete = "DELETE FROM reservation WHERE id = $reservation_id";
mysqli_query($connect, $sql_delete);

// Remettre les places disponibles
$sql_update_places = "UPDATE evenement SET places = places + $places_a_remettre WHERE id = $evenement_id";
mysqli_query($connect, $sql_update_places);

header("location:reservation.php");
mysqli_close($connect);
?>
