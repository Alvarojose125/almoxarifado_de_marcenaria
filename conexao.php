
<?php


define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'almoxarifado');
define('PORT', 3306);
 
$conn = mysqli_connect(HOST, USER, PASS, BASE, PORT);



if (mysqli_connect_errno()) {

	printf("<br>Conexão Falhou: %s\n</br>", mysqli_connect_error());
	
}else{

printf("<br><br>Status da conexão ok: %s\n", mysqli_stat($conn));

}
mysqli_set_charset($conn, "utf8");

?>
