<!DOCTYPE html>

<?php
	session_start();
	// Error Reporting zunächst komplett abschalten
	error_reporting(0);
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
		<h1><span><i class="fas fa-envelope fa-lg"></i> </span> <span class="akzent2">Klienten-Kartei<span></h1>
		<h2><span>Klienten verwalten:</span></h2>
	</header>

	<article class="nospace">		<section class="spalte Kontakt">
			<h2><i class="fa fa-user-edit fa-lg"></i> Klienten-Daten:</h2>
			
			
	<?php
		if(isset($_POST['absenden'])) {
			// echo "absenden";
			//Formular ausgeführt - E-Mail generieren und Meldung ausgeben
			//HTML- und PHP-Tags aus den Eingabefeldern entfernen
			$_SESSION[anrede]			=strip_tags($_POST['anrede']);
			$_SESSION[vorname]			=strip_tags($_POST['vorname']);
			$_SESSION[nachname]			=strip_tags($_POST['nachname']);
			$_SESSION[geschlecht]		=strip_tags($_POST['geschlecht']);
			$_SESSION[geboren]			=strip_tags($_POST['geboren']);
			$_SESSION[strasse]			=strip_tags($_POST['strasse']);
			$_SESSION[hausnr]			=strip_tags($_POST['hausnr']);
			$_SESSION[plz]				=strip_tags($_POST['plz']);
			$_SESSION[ort]				=strip_tags($_POST['ort']);
			$_SESSION[beruf]			=strip_tags($_POST['beruf']);
			$_SESSION[beziehung]		=strip_tags($_POST['beziehung']);
			$_SESSION[getrennt]			=strip_tags($_POST['getrennt2']);
			$_SESSION[vorname2]			=strip_tags($_POST['vorname2']);
			$_SESSION[nachname2]		=strip_tags($_POST['nachname2']);
			$_SESSION[geschlecht2]		=strip_tags($_POST['geschlecht2']);
			$_SESSION[geboren2]			=strip_tags($_POST['geboren2']);
			$_SESSION[strasse2]			=strip_tags($_POST['strasse2']);
			$_SESSION[hausnr2]			=strip_tags($_POST['hausnr2']);
			$_SESSION[plz2]				=strip_tags($_POST['plz2']);
			$_SESSION[ort2]				=strip_tags($_POST['ort2']);
			$_SESSION[beruf2]			=strip_tags($_POST['beruf2']);
			$_SESSION[beziehung2]		=strip_tags($_POST['beziehung2']);
			$_SESSION[getrennt2]		=strip_tags($_POST['getrennt2']);
			$_SESSION[kinder]			=strip_tags($_POST['kinder']);
			$_SESSION[vorname_kind1]	=strip_tags($_POST['vorname_kind1']);
			$_SESSION[nachname_kind1]	=strip_tags($_POST['nachname_kind1']);
			$_SESSION[geboren_kind1]	=strip_tags($_POST['geboren_kind1']);
			$_SESSION[vorname_kind2]	=strip_tags($_POST['vorname_kind2']);
			$_SESSION[nachname_kind2]	=strip_tags($_POST['nachname_kind2']);
			$_SESSION[geboren_kind2]	=strip_tags($_POST['geboren_kind2']);
			$_SESSION[vorname_kind3]	=strip_tags($_POST['vorname_kind3']);
			$_SESSION[nachname_kind3]	=strip_tags($_POST['nachname_kind3']);
			$_SESSION[geboren_kind3]	=strip_tags($_POST['geboren_kind3']);
			$_SESSION[weitere_kinder]	=strip_tags($_POST['weitere_kinder']);
			
			$_SESSION[telefon]			=strip_tags($_POST['telefon']);
			$_SESSION[telefax]				=strip_tags($_POST['telefax']);
			$_SESSION[mobil]			=strip_tags($_POST['mobil']);
			$_SESSION[email]			=strip_tags($_POST['email']);
			$_SESSION[erreichbar]		=strip_tags($_POST['erreichbar']);

			$_SESSION[anliegen]			=strip_tags($_POST['anliegen']);
			$_SESSION[terminwunsch]			=strip_tags($_POST['terminwunsch']);
			$_SESSION[modus]			=strip_tags($_POST['modus']);
			$_SESSION[dringend]			=strip_tags($_POST['dringend']);
			$_SESSION[nachricht]		=strip_tags($_POST['nachricht']);

			$_SESSION[inhaber]				=strip_tags($_POST['inhaber']);
			$_SESSION[iban]				=strip_tags($_POST['iban']);
			$_SESSION[bic]				=strip_tags($_POST['bic']);
			$_SESSION[bank]				=strip_tags($_POST['bank']);
			$_SESSION[sepa]				=strip_tags($_POST['sepa']);
			$_SESSION[agb]				=strip_tags($_POST['agb']);

			$_SESSION[nospam]			=strip_tags($_POST['nospam']);


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
			$telefax			= $_SESSION[telefax];
			$mobil			= $_SESSION[mobil];
			$email			= $_SESSION[email];
			$erreichbar		= $_SESSION[erreichbar];
				
			$anliegen		= $_SESSION[anliegen];
			$terminwunsch			= $_SESSION[terminwunsch];
			$modus			= $_SESSION[modus];
			$dringend		= $_SESSION[dringend];
			$nachricht		= $_SESSION[nachricht];
				
			$inhaber			= $_SESSION[inhaber];
			$iban			= $_SESSION[iban];
			$bic			= $_SESSION[bic];
			$bank			= $_SESSION[bank];
			$sepa			= $_SESSION[sepa];
			$agb			= $_SESSION[agb];
				
			$nospam			= $_SESSION[nospam];   */

			
			
			


	/*		$name = $_SESSION[nachname]  ;
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
		//	$betreff					=strip_tags($_POST['betreff']);
		
			$anliegen					= $_SESSION[anliegen];

			$nachricht					= $_SESSION[nachricht];
			$nachricht					= wordwrap($nachricht, 76);

			$error_msg									="";
		//	if(strlen($_SESSION[vorname]) < 3) {
		//		$error_msg="<li>Bitte Vornamen angeben.</li>";
		//	}
			if(strlen($_SESSION[nachname]) <3 ) {
				$error_msg.="<li>Bitte Nachnamen angeben.</li>";
			}
			if(!preg_match("/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,4})$/",$_SESSION[email])){
				$error_msg.="<li>Bitte gültige eMail-Adresse angeben.</li>";
			}
		//	if(strlen($betreff) <3 ) {
		//		$error_msg.="<li>Bitte Betreff angeben.</li>";
		//	}
		//	if(strlen($nachricht) < 3 ) {
		//		$error_msg.="<li>Bitte Nachricht eintragen.</li>";
		//	}
			if($_SESSION[nospam] != (date("d") +9) ) {
				$error_msg.="<li>Das Feld zum Spamschutz muss den richtigen Wert enthalten: bitte " . (date("d") +9) . " eingeben.</li>";
				// echo "nospam ";
				}
			if(strlen($error_msg) > 0 ) {
				//Eines der Felder wurde nicht korrekt ausgefüllt
				echo "<p>Nachricht konnte nicht verschickt werden:<p><ul>";
				echo $error_msg;
				echo "</ul><p>Bitte <a href=\"javascript:history.back(1)\">zurückgehen</a> und korrigieren.</p><br/>";
			}else{
				$mail_body  ="Psychologische Praxis - Mail-Formular\n\n";
				$mail_body .="Nachricht von " . $name . " vom " . date("d.m.Y") . ", " . date("H:i") . " Uhr:\n\n";
				
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
				$mail_body .="Beziehung: " .  $_SESSION[beziehung]  . "\n";
				$mail_body .="getrennt seit: " .  $_SESSION[getrennt]  . "\n\n";
				
				$mail_body .="vorname2: " .  $_SESSION[vorname2]  . "\n";
				$mail_body .="Nachname2: " .  $_SESSION[nachname2]  . "\n";
				$mail_body .="Geschlecht2: " .  $_SESSION[geschlecht2]  . "\n";
				$mail_body .="Geboren2: " .  $_SESSION[geboren2]  . "\n";
				$mail_body .="Strasse2: " .  $_SESSION[strasse2]  . "\n";
				$mail_body .="Hausnummer2: " .  $_SESSION[hausnr2]  . "\n";
				$mail_body .="Postleitzahl2: " .  $_SESSION[plz2]  . "\n";
				$mail_body .="Ort2: " .  $_SESSION[ort2]  . "\n";
				$mail_body .="Beruf2: " .  $_SESSION[beruf2]  . "\n";
				$mail_body .="Beziehung2: " .  $_SESSION[beziehung2]  . "\n";
				$mail_body .="getrennt seit2: " .  $_SESSION[getrennt2]  . "\n\n";
				
				$mail_body .="Kinder: " .  $_SESSION[kinder]  . "\n";
				$mail_body .="Vorname Kind1: " .  $_SESSION[vorname_kind1]  . "\n";
				$mail_body .="Nachname Kind1: " .  $_SESSION[nachname_kind1]  . "\n";
				$mail_body .="Kind 1 geboren: " .  $_SESSION[geboren_kind1]  . "\n";
				$mail_body .="Vorname Kind2: " .  $_SESSION[vorname_kind2]  . "\n";
				$mail_body .="Nachname Kind2: " .  $_SESSION[nachname_kind2]  . "\n";
				$mail_body .="Kind 2 geboren: " .  $_SESSION[geboren_kind2]  . "\n";
				$mail_body .="Vorname Kind3: " .  $_SESSION[vorname_kind3]  . "\n";
				$mail_body .="Nachname Kind3: " .  $_SESSION[nachname_kind3]  . "\n";
				$mail_body .="Kind 3 geboren: " .  $_SESSION[geboren_kind3]  . "\n";
				$mail_body .="Weitere Kinder: " .  $_SESSION[weitere_kinder]  . "\n\n";

				$mail_body .="Telefon: " .  $_SESSION[telefon]  . "\n";
				$mail_body .="telefax: " .  $_SESSION[telefax]  . "\n";
				$mail_body .="Mobil: " .  $_SESSION[mobil]  . "\n";
				$mail_body .="eMail: " .  $_SESSION[email]  . "\n";
				$mail_body .="Erreichbar: " .  $_SESSION[erreichbar]  . "\n\n";

				$mail_body .="Anliegen: " .  $_SESSION[anliegen]  . "\n";
				$mail_body .="Terminwunsch: " .  $_SESSION[terminwunsch]  . "\n";
				$mail_body .="Modus: " .  $_SESSION[modus]  . "\n";
				$mail_body .="Dringend: " .  $_SESSION[dringend]  . "\n";
				$mail_body .="Nachricht: " .  $nachricht  . "\n\n";

				$mail_body .="Konto-Inhaber: " .  $_SESSION[inhaber]  . "\n";
				$mail_body .="IBAN: " .  $_SESSION[iban]  . "\n";
				$mail_body .="BIC: " .  $_SESSION[bic]  . "\n";
				$mail_body .="Bank: " .  $_SESSION[bank]  . "\n";
				$mail_body .="SEPA: " .  $_SESSION[sepa]  . "\n";
				$mail_body .="AGB: " .  $_SESSION[agb]  . "\n\n";

				$mail_body .="nospam: " .  $_SESSION[nospam]  . "\n\n";
				
				$mail_body .=$betreff . "\n";
				$mail_body .="-----------------------------------------------------------------------------\n";
				$mail_body .=$anliegen   . "\n";
				$mail_body .="-----------------------------------------------------------------------------\n";
				$mail_body .=$nachricht   . "\n";
				$mail_body .="-----------------------------------------------------------------------------\n";

				//Alle Felder ausgefüllt - eMail generieren
				$mail_result = mail($empfaenger,$betreff,$mail_body,$header);

				if ($mail_result == true) {
					echo '<p><font face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular" size="2"><strong>Nachricht wurde verschickt, vielen Dank.</strong></font></p>';
				} else {
					echo '<p><font face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular" size="2"><strong>Nachricht konnte nicht verschickt werden.</strong></font></p>';
				}
			}
	*/
		}else{
	?>
			
		<form class="kontakt" id="anmeldung" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" name="anmeldung">
				<p> Bitte eintragen</p><br>
					<label for="anrede">Anrede </label>									<select name="anrede" size="1" id="anrede" value="<?php if (isset($_SESSION['anrede'])) echo $_SESSION['anrede'] ; ?>"> 	<option value=""> </option> <option <?php if ($_SESSION['anrede'] == "Frau") echo "selected " ; ?> value="Frau">Frau</option>	<option <?php if ($_SESSION['anrede'] == "Herr") echo "selected " ; ?>value="Herr">Herr</option> 	<option <?php if ($_SESSION['anrede'] == "Frau und Herr") echo "selected " ; ?> value="Frau und Herr">Frau und Herr</option>	<option <?php if ($_SESSION['anrede'] == "Familie") echo "selected " ; ?> value="Familie">Familie</option> 	 </select>
					<label for="vorname">Vorname </label>								<input name="vorname" placeholder="Vorname" id="vorname" value="<?php if (isset($_SESSION['vorname'])) echo $_SESSION['vorname'] ; ?>">
					<label for="nachname">Nachname* </label>							<input name="nachname" placeholder="Nachname" id="nachname" value="<?php if (isset($_SESSION['nachname'])) echo $_SESSION['nachname'] ; ?>" required>					
					<label for="geschlecht">Geschlecht </label>							<select name="geschlecht" size="1" id="geschlecht" value="<?php if (isset($_SESSION['geschlecht'])) echo $_SESSION['geschlecht'] ; ?>"> 	<option value=""> </option> <option <?php if ($_SESSION['geschlecht'] == "weiblich") echo "selected " ; ?> value="weiblich">weiblich</option>	<option <?php if ($_SESSION['geschlecht'] == "männlich") echo "selected " ; ?> value="männlich">männlich</option> 	<option <?php if ($_SESSION['geschlecht'] == "divers") echo "selected " ; ?>value="divers">divers</option> 	</select>
					<label for="geboren">Geb.-Datum </label>							<input name="geboren" placeholder="00.00.0000" id="geboren" value="<?php if (isset($_SESSION['geboren'])) echo $_SESSION['geboren'] ; ?>">
					<label for="strasse">Straße </label>								<input name="strasse" placeholder="Strasse" id="strasse" value="<?php if (isset($_SESSION['strasse'])) echo $_SESSION['strasse'] ; ?>">
					<label for="hausnr">Hausnummer </label>								<input name="hausnr" placeholder="Hausnr." id="hausnr" value="<?php if (isset($_SESSION['hausnr'])) echo $_SESSION['hausnr'] ; ?>">
					<label for="plz">Postleitzahl</label>								<input name="plz" placeholder="00000" id="plz" value="<?php if (isset($_SESSION['plz'])) echo $_SESSION['plz'] ; ?>">
					<label for="ort">Wohnort </label>									<input name="ort" placeholder="Ort" id="ort" value="<?php if (isset($_SESSION['ort'])) echo $_SESSION['ort'] ; ?>">
					<label for="beruf">Beruf&nbsp;(aktuell) </label>					<input name="beruf" placeholder="(z.B.) Erzieherin, derzeit arbeitssuchend" id="beruf" value="<?php if (isset($_SESSION['beruf'])) echo $_SESSION['beruf'] ; ?>">
					<label for="beziehung">aktuelle&nbsp;Beziehung </label>				<select name="beziehung" size="1" id="beziehung" value="<?php if (isset($_SESSION['beziehung'])) echo $_SESSION['beziehung'] ; ?>">   <option value=""> </option>	<option <?php if ($_SESSION['beziehung'] == "ohne") echo "selected " ; ?> value="ohne">ohne</option>  <option <?php if ($_SESSION['beziehung'] == "mit Partner") echo "selected " ; ?> value="mit Partner">mit Partner/in (unverheiratet)</option>  <option <?php if ($_SESSION['beziehung'] == "verheiratet") echo "selected " ; ?> value="verheiratet">verheiratet/verpartnert</option>  <option <?php if ($_SESSION['beziehung'] == "sonstige") echo "selected " ; ?> value="sonstige">sonstige</option>	</select>
					<label for="getrennt">getrennt/-lebend </label>						<select name="getrennt" size="1" id="getrennt" value="<?php if (isset($_SESSION['getrennt'])) echo $_SESSION['getrennt'] ; ?>">   <option value=""> </option>  <option <?php if ($_SESSION['getrennt'] == "ja") echo "selected " ; ?> value="ja">ja</option>  <option <?php if ($_SESSION['getrennt'] == "nein") echo "selected " ; ?> value="nein">nein</option>     </select>

				<p><strong>Partner (falls zutreffend)</strong></p><br>
					<label for="vorname2">Partner/in Vorname </label>				<input name="vorname2" placeholder="2. Vorname" id="vorname2" value="<?php if (isset($_SESSION['vorname2'])) echo $_SESSION['vorname2'] ; ?>">
					<label for="nachname2">Partner/in Nachname </label>				<input name="nachname2" placeholder="2. Nachname" id="nachname2" value="<?php if (isset($_SESSION['nachname2'])) echo $_SESSION['nachname2'] ; ?>">
					<label for="geschlecht2">Partner/in Geschlecht </label>			<select name="geschlecht2" size="1" id="geschlecht2" value="<?php if (isset($_SESSION['geschlecht2'])) echo $_SESSION['geschlecht2'] ; ?>"> 	<option value=""> </option> <option <?php if ($_SESSION['geschlecht2'] == "weiblich") echo "selected " ; ?> value="weiblich">weiblich</option>	<option <?php if ($_SESSION['geschlecht2'] == "mannlich") echo "selected " ; ?> value="männlich">männlich</option> 	<option <?php if ($_SESSION['geschlecht2'] == "divers") echo "selected " ; ?> value="divers">divers</option> 	</select>
					<label for="geboren2">Partner/in Geb.-Datum </label>			<input  type="date"name="geboren2" placeholder="00.00.0000" id="geboren2" value="<?php if (isset($_SESSION['geboren2'])) echo $_SESSION['geboren2'] ; ?>">
					<label for="strasse2">Partner/in Straße </label>				<input name="strasse2" placeholder="Strasse" id="strasse2" value="<?php if (isset($_SESSION['strasse2'])) echo $_SESSION['strasse2'] ; ?>">
					<label for="hausnr2">Partner/in Hausnummer </label>				<input name="hausnr2" placeholder="Hausnr." id="hausnr2" value="<?php if (isset($_SESSION['hausnr2'])) echo $_SESSION['hausnr2'] ; ?>">
					<label for="plz2">Partner/in Postleitzahl</label>				<input name="plz2" placeholder="00000" id="plz2" value="<?php if (isset($_SESSION['plz2'])) echo $_SESSION['plz2'] ; ?>">
					<label for="ort2">Partner/in Wohnort </label>					<input name="ort2" placeholder="Ort" id="ort2" value="<?php if (isset($_SESSION['ort2'])) echo $_SESSION['ort2'] ; ?>">
					<label for="beruf2">Partner/in Beruf&nbsp;(aktuell) </label>	<input name="beruf2" placeholder="derzeit arbeitssuchend" id="beruf2" value="<?php if (isset($_SESSION['beruf2'])) echo $_SESSION['beruf2'] ; ?>">
					<label for="beziehung2">Partner/in Beziehungs-Status </label>	<select name="beziehung2" size="1" id="beziehung2" value="<?php if (isset($_SESSION['beziehung2'])) echo $_SESSION['beziehung2'] ; ?>">   <option value=""> </option>	<option <?php if ($_SESSION['beziehung2'] == "ohne") echo "selected " ; ?> value="ohne">dezeit ohne Partner</option>  <option <?php if ($_SESSION['beziehung2'] == "mit Partner") echo "selected " ; ?> value="mit Partner">mit Partner, unverheiratet/unverpartnert</option>  <option <?php if ($_SESSION['beziehung2'] == "verheiratet") echo "selected " ; ?> value="verheiratet">mit Partner, verheiratet/verpartnert</option>  <option <?php if ($_SESSION['beziehung2'] == "in Trennung") echo "selected " ; ?> value="in Trennung">verheiratet/verpartnert, Trennung anstehend</option>  <option <?php if ($_SESSION['beziehung2'] == "getrennt") echo "selected " ; ?> value="getrennt">verheiratet/verpartnert, getrennt lebend</option>  <option <?php if ($_SESSION['beziehung2'] == "geschieden") echo "selected " ; ?> value="geschieden">geschieden</option>  <option <?php if ($_SESSION['beziehung2'] == "sonstige") echo "selected " ; ?> value="sonstige">sonstige</option>	</select>
					<label for="getrennt2">Partner/in getrennt/-lebend </label>		<select name="getrennt2" size="1" id="getrennt2" value="<?php if (isset($_SESSION['getrennt2'])) echo $_SESSION['getrennt2'] ; ?>">   <option value=""> </option>	 <option <?php if ($_SESSION['getrennt2'] == "gerade erst") echo "selected " ; ?> value="vor kurzem">vor kurzem</option>  <option <?php if ($_SESSION['getrennt2'] == "einige Wochen") echo "selected " ; ?> value="einige Wochen">einige Wochen</option>  <option <?php if ($_SESSION['getrennt2'] == "einige Monate") echo "selected " ; ?> value="einige Monate">einige Monate</option>  <option <?php if ($_SESSION['getrennt2'] == "einige Jahre") echo "selected " ; ?> value="einige Jahre">einige Jahre</option>  <option <?php if ($_SESSION['getrennt2'] == "länger") echo "selected " ; ?> value="länger">länger</option>	</select>

				<p><strong>Kinder</strong></p><br>
					<label for="kinder">Kinder&nbsp;(bis 21 Jahre) </label>				<select name="kinder" size="1" id="kinder" value="<?php if (isset($_SESSION['kinder'])) echo $_SESSION['kinder'] ; ?>">   <option value=""> </option>  <option <?php if ($_SESSION['kinder'] == "ja") echo "selected " ; ?> value="ja">ja</option>  <option <?php if ($_SESSION['kinder'] == "nein") echo "selected " ; ?> value="nein">nein</option>     </select>
					<label for="vorname_kind1">&nbsp;- ggf. Vorname 1. Kind </label>	<input name="vorname_kind1" placeholder="Vorname Kind 1" id="vorname_kind1" value="<?php if (isset($_SESSION['vorname_kind1'])) echo $_SESSION['vorname_kind1'] ; ?>">
					<label for="nachname_kind1">&nbsp;- ggf. Nachname 1. Kind </label>	<input name="nachname_kind1" placeholder="Nachname Kind 1" id="nachname_kind1" value="<?php if (isset($_SESSION['nachname_kind1'])) echo $_SESSION['nachname_kind1'] ; ?>">
					<label for="geboren_kind1">&nbsp;- ggf. Geb.-Datum 1. Kind </label>	<input  type="date"name="geboren_kind1" placeholder="00.00.0000" id="geboren_kind1" value="<?php if (isset($_SESSION['geboren_kind1'])) echo $_SESSION['geboren_kind1'] ; ?>">
					<label for="vorname_kind2">&nbsp;- ggf. Vorname 2. Kind</label>		<input name="vorname_kind2" placeholder="Vorname Kind 2" id="vorname_kind2" value="<?php if (isset($_SESSION['vorname_kind2'])) echo $_SESSION['vorname_kind2'] ; ?>">
					<label for="nachname_kind2">&nbsp;- ggf. Nachname 2. Kind </label>	<input name="nachname_kind2" placeholder="Nachname Kind 2" id="nachname_kind2" value="<?php if (isset($_SESSION['nachname_kind2'])) echo $_SESSION['nachname_kind2'] ; ?>">
					<label for="geboren_kind2">&nbsp;- ggf. Geb.-Datum 2. Kind </label>	<input  type="date"name="geboren_kind2" placeholder="00.00.0000" id="geboren_kind2" value="<?php if (isset($_SESSION['geboren_kind2'])) echo $_SESSION['geboren_kind2'] ; ?>">
					<label for="vorname_kind3">&nbsp;- ggf. Vorname 3. Kind</label>		<input name="vorname_kind3" placeholder="Vorname Kind 3" id="vorname_kind3" value="<?php if (isset($_SESSION['vorname_kind3'])) echo $_SESSION['vorname_kind3'] ; ?>">
					<label for="nachname_kind3">&nbsp;- ggf. Nachname 3. Kind </label>	<input name="nachname_kind3" placeholder="Nachname Kind 3" id="nachname_kind3" value="<?php if (isset($_SESSION['nachname_kind3'])) echo $_SESSION['nachname_kind3'] ; ?>">
					<label for="geboren_kind3">&nbsp;- ggf. Geb.-Datum 3. Kind </label>	<input  type="date"name="geboren_kind3" placeholder="00.00.0000" id="geboren_kind3" value="<?php if (isset($_SESSION['geboren_kind3'])) echo $_SESSION['geboren_kind3'] ; ?>">
					<label for="weitere_kinder">&nbsp;- ggf. weitere Kinder </label>	<input name="weitere_kinder" placeholder="weitere Kinder" id="weitere_kinder" value="<?php if (isset($_SESSION['weitere_kinder'])) echo $_SESSION['weitere_kinder'] ; ?>">
					
				<p><strong>Erreichbarkeit</strong></p><br>
					<label for="telefon">Telefon (Festnetz)*</label>					<input name="telefon" placeholder="+49 000 00000000" id="telefon" value="<?php if (isset($_SESSION['telefon'])) echo $_SESSION['telefon'] ; ?>" required>
					<label for="telefax">Telefax </label>								<input name="telefax" placeholder="+49 251 00000000" id="telefax" value="<?php if (isset($_SESSION['telefax'])) echo $_SESSION['telefax'] ; ?>">
					<label for="mobil">Mobil-Nr. </label>								<input name="mobil" placeholder="+49 000 00000000" id="mobil" value="<?php if (isset($_SESSION['mobil'])) echo $_SESSION['mobil'] ; ?>">
					<label for="email">eMail-Adresse* </label>							<input name="email" placeholder="(z.B.) muster@beispiel.de" id="email" value="<?php if (isset($_SESSION['email'])) echo $_SESSION['email'] ; ?>" required>
					<label for="erreichbar">am&nbsp;besten zu erreichen? </label>		<input name="erreichbar" placeholder="(z.B.) Mo-Fr 10-18, Sa 10-14" id="erreichbar" value="<?php if (isset($_SESSION['erreichbar'])) echo $_SESSION['erreichbar'] ; ?>">

				<p><strong>Anliegen</strong></p><br>
					<label for="anliegen">Anliegen (in Stichworten)* </label>			<textarea name="anliegen" placeholder="Psychologische Beratung ... " id="anliegen"  type="text" value="<?php if (isset($_SESSION['anliegen'])) echo $_SESSION['anliegen'] ; ?>" required><?php if (isset($_SESSION['anliegen'])) echo $_SESSION['anliegen'] ; ?></textarea>
					<label for="terminwunsch">Terminwunsch </label>						<input name="terminwunsch" placeholder="(z.B.) mittwochs 10-12 Uhr" id="terminwunsch" value="<?php if (isset($_SESSION['terminwunsch'])) echo $_SESSION['terminwunsch'] ; ?>">
					<label for="modus">persönlich, Telefon, Mail, Video-Dialog</label>	<select name="modus" size="1" id="modus" value="<?php if (isset($_SESSION['modus'])) echo $_SESSION['modus'] ; ?>">   <option value=""></option>  <option <?php if ($_SESSION['modus'] == "Video-Chat") echo "selected " ; ?> value="Video-Chat">per Video-Dialog</option>  <option <?php if ($_SESSION['modus'] == "telefonisch") echo "selected " ; ?> value="telefonisch">per Telefon </option>  <option <?php if ($_SESSION['modus'] == "per Mail") echo "selected " ; ?> value="per Mail">per Mail</option>  <option <?php if ($_SESSION['modus'] == "persönlich") echo "selected " ; ?> value="persönlich">persönlich (in der Praxis)</option>   </select>
					<label for="dringend">Anliegen dringend </label>					<input name="dringend" placeholder="" id="dringend" value="<?php if (isset($_SESSION['dringend'])) echo $_SESSION['dringend'] ; ?>">
					<label for="nachricht">Nachricht </label>							<textarea name="nachricht" placeholder="" id="nachricht" type="text" value="<?php if (isset($_SESSION['nachricht'])) echo $_SESSION['nachricht'] ; ?>" ><?php if (isset($_SESSION['nachricht'])) echo $_SESSION['nachricht'] ; ?></textarea>

				<p><strong>Bankverbindung</strong></p><br>
					<label for="inhaber">Kontoinhaber (falls abweichend)</label>		<input name="inhaber" placeholder="Vor- und Nachname" id="inhaber" value="<?php if (isset($_SESSION['inhaber'])) echo $_SESSION['inhaber'] ; ?>">
					<label for="iban">IBAN&nbsp;(Konto-Nr.) </label>					<input name="iban" placeholder="DE00 0000 0000 0000 0000 00" id="iban" value="<?php if (isset($_SESSION['iban'])) echo $_SESSION['iban'] ; ?>">
					<label for="bic">BIC&nbsp;(BLZ ) </label>							<input name="bic" placeholder="XXXXXXXXXXX" id="bic" value="<?php if (isset($_SESSION['bic'])) echo $_SESSION['bic'] ; ?>">
					<label for="bank">Kreditinstitut </label>							<input name="bank" placeholder="Bank/Sparkasse Musterstadt" id="bank" value="<?php if (isset($_SESSION['bank'])) echo $_SESSION['bank'] ; ?>">
					<label for="sepa">SEPA-Lastschriftmandat erteilt</label>	<select name="sepa" size="1" id="sepa" value="<?php if (isset($_SESSION['sepa'])) echo $_SESSION['sepa'] ; ?>">   <option value=""> </option>  <option <?php if ($_SESSION['sepa'] == "ja") echo "selected " ; ?> value="ja">ja</option>  <option <?php if ($_SESSION['sepa'] == "nein") echo "selected " ; ?> value="nein">nein</option>   </select>
				<p><strong>Formalia</strong></p><br>
					<label for="agb"><a href=impressum.php>Datenschutzregeln</a> <strong> </strong></label>	<select name="agb" size="1" id="agb" value="<?php if (isset($_SESSION['agb'])) echo $_SESSION['agb'] ; ?>">   <option value=""> </option>  <option <?php if ($_SESSION['agb'] == "ja") echo "selected " ; ?> value="ja">ja</option>  <option <?php if ($_SESSION['agb'] == "nein") echo "selected " ; ?> value="nein">nein</option>   </select>
					<label for="nospam"><strong>Spamschutz* <?PHP echo (date("d") +4) ;?>+5=</strong> </label>	<input name="nospam" placeholder="" id="nospam"  value="<?php if (isset($_SESSION['nospam'])) echo $_SESSION['nospam'] ; ?>" >
				<p>(<strong>*</strong> Pflichtfelder)</p><br>
				<p></p>		
				<button type="submit" name="absenden" value="absenden">absenden</button>
			</form>
			</section>
			
	<?PHP 
			}
	?>


		</article>


	<aside  class="contact nospace">			
		<h2><a href="kontakt.php"><i class="fas fa-envelope fa-lg"></i> Kontakt</a></h2>
		<address>
		  <h3>&nbsp; Sprechzeiten</h3>
		<dl class="grid">
		  <dt>Mo – Fr:</dt> 
		  <dd>10:00 – 18:00 Uhr</dd>
		  <dt>Mo – Fr:</dt> 
		  <dd>18:00 - 23:00<br>(nur Online)</dd>
		  <dt>Sa, So:</dt> 
		  <dd>12:00–18:00 Uhr<br>(nur Online)</dd>
		</dl>
		<dl class="grid">
		  <dt><i class="fas fa-phone"></i> Tel.</dt>
		  <dd><a href="tel:+49-251-20845330">(0251) 2084 5330</a></dd>

		  <dt><i class="fas fa-telefax"></i> telefax</dt>
		  <dd>(0251) 2084 5332<br>(nach Absprache)</dd>   
		  <dt><i class="fas fa-mail-bulk"></i> eMail</dt>
		  <dd><a href="mailto:mail@psychologe-ms.de">mail@psychologe-ms.de</a></dd>

		  <dt><i class="fas fa-house-user"></i> Anschrift</dt>
		  <dd>Psychologische Praxis - Beratung, Therapie, Diagnostik, Gutachten<br/>
			Musterstraße 93<br/>
			48157 Münster
		  </dd>
		</address>
		<address>
		  <h3>&nbsp;<i class="fas fa-car"></i></i> Anfahrt</h3>
		<dl class="grid">
		  <dt> </dt>
		</dl>
		<dl class="grid">
		  <dd> </dd>
		</dl>
		
		<p></p>
		<h2><a href="impressum.php"><i class="fas fa-envelope fa-fw"></i> Anbieter</a></h2>
		<dl class="grid">
		  <dt>Anbieter nach Teledienstgesetz</dt> 
		  <dd>Psychologische Praxis <strong>Guido Dielen</strong><br/>
			Musterstraße 93<br/>
			48157 Münster
		  </dd>
		 </dl>
	  </address>
						&nbsp;&nbsp;&nbsp;<a class="button" href="impressum.php">mehr zu Vertrauensschutz, Datenschutz</a>
	</aside>


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