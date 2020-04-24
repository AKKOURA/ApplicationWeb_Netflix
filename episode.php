<?php
session_start();
 include("connection.php");
  global $connection;
   $nums=$_GET['idp'];// reucupèrer l'id qu'on avais passsé par onclick dans l'url
   $requser = $connection->prepare('SELECT * FROM  series WHERE Num_serie = '.$nums);// Prépare une requête à l'exécution et retourne un objet
   $requser->execute();// Exécute une requête préparée
   $rep=$requser->fetch();//Retourne un tableau contenant toutes les lignes qui concerne l'execution de la requête

   
?>
<html>
<head>
	<style type="text/css">
    body{
        background-image: url("netflix.jpg");
    }
	#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 20px;
}

#myTable th, #myTable td {
  text-align: center ;
  padding: 12px;

}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  cursor: hand;/* afficher le curseur come une main */
}
.logo img {
    float:left;
    width :100px;
    height:auto;
}
h2,th{
   font-variant:small-caps;
    font-family:sans-serif; 
    text-align: center;
     text-shadow: 2px 2px red; 
     color:#fff;
}
.logo img {
    float:left;
    width :100px;
    height:auto;
}

</style>
</head>
<body>
	 <div class="logo" >
          <img src =logo.jpg>
        </div>
    <h2> les episodes  </h2>
<table id="myTable" >

  <TR>
 <th > La liste des episodes de la serie <?php  echo $rep['Intitulé'];?> </th> <!--recupérer l'intitulé de de la serie en utilisant le tableau $rep   -->
 
 </TR><tr>
           <td>
                  <!--  remplir la table de la base de données mysql en utilisant le nombre d'episode de chaque serie et affichant les episodes ensuite   -->
                <?php for($i=1;$i<=$rep['Nombre_d’épisodes'];$i++ ){?>
                <a href="visionner.php?ide=<?php echo $i; ?>" > <input type="button" value="episode <?php echo $i; ?>" 
                />             </a>
          <?php } ?>
          </td>
        </tr>
                      

</table>
</form>
</body>
</html>