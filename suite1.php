<?php 

include("connection.php");
global $connection;
session_start();
  $email=$_POST['id'];
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $date = $_POST['date'];
  $tel = $_POST['tel'];
  $passe= $_POST['passe'];
  
  
  // Requête mysql pour insérer des données
  $inserer = "INSERT INTO utilisateur (Email,Prénom,Nom,Tel,date_de_naissanse,Password ) VALUES ( '$email','$prenom','$nom','$tel','$date','$passe')";
  $res = $connection->prepare($inserer);
  $e= $res->execute(array(":Email"=>$email,":Prénom"=>$prenom,":Nom"=>$nom,":Tel"=>$tel,":date_de_naissanse"=>$date,":Password"=>$passe));
  // vérifier si la requête d'insertion a réussi
 
  if($e){
       
     $stmt=$connection ->prepare("SELECT * from utilisateur where Email = ? AND Password = ? OR Id= ?");
     $stmt->execute(array($email, $passe,'Id'));// car le prenom n'existe pas dans le formulaire
      $userexist= $stmt->rowCount() ;// pour compter le nombre de colonne
     
        $info=$stmt->fetch();// si   la requette est juste 
        $_SESSION['Email']=$info['Email'];// afin de les mémoriser
         $_SESSION['Password']=$info['Password'];   
         $_SESSION['Id']=$info['Id'];         
         
         header("Location: Accueiloff.php?Id=".$_SESSION['Id']);
          
    
  }else{
    echo "echec de l operation d  insertion";
  }

?>
