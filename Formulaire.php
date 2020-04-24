<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Devenez Membre sur netflix</title>
		<style >
			body{
				text-align: center;
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-size: cover;
				background-image: url("inscrire.jpg");
				
				
				
			}
			form{
				border: 2px solid black;
			
				width: 650px;
				height: 500px; 
				padding-left: 100px;
				text-align: left;
				border: solid 1px red;
				
				
			}
			
			label,p{
				font-variant:small-caps;
                font-family:sans-serif,bold; 
                color :red;
                font-weight:bold;
							}
			h2{
				  text-shadow: 2px 2px red; 
				  color :white;
           
			}
			.logo img {
	      float:left;
	      width :150px;
	       height:auto;
           }
		</style>
	</head>
	<body> <div class="logo" >
          <img src =logo.jpg>
        </div>
		<div align="center">
		<form name="Formulaire" action="suite1.php" method="post" >
			<h2>Veuillez remplir le fromulaire suivant pour s'inscrire:</h2>
			
	 <label>Email:	<input type="text" name="id"  autocomplete="on"  /> </label><br><br>
	 <label>Prenom:	<input type="text"  name="prenom" autocomplete="on"  /></label><br><br>
	 <label>Nom:  <input type="text"name="nom" autocomplete="on"  /></label><br><br>
	 <label> Date de naissance: <input type="date" name="date" /></label><br><br>				
	<label>Téléphone: <input type="tel" name="tel" /></label><br><br>
	 <label>Mot de passe : <input name="passe"  type="password" required="required"
               pattern="(?=^.{4,8}$)(?=.*\d)(?=.*[A-Z])(?=.*[a-z]).*\W.*$"
               title="le mot de passe doit contenir entre 4 et 8 caractères et avoir
		      au moins un chiffre, une lettre majuscule, une lettre minuscule
		      et un caractère d'un autre type "/></label><br/><br>
			<input type="image" src="bouton.jpg" name ="Inscription"  style="width:150px;height:60px">
			<br>
			<br>
			<p><b>Si vous etes déjà inscrit ,pour se connecter cliquez ici   <a href="Lgin.php">Me connecter</a></b></p>
		</form>
	
     </div>
	</body>
</html>