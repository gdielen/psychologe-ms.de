<meta http-equiv="content-type" content="text/html;charset=utf-8"><?php//Zugangsdaten$dbname="psych_User";		//Name der Datenbank$user="psych_Db";			//Benutzername fuer den MySQL-Zugang$password="vVz1e4?8";		//Passwort$host="127.0.0.1";			//Name (IP-Adr.) des Rechners mit MySQL//Verbindung aufbauen$link = mysqli_connect($host, $user, $password, $dbname) or die ("Verbindung fehlgeschlagen");if (!$link) {    echo "Fehler: konnte nicht mit MySQL verbinden." . PHP_EOL;    exit;}mysqli_query($link, "SET NAMES 'utf8'");//Datenbank als Standard definierenmysqli_select_db($link, $dbname);?>