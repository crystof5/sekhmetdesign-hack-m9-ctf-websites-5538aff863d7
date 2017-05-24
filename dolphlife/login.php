<?php
session_start();
include('components/header.php');
?>
    <!-- START HOMEPAGE DESIGN AREA -->
    <?php include('components/nav.php'); ?>
    <!-- / END HOMEPAGE DESIGN AREA -->
		<section id="service" class="service-area section-padding">
		    <div class="container">
		        <div class="row">
		            <div class="col-sm-12">
									


<div class="well">
  Connectez-vous 
</div>
<div class="well bs-component">
<form action="login.php" method="post" class="form-horizontal">
  <fieldset>
    <legend>Connexion</legend>
    <div class="form-group">
      <label class="col-lg-2 control-label">Nom d'utilisateur</label>
      <div class="col-lg-10">
        <input class="form-control" id="login" name="username" placeholder="Nom d'utilisateur" type="text">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Mot de passe</label>
      <div class="col-lg-10">
        <input class="form-control" id="pwd" name="password" placeholder="Mot de passe" type="password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" name="connexion" class="btn btn-success">Connexion</button>
      </div>
    </div>
  </fieldset>



<!--
</div>

 <div class="container-fluid" >

  <form action="login.php" method="post">
    <div class="form-group">
      <label for="email">Login:</label>
      <input type="text" style="width: 200px; margin:0px auto; display:block;" class="form-control" id="login" placeholder="Entrer votre login" name="username">
    </div>
    <div class="form-group">
      <label for="pwd" style="background-color: beige">Mot de Passe:</label>
      <input type="password" style="width: 200px; margin:0px auto; display:block;" class="form-control" id="pwd" placeholder="Entrer votre mot de passe" name="password">
    </div>
     <input type="submit" class="btn btn-primary" name="connexion" value="Connexion" />
     <br />

-->



<?php
/*
Page: connexion.php
*/

if(isset($_POST['connexion'])) { // si le bouton "Connexion" est appuyé
    // on vérifie que le champ "Pseudo" n'est pas vide
    // empty vérifie à la fois si le champ est vide et si le champ existe belle et bien (is set)
    if(empty($_POST['username'])) {
       // echo "Le champ Login est vide.";
                // header('Refresh: 3; login.php');
      echo "<script> window.location.assign('login.php'); </script>";
    } else {
        // on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
        if(empty($_POST['password'])) {
         
        // header('Refresh: 3; login.php');
         //header("Location: login.php");
             echo "<script> window.location.assign('login.php'); </script>";
                echo "Le champ Mot de passe est vide.";
} else {
            // les champs sont bien posté et pas vide, on sécurise les données entrées par le membre:
            $username = $_POST['username'];
            $password = $_POST['password'];
            //on se connecte à la base de données:
            $mysqli = mysqli_connect("localhost", "root", "", "hackmaisonneuve");
            //on vérifie que la connexion s'effectue correctement:
            if(!$mysqli){
                echo "Erreur de connexion à la base de données.";
            } else {
                // on fait maintenant la requête dans la base de données pour rechercher si ces données existe et correspondent:
                $Requete = mysqli_query($mysqli,"SELECT * FROM users WHERE username = '".$username."' AND password = '".md5($password)."'");
                // si il y a un résultat, mysqli_num_rows() nous donnera alors 1
                // si mysqli_num_rows() retourne 0 c'est qu'il a trouvé aucun résultat
                if(mysqli_num_rows($Requete) == 0) {

                    echo "<br /><br /><br />Le pseudo ou le mot de passe est incorrect.";

                 } else {
                    // on ouvre la session avec $_SESSION:
                    $_SESSION['username'] = $username; // la session peut être appelée différemment et son contenu aussi peut être autre chose que le pseudo
                    echo "Vous êtes à présent connecté !";
                echo "<script> window.location.assign('welcome.php'); </script>";
                }
            }
        }
    }
  }
?>
 </form>
</div>


</div>
</div>
</div>
</section>
 <?php include('components/footer.php'); ?>
