<meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php
    // Falls nicht vorhanden, generiert eine Session(datei)
    // auf dem Server.
    // Falls bereits vorhanden, liest Sessiondaten wieder ein und
    // (re-)initialisiert die gespeicherten Variablen.

    @session_start();	
	
echo '<br><b>\'$_SESSION\'-Variablen</b>' ;
echo '<p>Variablen, die mit Sessions zu tun haben - sagt Guido.</p>' ;



foreach($_SESSION as $key => $value){
echo "<b>".$key.":</b> = ".$value."<br />\n";
}
echo "<br />\n" ;



echo '<br><b>\'$_COOKIE\'-Variablen</b>' ;
echo '<p>Variablen, die mit Cookies zu tun haben - sagt Guido.</p>' ;

    @session_start();
    foreach ($_COOKIE as $key => $value) {
       echo "<b>".$key.":</b>   ".$value."<br>";
    }

	
	


echo '<br><b>HOST-IP</b>' ;
echo '<p>IP-Adresse und Host-Name des Users - sagt Guido.</p>' ;
// IP bestimmen
$ip = getenv('REMOTE_ADDR');

// IP aufloesen und Host bestimmen
$host = gethostbyaddr($ip);

echo "IP-Adresse: " . $ip . "<br> \n" ;
echo "Hostname: " . $host ;


echo '<meta http-equiv="content-type" content="text/html;charset=iso-8859-1">' ;
echo "";
echo "<hr>" ;



echo "<h3> div. vordefinierte Variablen</h3>";

echo '<br><b>\'$_SERVER\'-Variablen</b>' ;
echo '<p>Variablen, die vom Webserver gesetzt werden oder anderweitig direkt mit der ausfuehrenden Umgebung des aktuellen Skripts zusammenhaengen. Entspricht dem alten \'$HTTP_SERVER_VARS\'-Array, das zwar noch zur Verfuegung steht, aber abzulehnen ist.</p>' ;
foreach($_SERVER as $key => $value){
echo "<b>".$key.":</b>   ".$value."<br />\n";
}

echo '<br><b>\'$GLOBALS\'-Variablen</b>' ;
echo '<p>Diese Variable enthaelt eine Referenz zu jeder Variable, die im globalen Bereich des laufenden Skripts zur Verfuegung steht. Die Schluessel dieses Arrays sind die Namen der globalen Variablen. </p>' ;
foreach($GLOBALS as $key => $value){
echo "<b>".$key.":</b>   ".$value."<br />\n";
}

echo '<br><b>\'$_GET\'-Variablen</b>' ;
echo '<p>Variablen, die dem Skript ueber den URL Query-String geliefert werden. Entspricht dem alten \'$HTTP_GET_VARS\'-Array, das zwar noch zur Verfuegung steht, aber abzulehnen ist.</p>' ;
foreach($_GET as $key => $value){
echo "<b>".$key.":</b>   ".$value."<br />\n";
}

echo '<br><b>\'$_POST\'-Variablen</b>' ;
echo '<p>Variablen, die dem Skript ueber HTTP POST geliefert werden. Entspricht dem alten \'$HTTP_POST_VARS\'-Array, das zwar noch zur Verfuegung steht, aber abzulehnen ist.</p>' ;
foreach($_POST as $key => $value){
echo "<b>".$key.":</b>   ".$value."<br />\n";
}

echo '<br><b>\'$_COOKIE\'-Variablen</b>' ;
echo '<p>Variablen, die dem Skript ueber HTTP Cookies geliefert werden. Entspricht dem alten \'$HTTP_COOKIE_VARS\'-Array, das zwar noch zur Verfuegung steht, aber abzulehnen ist.</p>' ;
foreach($_COOKIE as $key => $value){
echo "<b>".$key.":</b>   ".$value."<br />\n";
}

