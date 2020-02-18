<ul>
	<li><a href="./index.php">Accueil</a></li>
	<li><a href="./contact.php">Contact</a></li>
	<li><a href="./contacts.php">Liste des contacts</a>

	<?php


		// Si un utilisateur est entré dans la session, on affiche son nom et son prénom
		// Dans le cas contraire, on lui demande de se connecter
		if(isset($_SESSION['utilisateur'])) {

			$utilisateur = $_SESSION['utilisateur'];
			echo 'Bienvenue' .$utilisateur['prenom'].' '.$utilisateur['nom'];


		} else {
			echo '<li><a href="#">Se connecter</a></li>';

		}


	?>


	</li>
</ul>