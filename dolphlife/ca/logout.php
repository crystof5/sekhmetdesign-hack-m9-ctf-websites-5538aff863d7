<?php
$url_base="http://debbie.dev/ctf/communion_biblique/web";
session_start();
unset($_SESSION['session']);
session_destroy();
header("Location: index.php");
exit;
?>
