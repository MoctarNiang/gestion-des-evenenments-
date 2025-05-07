<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>accueil.php</title>
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark sticky-top border-bottom" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand d-md-none" href="#">
      <svg class="bi" width="24" height="24" aria-hidden="true"><use xlink:href="#aperture"/></svg>
      Aperture
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasLabel">Aperture</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav flex-grow-1 justify-content-between">
          <li class="nav-item"><a class="nav-link" href="#" aria-label="Aperture">
            <svg class="bi" width="24" height="24" aria-hidden="true"><use xlink:href="#aperture"/></svg>
          </a></li>
          <li class="nav-item"><a class="nav-link" href="accueil.php">ACCUEIL</a></li>
          <li class="nav-item"><a class="nav-link" href="evenement.php">EVENEMENT</a></li>
          <li class="nav-item"><a class="nav-link" href="../admin/login.php">ADMINISTRATEUR</a></li>
          <li><a href="../utilisateur/reservation.php" class="nav-link px-2">Mes reservation</a></li>
          <li>
              <div class="col-12">
                 <a href="../utilisateur/connexion.php"class="btn btn-primary">deconnexion</a>
              </div>
         </li>
          <li class="nav-item"><a class="nav-link" href="#" aria-label="Cart">
            <svg class="bi" width="24" height="24" aria-hidden="true"><use xlink:href="#cart"/></svg>
          </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<header class="bg-dark text-white text-center py-5" style="background: url('images/event-bg.jpg') no-repeat center center; 
           background-size: cover; 
           width: 100%; 
           height: 100vh;">
    <div class="container">
        <h1 class="fw-bold">BIenvenue A notre site Officielle</h1>
        <p class="lead">Découvrez les événements à venir et réservez votre place dès maintenant !</p>
        <a href="evenement.php" class="btn btn-primary">
            <i class="bi bi-calendar-event"></i> Voir les événements
        </a>
    </div>
</header>


    
    
</body>
</html>