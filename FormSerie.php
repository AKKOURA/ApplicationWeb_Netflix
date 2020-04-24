<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<style >
			body{
				text-align: center;
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-size: cover;
			}
			form{
				 border: 2px solid black;
				background-color: white;
				width: 650px;
				height: 400px; 
				padding-left: 100px;
				text-align: left;
				background-image: url("imag.jpg");
			}
			.submit{
        border:1px solid #006D9C;
        background-color:#B8860B;
        color:white;
        float:center;
        padding:5px;
        width:60px;
        height:40px
         }
         label,h3{
				font-variant:small-caps;
                font-family:sans-serif; 
							}
			h2{

			}
		</style>
	</head>
	<body><div align="center">
		<form name="Formulaire" action="suite3.php" method="post">
			<h2>Veuillez remplir le fromulaire suivant pour insérer une série:</h2>
			<h3>Formulaire</h3>
	<label><b>	Intitulé:	</b><input type="text", name="Intitulé", autocomplete="on"  /></label><br><br>
	<label><b>	Nombre d’épisodes : </b><input type="number"  name="Nombre_d’épisodes" autocomplete="on"  /></label><br><br>
	<label><b>	Acteurs:  </b><input type="text" name="Acteurs"  autocomplete="on"  /></label><br><br>
	<label><b>	Année de sortie: </b><input type="number" name="Année_de_sortie" /></label><br><br>				
	<label><b>	Réalisateur: </b><input type="text" name="Réalisateur" /></label><br><br>
			<input type="submit" name='submit' value="Insert" class='submit'/><br />
		</form>
	
     </div>
	</body>
</html>