<?php 
if($_POST){
	echo '<pre>'; 
	print_r($_POST);
	echo '</pre>'; 
	
	foreach($_POST as $indice => $valeur){
		echo ucfirst($indice) . ' : <strong>'. $valeur .'</strong><br>';
	}
}
?>
<h1>Formulaire</h1>
<form method="post" action="">
	<input type="text" name="prenom" placeholder="Prénom" /><br>
	<input type="text" name="nom" placeholder="Nom" /><br>
	<input type="text" name="adresse" placeholder="Adresse" /><br>
	<input type="text" name="ville" placeholder="Ville" /><br>
	<input type="text" name="cp" placeholder="Code Postal" /><br>
	<select name="sexe">
		<option>Sexe</option>
		<option value="m">Homme</option>
		<option value="f">Femme</option>
	</select><br>
	<textarea name="description" placeholder="description"></textarea><br>
	<input type="submit" value="Envoie" />
</form>