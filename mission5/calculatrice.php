<h1>Effectuez un calcul</h1>

<form method="post" action="resultat.php">

	<input type="number" name="n1" />
	<select name="op">
		<option value="addition">+</option>
		<option value="soustraction">-</option>
		<option value="multiplication">*</option>
		<option value="division">/</option>
	</select>
	<input type="text" name="n2" />
	<input type="submit" value="Calculer" />
</form>