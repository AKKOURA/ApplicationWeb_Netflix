<?php
session_start();
include("connection.php");
global $connection;
if(isset($_GET['Id']) AND $_GET['Id'] > 0) { // si elle existe et elle est supérieur  a 0
   $getid = intval($_GET['Id']);// afin de sécuriser la variable 
   $requser = $connection->prepare('SELECT * FROM utilisateur WHERE Id = ?');// preparer la requete
   $requser->execute(array($getid));// l'executer 
   $userinfo = $requser->fetch();}// pour ensuite checher les information avec userinfo qui est un tableau qui contient tous les lignes de la requete  
?>
<html>
<head>
<title>Bienvenue sur Netflix </title>
<link rel= "stylesheet" href="style.css" type="text/css"> 
</head>
<body>
<header>
<div class= "main" >
        <div class="logo" >
          <img src =logo.jpg>
        </div>
        <div class="profile">
         <p> <?php echo $userinfo['Nom'];
                            echo " ";
                             echo $userinfo['Prénom'];              ?> </p>
         </div>
 <ul>
	<li class="active" ><a href="#">Home</a></li>
	<li><a href="lesSeries.php?Id=<?php echo $userinfo['Id'];?>">Bibliothèque des series</a></li>
	<li><a href="#">Mon compte </a>
    <ul> 
        <li><a href="profil.php?Id=<?php echo $userinfo['Id']; ?>"> Profil </a></li>
        <li><a href="deconnecter.php">Déconnextion </a></li>
    </ul>  
  </li>

        
</ul>
</div>
<div class="titre">
        <h1>Films, séries TV et bien plus en illimité.</h1>
</div>
</header>
</body>
</html>