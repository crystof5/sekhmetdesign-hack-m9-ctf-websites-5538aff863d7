<?php
include 'db.php';
session_start();
$found = false;
$error = false;
if(isset($_POST["username"]) && isset($_POST["password"])) {
	$found = $user->verify_login($_POST["username"], $_POST["password"]);
	if($found) {
		header("Location: index.php");
		$_SESSION['session'] = "true";
	}
	else
		$error = true;
}
include('../components/header.php');
?>
<!-- START NAV AREA -->
<?php include('../components/nav-ca.php'); ?>
<!-- / END NAV AREA -->
<section id="service" class="service-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">


<div class="well">
  Connectez-vous pour acc&eacute;der aux contenus de l'interface
</div>
<div class="well bs-component">
<form action="login.php" method="post" class="form-horizontal">
  <fieldset>
    <legend>Connexion</legend>
    <div class="form-group">
      <label class="col-lg-2 control-label">Nom d'utilisateur</label>
      <div class="col-lg-10">
        <input class="form-control" name="username" placeholder="Nom d'utilisateur" type="text">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Mot de passe</label>
      <div class="col-lg-10">
        <input class="form-control" name="password" placeholder="Mot de passe" type="password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-success">Soumettre</button>
      </div>
    </div>
  </fieldset>
</form>
<?php if($error): ?>
<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Erreur!</strong> Nom d'utilisateur/Mot de passe invalide.
</div>
<?php endif; ?>


</div>
</div>
</div>
</section>
<?php include_once '../components/footer.php'; ?>
