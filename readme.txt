Le nom de la base de donnée :netflix
j'ai utilisé L’application  xampp  pour implémenter la base de donnée ; le mot de passe il reste une chaine vide, l’identifiant :root.
Concernant mon projet ;
->il commence par la page Accueil. php ou je propose soit de se connecter ou de s'inscrire ,ensuite les formulaires d'inscriptions(Formulaire.php )et de connexions(Login.php).
Une fois l'utilisateur connecté ou inscrit, il aura accès a une page d’accueil (Accueiloff.php) .
Dans la page d’accueil j’ai intégré la barre de navigation qui se compose de la bibliothèque des séries et le compte utilisateur (qui constitue d’un menu ; déconnexion(deconnecter.php) + le profil (profil. PHP)), et je mis en place une petite touche de mise en page avec CSS(style.css) ;
Dans la pages des séries(LesSeries.php), j’ai affiché les séries avec un filtre, de sorte que chaque colonne est cliquable et renvois vers la liste des épisodes (en utilisant l’attribut onclick ))
Chaque épisode est représenté par un bouton et il renvoie vers une page visionner.php (virtuel).
