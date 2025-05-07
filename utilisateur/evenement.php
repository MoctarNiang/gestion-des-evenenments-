<?php
require_once("../admin/config.php");
require_once("../header.php");

session_start();

// Récupérer les événements
$sql = "SELECT * FROM evenement";
$result = mysqli_query($connect, $sql);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Événements Disponibles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<header class="bg-dark text-white text-center py-5" style="background: url('images/event-bg.jpg') no-repeat center center; 
           background-size: cover; 
           width: 100%; 
           height: auto;">
    <div class="container">
        
    

<div class="container mt-5">
    <h2 class="text-center mb-4">Liste des Événements</h2>
    
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['titre']; ?></h5>
                        <p class="card-text"><?php echo $row['dess']; ?></p>
                        <p><strong>Date :</strong> <?php echo $row['date_lieu']; ?></p>
                        <p><strong>Places disponibles :</strong> <?php echo $row['places']; ?></p>
                        <a href="ajout.php?id=<?php echo $row['id']; ?>" class="btn btn-primary w-100">Réserver</a>
                    </div>
                </div>
            </div>
            
        <?php } ?>
    </div>
</div>
</div>
</header>


</body>
</html>
