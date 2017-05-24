<?php session_start();
  
if(!$_SESSION['username']) {
  
    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
}  
 ?>

<html>
<head>
<meta http-equiv="refresh" content="3;url=welcome.php" />
</head>
<body>

<?php
$dossier = 'upload/';
$fichier = basename($_FILES['avatar']['name']);
$taille_maxi = 100000000;
$taille = filesize($_FILES['avatar']['tmp_name']);

if($taille>$taille_maxi)
{
     $erreur = 'Le fichier est trop gros...';
}
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
     //On formate le nom du fichier ici...
     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
     if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que   a a fonctionn  ...
     {
          echo 'Upload effectu   avec succ  s !';
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
}
else
{
     echo $erreur;
}
?>
</body>
</html>
