Le nom de la base de donn�e :netflix
j'ai utilis� L�application  xampp  pour impl�menter la base de donn�e ; le mot de passe il reste une chaine vide, l�identifiant :root.
Concernant mon projet ; il commence par la page Accueil. php ou je propose soit de se connecter ou de s'inscrire ,ensuite les formulaire d'inscriptions(Formulaire.php )et de connexion(Login.php).
Une fois l'utilisateur connect� ou inscrit, il aura acc�s a une page d�accueil (Accueiloff.php) .
Dans la page d�accueil j�ai int�gr� la barre de navigation qui se compose de la biblioth�que des s�ries et le compte utilisateur (qui constitue d�une menue ; d�connexion(deconnecter.php) +le profil (profil. PHP)), et je mis en place une petite touche de mise en page avec CSS(style.css) ;
Dans la pages des s�ries(LesSeries.php), j�ai affich� les s�ries avec un filtre, de sorte que chaque colonne est cliquable et renvois vers la liste des �pisodes (en utilisant l�attribut onclick ))
Chaque �pisode est repr�sent� par un bouton et il renvoie vers une page visionner.php (virtuel) .
