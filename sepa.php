<!DOCTYPE html>

<?php
	session_start();
	// Error Reporting zunächst komplett abschalten
	error_reporting(0);
	// include_once("include/debug.inc.php");
	date_default_timezone_set('Europe/Berlin');
	// echo "<p>heutiges Datum: " . date("d.m.Y H:i:s")</p>;
?>

<html lang="de">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Beratungsangebote">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
	<title>Psychologische Praxis Münster - Beratung, Therapie, Diagnostik, Gutachten</title>
</head>

<<body onLoad="window.print()">
	<header class="banner">
		<a id="gdt" title="zurück zur Startseite!" href="index.php"><img src="img/gdt_2101.gif"  alt="psychologische Beratung"></a>
		<h2><a id="logo" title="zurück zur Startseite!" href="index.php">Psychologische Praxis<span> Münster</span> - <span class="akzent2">Guido&nbsp;Dielen</span></a></h2>
		<a id="navlink" title="zum Navigationsmenü" href="#navigation">☰</a>
	</header>

<main id="main">
	<header>
		<h1><span></span><span class="akzent2">SEPA Lastschriftmandat<span></h1>	 
		<h2><span>SEPA Lastschrifteineinzug fälliger Beiträge</span></h2>
		<p>an die
		<br>Psychologische Praxis Guido Dielen
		<br>- Büro -
		<br>Im Sundern 4</p>
		<p>48157 Münster</p>
		<p>&nbsp;</p>
	
		<section class="spalte beratung">
			<h2><a href="kontakt.php"> SEPA-Lastschriftmandat</a></h2>
			<p>Bitte unterschrieben im Original oder per Telefax an die Psychologische Praxis senden.</a>
		<p>Von:</p>
		</p><p><?php if (isset($_SESSION['anrede'])) echo $_SESSION['anrede'] ; ?>
		<br><?php if (isset($_SESSION['vorname'])) echo $_SESSION['vorname'] ; ?> <?php if (isset($_SESSION['nachname'])) echo $_SESSION['nachname'] ; ?>
		</br><?php if (isset($_SESSION['strasse'])) echo $_SESSION['strasse'] ; ?> <?php if (isset($_SESSION['hausnr'])) echo $_SESSION['hausnr'] ; ?></p>
		<p><?php if (isset($_SESSION['plz'])) echo $_SESSION['plz'] ; ?> </p<p><?php if (isset($_SESSION['ort'])) echo $_SESSION['ort'] ; ?>	</p>
		<p>&nbsp;</p>		
		<p><strong><?php echo "IBAN: "; if (isset($_SESSION['iban'])) echo  $_SESSION['iban'] ; ?> 	</strong></p>
		<p><?php echo" BIC: "; if (isset($_SESSION['bic'])) echo $_SESSION['bic'] ; ?> </p>
		<p>&nbsp;</p>		
		<p>&nbsp;</p>		
		<p>Ich/wir ermächtige(n) die Psychologische Praxis Guido Dielen, Zahlungen von meinem/unserem Konto mittels Lastschrift einzuziehen. Zugleich weise ich mein/unser Kreditinstitut an, die von der Psychologischen Praxis Guido Dielen auf mein Konto gezogenen Lastschriften einzulösen.</p>
		<p>Hinweis:Ich kann innerhalb von acht Wochen, beginnend mit dem  Belastungsdatum, die  Erstattung  des belasteten  Betrages verlangen. Es gelten dabei die  mit meinem Kreditinstitut vereinbarten Bedingungen.</p>
		<p> </p>
		<p> </p>
		<p><?php if ($_SESSION['ort'] != "") { echo $_SESSION['ort'] . ", den "; } ?> <?PHP echo date("d.m.Y "); ?></p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>_____________________________________________</p>
		</section>
		
		
		<footer>
			<p>In dringenden Notfällen hilf sofort der Notruf unter <strong>112</strong> oder die Telefonseelsorge unter <strong>0800 / 1110111</strong>.</p>
		</footer>
		
	</header>


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