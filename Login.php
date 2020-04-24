
<html >
<head>
<title>Login Page PHP Script</title>
    <style type="text/css">
    body
    {
        font-family:Arial, Helvetica, sans-serif;
        font-size:14px;
        background-image: url("nn.png");			
    }
    label,p
    {
        font-weight:bold;
        width:100px;
        font-size:14px;
        color :white;
    }
    .box
    {
        border:1px solid red;
        margin-left:10px;
        width:60%;
    }
    .submit{
        border:1px solid red;
        background-color:red;
        color:#FFFFFF;
        float:right;
        padding:2px;
    }
    </style>
</head>
<body bgcolor="#FFFFFF">
 
    <div align="center">
        <div class="tLink"><label><strong>Connectez vous :</strong></label></div><br />
        <div style="width:800px;height:200px; border: solid 1px red; " align="left">
            <?php
                if(isset($errMsg)){
                    echo '<div style="color:#FF0000;text-align:center;font-size:12px;">'.$errMsg.'</div>';
                }
            ?>
            <div style="background-color:red; color:#FFFFFF; padding:3px;"><b>Login</b></div>
            <div style="margin:40px">
                <form action="suite2.php" method="post">
                    <label>Email  :</label><input type="text" name="Email" class="box"/><br /><br />
                    <label>Mot de passe :</label><input type="password" name="Password" class="box" /><br/><br />
                    <input type="submit" name='submit' value="Connect" class='submit'/><br />
                    <label><b>Si vous etes pas encore inscrit ,pour s'inscrir cliquez ici  <a href="Formulaire.php">M'inscrire</a></b></labek>
                </form>

            </div>
        </div>
    </div>

</body>
</html>
