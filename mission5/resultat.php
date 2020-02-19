<?php 
if($_POST){
	
	echo '<pre>'; 
	print_r($_POST);
	echo '</pre>'; 
	
	if(is_numeric($_POST['n1'])  && is_numeric($_POST['n2'])){
		switch($_POST['op']){
			
			case 'addition' : $resultat = $_POST['n1'] + $_POST['n2']; break;
			case 'soustraction' : $resultat = $_POST['n1'] - $_POST['n2']; break;
			case 'multiplication' : $resultat = $_POST['n1'] * $_POST['n2']; break;
			case 'division' : $resultat = $_POST['n1'] / $_POST['n2']; break;
			
			default : $resultat = '<b>Caclul impossible</b>';
		}
	}
	else{
		header('location:calculatrice.php');
	}
	echo 'Le resultat est : ' .$resultat . '<br>';
}
echo '<a href="calculatrice.php">Effectuer un autre calcul</a>';