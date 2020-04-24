<?php
session_start();
 include("connection.php");
global $connection;
$id=$_GET['Id'];
$user = $connection->prepare('SELECT * FROM utilisateur WHERE Email = '.$id);
  $user->execute();// preparer la requete
  $req=$user->fetch();
if (isset ($_POST['search']))
{
    $valueToSearch = $_POST ['valueToSearch'];
    // recherche dans toutes les colonnes du tableau
    // en utilisant la fonction concat mysql
    $query = "SELECT * FROM series WHERE concat ('Num_serie',Intitulé ,Nombre_d’épisodes, Acteurs,Année_de_sortie,Réalisateur) LIKE   '%". $valueToSearch."%' ";
    $search_result = filterTab ($query);
    
}
 else{
    $query = "SELECT * FROM  series ";
    $search_result = filterTab ($query);
}

// fonction pour connecter et exécuter la requête
function filterTab ($query)
{
    $connect = mysqli_connect ("localhost", "root", "", "netflix");
    $filter_Result = mysqli_query ($connect, $query);
    return $filter_Result;
}
?>
<html>
<head>
 
    <style>
* {
  box-sizing: border-box; /* e rembourrage et la bordure sont inclus dans la largeur et la hauteur*/
  }

#myInput {

  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 80%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1; /* si la souris est possitionner sur les lignesa*/
  cursor: hand;
}
.logo img {
    float:left;
    width :100px;
    height:auto;
}
h2{
   font-variant:small-caps;
    font-family:sans-serif; 
    text-align: center;
     text-shadow: 2px 2px red; 
}
th{
    font-variant:small-caps;
    text-shadow: 1px 2px red;

}
#submit{
    width :12%;
    border:1px solid red;
    background-color:red;
    color:#FFFFFF;
    padding:10px;
    font-size: 20px;


}
</style>
</head>
<body>
     <div class="logo" >
          <img src =logo.jpg>
        </div>
    <h2> LES SÉRIES </h2>
 <form method = "post">
<input  id="myInput" type = "text" name = "valueToSearch" placeholder = "Série à rechercher"> 
 <input id="submit"type="submit" name="search" value="chercher"><br><br>

<table id="myTable" >

  <TR>
 <TH> Num_serie </TH>
 <TH> Intitulé </TH>
 <TH> Nombre_d’épisodes</TH>
 <TH> Acteurs </TH>
 <TH> Année_de_sortie </TH>
 <TH>Réalisateur</TH>
 </TR>
                  <!--  remplir la table de la base de données mysql  -->
                <?php while ($row = mysqli_fetch_array ($search_result)):?>
                <tr  onclick="document.location.href='episode.php?idp=<?php echo $row['Num_serie'];
                   ?>'">
                    <td><?php echo $row['Num_serie'] ;?> </td>
                    <td><?php echo $row['Intitulé'] ;?> </td>
                    <td><?php echo $row['Nombre_d’épisodes'] ;?> </td>
                    <td> <?php echo $row['Acteurs'] ;?> </td>
                    <td><?php echo $row['Année_de_sortie'] ;?> </td>
                    <td><?php echo $row['Réalisateur'] ;?> </td>               </tr> 

                    <?php endwhile;?>          

</table>
</form>
</body>
</html>