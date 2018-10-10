<?php 
//phpinfo(); exit;

echo 'Index<br/>';
echo 'Alteracao para o branch1...';

// conexao com o mysql
$bd = mysqli_connect('localhost','root','','projeto1');
//debug($bd);

$rs = $bd->query('select * from usuario');
debug($rs);

if ($rs) {
	foreach($rs as $row) {
		debug($row);
	}
}



function debug($var,$vardump=false) {
	echo '<pre>';
	if ($vardump) {
		var_dump($var);
	} else {
		print_r($var);
	}
	echo '</pre>';
}
?>