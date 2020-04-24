<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>la première page a apparaitre</title>
<style >
			body{
				text-align: center;
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-size: cover;
				background-image: url("netflix.jpg");

		}
		p{
			color:white;
			float: center ;
			 font-size: 40px; /* Paragraphes de 14 pixels */
             font-variant:small-caps;
                font-family:sans-serif; 
                text-align: center;
                
		}
		.b1 {
           
        display: block;
        display: inline-block;
          margin: 4px auto 5; /* centrer le bouton */
         }             
        .B2 {
          display: inline-block;
          margin: 6px auto 10;
           display: block;


        }
		</style>
</head>
<body>
	<center><p><strong> Bienvenue sur Netflix </strong></p></center>
       <form name="x" action="Formulaire.php" method="post">
			<input class=b1 type="image" src="sinscrire.png" name ="Inscription"  style="width:500;height:200px">
		</form>
		<form name="f" action="Login.php" method="post">	
            <input class=B2 type="image" src="connection.png" name ="Login "  style="width:500;height:200px">
           </form>


</body>
</html>