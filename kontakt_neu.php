<!DOCTYPE html>

<?php
	session_start();
	// Error Reporting zunächst komplett abschalten
	error_reporting(E_ALL);
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
		<h1><span><i class="fas fa-envelope fa-lg"></i> </span> Ihr <span class="akzent2">Anliegen<span></h1>
		<p>Bitte nutzen Sie das folgende Formular für Ihre Nachricht an uns. Wir antworten kurzfristig.<br>
		Wenn es eilt können Sie uns alternativ mit dem <a href="anmeldung.php"><i class="fas fa-user-edit"></i> ausführlichen Anmeldeformular</a> auch direkt Ihre persönlichen Angaben und Ihr Anliegen übermitteln.<p>
		<h2><span>Ihre Nachricht an uns:</span></h2>
	</header>

		<section class="contact nospace">
		<h2><i class="fa fa-user-edit fa-lg"></i> Ihre Nachricht</h2>


	<?php
		if(isset($_POST['absenden'])) {
			// echo "absenden";
			//Formular ausgeführt - E-Mail generieren und Meldung ausgeben
			//HTML- und PHP-Tags aus den Eingabefeldern entfernen
			$_SESSION['anrede']     =strip_tags($_POST['anrede']);
			$_SESSION['vorname']    =strip_tags($_POST['vorname']);
			$_SESSION['nachname']   =strip_tags($_POST['nachname']);
			$_SESSION['telefon']    =strip_tags($_POST['telefon']);
			$_SESSION['mobil']      =strip_tags($_POST['mobil']);
			$_SESSION['email']      =strip_tags($_POST['email']);
			$_SESSION['erreichbar'] =strip_tags($_POST['erreichbar']);
			$_SESSION['nachricht']  =strip_tags($_POST['nachricht']);
			$_SESSION['nospam']     =strip_tags($_POST['nospam']);


			$name = $_SESSION['nachname']  ;
			if ( ($_SESSION['vorname'] != "" )  ) {
				$name =  $_SESSION['vorname'] . " " . $name ;
			}

			// hier >>> Absender- und Empfänger-Adresse <<<  !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
			$from           = "Psychologische Praxis <mail@psychologe-ms.de>";
			$sender         = "Psychologische Praxis <mail@psychologe-ms.de>";
			$returnpath     = "Psychologische Praxis <mail@psychologe-ms.de>";
			$replyto        = $name . " <" . $_SESSION['email'] . ">";
			$empfaenger     = "Psychologische Praxis <mail@psychologe-ms.de>";
			$empfaenger_cc  = "" ;
			$empfaenger_bcc = "Bärbel Bornemann - gdt <bbornemann@gdt.de>, gdielen@gmail.com";

			//header
			$header         = 'From:' . $from . "\n";
			$header        .= 'Sender:' . $sender . "\n";
			$header        .= 'Return-Path: ' . $returnpath . "\r\n";
			$header        .= 'Reply-To:' . $replyto . "\n";
			$header        .= 'X-Mailer: PHP/' . phpversion() . "\n";
			$header        .= 'X-Sender-IP: ' . $_SERVER['REMOTE_ADDR'] . "\n";
			$header        .= 'Cc: ' . $empfaenger_cc . "\n";
			$header        .= 'Bcc: ' . $empfaenger_bcc . "\n";
		//	$header        .= "Content-type: text/html\n';
		//	$header        .= "Content-type: text/html;charset=iso-8859-1\n";
			$header        .= "Content-type: text/plain; charset=utf-8\n";
			$header        .= "Content-Language: de-DE\n";
			$header        .= "Content-Transfer-Encoding: 8bit\n";
			

			$betreff         = "Ihre Nachricht an die Psychologische Praxis:";
		//	$betreff        = strip_tags($_POST['betreff']);

			$nachricht		= $_SESSION['nachricht'];
			$nachricht		= wordwrap($nachricht, 76);
			
			$error_msg            ="";
		//	if(strlen($_SESSION['vorname']) < 3) {
		//		$error_msg="<li>Bitte Vornamen angeben.</li>";
		//	}
			if(strlen($_SESSION['nachname']) <3 ) {
				$error_msg.="<li>Bitte Nachnamen angeben.</li>";
			}
			if ($_SESSION['vorname'] != ""  AND  !preg_match("#^[\p{L},;.:_&!?*'()/\ \-\+]+$#u", $_SESSION['vorname'])) {
				$error_msg.="<li>Bitte die Schreibweise des Vornamens auf ungültige Zeichen prüfen.</li>";
				// echo "vorname ";
			}
			if ($_SESSION['nachname'] != ""  AND  !preg_match("#^[\p{L},;.:_&!?*'()/\ \-\+]+$#u", $_SESSION['nachname'])) {
				$error_msg.="<li>Bitte die Schreibweise des Nachnamens auf ungültige Zeichen prüfen.</li>";
				// echo "nachname ";
			}
		//	if(strlen($_SESSION['telefon']) <5 ) {
		//		$error_msg.="<li>Bitte Telefonnummer angeben.</li>";
		//		echo "telefon ";
		//	}
		//	if ($_SESSION['telefon'] != ""   AND   !preg_match("#^\+?[0-9()/\ \-]+$#u", $_SESSION['telefon'])) {
		//		$error_msg.="<li>Bitte gültige Telefonnummer angeben.</li>";
		//		// echo "telefon2 ";
		//	}
		//	if ($_SESSION['mobil'] != ""   AND   !preg_match("#^\+?[0-9()/\ \-]+$#u", $_SESSION['mobil'])) {
		//		$error_msg.="<li>Bitte gültige Mobilnummer angeben.</li>";
		//		// echo "mobil ";
		//	}
			if(!preg_match("#^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,4})$#",$_SESSION['email'])){
				$error_msg.="<li>Bitte gültige eMail-Adresse angeben.</li>";
			}
		//	if(strlen($betreff) <3 ) {
		//		$error_msg.="<li>Bitte Betreff angeben.</li>";
		//	}
			if(strlen($nachricht) < 3 ) {
				$error_msg.="<li>Bitte Nachricht eintragen.</li>";
			}
			if ($_SESSION['nachricht'] != ""  AND  !preg_match("#^[\p{L}0-9,;.:_&!?*'()/\ \-\+\"]+$#u", $_SESSION['nachricht'])) {
				$error_msg.="<li>Bitte die Schreibweise des Anliegens auf ungültige Zeichen prüfen.</li>";
				// echo "nachricht ";
			}
			if($_SESSION['nospam'] != (date("d") +9) ) {
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
				$mail_body .="Nachricht von " . $_SESSION['anrede'] . " " . $name . " vom " . date("d.m.Y") . ", " . date("H:i") . " Uhr:\n\n";
				
				$mail_body .="Telefon: "      . $_SESSION['telefon'] . "\n";
				$mail_body .="Mobil: "        . $_SESSION['mobil'] . "\n";
				$mail_body .="eMail: "        . $_SESSION['email'] . "\n";
				$mail_body .="erreichbar: "   . $_SESSION['erreichbar'] . "\n\n";
				$mail_body .=$betreff . "\n";
				$mail_body .="-----------------------------------------------------------------------------\n";
				$mail_body .=$_SESSION['nachricht']   . "\n";
				$mail_body .="-----------------------------------------------------------------------------\n";

				//Alle Felder ausgefüllt - eMail generieren
				$mail_result = mail($empfaenger,$betreff,$mail_body,$header);

				if ($mail_result == true) {
					echo '<p><font face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular" size="2"><strong>Nachricht wurde verschickt, vielen Dank.</strong></font></p>';
				} else {
					echo '<p><font face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular" size="2"><strong>Nachricht konnte nicht verschickt werden.</strong></font></p>';
				}
			}

		}else{
	?>

			<form class="kontakt" id="kontakt" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" name="kontakt">
				<p> Bitte eintragen</p><br>
					<label for="anrede">Anrede </label>									<select name="anrede" size="1" id="anrede" value="<?php if (isset($_SESSION['anrede'])) echo $_SESSION['anrede'] ; ?>"> 	<option value=""> </option> <option <?php if ($_SESSION['anrede'] == "Frau") echo "selected " ; ?> value="Frau">Frau</option>	<option <?php if ($_SESSION['anrede'] == "Herr") echo "selected " ; ?>value="Herr">Herr</option> 	<option <?php if ($_SESSION['anrede'] == "Frau und Herr") echo "selected " ; ?> value="Frau und Herr">Frau und Herr</option>	<option <?php if ($_SESSION['anrede'] == "Familie") echo "selected " ; ?> value="Familie">Familie</option> 	 </select>
					<label for="vorname">Vorname </label>							<input name="vorname" placeholder="Max" id="" value="<?php if (isset($_SESSION['vorname'])) echo $_SESSION['vorname'] ; ?>">
					<label for="nachname"><strong>Nachname</strong>* </label>		<input name="nachname" placeholder="Muster" id="nachname" value="<?php if (isset($_SESSION['nachname'])) echo $_SESSION['nachname'] ; ?>" required>					
					<label for="telefon">Telefon (Festnetz)</label>					<input name="telefon" placeholder="+49 000 00000000" id="telefon" value="<?php if (isset($_SESSION['telefon'])) echo $_SESSION['telefon'] ; ?>">
					<label for="mobil">Mobil-Nr. </label>							<input name="mobil" placeholder="+49 000 00000000" id="mobil" value="<?php if (isset($_SESSION['mobil'])) echo $_SESSION['mobil'] ; ?>">
					<label for="email"><strong>eMail-Adresse</strong>* </label>		<input name="email" placeholder="muster@beispiel.de" id="email" value="<?php if (isset($_SESSION['email'])) echo $_SESSION['email'] ; ?>" required>
					<label for="erreichbar">wann erreichbar </label>				<input name="erreichbar" placeholder="Wochentage/von-bis" id="erreichbar" value="<?php if (isset($_SESSION['erreichbar'])) echo $_SESSION['erreichbar'] ; ?>">
					<label for="nachricht"><strong>Nachricht</strong>* </label>		<textarea name="nachricht" placeholder="" id="nachricht" type="text" value="<?php if (isset($_SESSION['nachricht'])) echo $_SESSION['nachricht'] ; ?>" required><?php if (isset($_SESSION['nachricht'])) echo $_SESSION['nachricht'] ; ?></textarea>
					<label for="nospam"><strong>Spamschutz* <?PHP echo (date("d") +4) ;?>+5=</strong> </label>	<input name="nospam" placeholder="" id="nospam"  value="<?php if (isset($_SESSION['nospam'])) echo $_SESSION['nospam'] ; ?>" >
				<p>(<strong>*</strong> Pflichtfelder)</p><br>
				<p></p>		
				<button type="submit" name="absenden" value="absenden">absenden</button>
			</form>
			
	<?PHP 
			}
	?>


		</section>
			
		<section class="spalte">			
			<h2><a href=anmeldung.php><i class="fa fa-user-edit fa-lg"></i> Anmeldeformular</a></h2>
			<p>Sie können uns alternativ auch direkt Ihre persönlichen Angaben und Ihr Anliegen schildern. Hierzu verwenden Sie bitte das ausführliche Anmeldeformular:</p>
			<p>&nbsp;</p>
			<p><a href=anmeldung.php><img class="img-shadow" src=img/anmeldung.png alt=Anmeldung"></a></p>
			<a class="button" href="anmeldung.php">zum ausführlichen Anmeldeformular</a>
		</section>


	<aside class="nospace">    
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
		  <dt><i class="fas fa-fax"></i> Fax</dt>
		  <dd>(0251) 2084 5332<br>(nach Absprache)</dd>   
		  <dt><i class="fas fa-mail-bulk"></i> eMail</dt>
		  <dd><a href="mailto:mail@psychologe-ms.de">mail@psychologe-ms.de</a></dd>

		  <dt><i class="fas fa-house-user"></i> Anschrift</dt>
		  <dd>Psychologische Praxis - Beratung, Therapie, Diagnostik, Gutachten<br/>
			Musterstraße 93<br/>
			48157 Münster
		  </dd>
		 </dl>
		</address>
	</aside>

		<footer>
			<p>In dringenden Notfällen hilf sofort der Notruf unter <strong>112</strong> oder die Telefonseelsorge unter <strong>0800 / 1110111</strong>.</p>
		</footer>


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
			<li><a aria-current="page"><i class="fas fa-envelope fa-fw"></i> Kontakt</a></li>
			<li><a href="team.php" tabindex="10"><i class="fas fa-user-lock fa-fw"></i></a></li>
      </ul>
	</nav>

</main>

    
</body>
</html>