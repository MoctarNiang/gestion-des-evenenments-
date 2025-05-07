<?php
session_start();
require_once("../admin/config.php");

if (!isset($_SESSION['utilisateur_id'])) {
    echo "<div class='alert alert-danger text-center'>Veuillez vous connecter pour réserver.</div>";
    exit();
}

$utilisateur_id = $_SESSION['utilisateur_id'];
$evenement_id = $_GET['id'];

// Vérifier la disponibilité des places
$sql_places = "SELECT places FROM evenement WHERE id = $evenement_id";
$result_places = mysqli_query($connect, $sql_places);
$row_places = mysqli_fetch_assoc($result_places);

if ($row_places['places'] > 0) {
    // Ajouter la réservation
    $sql_reservation = "INSERT INTO reservation (utilisateur_id, evenement_id, places) VALUES ($utilisateur_id, $evenement_id, 1)";
    mysqli_query($connect, $sql_reservation);

    // Mettre à jour les places restantes
    $nouveau_places = $row_places['places'] - 1;
    $sql_update_places = "UPDATE evenement SET places = $nouveau_places WHERE id = $evenement_id";
    mysqli_query($connect, $sql_update_places);

    header('Location: reservation.php'); // Redirige vers le panier
} else {
    echo "<div class='alert alert-warning text-center'>Il n'y a plus de places disponibles.</div>";
}

mysqli_close($connect);
?>
