<?php


$tab = array(
	"tableau" => array(
		0 => "julien", 
		1 => "nicolas", 
		2 => "mathieu", 
		3 => "christelle", 
		4 => "nina", 
		5 => "johanna"
	)
);

echo '<pre>'; 
print_r($tab);
echo '</pre>'; 

echo 'Bonjour ' . $tab['tableau'][2] . ' !<br/>';

$f = fopen('prenom.txt', 'a');
fwrite($f, $tab['tableau'][2] . "\r\n"); 

?>
