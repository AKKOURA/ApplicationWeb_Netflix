<?php

     
        $servername = "localhost";
        $username = "root";
         $password = "";
         $dbname = "netflix";
        try {
  // se connecter à mysql
  $connection = new PDO("mysql:host=$servername;dbname=$dbname","$username","$password");
  
  echo" conx reussite <br>";
  session_start();
   $email=$_POST['Email'];
   $passe=$_POST['Password'];
   if (empty($_POST['Email']) | empty($_POST['Password'])) 
 {
       echo 'Email et password ne sont pas inscrits du tout';
}
else {
   $stmt=$connection ->prepare("SELECT * from utilisateur where Email = ? AND Password = ? OR Id= ?");
     $stmt->execute(array($email, $passe,'Id'));// car le prenom n'existe pas dans le formulaire
      $userexist= $stmt->rowCount() ;// pour compter le nombre de colonne
      if($userexist==1){// il existe 
        $info=$stmt->fetch();// si   la requette est juste 
        $_SESSION['Email']=$info['Email'];// afin de les mémoriser
         $_SESSION['Password']=$info['Password'];   
         $_SESSION['Id']=$info['Id'];         
         
         header("Location: Accueiloff.php?Id=".$_SESSION['Id']);
       //  header('Location: Accueiloff.php');

      }else{
        echo"l utilisateur n existe pas";
      }
      }          
      } catch (PDOException $e) {
    echo "erreur" .$e->getMessage();
    exit();
  }
  
?>