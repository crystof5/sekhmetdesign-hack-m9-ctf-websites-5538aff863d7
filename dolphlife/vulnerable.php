<?php
session_start();
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
    <label>Vous pouvez placer vos photos en ligne sur notre serveur</label><br>
    <label>Seulement les photos sont accepté</label>
   
<form method="POST" action="upload.php" enctype="multipart/form-data">

     <input type="hidden"  style="width: 500px; margin:auto; display:block;" class="form-control" name="MAX_FILE_SIZE" value="100000000"> <br/>
 
    <input style=" margin: 0 auto;" type="file" name="avatar" > <br/>
       <button type="submit" name="envoyer"  accept="image/png" class="btn btn-success">Envoyer le fichier</button>
  
</form>
</div>
<div class="well" style="text-align:center;">
<label>Pour consulter les fichier uploadé, veuillez cliquer sur le bouton "Download"</label>

 <!--<br/> <br/> <br/> <br/> <br/> <br/> <br/> -->
<a href="upload/" class="list-group-item" style="width: 20%;margin: auto; border-radius: 5px;" target="_blank"><b>Download</b></a>
</div>

</div>
</div>
</div>
</section>
 <?php include('components/footer.php'); ?>
