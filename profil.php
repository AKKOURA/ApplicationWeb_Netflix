<?php
session_start();
 include("connection.php");
global $connection;
if(isset($_GET['Id']) AND $_GET['Id'] > 0) {// si elle existe et elle est > a 0
   $getid = intval($_GET['Id']);// afin de sécuriser la variable 
   $requser = $connection->prepare('SELECT * FROM utilisateur WHERE Id = ?');// preparer la requete
   $requser->execute(array($getid));// l'executer 
   $userinfo = $requser->fetch();}// pour ensuite checher les information avec userinfo  qui regroupe toutes les lignes
?>
<html>
   <head>
      <title>Profil</title>
      <meta charset="utf-8">
      <style>
      .profil{
         border: 2px solid black;
           color:white;
            width: 400px;
            height: 400px; 
            padding-left: 100px;
            border: solid 1px red;
            background-image: url("netflix.jpg");
            font-weight:bold;
            text-shadow: 2px 2px red; 
            font-size: 27px;
            
            text-align: center;
      }
      </style>
   </head>
   <body>
      <div  class = "profil" >
         <h2>Profil de <?php echo $userinfo['Nom']; ?></h2>
         <br /><br />
         Prénom = <?php echo $userinfo['Prénom']; ?>
         <br />
         Email = <?php echo $userinfo['Email']; ?>
         <br />
          Téléphone = <?php echo $userinfo['Tel']; ?>
         <br />
          Date de naissance  = <?php echo $userinfo['date_de_naissanse']; ?>
         <br />
         
      </div>
   </body>
</html>