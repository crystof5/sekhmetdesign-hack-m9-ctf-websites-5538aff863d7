<?php
include_once 'db.php';
session_start();

$error = false;
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && $_POST['username'] != "") {
	if(!$user->new_user($_POST['username'], $_POST['password'], $_POST['email']))
		$error = true;

      if(new_user($_POST['username'], $_POST['password'], $_POST['email'])){
  header("Location: /ca/index.php");
}

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
  Inscrivez-vous avant d'acc&eacute;der aux contenus de l'interface
</div>
<div class="well bs-component">
<form class="form-horizontal" method="post" action="<?=$url_base;?>/register.php">
  <!-- action="<?=$url_base;?>/register.php"> -->
  <fieldset>
    <legend>Formulaire d'inscription</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Nom d'utilisateur</label>
      <div class="col-lg-10">
        <input class="form-control" name="username" placeholder="Nom d'utilisateur" type="text">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Mot de passe</label>
      <div class="col-lg-10">
        <input class="form-control" name="password" placeholder="Mot de passe" type="password">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">E-mail</label>
      <div class="col-lg-10">
        <input class="form-control" name="email" placeholder="E-mail" type="text">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Recommencer</button>
        <button type="submit" class="btn btn-success">Soumettre</button>
      </div>
      <?php if($error): ?><br><br>
      <div class="alert alert-dismissible alert-danger">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Nom d'utilisateur d&eacute;j&agrave; utilis&eacute;,</strong> vous devez en choisir un autre.
      </div>
      <?php endif; ?>
 

    </div>
  </fieldset>
</form>


</div>
</div>
</div>
</section>
<?php include_once '../components/footer.php'; ?>
