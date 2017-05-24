<?php
session_start();
if(!$_SESSION['username']) {
    header("Location: login.php");
}
include('components/header.php');
?>
    <!-- START HOMEPAGE DESIGN AREA -->
    <?php include('components/nav-welcome.php'); ?>
    <!-- / END HOMEPAGE DESIGN AREA -->
		<section id="service" class="service-area section-padding">
		    <div class="container">
		        <div class="row">
		            <div class="col-sm-12">

<div class="well" style=" text-align:center;">
<h1>Bienvenue</h1><br>
<h2>vous êtes maintenant connecté</h2>
<div>télécharger le fichier présent dans ce repertoire..</div> <br/>
<a href="/upload/" class="list-group-item" style="width: 20%;margin: auto; border-radius: 5px;" target="_blank"><b>Download</b></a>
<div>J'ai l'impression que le fichier s'est corrompu au momment de l'upload.. pourras tu le réparer? :)</div>
</div>
</div>
</div>
</div>
</section>
 <?php include('components/footer.php'); ?>
