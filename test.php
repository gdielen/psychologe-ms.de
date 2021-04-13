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
		<h2><a id="logo" title="zurück zur Startseite!" href="index.php">Psychologische Praxis<span> Münster</span> - <span class="akzent2">Guido&nbsp;Dielen</span> <span>und Team</span></a></h2>
		<a id="navlink" title="zum Navigationsmenü" href="#navigation">☰</a>
	</header>

<main id="main">
	<header>
		<h1><span></span><span class="akzent2">Ihr Anliegen<span></h1>
		<p>Bitte nutzen Sie das folgende Formular, um uns einige Abgaben über sich und Ihre Anliegen zu machern. Wir antworten kurzfristig. 
		<br>Wenn Sie uns ein SEPA-Lastschriftmandat erteilen buchen wir erst nach dem jeweiligen Termin ab. Ansonsten erbitten wir Vorkasse bis 24h vor Termin.<p>
		<h2><span>Ihre Nachricht an uns:</span></h2>
	</header>

	<article class="nospace">		<section class="spalte Kontaktdaten">
			<h2><i class="fa fa-user-edit fa-lg"></i> Pesönliche Angaben</h2>
			<form>
			<p> Bitte eintragen</p><br>
				<label for="vorname">Vorname </label>						<input name="vorname" placeholder="Vorname" id="vorname">
				<label for="nachmane">Nachname* </label>					<input name="nachname" placeholder="Nachname" id="nachrname" required>
				
				<label for="telefon">Telefon (Festnetz)</label>					<input name="telefon" placeholder="+49 000 00000000" id="telefon" >
				<label for="mobil">Mobil-Nr. </label>							<input name="mobil" placeholder="+49 000 00000000" id="mobil ">
				<label for="email">eMail-Adresse* </label>						<input name="email" placeholder="(z.B.) muster@beispiel.de" id="email" required>
				<label for="erreichbar">am&nbsp;besten zu erreichen? </label>	<input name="erreichbar" placeholder="(z.B.) Mo-Fr 10-18, Sa 10-14" id="erreichbar">

				<label for="anliegen">Anliegen* </label>	<textarea name="anliegen" placeholder="Hilfe bei ... " id="anliegen" type="text" required></textarea>

			<p>(* Pflichtfeld)</p>
			<p> </p>
			<p> </p>
				<button type="submit">speichern & senden</button>
			</form>
		</section>
		<section class="spalte Kontaktdaten">
			<h2><i class="fa fa-user-edit fa-lg"></i> Alternativ: direkt anmelden</h2>
			<P> Falls Sie sich lieber direkt anmelden wollen:</p>
			<a class="button" href="anmeldung.php">zum Anmeldeformular</a>
		</section>
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
		<address>
		  <h3>&nbsp;<i class="fas fa-car"></i></i> Anfahrt</h3>
		<dl class="grid">
		  <dt> </dt>
		</dl>
		<dl class="grid">
		  <dd> </dd>
		</dl>
		
	  </address>
        &nbsp;&nbsp;&nbsp;<a class="button" href="impressum.php">Vertrauensschutz, Datenschutz, Impressum</a>
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