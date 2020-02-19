
<h1>Quel est votre pays ?</h1>
<ul>
	<li><a href="?pays=fr">France</a></li>
	<li><a href="?pays=es">Espagne</a></li>
	<li><a href="?pays=it">Italie</a></li>
	<li><a href="?pays=en">Angleterre</a></li>
</ul><hr/>


<?php 

if(isset($_GET['pays'])){
	switch($_GET['pays']){
		case 'fr' :  echo 'vous êtes français'; break;
		case 'es' :  echo 'vous êtes espagnol'; break;
		case 'it' :  echo 'Vous êtes italien'; break;
		case 'en' :  echo 'Vous êtes anglais'; break;
		default :  echo 'Choisissez un pays valide'; break;
	}
}
else{
	echo 'Choisissez un pays';
}
?>
