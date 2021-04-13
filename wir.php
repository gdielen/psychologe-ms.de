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
		<h1><span><i class="fas fa-user-friends fa-lg"></i> </span> Für uns: psychologische <span class="akzent2">Paar-</span> und <span class="akzent2">Sexualberatung<span></h1>	 
		<p>Wann ist Paartherapie angezeigt? Besser frühzeitig! Viele Paare kommen erst, wenn kaum noch etwas geht. Wann ist Sexualberatung sinnvoll? Immer, wenn Sie mit ihrer Sexualität unzufrieden sind und mit Hilfe etwas ändern möchten.</p>
		<h2><span>Themen, die Paare (und Singles) beschäftigen:</span></h2>
	</header>
		
	<section class="spalte paare">
		<h2><a href="paare.php"><i class="fa fa-user-friends fa-lg"></i> Partnerschaft</a></h2>
		<p>Paartherapie / Ehe- & Trennungsberatung</p>
		        <img class="foto" src="img/paare_1.jpg" alt="Online-Beratung" height="175" width="277">
				<P>Themen für Paartherapie & Eheberatung:</p>

			<ul class="fa-ul">			
				<li><i class="fa-li fa fa-check-circle"></i>Sexualität</li>
				<li><i class="fa-li fa fa-check-circle"></i>Langjährige Beziehungen</li>
				<li><i class="fa-li fa fa-check-circle"></i>Streiten, schweigen</li>
				<li><i class="fa-li fa fa-check-circle"></i>Schuldfragen</li>
				<li><i class="fa-li fa fa-check-circle"></i>Langeweile, Desinteresse</li>
				<li><i class="fa-li fa fa-check-circle"></i>Zweifel</li>
				<li><i class="fa-li fa fa-check-circle"></i>Fremdgehen</li>
				<li><i class="fa-li fa fa-check-circle"></i>Trennung, Scheidung</li>
				<li><i class="fa-li fa fa-check-circle"></i>Veränderungen in der Partnerschaft</li>
				<li><i class="fa-li fa fa-check-circle"></i>Problematische Partner</li>
				<li><i class="fa-li fa fa-check-circle"></i>Krankheit, Alter</li>
			</ul>
			<a class="button" href="paare.php">mehr zu Paartherapie</a>
	</section>

		
	<section class="spalte sexualitaet">
		<h2><a href="sex.php"><i class="fa fa-venus-mars fa-lg"></i> Sexualität</a></h2>
		<p>Sexualberatung / Sexualtherapie</p>
		        <img class="foto" src="img/sex_3.jpg" alt="Online-Beratung" height="175" width="277">
				<p>Themen für Sexualberatung/Sexualtherapie:</p>

			<ul class="fa-ul">
				<li><i class="fa-li fa fa-check-circle"></i>Kein, zu wenig oder noch nie Sex</li>
				<li><i class="fa-li fa fa-check-circle"></i>Kein Interesse an Sex</li>
				<li><i class="fa-li fa fa-check-circle"></i>Sexuelle Funktionsstörungen<li>
				<li><i class="fa-li fa fa-check-circle"></i>Orgasmusschwierigkeiten<li>
				<li><i class="fa-li fa fa-check-circle"></i>Erektionsstörungen</li>
				<li><i class="fa-li fa fa-check-circle"></i>Unerfüllte Bedürfnisse</li>
				<li><i class="fa-li fa fa-check-circle"></i>Sexuelle Partnerschaftskonflikte (unterschiedliche Interessen, Erwartungen, Wünsche, Stress, Druck…)</li>
				<li><i class="fa-li fa fa-check-circle"></i>Kinderwunsch, Verhütung</li>
				<li><i class="fa-li fa fa-check-circle"></i>Sexualisierte Gewalt</li>
			</ul>
			<a class="button" href="sex.php">mehr zu Sexualtherapie</a>
	</section>


	<section class="contact nospace">    
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
		  <a class="button" href="kontakt.php">Anfahrt</a>
		 </dl>
		</address>
	</section>
	
	
	<footer>
		<p><a id=impressum href="impressum.php">Impressum</a>    
		<a id="copyright" href="http://gdt.de/">© 2021 gdt.de</a><br></p>
	</footer>

    
    <nav id="navigation">
		<ul class="nav nav-pills nav-stacked">
			<li><a href="index.php" tabindex="1"><i class="fas fa-home fa-fw"></i> Start</a></li>
			<li><a href="ich.php" tabindex="2"><i class="fas fa-user fa-fw"></i> Ich</a>
			<li><a aria-current="page"><i class="fas fa-user-friends fa-fw"></i> Wir</a>
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