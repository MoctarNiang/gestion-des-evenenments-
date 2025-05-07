<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de Bord - Administration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <i class="bi bi-speedometer2"></i> Tableau de Bord
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="profil.php">
                        <i class="bi bi-person-circle"></i> Profil
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="clients.php">
                        <i class="bi bi-people-fill"></i> Clients
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reservations.php">
                        <i class="bi bi-calendar-check-fill"></i> Réservations
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ajouter_evenement.php">
                        <i class="bi bi-plus-circle-fill"></i> Ajouter un Événement
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="modifier_evenement.php">
                        <i class="bi bi-pencil-square"></i> Modifier Événement
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Contenu du Tableau de Bord -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Bienvenue sur le Tableau de Bord Administratif</h2>

    <div class="row text-center">
        <div class="col-md-4">
            <div class="card bg-primary text-white shadow">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-people-fill"></i> Clients</h5>
                    <p class="card-text display-4">45</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-success text-white shadow">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-calendar-check-fill"></i> Réservations</h5>
                    <p class="card-text display-4">120</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-warning text-white shadow">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-person-circle"></i> Profil</h5>
                    <p class="card-text display-4">Admin</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Actions rapides -->
    <div class="row mt-5 text-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-plus-circle-fill"></i> Ajouter un Événement</h5>
                    <a href="ajouter_evenement.php" class="btn btn-primary">Ajouter</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-pencil-square"></i> Modifier un Événement</h5>
                    <a href="modifier_evenement.php" class="btn btn-warning">Modifier</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-5">
    <p>&copy; 2025 Tableau de Bord - Tous droits réservés.</p>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
