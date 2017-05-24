<?php
$srv = "localhost";
$user = "root";
$pass = "";//sqlpassc998dee827110c
$dbname = "web2";

try {
	$db = new PDO("mysql:host={$srv};dbname={$dbname}", $user, $pass);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed : ". $e->getMessage());
}

//Creation d'un objet User avec la bd
include_once "User.class.php";
$user = new User($db);

?>
