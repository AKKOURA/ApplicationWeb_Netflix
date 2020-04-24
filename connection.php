<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "netflix";

//if(isset($_POST['Inscription'])){
  try {
  // se connecter à mysql
  $connection = new PDO("mysql:host=$servername;dbname=$dbname","$username","$password");
  } catch (PDOException $e) {
    echo "erreur" .$e->getMessage();
    exit();
  }
  echo" ";
  ?>
