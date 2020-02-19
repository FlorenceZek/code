<h1>Mission 2</h1>
<form method="post" action="" >
	<label>Date de naissance: </label><br/>
	<select name="jour">
		<?php 
		for($i=1; $i <= 31; $i++){
			echo "<option>$i</option>"; 
		}
		?>
	</select>
	<select name="mois">
		<?php 
		$mois = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
		foreach($mois as $m){
			echo '<option>'. $m .'</option>'; 
		}
		?>
	</select>
	<select name="annee">
		<?php 
		$i = date('Y');
		while($i >= 1900 ){
			echo '<option>' . $i . '</option>';
			$i--;
		}
		?>
	</select>
	<br><br><input type="submit" value="Inscription" />
</form>