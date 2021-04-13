<!DOCTYPE html>

<?php
	session_start();
	// Error Reporting zunächst komplett abschalten
	// error_reporting(0);
	// include_once("include/debug.inc.php");
	date_default_timezone_set('Europe/Berlin');
	// echo "<p>heutiges Datum: " . date("d.m.Y H:i:s");
?>

<html lang="de">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Psychologische Praxis Münster - gdt">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Psychologische Praxis Münster - Beratung, Therapie, Diagnostik, Gutachten</title>
</head>

<body>
	<header class="banner">
		<a id="gdt" title="zurück zur Startseite!" href="index.php"><img src="img/gdt_2101.gif"  alt="psychologische Beratung"></a>
		<h2><a id="logo" title="zurück zur Startseite!" href="index.php">Psychologische Praxis<span> Münster</span> - <span class="akzent2">Guido&nbsp;Dielen</span></a></h2>
		<a id="navlink" title="zum Navigationsmenü" href="#navigation">☰</a>
	</header>


<main id="main">
	<header>
		<h1><span><i class="fas fa-envelope  fa-lg"></i> </span> <span class="akzent2">Anmelden<span></h1>
		<p>Bitte nutzen Sie das folgende Formular, um uns einige Angaben über sich und Ihre Anliegen zu machern. Wir antworten kurzfristig. 
		<br>Fast alle Angaben sind freiwillg. <strong>Bitte füllen Sie</strong> (nur) <strong>die Felder aus, die Sie uns mitteilen wollen</strong>.<p>
		<h2><span>Ihre Angaben:</span></h2>
		
		<top>
		<h2><i class="fa fa-user-edit fa-lg"></i> Anfrage / Anmeldung</h2>
		</top>
	
	</header>
	

		
	<?php
		if(isset($_POST['absenden'])) {
			// echo "absenden";
			//Formular ausgeführt - E-Mail generieren und Meldung ausgeben
			//HTML- und PHP-Tags aus den Eingabefeldern entfernen
			$_SESSION[anrede]			= trim( stripslashes( strip_tags($_POST['anrede'])  ));
			$_SESSION[vorname]			= trim( stripslashes( strip_tags($_POST['vorname'])  ));
			$_SESSION[nachname]			= trim( stripslashes( strip_tags($_POST['nachname'])  ));
			$_SESSION[geschlecht]		= trim( stripslashes( strip_tags($_POST['geschlecht'])  ));
			$_SESSION[geboren]			= trim( stripslashes( strip_tags($_POST['geboren'])  ));
			$_SESSION[strasse]			= trim( stripslashes( strip_tags($_POST['strasse'])  ));
			$_SESSION[hausnr]			= trim( stripslashes( strip_tags($_POST['hausnr'])  ));
			$_SESSION[plz]				= trim( stripslashes( strip_tags($_POST['plz'])  ));
			$_SESSION[ort]				= trim( stripslashes( strip_tags($_POST['ort'])  ));
			$_SESSION[beruf]			= trim( stripslashes( strip_tags($_POST['beruf'])  ));
			$_SESSION[beziehung]		= trim( stripslashes( strip_tags($_POST['beziehung'])  ));
			$_SESSION[getrennt]			= trim( stripslashes( strip_tags($_POST['getrennt'])  ));
			$_SESSION[vorname2]			= trim( stripslashes( strip_tags($_POST['vorname2'])  ));
			$_SESSION[nachname2]		= trim( stripslashes( strip_tags($_POST['nachname2'])  ));
			$_SESSION[geschlecht2]		= trim( stripslashes( strip_tags($_POST['geschlecht2'])  ));
			$_SESSION[geboren2]			= trim( stripslashes( strip_tags($_POST['geboren2'])  ));
			$_SESSION[strasse2]			= trim( stripslashes( strip_tags($_POST['strasse2'])  ));
			$_SESSION[hausnr2]			= trim( stripslashes( strip_tags($_POST['hausnr2'])  ));
			$_SESSION[plz2]				= trim( stripslashes( strip_tags($_POST['plz2'])  ));
			$_SESSION[ort2]				= trim( stripslashes( strip_tags($_POST['ort2'])  ));
			$_SESSION[beruf2]			= trim( stripslashes( strip_tags($_POST['beruf2'])  ));
			$_SESSION[beziehung2]		= trim( stripslashes( strip_tags($_POST['beziehung2'])  ));
			$_SESSION[getrennt2]		= trim( stripslashes( strip_tags($_POST['getrennt2'])  ));
			$_SESSION[kinder]			= trim( stripslashes( strip_tags($_POST['kinder'])  ));
			$_SESSION[vorname_kind1]	= trim( stripslashes( strip_tags($_POST['vorname_kind1'])  ));
			$_SESSION[nachname_kind1]	= trim( stripslashes( strip_tags($_POST['nachname_kind1'])  ));
			$_SESSION[geboren_kind1]	= trim( stripslashes( strip_tags($_POST['geboren_kind1'])  ));
			$_SESSION[vorname_kind2]	= trim( stripslashes( strip_tags($_POST['vorname_kind2'])  ));
			$_SESSION[nachname_kind2]	= trim( stripslashes( strip_tags($_POST['nachname_kind2'])  ));
			$_SESSION[geboren_kind2]	= trim( stripslashes( strip_tags($_POST['geboren_kind2'])  ));
			$_SESSION[vorname_kind3]	= trim( stripslashes( strip_tags($_POST['vorname_kind3'])  ));
			$_SESSION[nachname_kind3]	= trim( stripslashes( strip_tags($_POST['nachname_kind3'])  ));
			$_SESSION[geboren_kind3]	= trim( stripslashes( strip_tags($_POST['geboren_kind3'])  ));
			$_SESSION[weitere_kinder]	= trim( stripslashes( strip_tags($_POST['weitere_kinder'])  ));
			
			$_SESSION[telefon]			= trim( stripslashes( strip_tags($_POST['telefon'])  ));
			$_SESSION[telefax]			= trim( stripslashes( strip_tags($_POST['telefax'])  ));
			$_SESSION[mobil]			= trim( stripslashes( strip_tags($_POST['mobil'])  ));
			$_SESSION[email]			= trim( stripslashes( strip_tags($_POST['email'])  ));
			$_SESSION[erreichbar]		= trim( stripslashes( strip_tags($_POST['erreichbar'])  ));

			$_SESSION[anliegen]			= trim( stripslashes( strip_tags($_POST['anliegen'])  ));
			$_SESSION[terminwunsch]		= trim( stripslashes( strip_tags($_POST['terminwunsch'])  ));
			$_SESSION[modus]			= trim( stripslashes( strip_tags($_POST['modus'])  ));
			$_SESSION[dringend]			= trim( stripslashes( strip_tags($_POST['dringend'])  ));
			$_SESSION[nachricht]		= trim( stripslashes( strip_tags($_POST['nachricht'])  ));

			$_SESSION[inhaber]			= trim( stripslashes( strip_tags($_POST['inhaber'])  ));
			$_SESSION[iban]				= trim( stripslashes( strip_tags($_POST['iban'])  ));
			$_SESSION[bic]				= trim( stripslashes( strip_tags($_POST['bic'])  ));
			$_SESSION[bank]				= trim( stripslashes( strip_tags($_POST['bank'])  ));
			$_SESSION[sepa]				= trim( stripslashes( strip_tags($_POST['sepa'])  ));
			$_SESSION[agb]				= trim( stripslashes( strip_tags($_POST['agb'])  ));

			$_SESSION[nospam]			= trim( stripslashes( strip_tags($_POST['nospam'])  ));
			
			
			//Session-Variablen des aktuellen Vorgangs schreiben:
			$_SESSION[jetzt]				= date("Y-m-d H:i:s");  /* MySL-Format lr. PHP-Handbuch */

			$_SESSION['lastmodified']		=  date("Y-m-d H:i:s");  /* MySL-Format lr. PHP-Handbuch */
			$_SESSION['lastmodified_by']	= gethostbyaddr($_SERVER['REMOTE_ADDR']) ;  //alternativ, sofern gesetzt, bietet aber weniger:  echo $_SERVER['REMOTE_HOST']
			$_SESSION['lastmodified_ip']	= $_SERVER['REMOTE_ADDR'] ;
			$_SESSION['session_id']			= session_id() ;
			$_SESSION['browser']			= $_SERVER['HTTP_USER_AGENT']  ;
			$_SESSION['quelle']				 = "online eingetragen " . $_SERVER['REMOTE_USER'] ;
		
		
	/*		Lokale Variablen für Datenbank aufarbeiten, 
			globale SESSION-Variablen für eMail verwenden  */
			
	/*		$anrede			= $_SESSION[anrede];
			$vorname		= $_SESSION[vorname];
			$nachname		= $_SESSION[nachname];
			$geschlecht		= $_SESSION[geschlecht];
			$geboren		= $_SESSION[geboren];
			$strasse		= $_SESSION[strasse];
			$hausnr			= $_SESSION[hausnr];
			$plz			= $_SESSION[plz];
			$ort			= $_SESSION[ort];
			$beruf			= $_SESSION[beruf];
			$beziehung		= $_SESSION[beziehung];
			$getrennt		= $_SESSION[getrennt];
			
			$vorname2		= $_SESSION[vorname2];
			$nachname2		= $_SESSION[nachname2];
			$geschlecht2	= $_SESSION[geschlecht2];
			$geboren2		= $_SESSION[geboren2];
			$strasse2		= $_SESSION[strasse2];
			$hausnr2		= $_SESSION[hausnr2];
			$plz2			= $_SESSION[plz2];
			$ort2			= $_SESSION[ort2];
			$beruf2			= $_SESSION[beruf2];
			$beziehung2		= $_SESSION[beziehung2];
			$getrennt2		= $_SESSION[getrennt2];
			
			$kinder			= $_SESSION[kinder];
			$vorname_kind1	= $_SESSION[vorname_kind1];
			$nachname_kind1	= $_SESSION[nachname_kind1];
			$geboren_kind1	= $_SESSION[geboren_kind1];
			$vorname_kind2	= $_SESSION[vorname_kind2];
			$nachname_kind2	= $_SESSION[nachname_kind2];
			$geboren_kind2	= $_SESSION[geboren_kind2];
			$vorname_kind3	= $_SESSION[vorname_kind3];
			$nachname_kind3	= $_SESSION[nachname_kind3];
			$geboren_kind3	= $_SESSION[geboren_kind3];
			$weitere_kinder	= $_SESSION[weitere_kinder];
				
			$telefon		= $_SESSION[telefon];
			$telefax		= $_SESSION[telefax];
			$mobil			= $_SESSION[mobil];
			$email			= $_SESSION[email];
			$erreichbar		= $_SESSION[erreichbar];
				
			$anliegen		= $_SESSION[anliegen];
			$terminwunsch	= $_SESSION[terminwunsch];
			$modus			= $_SESSION[modus];
			$dringend		= $_SESSION[dringend];
			$nachricht		= $_SESSION[nachricht];
				
			$inhaber		= $_SESSION[inhaber];
			$iban			= $_SESSION[iban];
			$bic			= $_SESSION[bic];
			$bank			= $_SESSION[bank];
			$sepa			= $_SESSION[sepa];
			$agb			= $_SESSION[agb];
				
			$nospam			= $_SESSION[nospam];   */

			
			
			/* SQL und eMail generieren: */

			$name = $_SESSION[nachname]  ;
			if ( ($_SESSION[vorname] != "" )  ) {
				$name =  $_SESSION[vorname] . " " . $name ;
			}

			// hier >>> Absender- und Empfänger-Adresse <<<  !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
			$absender		= $name . " <" . $_SESSION[email] . ">";
			$replyto		= $name . " <" . $_SESSION[email] . ">";
			$returnpath		= $name . " <" . $_SESSION[email] . ">";
			$empfaenger		= "Psychologische Praxis <spam@gdt.de>";
			$empfaenger_cc  = "" ;
			$empfaenger_bcc = "Bärbel Bornemann - gdt <bbornemann@gdt.de>";

			//header
			$header						 = 'From:' . $absender . "\n";
			$header						.= 'Reply-To:' . $replyto . "\n";
			$header						.= 'Return-Path: ' . $returnpath . "\r\n";
			$header						.= 'X-Mailer: PHP/' . phpversion() . "\n";
			$header						.= 'X-Sender-IP: ' . $_SERVER['REMOTE_ADDR'] . "\n";
			$header						.= 'Cc: ' . $empfaenger_cc . "\n";
			$header						.= 'Bcc: ' . $empfaenger_bcc . "\n";
		//	$header						.= "Content-type: text/html\n';
		//	$header						.= "Content-type: text/html;charset=iso-8859-1\n";
			$header						.= "Content-type: text/plain; charset=utf-8\n";
			$header						.= "Content-Language: de-DE\n";
			$header						.= "Content-Transfer-Encoding: 8bit\n";
			

			$betreff					= "Ihre Anmeldung bei der Psychologischen Praxis:";
		//	$betreff					= trim( stripslashes( strip_tags($_POST['betreff']);
		
			$anliegen					= $_SESSION[anliegen];

			$nachricht					= $_SESSION[nachricht];
			$nachricht					= wordwrap($nachricht, 76);

			// +++++++  Validierung der Eingaben:  ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
			$error_msg									="";
		//	if(strlen($_SESSION[vorname]) < 3) {
		//		$error_msg="<li>Bitte Vornamen angeben.</li>";
		//	}
			if(strlen($_SESSION[nachname]) <3 ) {
				$error_msg.="<li>Bitte Nachnamen angeben.</li>";
			}
			if ($_SESSION[vorname] != ""  AND  !preg_match("#^[\p{L},;.:_&!?*'()/\ \-\+]+$#u", $_SESSION[vorname])) {
				$error_msg.="<li>Bitte die Schreibweise des Vornamens auf ungültige Zeichen prüfen.</li>";
				// echo "vorname ";
			}
			if ($_SESSION[nachname] != ""  AND  !preg_match("#^[\p{L},;.:_&!?*'()/\ \-\+]+$#u", $_SESSION[nachname])) {
				$error_msg.="<li>Bitte die Schreibweise des Nachnamens auf ungültige Zeichen prüfen.</li>";
				// echo "nachname ";
			}
			if ($_SESSION[geboren] != ""   AND   !preg_match("#^[0-3]?[0-9].[0-1]?[0-9].[1-2]?[0-9]?[0-9]{2}$#", $_SESSION[geboren])) {
				$error_msg.="<li>Bitte gültiges Geburtsdatum angeben (Format: tt.mm.jjjj).</li>";
				// echo "geboren ";
			}
			if ($_SESSION[plz] != ""  AND  ($_SESSION[plz] == "0000"  OR  !preg_match("/^D?[-_ ]?[0-9]{5}$/", $_SESSION[plz]))) {
				$error_msg.="<li>Bitte gültige Postleitzahl angeben.</li>";
				// echo "plz ";
			}
			if ($_SESSION[ort] != ""  AND  !preg_match("#^[\p{L},;.:_&!?*'()/\ \-\+]+$#u", $_SESSION[ort])) {
				$error_msg.="<li>Bitte die Schreibweise des Ortes auf ungültige Zeichen prüfen.</li>";
				// echo "ort ";
			}
			if ($_SESSION[beruf] != ""  AND  !preg_match("#^[\p{L},;.:_&!?*'()/\ \-\+]+$#u", $_SESSION[beruf])) {
				$error_msg.="<li>Bitte die Schreibweise des Berufs auf ungültige Zeichen prüfen.</li>";
				// echo "beruf ";
			}
		//	if(strlen($betreff) <3 ) {
		//		$error_msg.="<li>Bitte Betreff angeben.</li>";
		//	}
			if(strlen($anliegen) < 3 ) {
				$error_msg.="<li>Bitte Ihr Anliegen angeben.</li>";
				// echo "anliegen ";
			}
			if ($_SESSION[anliegen] != ""  AND  !preg_match("#^[\p{L}0-9,;.:_&!?*'()/\ \-\+\"]+$#u", $_SESSION[anliegen])) {
				$error_msg.="<li>Bitte die Schreibweise des Anliegens auf ungültige Zeichen prüfen.</li>";
				// echo "anliegen ";
			}
			if ($_SESSION[erreichbar] != ""  AND  !preg_match("#^[\p{L}0-9,;.:_&!?*'()/\ \-\+]+$#u", $_SESSION[erreichbar])) {
				$error_msg.="<li>Bitte die Schreibweise Ihrer Erreichbarkeit auf ungültige Zeichen prüfen.</li>";
				// echo "erreichbar ";
			}
			if ($_SESSION[terminwunsch] != ""  AND  !preg_match("#^[\p{L}0-9,;.:_&!?*'()/\ \-\+]+$#u", $_SESSION[terminwunsch])) {
				$error_msg.="<li>Bitte die Schreibweise des Terminwunsches auf ungültige Zeichen prüfen.</li>";
				// echo "terminwunsch ";
			}
		/*	if ($_SESSION[dringend] != ""  AND  !preg_match("#^[\p{L}0-9,;.:_&!?*'()/\ \-\+]+$#u", $_SESSION[dringend])) {
				$error_msg.="<li>Bitte die Schreibweise der Dringlichkeit auf ungültige Zeichen prüfen.</li>";
				// echo "dringend ";
			}  */
			if(strlen($_SESSION[telefon]) <5 ) {
				$error_msg.="<li>Bitte Telefonnummer angeben.</li>";
				// echo "telefon <5 ";
			}
			if ($_SESSION[telefon] != ""   AND   !preg_match("#^\+?[0-9()/\ \-]+$#u", $_SESSION[telefon])) {
				$error_msg.="<li>Bitte gültige Telefonnummer angeben.</li>";
				// echo "telefon2 ";
			}
			if ($_SESSION[fax] != ""   AND   !preg_match("#^\+?[0-9()/\ \-]+$#u", $_SESSION[fax])) {
				$error_msg.="<li>Bitte gültige Telefaxnummer angeben.</li>";
				// echo "fax ";
			}
			if ($_SESSION[mobil] != ""   AND   !preg_match("#^\+?[0-9()/\ \-]+$#u", $_SESSION[mobil])) {
				$error_msg.="<li>Bitte gültige Mobilnummer angeben.</li>";
				// echo "mobil ";
			}
			if(!preg_match("#^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,4})$#",$_SESSION[email])){
				$error_msg.="<li>Bitte gültige eMail-Adresse angeben.</li>";
				// echo "email ";
			}
			if ($_SESSION[inhaber] != ""  AND  !preg_match("#^[\p{L},;.:_&!?*'()/\ \-\+]+$#u", $_SESSION[inhaber])) {
				$error_msg.="<li>Bitte die Schreibweise des Kontoinhabers auf ungültige Zeichen prüfen.</li>";
				// echo "inhaber ";
			}
			if ($_SESSION[kinder] != ""  AND  !preg_match("#^[0-9]+$#u", $_SESSION[kinder])) {
				$error_msg.="<li>Bitte die Schreibweise des Zahl der Kinder auf ungültige Zeichen prüfen. (Es sind nur Zahlen erlaubt.)</li>";
				// echo "kinder ";
			}
			if($_SESSION[agb] != "ja") {
				$error_msg.="<li>Bitte die Regelungen zum Datenschutz akzeptieren.</li>";
				// echo "agb ";
			}
			if(($_SESSION[sepa] == "ja"  AND  $_SESSION[iban] == ""))  {
				$error_msg.="<li>Bitte IBAN angeben.</li>";
				// echo "sepa+iban ";
			}
			if($_SESSION[iban] != "")  {
				IF (!preg_match('#^DE( |)[0-9]{2}( |)[0-9]{4}( |)[0-9]{4}( |)[0-9]{4}( |)[0-9]{4}( |)[0-9]{2}$#',$_SESSION[iban])) {  /*nur deutsche IBAN  */
					$error_msg.="<li>Bitte gültige IBAN angeben (Format: \"DE00 0000 0000 0000 0000 00\").</li>";
					// echo "iban ";
				}
				/* IBAL-Test  */
				$iban = preg_replace('/\s+/', '', $_SESSION[iban]);
				$length = strlen($iban);
				if($length != 22 ) {
					$error_msg.="<li>Die IBAN sollte 22 Zeichen umfassen. Bitte Eingabe prüfen.</li>"; 
				}
				else {
				/*	if (($iban[0]!="D" ) or ($iban[1] !="E" )) 	{
						$error_msg.="<li>Die eingegebene IBAN scheint keine deutsche Bankverbindung zu sein. Bitte korrigieren.</li>";  
					}  */  // das ist schon abgeprüft
					$pruef = 10*$iban[2] + $iban[3];
					$gban = "";
					for ($i=0 ; $i <= $length-4; $i++) {
						$bban[$i] = $iban[$i+4];
						$gban = $gban . $bban[$i];		// dies ist dann eigentlich ein STRING, kein ARRAY
					}
					$bban = $gban;
					$bbanlang = $bban . "131400";
					$bbanzerlegt = str_split($bbanlang, 6);
					$rest4 = (int)(intval($bbanzerlegt[3]) + ((intval($bbanzerlegt[2]) + ((intval($bbanzerlegt[1]) + ((intval($bbanzerlegt[0])) % 97) * 1000000) % 97) * 1000000) % 97) * 1000000) % 97;
					if ($pruef != (98 - $rest4) )   {
						$error_msg.="<li>Offenbar ist die eingegebene IBAN ungültig. Bitte auf Tippfehler kontrollieren.</li>"; 
					}
				}
				/* Ende IBAN-Test  */
			}
			if ($_SESSION[bic] != ""  AND  !preg_match("#[a-zA-Z0-9-\ ]+$#u", $_SESSION[bic])) {
				$error_msg.="<li>Bitte die Schreibweise der BIC (Bank Identifier) auf ungültige Zeichen prüfen.</li>";
				// echo "bic ";
			}
			if ($_SESSION[bank] != ""  AND  !preg_match("#^[\p{L}_&\ \-\+]+$#u", $_SESSION[bank])) {
				$error_msg.="<li>Bitte die Schreibweise des Kontoinhabers auf ungültige Zeichen prüfen.</li>";
				// echo "bank ";
			}
			/*		// altenative IBAN-Testung (international): 
					$country = substr($_SESSION[iban], 0, 2);
					$checkInt = intval(substr($_SESSION[iban], 2, 2));
					$account = substr($_SESSION[iban], 4);
					$search = range('A', 'Z');
					$replace = [];
					foreach (range(10, 35) as $tmp) {
						$replace[] = strval($tmp);
					}
					$numStr = str_replace($search, $replace, $account . $country . '00');
					$checksum = intval(substr($numStr, 0, 1));
					$numStrLength = strlen($numStr);
					for ($pos = 1; $pos < $numStrLength; $pos++) {
						$checksum *= 10;
						$checksum += intval(substr($numStr, $pos, 1));
						$checksum %= 97;
					}
					// return ((98 - $checksum) === $checkInt);     // funktioniert!, aber nur OK, wenn die IBAN mindestens ein Blank enthält  
					if ((98 - $checksum) === $checkInt) {
						$error_msg.="<li>Bitte gültige IBAN (mit Leerzeichen alle 4 Zeichen) angeben.</li>";
					// echo "iban2 ";
					}
			*/
			if($_SESSION[nospam] != (date("d") +9) ) {
				$error_msg.="<li>Das Feld zum Spamschutz muss den richtigen Wert enthalten: bitte " . (date("d") +9) . " eingeben.</li>";
				// echo "nospam ";
				}
			if(strlen($error_msg) > 0 ) {
				//Eines der Felder wurde nicht korrekt ausgefüllt
				echo "<div>Nachricht konnte nicht verschickt werden:<ul>";
				echo $error_msg;
				echo "</ul><p>Bitte <a href=\"javascript:history.back(1)\">zurückgehen</a> und korrigieren.</p><br/></div>";
			}else{
				
		//	return false;
				
				// Variablen für Datenbank aufarbeiten und anschließend Mail generieren:
				
			// Verbinden mit der Datenbank
				include("../admin/dbconnect.inc.php");		
			
			
			// +++++++ Variablen aufarbeiten: ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
			/*		Lokale Variablen für Datenbank aufarbeiten, 
			globale SESSION-Variablen für eMail verwenden  */			

			$anrede			= mysqli_real_escape_string($link, $_SESSION[anrede]) ;
			$vorname		= mysqli_real_escape_string($link, $_SESSION[vorname]) ;
			$nachname		= mysqli_real_escape_string($link, $_SESSION[nachname]) ;
			$geschlecht		= mysqli_real_escape_string($link, $_SESSION[geschlecht]) ;
			$geboren		= mysqli_real_escape_string($link, $_SESSION[geboren]) ;
			$strasse		= mysqli_real_escape_string($link, $_SESSION[strasse]) ;
			$hausnr			= mysqli_real_escape_string($link, $_SESSION[hausnr]) ;
			$plz			= mysqli_real_escape_string($link, $_SESSION[plz]) ;
			$ort			= mysqli_real_escape_string($link, $_SESSION[ort]) ;
			$beruf			= mysqli_real_escape_string($link, $_SESSION[beruf]) ;
			$beziehung		= mysqli_real_escape_string($link, $_SESSION[beziehung]) ;
			$getrennt		= mysqli_real_escape_string($link, $_SESSION[getrennt]) ;
			
			$vorname2		= mysqli_real_escape_string($link, $_SESSION[vorname2]) ;
			$nachname2		= mysqli_real_escape_string($link, $_SESSION[nachname2]) ;
			$geschlecht2	= mysqli_real_escape_string($link, $_SESSION[geschlecht2]) ;
			$geboren2		= mysqli_real_escape_string($link, $_SESSION[geboren2]) ;
			$strasse2		= mysqli_real_escape_string($link, $_SESSION[strasse2]) ;
			$hausnr2		= mysqli_real_escape_string($link, $_SESSION[hausnr2]) ;
			$plz2			= mysqli_real_escape_string($link, $_SESSION[plz2]) ;
			$ort2			= mysqli_real_escape_string($link, $_SESSION[ort2]) ;
			$beruf2			= mysqli_real_escape_string($link, $_SESSION[beruf2]) ;
			$beziehung2		= mysqli_real_escape_string($link, $_SESSION[beziehung2]) ;
			$getrennt2		= mysqli_real_escape_string($link, $_SESSION[getrennt2]) ;
			
			$kinder			= mysqli_real_escape_string($link, $_SESSION[kinder]) ;
			$vorname_kind1	= mysqli_real_escape_string($link, $_SESSION[vorname_kind1]) ;
			$nachname_kind1	= mysqli_real_escape_string($link, $_SESSION[nachname_kind1]) ;
			$geboren_kind1	= mysqli_real_escape_string($link, $_SESSION[geboren_kind1]) ;
			$vorname_kind2	= mysqli_real_escape_string($link, $_SESSION[vorname_kind2]) ;
			$nachname_kind2	= mysqli_real_escape_string($link, $_SESSION[nachname_kind2]) ;
			$geboren_kind2	= mysqli_real_escape_string($link, $_SESSION[geboren_kind2]) ;
			$vorname_kind3	= mysqli_real_escape_string($link, $_SESSION[vorname_kind3]) ;
			$nachname_kind3	= mysqli_real_escape_string($link, $_SESSION[nachname_kind3]) ;
			$geboren_kind3	= mysqli_real_escape_string($link, $_SESSION[geboren_kind3]) ;
			$weitere_kinder	= mysqli_real_escape_string($link, $_SESSION[weitere_kinder]) ;
				
			$telefon		= mysqli_real_escape_string($link, $_SESSION[telefon]) ;
			$telefax		= mysqli_real_escape_string($link, $_SESSION[telefax]) ;
			$mobil			= mysqli_real_escape_string($link, $_SESSION[mobil]) ;
			$email			= mysqli_real_escape_string($link, $_SESSION[email]) ;
			$erreichbar		= mysqli_real_escape_string($link, $_SESSION[erreichbar]) ;
				
			$anliegen		= mysqli_real_escape_string($link, $_SESSION[anliegen]) ;
			$terminwunsch	= mysqli_real_escape_string($link, $_SESSION[terminwunsch]) ;
			$modus			= mysqli_real_escape_string($link, $_SESSION[modus]) ;
			$dringend		= mysqli_real_escape_string($link, $_SESSION[dringend]) ;
			$nachricht		= mysqli_real_escape_string($link, $_SESSION[nachricht]) ;
				
			$inhaber		= mysqli_real_escape_string($link, $_SESSION[inhaber]) ;
			$iban			= mysqli_real_escape_string($link, $_SESSION[iban]) ;
			$bic			= mysqli_real_escape_string($link, $_SESSION[bic]) ;
			$bank			= mysqli_real_escape_string($link, $_SESSION[bank]) ;
			$sepa			= mysqli_real_escape_string($link, $_SESSION[sepa]) ;
			$agb			= mysqli_real_escape_string($link, $_SESSION[agb]) ;
				
			$nospam			= mysqli_real_escape_string($link, $_SESSION[nospam]) ;   
			
			
			// ++++++ Datenbank schreiben: +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
		/*	//TMP: Daten ausgeben, die zum Speichern anstehen:
			echo "<p class='rot'><strong>Daten, die zum eintragen anstehen: </strong></p>" ;
			foreach($_SESSION as $key => $value){
				echo "<b>".$key.":</b> = ".$value."<br />\n";
				}
				echo "<br />\n" ;
		*/
			
			/* QUERY */
			
			// DATA und HIST ergänzen = updaten
		/*	$query   = "UPDATE ehemalige_data SET                                  user_name = '$_SESSION[user_name]', password = '$_SESSION[password]', authorised = '$_SESSION[authorised]', auth_level = '$_SESSION[auth_level]', visibility = '$_SESSION[visibility]', validity = '$_SESSION[validity]', datenschutz_ok = '$_SESSION[datenschutz_ok]', newsletter = '$_SESSION[newsletter]', newsletter_abijahrgang = '$_SESSION[newsletter_abijahrgang]', newsletter_ehemalige = '$_SESSION[newsletter_ehemalige]', newsletter_scholl = '$_SESSION[newsletter_scholl]', newsletter_hitzenlinde = '$_SESSION[newsletter_hitzenlinde]', newsletter_verein = '$_SESSION[newsletter_verein]', newsletter_email = '$_SESSION[newsletter_email]', durchgang = '$_SESSION[durchgang]', save = '$_SESSION[save]', lastmodified_by = '$_SESSION[lastmodified_by]', lastmodified_ip = '$_SESSION[lastmodified_ip]', session_id = '$_SESSION[session_id]', browser = '$_SESSION[browser]', quelle = '$_SESSION[quelle]', lehrer = '$_SESSION[lehrer]', vorname = '$_SESSION[vorname]', name_damals = '$_SESSION[name_damals]', name_heute = '$_SESSION[name_heute]', nickname = '$_SESSION[nickname]', geschlecht = '$_SESSION[geschlecht]', geboren_tt = '$_SESSION[geboren_tt]', geboren_mm = '$_SESSION[geboren_mm]', geboren_jjjj = '$_SESSION[geboren_jjjj]', gestorben_tt = '$_SESSION[gestorben_tt]', gestorben_mm = '$_SESSION[gestorben_mm]', gestorben_jjjj = '$_SESSION[gestorben_jjjj]', adressart = '$_SESSION[adressart]', strasse = '$_SESSION[strasse]', hausnr = '$_SESSION[hausnr]', plz = '$_SESSION[plz]', ort = '$_SESSION[ort]', bundesland = '$_SESSION[bundesland]', land = '$_SESSION[land]', telefon_vorwahl = '$_SESSION[telefon_vorwahl]', telefon = '$_SESSION[telefon]', fax_vorwahl = '$_SESSION[fax_vorwahl]', fax = '$_SESSION[fax]', mobil_vorwahl = '$_SESSION[mobil_vorwahl]', mobil = '$_SESSION[mobil]', anmerkungen_adr = '$_SESSION[anmerkungen_adr]', adressart2 = '$_SESSION[adressart2]', strasse2 = '$_SESSION[strasse2]', hausnr2 = '$_SESSION[hausnr2]', plz2 = '$_SESSION[plz2]', ort2 = '$_SESSION[ort2]', bundesland2 = '$_SESSION[bundesland2]', land2 = '$_SESSION[land2]', telefon_vorwahl2 = '$_SESSION[telefon_vorwahl2]', telefon2 = '$_SESSION[telefon2]', fax_vorwahl2 = '$_SESSION[fax_vorwahl2]', fax2 = '$_SESSION[fax2]', mobil_vorwahl2 = '$_SESSION[mobil_vorwahl2]', mobil2 = '$_SESSION[mobil2]', anmerkungen_adr2 = '$_SESSION[anmerkungen_adr2]', email = '$_SESSION[email]', email2 = '$_SESSION[email2]', email3 = '$_SESSION[email3]', email4 = '$_SESSION[email4]', schule = '$_SESSION[schule]', eintritt_jahr = '$_SESSION[eintritt_jahr]', abgang_jahr = '$_SESSION[abgang_jahr]', abijahrgang = '$_SESSION[abijahrgang]', abschluss = '$_SESSION[abschluss]', abschluss_jahr = '$_SESSION[abschluss_jahr]', von_klasse = '$_SESSION[von_klasse]', bis_klasse = '$_SESSION[bis_klasse]', klassenzweig_a = '$_SESSION[klassenzweig_a]', klassenzweig_b = '$_SESSION[klassenzweig_b]', klassenzweig_c = '$_SESSION[klassenzweig_c]', klassenzweig_d = '$_SESSION[klassenzweig_d]', klassenzweig_e = '$_SESSION[klassenzweig_e]', klassenzweig_f = '$_SESSION[klassenzweig_f]', klassenzweig_l = '$_SESSION[klassenzweig_l]', stufedrueber_von_klasse = '$_SESSION[stufedrueber_von_klasse]', stufedrueber_bis_klasse = '$_SESSION[stufedrueber_bis_klasse]', stufedrueber_klassenzweig_a = '$_SESSION[stufedrueber_klassenzweig_a]', stufedrueber_klassenzweig_b = '$_SESSION[stufedrueber_klassenzweig_b]', stufedrueber_klassenzweig_c = '$_SESSION[stufedrueber_klassenzweig_c]', stufedrueber_klassenzweig_d = '$_SESSION[stufedrueber_klassenzweig_d]', stufedrueber_klassenzweig_e = '$_SESSION[stufedrueber_klassenzweig_e]', stufedrueber_klassenzweig_f = '$_SESSION[stufedrueber_klassenzweig_f]', stufedrueber_klassenzweig_l = '$_SESSION[stufedrueber_klassenzweig_l]', stufedrunter_von_klasse = '$_SESSION[stufedrunter_von_klasse]', stufedrunter_bis_klasse = '$_SESSION[stufedrunter_bis_klasse]', stufedrunter_klassenzweig_a = '$_SESSION[stufedrunter_klassenzweig_a]', stufedrunter_klassenzweig_b = '$_SESSION[stufedrunter_klassenzweig_b]', stufedrunter_klassenzweig_c = '$_SESSION[stufedrunter_klassenzweig_c]', stufedrunter_klassenzweig_d = '$_SESSION[stufedrunter_klassenzweig_d]', stufedrunter_klassenzweig_e = '$_SESSION[stufedrunter_klassenzweig_e]', stufedrunter_klassenzweig_f = '$_SESSION[stufedrunter_klassenzweig_f]', stufedrunter_klassenzweig_l = '$_SESSION[stufedrunter_klassenzweig_l]', leistungskurs1 = '$_SESSION[leistungskurs1]', leistungskurs1_bei = '$_SESSION[leistungskurs1_bei]', leistungskurs2 = '$_SESSION[leistungskurs2]', leistungskurs2_bei = '$_SESSION[leistungskurs2_bei]', abifach3 = '$_SESSION[abifach3]', abifach3_bei = '$_SESSION[abifach3_bei]', abifach4 = '$_SESSION[abifach4]', abifach4_bei = '$_SESSION[abifach4_bei]', orchester = '$_SESSION[orchester]', theater = '$_SESSION[theater]', chor = '$_SESSION[chor]', tanzgruppe = '$_SESSION[tanzgruppe]', weitereag1 = '$_SESSION[weitereag1]', weitereag2 = '$_SESSION[weitereag2]', foerderverein = '$_SESSION[foerderverein]', foerderverein_interessent = '$_SESSION[foerderverein_interessent]', ausbildung = '$_SESSION[ausbildung]', ausbildung_bei = '$_SESSION[ausbildung_bei]', beruf = '$_SESSION[beruf]', beruf_bei = '$_SESSION[beruf_bei]', web1 = '$_SESSION[web1]', web3 = '$_SESSION[web3]', web2 = '$_SESSION[web2]', web4 = '$_SESSION[web4]', im_dienst = '$_SESSION[im_dienst]', im_nr = '$_SESSION[im_nr]', ipphone_dienst = '$_SESSION[ipphone_dienst]', ipphone_nr = '$_SESSION[ipphone_nr]', beziehungsstatus = '$_SESSION[beziehungsstatus]', kinder = '$_SESSION[kinder]', interessen = '$_SESSION[interessen]', bemerkungen = '$_SESSION[bemerkungen]', foto_damals = '$_SESSION[foto_damals]', foto_heute = '$_SESSION[foto_heute]', internetquelle1 = '$_SESSION[internetquelle1]', internetquelle2 = '$_SESSION[internetquelle2]', internetquelle3 = '$_SESSION[internetquelle3]', internetquelle4 = '$_SESSION[internetquelle4]', kommentare = '$_SESSION[kommentare]' WHERE user_id = '$_SESSION[user_id]' " ;
			$query_h = "UPDATE ehemalige_hist SET  user_id = '$_SESSION[user_id]', user_name = '$_SESSION[user_name]', password = '$_SESSION[password]', authorised = '$_SESSION[authorised]', auth_level = '$_SESSION[auth_level]', visibility = '$_SESSION[visibility]', validity = '$_SESSION[validity]', datenschutz_ok = '$_SESSION[datenschutz_ok]', newsletter = '$_SESSION[newsletter]', newsletter_abijahrgang = '$_SESSION[newsletter_abijahrgang]', newsletter_ehemalige = '$_SESSION[newsletter_ehemalige]', newsletter_scholl = '$_SESSION[newsletter_scholl]', newsletter_hitzenlinde = '$_SESSION[newsletter_hitzenlinde]', newsletter_verein = '$_SESSION[newsletter_verein]', newsletter_email = '$_SESSION[newsletter_email]', durchgang = '$_SESSION[durchgang]', save = '$_SESSION[save]', lastmodified_by = '$_SESSION[lastmodified_by]', lastmodified_ip = '$_SESSION[lastmodified_ip]', session_id = '$_SESSION[session_id]', browser = '$_SESSION[browser]', quelle = '$_SESSION[quelle]', lehrer = '$_SESSION[lehrer]', vorname = '$_SESSION[vorname]', name_damals = '$_SESSION[name_damals]', name_heute = '$_SESSION[name_heute]', nickname = '$_SESSION[nickname]', geschlecht = '$_SESSION[geschlecht]', geboren_tt = '$_SESSION[geboren_tt]', geboren_mm = '$_SESSION[geboren_mm]', geboren_jjjj = '$_SESSION[geboren_jjjj]', gestorben_tt = '$_SESSION[gestorben_tt]', gestorben_mm = '$_SESSION[gestorben_mm]', gestorben_jjjj = '$_SESSION[gestorben_jjjj]', adressart = '$_SESSION[adressart]', strasse = '$_SESSION[strasse]', hausnr = '$_SESSION[hausnr]', plz = '$_SESSION[plz]', ort = '$_SESSION[ort]', bundesland = '$_SESSION[bundesland]', land = '$_SESSION[land]', telefon_vorwahl = '$_SESSION[telefon_vorwahl]', telefon = '$_SESSION[telefon]', fax_vorwahl = '$_SESSION[fax_vorwahl]', fax = '$_SESSION[fax]', mobil_vorwahl = '$_SESSION[mobil_vorwahl]', mobil = '$_SESSION[mobil]', anmerkungen_adr = '$_SESSION[anmerkungen_adr]', adressart2 = '$_SESSION[adressart2]', strasse2 = '$_SESSION[strasse2]', hausnr2 = '$_SESSION[hausnr2]', plz2 = '$_SESSION[plz2]', ort2 = '$_SESSION[ort2]', bundesland2 = '$_SESSION[bundesland2]', land2 = '$_SESSION[land2]', telefon_vorwahl2 = '$_SESSION[telefon_vorwahl2]', telefon2 = '$_SESSION[telefon2]', fax_vorwahl2 = '$_SESSION[fax_vorwahl2]', fax2 = '$_SESSION[fax2]', mobil_vorwahl2 = '$_SESSION[mobil_vorwahl2]', mobil2 = '$_SESSION[mobil2]', anmerkungen_adr2 = '$_SESSION[anmerkungen_adr2]', email = '$_SESSION[email]', email2 = '$_SESSION[email2]', email3 = '$_SESSION[email3]', email4 = '$_SESSION[email4]', schule = '$_SESSION[schule]', eintritt_jahr = '$_SESSION[eintritt_jahr]', abgang_jahr = '$_SESSION[abgang_jahr]', abijahrgang = '$_SESSION[abijahrgang]', abschluss = '$_SESSION[abschluss]', abschluss_jahr = '$_SESSION[abschluss_jahr]', von_klasse = '$_SESSION[von_klasse]', bis_klasse = '$_SESSION[bis_klasse]', klassenzweig_a = '$_SESSION[klassenzweig_a]', klassenzweig_b = '$_SESSION[klassenzweig_b]', klassenzweig_c = '$_SESSION[klassenzweig_c]', klassenzweig_d = '$_SESSION[klassenzweig_d]', klassenzweig_e = '$_SESSION[klassenzweig_e]', klassenzweig_f = '$_SESSION[klassenzweig_f]', klassenzweig_l = '$_SESSION[klassenzweig_l]', stufedrueber_von_klasse = '$_SESSION[stufedrueber_von_klasse]', stufedrueber_bis_klasse = '$_SESSION[stufedrueber_bis_klasse]', stufedrueber_klassenzweig_a = '$_SESSION[stufedrueber_klassenzweig_a]', stufedrueber_klassenzweig_b = '$_SESSION[stufedrueber_klassenzweig_b]', stufedrueber_klassenzweig_c = '$_SESSION[stufedrueber_klassenzweig_c]', stufedrueber_klassenzweig_d = '$_SESSION[stufedrueber_klassenzweig_d]', stufedrueber_klassenzweig_e = '$_SESSION[stufedrueber_klassenzweig_e]', stufedrueber_klassenzweig_f = '$_SESSION[stufedrueber_klassenzweig_f]', stufedrueber_klassenzweig_l = '$_SESSION[stufedrueber_klassenzweig_l]', stufedrunter_von_klasse = '$_SESSION[stufedrunter_von_klasse]', stufedrunter_bis_klasse = '$_SESSION[stufedrunter_bis_klasse]', stufedrunter_klassenzweig_a = '$_SESSION[stufedrunter_klassenzweig_a]', stufedrunter_klassenzweig_b = '$_SESSION[stufedrunter_klassenzweig_b]', stufedrunter_klassenzweig_c = '$_SESSION[stufedrunter_klassenzweig_c]', stufedrunter_klassenzweig_d = '$_SESSION[stufedrunter_klassenzweig_d]', stufedrunter_klassenzweig_e = '$_SESSION[stufedrunter_klassenzweig_e]', stufedrunter_klassenzweig_f = '$_SESSION[stufedrunter_klassenzweig_f]', stufedrunter_klassenzweig_l = '$_SESSION[stufedrunter_klassenzweig_l]', leistungskurs1 = '$_SESSION[leistungskurs1]', leistungskurs1_bei = '$_SESSION[leistungskurs1_bei]', leistungskurs2 = '$_SESSION[leistungskurs2]', leistungskurs2_bei = '$_SESSION[leistungskurs2_bei]', abifach3 = '$_SESSION[abifach3]', abifach3_bei = '$_SESSION[abifach3_bei]', abifach4 = '$_SESSION[abifach4]', abifach4_bei = '$_SESSION[abifach4_bei]', orchester = '$_SESSION[orchester]', theater = '$_SESSION[theater]', chor = '$_SESSION[chor]', tanzgruppe = '$_SESSION[tanzgruppe]', weitereag1 = '$_SESSION[weitereag1]', weitereag2 = '$_SESSION[weitereag2]', foerderverein = '$_SESSION[foerderverein]', foerderverein_interessent = '$_SESSION[foerderverein_interessent]', ausbildung = '$_SESSION[ausbildung]', ausbildung_bei = '$_SESSION[ausbildung_bei]', beruf = '$_SESSION[beruf]', beruf_bei = '$_SESSION[beruf_bei]', web1 = '$_SESSION[web1]', web3 = '$_SESSION[web3]', web2 = '$_SESSION[web2]', web4 = '$_SESSION[web4]', im_dienst = '$_SESSION[im_dienst]', im_nr = '$_SESSION[im_nr]', ipphone_dienst = '$_SESSION[ipphone_dienst]', ipphone_nr = '$_SESSION[ipphone_nr]', beziehungsstatus = '$_SESSION[beziehungsstatus]', kinder = '$_SESSION[kinder]', interessen = '$_SESSION[interessen]', bemerkungen = '$_SESSION[bemerkungen]', foto_damals = '$_SESSION[foto_damals]', foto_heute = '$_SESSION[foto_heute]', internetquelle1 = '$_SESSION[internetquelle1]', internetquelle2 = '$_SESSION[internetquelle2]', internetquelle3 = '$_SESSION[internetquelle3]', internetquelle4 = '$_SESSION[internetquelle4]', kommentare = '$_SESSION[kommentare]' WHERE id = '$_SESSION[hist_insert_id]' " ;

			//TEST
			//echo "<p>query:   $query " ;
			//echo "<p>query_h: $query_h " ;



			// XXXXXXXXXXXXXXXXXXXX Daten eintragen:  XXXXXXXXXXXXXXXXXXXXXXXXXX
			// XXXXXXXXXXXXXXXXXXXX Daten eintragen:  XXXXXXXXXXXXXXXXXXXXXXXXXX

			//ehemalige_data schreiben:
			$_SESSION['result_sql'] = mysqli_query($link, $query);
			// Anzahl der in ehemalige_data betroffenen Zeilen zählen:
			$_SESSION['data_affected_rows'] = mysqli_affected_rows($link);


			echo '<font size="1">' ;

			if (isset($_SESSION['user_id']) && ($_SESSION['istneu'] != 1)) {echo "Datensatz: " . $_SESSION['user_id'] . ", " ; }

			//Haupteintrag korrekt?
			//$_SESSION['result_sql'] == true: SQL ist gelaufen, aber evtl. war nichts zu tun!!!
			//affected rows == 1: Datensatz wurde tatsächlich verändert!!!
			if ($_SESSION['result_sql']=="true" && $_SESSION['data_affected_rows'] != 0 ) {
				echo $_SESSION['aktion'] . " (4/4) erfolgreich. Zeilen geschrieben: " . $_SESSION['data_affected_rows'] . ".&nbsp;&nbsp;" ;
				
				//History NUR schreiben, wenn die Haupttabelle erforgreich geschrieben wurde !!!!!
				// ehemalige_hist schreiben   HISTORY   HISTORY   HISTORY   HISTORY   HISTORY   HISTORY   HISTORY
				$_SESSION['result_sql_h'] = mysqli_query($link, $query_h);
				// Anzahl der in ehemalige_hist  betroffenen Zeilen zählen:
				$_SESSION['hist_affected_rows'] = mysqli_affected_rows($link);

			}else {
				echo $_SESSION['aktion'] . ' Datensatz (4/4): <strong>nein</strong>. ' ;
				$_SESSION['error'] = 1 ;
			}


			// History-Eintrag korrekt?" ;
			if ($_SESSION['result_sql_h']=="true" && $_SESSION['hist_affected_rows'] != 0 ) {
				echo "Log erfolgreich. Zeilen geschrieben: " . $_SESSION['hist_affected_rows'] . ".&nbsp;&nbsp;" ;
				//Merker, daß alle Daten eingetragen wurden, und beim RELOAD nicht mehr geschrieben werden
				$_SESSION['geschrieben5'] = 1 ;
			} else {
				echo 'Eintrag history: <strong>nein</strong>. ' ;
				$_SESSION['error'] = 1 ;
			}

			echo '</font>' ;
	//  /*  }
		
		*/

				// ++++++ eMail generieren: +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
				// eMail generieren:
				
				$mail_body  ="Psychologische Praxis - Mail-Formular\n\n";
				$mail_body .="Nachricht von " . $_SESSION[anrede] . " " . $name . " vom " . date("d.m.Y") . ", " . date("H:i") . " Uhr:\n\n";
				
				$mail_body .="Anrede: " .  $_SESSION[anrede]  . "\n";
				$mail_body .="Vorname: " .  $_SESSION[vorname]  . "\n";
				$mail_body .="Nachname: " .  $_SESSION[nachname]  . "\n";
				$mail_body .="Geschlecht: " .  $_SESSION[geschlecht]  . "\n";
				$mail_body .="Geboren: " .  $_SESSION[geboren]  . "\n";
				$mail_body .="Strasse: " .  $_SESSION[strasse]  . "\n";
				$mail_body .="Hausnummer: " .  $_SESSION[hausnr]  . "\n";
				$mail_body .="Postleitzahl: " .  $_SESSION[plz]  . "\n";
				$mail_body .="Ort: " .  $_SESSION[ort]  . "\n";
				$mail_body .="Beruf: " .  $_SESSION[beruf]  . "\n";
				$mail_body .="Kinder: " .  $_SESSION[kinder]  . "\n\n";
				
		//		$mail_body .="Vorname Kind1: " .  $_SESSION[vorname_kind1]  . "\n";
		//		$mail_body .="Nachname Kind1: " .  $_SESSION[nachname_kind1]  . "\n";
		//		$mail_body .="Kind 1 geboren: " .  $_SESSION[geboren_kind1]  . "\n";
		//		$mail_body .="Vorname Kind2: " .  $_SESSION[vorname_kind2]  . "\n";
		//		$mail_body .="Nachname Kind2: " .  $_SESSION[nachname_kind2]  . "\n";
		//		$mail_body .="Kind 2 geboren: " .  $_SESSION[geboren_kind2]  . "\n";
		//		$mail_body .="Vorname Kind3: " .  $_SESSION[vorname_kind3]  . "\n";
		//		$mail_body .="Nachname Kind3: " .  $_SESSION[nachname_kind3]  . "\n";
		//		$mail_body .="Kind 3 geboren: " .  $_SESSION[geboren_kind3]  . "\n";
		//		$mail_body .="Weitere Kinder: " .  $_SESSION[weitere_kinder]  . "\n\n";

				$mail_body .="Anliegen: " .  $_SESSION[anliegen]  . "\n";
				$mail_body .="Art der Hilfe: " .  $_SESSION[modus]  . "\n";
				$mail_body .="wann erreichbar: " .  $_SESSION[erreichbar]  . "\n";
				$mail_body .="Terminwunsch: " .  $_SESSION[terminwunsch]  . "\n";
				$mail_body .="Telefon: " .  $_SESSION[telefon]  . "\n";
		//		$mail_body .="telefax: " .  $_SESSION[telefax]  . "\n";
				$mail_body .="Mobil: " .  $_SESSION[mobil]  . "\n";
				$mail_body .="eMail: " .  $_SESSION[email]  . "\n";
				$mail_body .="dringend: " .  $_SESSION[dringend]  . "\n\n";
				$mail_body .="Beziehung: " .  $_SESSION[beziehung]  . "\n";
				$mail_body .="getrennt: " .  $_SESSION[getrennt]  . "\n\n";
		//		$mail_body .="Nachricht: " .  $nachricht  . "\n\n";
				
		//		$mail_body .="vorname2: " .  $_SESSION[vorname2]  . "\n";
		//		$mail_body .="Nachname2: " .  $_SESSION[nachname2]  . "\n";
		//		$mail_body .="Geschlecht2: " .  $_SESSION[geschlecht2]  . "\n";
		//		$mail_body .="Geboren2: " .  $_SESSION[geboren2]  . "\n\n";
		//		$mail_body .="Strasse2: " .  $_SESSION[strasse2]  . "\n";
		//		$mail_body .="Hausnummer2: " .  $_SESSION[hausnr2]  . "\n";
		//		$mail_body .="Postleitzahl2: " .  $_SESSION[plz2]  . "\n";
		//		$mail_body .="Ort2: " .  $_SESSION[ort2]  . "\n";
		//		$mail_body .="Beruf2: " .  $_SESSION[beruf2]  . "\n";
		//		$mail_body .="Beziehung2: " .  $_SESSION[beziehung2]  . "\n";
		//		$mail_body .="getrennt2: " .  $_SESSION[getrennt2]  . "\n\n";

				$mail_body .="Konto-Inhaber: " .  $_SESSION[inhaber]  . "\n";
				$mail_body .="IBAN: " .  $_SESSION[iban]  . "\n";
				$mail_body .="BIC: " .  $_SESSION[bic]  . "\n";
				$mail_body .="Bank: " .  $_SESSION[bank]  . "\n";
				$mail_body .="SEPA: " .  $_SESSION[sepa]  . "\n";
				$mail_body .="AGB: " .  $_SESSION[agb]  . "\n\n";
		//		$mail_body .="nospam: " .  $_SESSION[nospam]  . "\n";
		
				$mail_body .="data_affected_rows: " .  $_SESSION['data_affected_rows']  . "\n";
				$mail_body .="hist_affected_rows: " .  $_SESSION['hist_affected_rows']  . "\n\n";

				
				$mail_body .=$betreff . "\n";
				$mail_body .="-----------------------------------------------------------------------------\n";
				$mail_body .=$_SESSION[anliegen]   . "\n";
		//		$mail_body .="-----------------------------------------------------------------------------\n";
		//		$mail_body .=$_SESSION[nachricht]   . "\n";
				$mail_body .="-----------------------------------------------------------------------------\n";

				//Alle Felder ausgefüllt - eMail generieren
				$mail_result = mail($empfaenger,$betreff,$mail_body,$header);

				if ($mail_result == true) {
					echo '<div> </div><div><strong>Nachricht wurde verschickt, vielen Dank.</strong></div>';
					if ($_SESSION[sepa] == "ja") { 
						echo "<div> </div><div> </div><div><strong><a href=sepa.php>Bitte das SEPA-Lastschriftmandat</a></strong><br>ausdrucken und im Original zusenden.</div>"; 
						}
				} else {
					echo '<div><strong>Nachricht konnte nicht verschickt werden.</strong></div>';
				}
			}

		}else{
		/*	$_SESSION['kinder'] = "nein";
			$_SESSION['dringend'] = "nein";
			$_SESSION['getrennt'] = "nein";
			$_SESSION['sepa'] = "nein";
			$_SESSION['agb'] = "nein";			*/
	?>

			<section class="anmeldung nospace">
			<form class="anmeldung" id="anmeldung" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" name="anmeldung">
			<formspan>
				<p><strong>Über mich</strong></p><br>
					<label for="anrede">Anrede </label>									<select name="anrede" size="1" id="anrede" value="<?php if (isset($_SESSION['anrede'])) echo $_SESSION['anrede'] ; ?>"> 	<option value=""> </option> <option <?php if ($_SESSION['anrede'] == "Frau") echo "selected " ; ?> value="Frau">Frau</option>	<option <?php if ($_SESSION['anrede'] == "Herr") echo "selected " ; ?>value="Herr">Herr</option> 	<option <?php if ($_SESSION['anrede'] == "Frau und Herr") echo "selected " ; ?> value="Frau und Herr">Frau und Herr</option>	<option <?php if ($_SESSION['anrede'] == "Familie") echo "selected " ; ?> value="Familie">Familie</option> 	 </select>
					<label for="vorname">Vorname </label>								<input name="vorname" placeholder="Maxi" id="vorname" value="<?php if (isset($_SESSION['vorname'])) echo $_SESSION['vorname'] ; ?>">
					<label for="nachname"><strong>Nachname</strong>* </label>			<input name="nachname" placeholder="Muster" id="nachname" value="<?php if (isset($_SESSION['nachname'])) echo $_SESSION['nachname'] ; ?>" required>					
					<label for="geschlecht">Geschlecht </label>							<select name="geschlecht" size="1" id="geschlecht" value="<?php if (isset($_SESSION['geschlecht'])) echo $_SESSION['geschlecht'] ; ?>"> 	<option value=""> </option> <option <?php if ($_SESSION['geschlecht'] == "weiblich") echo "selected " ; ?> value="weiblich">weiblich</option>	<option <?php if ($_SESSION['geschlecht'] == "männlich") echo "selected " ; ?> value="männlich">männlich</option> 	<option <?php if ($_SESSION['geschlecht'] == "divers") echo "selected " ; ?>value="divers">divers</option> 	</select>
			<!--	<label for="geboren">Geb.-Datum </label>							<input type="date" name="geboren" id="geboren" value="<?php if (isset($_SESSION['geboren'])) echo $_SESSION['geboren'] ; ?>">  -->
					<label for="geboren">Geb.-Datum </label>							<input name="geboren" placeholder="00.00.0000" id="geboren" value="<?php if (isset($_SESSION['geboren'])) echo $_SESSION['geboren'] ; ?>">
					<label for="strasse">Straße </label>								<input name="strasse" placeholder="Musterstr." id="strasse" value="<?php if (isset($_SESSION['strasse'])) echo $_SESSION['strasse'] ; ?>">
					<label for="hausnr">Hausnummer </label>								<input name="hausnr" placeholder="0" id="hausnr" value="<?php if (isset($_SESSION['hausnr'])) echo $_SESSION['hausnr'] ; ?>">
					<label for="plz">Postleitzahl</label>								<input name="plz" placeholder="00000" id="plz" value="<?php if (isset($_SESSION['plz'])) echo $_SESSION['plz'] ; ?>">
					<label for="ort">Wohnort </label>									<input name="ort" placeholder="Musterdorf" id="ort" value="<?php if (isset($_SESSION['ort'])) echo $_SESSION['ort'] ; ?>">
					<label for="beruf">Beruf&nbsp;(aktuell) </label>					<input name="beruf" placeholder="derzeit arbeitssuchend" id="beruf" value="<?php if (isset($_SESSION['beruf'])) echo $_SESSION['beruf'] ; ?>">
			<!--	<div>Kinder (bis 21 J.)</div><div class="toggle text"><label>		<input type="checkbox" id="kinder" name="kinder" <?php if ($_SESSION['kinder'] == "ja") echo "checked" ; ?> value="ja"><span class="slider"></span></label></div>  -->
					<label for="erreichbar">wann erreichbar </label>					<input name="erreichbar" placeholder="Wochentage/von-bis" id="erreichbar" value="<?php if (isset($_SESSION['erreichbar'])) echo $_SESSION['erreichbar'] ; ?>">
			<formspan>
			</section>

			<section class="anmeldung nospace">
			<formspan>
				<p><strong>Anliegen</strong></p><br>				
					<label for="anliegen"><strong>Anliegen</strong>* </label>			<textarea name="anliegen" placeholder="... " id="anliegen"  type="text" value="<?php if (isset($_SESSION['anliegen'])) echo $_SESSION['anliegen'] ; ?>" required><?php if (isset($_SESSION['anliegen'])) echo $_SESSION['anliegen'] ; ?></textarea>
					<label for="email"><strong>eMail</strong>* </label>					<input name="email" placeholder="muster@beispiel.de" id="email" value="<?php if (isset($_SESSION['email'])) echo $_SESSION['email'] ; ?>" required>
					<label for="telefon"><strong>Telefon</strong>*</label>				<input name="telefon" placeholder="+49 000 00000000" id="telefon" value="<?php if (isset($_SESSION['telefon'])) echo $_SESSION['telefon'] ; ?>" required>
					<label for="mobil">Mobil </label>									<input name="mobil" placeholder="+49 000 00000000" id="mobil" value="<?php if (isset($_SESSION['mobil'])) echo $_SESSION['mobil'] ; ?>">
					<label for="terminwunsch">Terminwunsch </label>						<input name="terminwunsch" placeholder="am... um..." id="terminwunsch" value="<?php if (isset($_SESSION['terminwunsch'])) echo $_SESSION['terminwunsch'] ; ?>">
			<!--	<div>Anliegen dringend</div><div class="toggle text"><label>		<input type="checkbox" id="dringend" name="dringend" <?php if ($_SESSION['dringend'] == "ja") echo "checked" ; ?> value="ja"><span class="slider"></span></label></div>  -->
					<label for="dringend">Anliegen dringend </label>					<select name="dringend" id="dringend" value="<?php if (isset($_SESSION['dringend'])) echo $_SESSION['dringend'] ; ?>">   <option value=""> </option>	<option <?php if ($_SESSION['dringend'] == "nein") echo "selected " ; ?> value="nein">nein</option>  <option <?php if ($_SESSION['dringend'] == "dringend") echo "selected " ; ?> value="dringend">dringend</option>  <option <?php if ($_SESSION['dringend'] == "sehr dringend") echo "selected " ; ?> value="sehr dringend">sehr dringend</option>  	</select>
					<label for="modus">bevorzugter Modus</label>							<select name="modus" size="1" id="modus" value="<?php if (isset($_SESSION['modus'])) echo $_SESSION['modus'] ; ?>">   <option value=""></option>  <option <?php if ($_SESSION['modus'] == "Video-Chat") echo "selected " ; ?> value="Video-Chat">per Video-Dialog</option>  <option <?php if ($_SESSION['modus'] == "telefonisch") echo "selected " ; ?> value="telefonisch">per Telefon </option>  <option <?php if ($_SESSION['modus'] == "per Mail") echo "selected " ; ?> value="per Mail">per Mail</option>  <option <?php if ($_SESSION['modus'] == "persönlich") echo "selected " ; ?> value="persönlich">persönlich (in der Praxis)</option>   </select>
					<label for="beziehung">aktuelle&nbsp;Beziehung </label>				<select name="beziehung" size="1" id="beziehung" value="<?php if (isset($_SESSION['beziehung'])) echo $_SESSION['beziehung'] ; ?>">   <option value=""> </option>	<option <?php if ($_SESSION['beziehung'] == "ohne") echo "selected " ; ?> value="ohne">ohne</option>  <option <?php if ($_SESSION['beziehung'] == "mit Partner") echo "selected " ; ?> value="mit Partner">mit Partner/in (unverheiratet)</option>  <option <?php if ($_SESSION['beziehung'] == "verheiratet") echo "selected " ; ?> value="verheiratet">verheiratet/verpartnert</option>  <option <?php if ($_SESSION['beziehung'] == "sonstige") echo "selected " ; ?> value="sonstige">sonstige</option>	</select>
			<!--	<div>getrennt/-lebend</div><div class="toggle text"><label>			<input type="checkbox" id="getrennt" name="getrennt" <?php if ($_SESSION['getrennt'] == "ja") echo "checked" ; ?> value="ja"><span class="slider"></span></label></div>  -->
					<label for="getrennt">getrennt/-lebend </label>						<select name="getrennt" size="1" id="getrennt" value="<?php if (isset($_SESSION['getrennt'])) echo $_SESSION['getrennt'] ; ?>">   <option value=""> </option>  <option <?php if ($_SESSION['getrennt'] == "ja") echo "selected " ; ?> value="ja">ja</option>  <option <?php if ($_SESSION['getrennt'] == "nein") echo "selected " ; ?> value="nein">nein</option>     </select>
			<!--		<label for="kinder">Kinder&nbsp;(bis 21 Jahre) </label>				<select name="kinder" size="1" id="kinder" value="<?php if (isset($_SESSION['kinder'])) echo $_SESSION['kinder'] ; ?>">   <option value=""> </option>  <option <?php if ($_SESSION['kinder'] == "ja") echo "selected " ; ?> value="ja">ja</option>  <option <?php if ($_SESSION['kinder'] == "nein") echo "selected " ; ?> value="nein">nein</option>     </select>  -->
					<label for="kinder">Kinder&nbsp;(bis 21 Jahre) </label>				<input name="kinder" type="number" min="0" size="1" placeholder="0" id="kinder" value="<?php if (isset($_SESSION['kinder'])) echo $_SESSION['kinder'] ; ?>"> 
			<formspan>
			</section>

			<section class="anmeldung nospace">
			<formspan>
				<p><strong>Formales</strong></p><br>
				<strong>Bankverbindung:</strong><br>
					<label for="inhaber">Konto-Inhaber</label>							<input name="inhaber" placeholder="Vor- und Nachname" id="inhaber" value="<?php if (isset($_SESSION['inhaber'])) echo $_SESSION['inhaber'] ; ?>">
					<label for="iban">IBAN </label>					<input name="iban" placeholder="DE00 0000 0000 0000 0000 00" id="iban" value="<?php if (isset($_SESSION['iban'])) echo $_SESSION['iban'] ; ?>">
					<label for="bic">BIC </label>							<input name="bic" placeholder="XXXXXXXXXXX" id="bic" value="<?php if (isset($_SESSION['bic'])) echo $_SESSION['bic'] ; ?>">
					<label for="bank">Kreditinstitut </label>							<input name="bank" placeholder="Bank/Sparkasse" id="bank" value="<?php if (isset($_SESSION['bank'])) echo $_SESSION['bank'] ; ?>">
			<!--	<div><a href=sepa.php>SEPA-Lastschrift</a></div><div class="toggle text"><label><input type="checkbox" id="sepa" name="sepa" <?php if ($_SESSION['sepa'] == "ja") echo "checked" ; ?> value="ja"><span class="slider"></span></label></div>   -->
					<label for="sepa"><a href=sepa.php>SEPA-Lastschrift</a> </label>			<select name="sepa" size="1" id="sepa" value="<?php if (isset($_SESSION['sepa'])) echo $_SESSION['sepa'] ; ?>">   <option value=""> </option>  <option <?php if ($_SESSION['sepa'] == "ja") echo "selected " ; ?> value="ja">Lastschriftmandat erteilt</option>  <option <?php if ($_SESSION['sepa'] == "nein") echo "selected " ; ?> value="nein">kein Lastschriftmandat</option>   </select>
				<p> </p><br>
			<!--	<div><a href = impressum.php target="_blank">Datenschutz</a><strong> gelesen</strong>*</div><div class="toggle text"><label><input type="checkbox" id="agb" name="agb" <?php if ($_SESSION['agb'] == "ja") echo "checked" ; ?> value="ja"><span class="slider"></span></label></div>  -->
					<label for="agb"><a href=impressum.php><strong>Datenschutzregeln</strong></a>* </label>	<select name="agb" size="1" id="agb" value="<?php if (isset($_SESSION['agb'])) echo $_SESSION['agb'] ; ?>">   <option value=""> </option>  <option <?php if ($_SESSION['agb'] == "ja") echo "selected " ; ?> value="ja">stimme zu</option>  <option <?php if ($_SESSION['agb'] == "nein") echo "selected " ; ?> value="nein">stimme nicht zu</option>   </select>
					<label for="nospam"><strong>Spamschutz* <?PHP echo (date("d") +4) ;?>+5=</strong> </label>	<input name="nospam" placeholder="" id="nospam"  value="<?php if (isset($_SESSION['nospam'])) echo $_SESSION['nospam'] ; ?>" >
				<p>(<strong>*</strong> Pflichtfelder)</p><br>
				<p></p>		
				<button type="submit" name="absenden" value="absenden">senden & speichern</button>
			<formspan>
			</section>
		</form>

	<?PHP 
			}
	?>

	

	<footer>
		<p><a id=impressum href="impressum.php">Impressum</a>			
		<a id="copyright" href="http://gdt.de/">© 2021 gdt.de</a><br></p>
	</footer>


	<nav id="navigation">
		<ul class="nav nav-pills nav-stacked">
			<li><a href="index.php" tabindex="1"><i class="fas fa-home fa-fw"></i> Start</a></li>
			<li><a href="ich.php" tabindex="2"><i class="fas fa-user fa-fw"></i> Ich</a>
			<li><a href="wir.php" tabindex="3"><i class="fas fa-user-friends fa-fw"></i> Wir</a>
			<li><a href="onlineberatung.php" tabindex="4"><i class="fas fa-laptop fa-fw"></i> Online</a>
			<li><a href="vortraege.php" tabindex="5"><i class="fas fa-chalkboard-teacher fa-fw"></i> Vorträge</a>
			<li><a href="gutachten.php" tabindex="6"><i class="fas fa-balance-scale fa-fw"></i> Gutachten</a>
			<li><a href="methoden.php" tabindex="7"><i class="fas fa-scroll fa-fw"></i> Methoden</a>
			<li><a href="praxis.php" tabindex="8"><i class="fas fa-briefcase-medical fa-fw"></i> Praxis</a>
			<li><a href="kontakt.php" tabindex="9"><i class="fas fa-envelope fa-fw"></i> Kontakt</a></li>
			<li><a href="team.php" tabindex="10"><i class="fas fa-user-lock fa-fw"></i></a></li>
		</ul>
	</nav>

</main>

			
</body>
</html>