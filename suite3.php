<?php 
include("connection.php");
global $connection;
 
  $int = $_POST['Intitulé'];
  $nbe = $_POST['Nombre_d’épisodes'];
  $act = $_POST['Acteurs'];
  $ann = $_POST['Année_de_sortie'];
  $rea= $_POST['Réalisateur'];
  // Requête mysql pour insérer des données
  $inserer = "INSERT INTO series (Intitulé, Nombre_d’épisodes,Acteurs, Année_de_sortie,Réalisateur ) VALUES ('$int','$nbe','$act','$ann','$rea')";
  $res = $connection->prepare($inserer);
  $e = $res->execute(array(":Intitulé"=>$int,":Nombre_d’épisodes"=>$nbe,":Acteurs"=>$act,":Année_de_sortie"=>$ann,":Réalisateur"=>$rea));
  // vérifier si la requête d'insertion a réussi
  if($e){
      echo"<b> la serie est bien insérer <b>" ;
  }else{
    echo "echec de l operation d  insertion";
  }

  $reponse = $connection->query('SELECT Num_serie, Intitulé, Nombre_d’épisodes ,Acteurs, Année_de_sortie,Réalisateur FROM  series ');
?>
<html>
<head>
</head>
<body>

<TABLE BORDER="1">
  <CAPTION> <b>Listes de  series</b></CAPTION>
  <TR>
 <TH> Num_serie </TH>
 <TH> Intitulé </TH>
 <TH> Nombre_d’épisodes</TH>
 <TH> Acteurs </TH>
  <TH> Année_de_sortie </TH>
   <TH> Réalisateur</TH>
  
  </TR>
  <?php
  while ($donnees = $reponse->fetch())
{
    //On affiche les données dans le tableau
    echo "<tr>";
    echo "<td> $donnees[Num_serie] </td>";
    echo "<td> $donnees[Intitulé] </td>";
    echo "<td> $donnees[Nombre_d’épisodes] </td>";
     echo "<td> $donnees[Acteurs] </td>";
      echo "<td> $donnees[Année_de_sortie] </td>";
      echo "<td> $donnees[Réalisateur] </td>";
    echo "</tr>";
 
     
}
  ?>

</body>
</html>