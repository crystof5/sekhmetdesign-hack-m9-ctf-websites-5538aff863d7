<?php
include_once 'db.php';
session_start();
if(!isset($_SESSION['session']))
	header("Location: login.php");
include_once '../components/header.php';
?>
<!-- START NAV AREA -->
<?php include('../components/nav-ca.php'); ?>
<!-- / END NAV AREA -->
<section id="service" class="service-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">


<div class="panel panel-warning">
  <div class="panel-heading">Cette section est r&eacute;serv&eacute;e aux administrateurs</div>
    <div class="panel-body">
      <div class="well well-lg">
      <?php if($user->verify_admin()): ?>
	<h4 class="text-success">
        Cipher Block Chaining. Ca, je connais!<br>
	 FLAG-de288d28f0dbae2c101c3c29adf1da30<br><br>
      <?php else: ?>
	<h4 class="text-muted">Vous n'avez pas les droits requis<br><br>
      <?php endif; ?>
	<small>Indice &nbsp;&nbsp; AUTH_TOKEN :</small> <br><br>
	<code><?php echo $user->decrypt_cookie(); ?></code></h4>
      </div>
    </div>
  </div>
</div>




</div>
</div>
</div>
</section>
<?php include_once '../components/footer.php'; ?>