echo '<br><b>\'$_FILES\'-Variablen</b>' ;
echo '<p>Variablen, die dem Skript ueber HTTP Post Datei-Uploads geliefert werden. Entspricht dem alten \'$HTTP_POST_FILES\'-Array, das zwar noch zur Verfuegung steht, aber abzulehnen ist. Fuer mehr Informationen lesen Sie bitte Dateiuploads mit POST.</p>' ;
foreach($_FILES as $key => $value){
echo "<b>".$key.":</b>   ".$value."<br />\n";
}

echo '<br><b>\'$_ENV\'-Variablen</b>' ;
echo '<p>Variablen, die dem Skript ueber die Umgebung geliefert werden. Entspricht dem alten \'$HTTP_ENV_VARS\'-Array, das zwar noch zur Verfuegung steht, aber abzulehnen ist.</p>' ;
foreach($_ENV as $key => $value){
echo "<b>".$key.":</b>   ".$value."<br />\n";
}

echo '<br><b>\'$_REQUEST\'-Variablen</b>' ;
echo '<p>Variablen, die dem Skript ueber die GET-, POST- und COOKIE-Eingabemechanismen geliefert werden und von daher nicht vertrauenswuerdig sind. Die Praesenz und die Reihenfolge der Aufnahme der Variablen in dieses Array ist entsprechend der Konfigurationsanweisung variables_order definiert. Dieses Array hat in PHP vor Version 4.1.0 keine direkte Entsprechung. Siehe auch import_request_variables().</p>' ;
foreach($_REQUEST as $key => $value){
echo "<b>".$key.":</b>   ".$value."<br />\n";
}


echo "<h3>weitere Variablen</b></h3>" ;
echo '<p>$_SERVER[\'PHP_SELF\']         Dateiname des aktuell ausgefuehrten Skripts<br>' ;
echo '$_SERVER[\'HTTP_REFERER\']     Refferer, die Seite von der der Besucher gerade kommt<br>' ;
echo '$_SERVER[\'HTTP_USER_AGENT\']     Gibt Typ und Name des Browsers aus<br>' ;
echo '$_SERVER[\'REMOTE_ADDR\']         IP-Adresse des Besuchers<br>' ;
echo '$_SERVER[\'DOCUMENT_ROOT\']     Gibt den absoluten Pfad zum Verzeichnis aus</p>' ;

echo "<p>PHP_SELF:        " . $_SERVER['PHP_SELF'] .        "<br>";
echo "HTTP_REFERER:    " . $_SERVER['HTTP_REFERER'] .    "<br>";
echo "HTTP_USER_AGENT: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
echo "REMOTE_ADDR:     " . $_SERVER['REMOTE_ADDR']  .    "<br>";
echo "DOCUMENT_ROOT    " . $_SERVER['DOCUMENT_ROOT']  .  "<br>";
echo "user:     " . $user  .    "<br>";
echo "password:     " . $password  .    "</p>";

echo "
CGI-Parameterblock:<br>
Datum: " . $_SERVER['cgidate'] . "<br>
CGI-Release: " . $_SERVER['cgirelease'] . "<br>
Fehlermeldung: " . $_SERVER['cgierrmsg'] . "<br>
Weitere Fehlerinformationen: " . $_SERVER['cgierrinfo'] . "<br>
L?nge der Formularinformationen: " . $_SERVER['CONTENT_LENGTH'] . "<br>
Format der Formulardaten: " . $_SERVER['CONTENT_TYPE'] . "<br>
akzeptierte Formate: " . $_SERVER['HTTP_ACCEPT'] . "<br>
E-Mail-Adresse Browser: " . $_SERVER['HTTP_FROM'] . "<br>
von Webseite: " . $_SERVER['HTTP_REFERER'] . "<br>
Browser: " . $_SERVER[$HTTP_USER_AGENT] . "<br>
CGI-Script: " . $_SERVER['PATH_INFO'] . "<br>
IP-Adresse: " . $_SERVER['REMOTE_ADDR'] . "<br>
aufgel?ste IP: " . $_SERVER['REMOTE_HOST'] . "<br>
Benutzer (UNIX): " . $_SERVER['REMOTE_IDENT'] . "<br>
Benutzer nach Authentifizierung: " . $_SERVER['REMOTE_USER'] . "<br>
";





?>