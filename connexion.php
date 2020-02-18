<!DOCTYPE html>
<html>
<body>

<form action="#" method="POST">
	<label for="name">Nom :</label>
	<input type="text" id="name" name="name">

	<label for="firtsname">Prénom :</label>
	<input type="text" id="prenom" name="prenom" >

		<input type="submit">
</form>

<?php
var_dump($_POST);
?>

<?php

function traitementconnexion(array $connexion) {

	$erreurs = [];

	if (empty($connexion['name'])) {
		$erreurs['name'] = 'Veuillez saisir un nom';
	}

	if (empty($connexion['prenom'])) {
		$erreurs['prenom'] = 'Veuillez saisir un prénom';
	}


	if (!empty($erreurs)) {
		return [
			'success' => false,
			'erreurs' => $erreurs,
		];
	}

	return [
		'success' => true,
	];



	var_dump($erreurs);

	
}


$traitement = traitementconnexion($_POST);

?>

<?php

$_SESSION = ["utilisateur"] = [
"utilisateur" => [
	"email" => "mhd",
	],

];




?>

</body>
</html>





