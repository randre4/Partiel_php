<?php
$server = "localhost"; $user = "root"; $pass = "root"; $database = "partiel_php";
try { 
   $conn = mysqli_connect($server, $user, $pass, $database);
} 
catch (Exception $e) {
   die('Erreur : '.$e->getMessage());
}
?>