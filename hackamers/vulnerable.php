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
       <button type="submit" name="envoyer" onclick="verif_extension(document.forms['formsUpload'].avatar.value) " accept="image/png" class="btn btn-success">Envoyer le fichier</button>
  
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


 <script type="text/javascript">
 
function recup_extension(fichier) // fonction de récupération extension fichier
   {
         if (fichier!="")// si le champ fichier n'est pas vide
         {
            nom_fichier=fichier;// on récupere le chemin complet du fichier
            nbchar = nom_fichier.length;// on compte le nombre de caractere que compose ce chemin
            extension = nom_fichier.substring(nbchar-4,nbchar); // on récupere les 4 derniers caracteres
            extension=extension.toLowerCase(); //on uniforme les caracteres en minuscules au cas ou cela aurait été écris en majuscule...
            return extension; // on renvoi l'extension vers la fonction appelante
         }
   }

function verif_extension(fichier)// fonction vérification de l'extension aprés avoir choisi le fichier
   {console.log(fichier);

   ext = recup_extension(fichier);// on appelle la fonction de récupération de l'extension et on récupere l'extension
            if(ext==".jpg"||ext==".gif"||ext==".png" ||ext==".jpeg"){  document.formsUpload.submit();

            

             }// si extension = a une des extension suivante alors tout est ok donc ... pas d'erreur
            else // sinon on alert l'user de la mauvaise extension
            { 
               alert("Attention les images au format '"+extension+"' ne sont pas autorisées !\n");

               document.forms['formsUpload'].focus();

              return false;
            }
   }
 </script>

 <script src="../js/jquery-3.2.1.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
