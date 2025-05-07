<?php
require_once("config.php");
require_once("function.php");

//si l'utilisateur est deja connecter le rediriger vers dashboard.php

if(connecte()){
    header("location:dashboard.php");
    exit();
}else{
    $message = '';
}
//verification si le formulair est soumis
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nom = $_POST['nom'];
    $passe = $_POST['passe'];

    $requete= mysqli_query($connect,"SELECT id,	mdp FROM administrateur WHERE nom='$nom'");
    if(mysqli_num_rows($requete)>0){
        $parcourire;
       
        $parcourire=mysqli_fetch_array($requete);

        //verification de la mot de passe

        if ($passe==$parcourire['mdp']){

             //authentification reussie

            $_SESSION['admin_id']=$parcourire['id'];
            header("location:dashboard.php");
            exit();
        }else
        $message='mot de passe incorrect';
        }
        
        }else
         echo"nom d'utilsateur incorrect";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>administrateur</title>
</head>
<body>
<?php require_once("../header.php"); ?>
    <div class="card">
                    <div class="card-header text-center">
                        <h3>espace administrateur</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="text" class="form-label">nom d'utilisateur</label>
                                <input type="text" name="nom" id="email" class="form-control" placeholder="Entrez votre nom d'utilisateur" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Mot de Passe</label>
                                <input type="password" name="passe" id="password" class="form-control" placeholder="Entrez votre mot de passe" required>
                            </div>
                            <div class="d-grid">
                                <input type="submit" value="Se connecter" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                   
                </div>
            </div>
        </div>

        <?php if ($message): ?>
        <p style="color: red;"><?php echo $message; ?></p>
    <?php endif; ?>

    
</body>
</html>