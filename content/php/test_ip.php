Connection Test Rolisteam
<?php
//phpinfo();
error_reporting(E_ALL);

echo '<form action="" method="post">Address:<input name="address" id="address" /><br/>
	Port:<input name="port" id="port" value="6660" /><br/>
	<input type="submit" value="Test"/>';


if(!empty($_POST['address']))
{
	echo "<h2>Connexion TCP/IP</h2>\n";

	/* Lit le port du service WWW. */
	$service_port = $_POST['port'];

	/* Lit l'adresse IP du serveur de destination */
	$address = $_POST['address'];

	/* Crée un socket TCP/IP. */
	$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
	if ($socket === false) {
	    echo "socket_create() fails ! Details :  " . socket_strerror(socket_last_error()) . "<br/>";
	} else {
	    echo "Creation Socket: OK <br/>";
	}

	echo "Try to connect to '$address' on port '$service_port'...<br/>";
	$result = socket_connect($socket, $address, $service_port);
	if ($result === false) {
	    echo "Fails ! Details : ($result) " . socket_strerror(socket_last_error($socket)) . "<br/>";
	} else {
	    echo "Good News ! Connection succeed!<br/>";
	}

	
	echo "Data reading (2s) : <br/>";
	/*while ($out = socket_read($socket, 2048)) {
	    echo $out;
	}*/

	echo "<br/>Close Socket";
	socket_close($socket);
	echo " OK.<br/>";
}





?>

