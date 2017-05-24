<?php
include_once 'db.php';
session_start();
include('../components/header.php');
?>
<!-- START NAV AREA -->
<?php include('../components/nav-ca.php'); ?>
<!-- / END NAV AREA -->
<section id="service" class="service-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">


<div class="jumbotron">
  <?php if($user->is_loggedin()): ?>
     <h4> Connaissez-vous la Communion Biblique des Dauphins? Moi non plus.</h4>
  <?php else: ?>
    <h1>Bienvenue</h1>
    <p>Avant tout, allez vous inscrire.</p>
    <p><a class="btn btn-warning btn-lg" href="/ca/register.php">Inscription</a></p>
  <?php endif; ?>
</div>

      </div>
    </div>
  </div>
</section>
<?php include_once '../components/footer.php'; ?>
