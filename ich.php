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
    <meta name="description" content="Beratungsangebote">
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
		<h1><span><i class="fas fa-user fa-lg"></i> </span> Für mich: psychologisch-therapeutische <span class="akzent2">Beratung</span> und <span class="akzent2">Lebenshilfe<span></h1>	 
		<p>Wenn Sie in schwierigen Lebensphasen das Rad nicht stets selber neu erfinden möchten oder wenn Sie alleine nicht mehr weiterkommen: Psychologische Beratung bietet psychologische Maßnahmen, die der Aufarbeitung und Überwindung von Problemen Konflikten oder kriesen dienen.</p>
		<h2><span>Typische Beratungsanlässe und Therapie-Indikationen</span></h2>
	</header>

	<article>
		<section class="nospace">
		<h2><a href="kontakt.php"><i class="fa fa-user-friends fa-lg"></i> Typische Beratungsanlässe</a></h2>
		<br><img class="foto" src="img/beratung_11b_lang.jpg" alt="Beratung">
			<p><a href="praxis.php">Was bringt und wie funktioniert psychologische Beratung und Therapie?</a></p>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem nonummy nibh euismod tincidunt ut lacreet dolore magna aliguam erat volutpat. Ut wisis enim ad minim veniam, quis nostrud exerci tution ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis te feugifacilisi. Duis autem dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit au gue duis dolore te feugat nulla facilisi.</p>
			<p>Ut wisis enim ad minim veniam, quis nostrud exerci tution ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis te feugifacilisi. Duis autem dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit au gue duis dolore te feugat nulla facilisi.</p>
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
		</address>
	</aside>		

	
	<section class="spalte beratung">
		<h2><a href="kontakt.php"><i class="fas fa-user-check fa-lg"></i> Persönlichkeit, Selbstwert</a></h2>
        <br><img class="foto" src="img/beratung_6c.jpg" alt="Selbstwert">
		<p>Eigenen Persönlichkeit und Selbstwert</p> 
		<ul class="fa-ul">
			<li><i class="fa-li fa fa-check-circle"></i>Warum bin ich, wie ich bin?</li>
			<li><i class="fa-li fa fa-check-circle"></i>Mein Leben ist nicht das, was ich eigentlich wollte</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich führe kein selbstbestimmtes Leben</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich möchte mehr Freiraum für mich</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich kann mich nicht durchsetzen</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich kann nicht nein sagen</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich fühle mich ausgenutzt</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich bin so unzufrieden</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich kann nichts</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich mag mich nicht</li>
		</ul>
		<a class="button" href="kontakt.php">mehr erfahren</a>
	</section>

	<section class="spalte beratung">
		<h2><a href="kontakt.php"><i class="fas fa-user-minus fa-lg"></i> Persönliche Defizite</a></h2>
        <br><img class="foto" src="img/beratung_3.jpg" alt="Defizite">
		<p>Eigene Defizite und Störungen</p> 
		<ul class="fa-ul">
			<li><i class="fa-li fa fa-check-circle"></i>Ich bin gehemmt</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich bin schüchtern</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich habe Ängste</li>
			<li><i class="fa-li fa fa-check-circle"></i>Mir ist alles peinlich</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich bin unzufrieden </li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich bin traurig</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich bin depressiv</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich muss ständig grübeln</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich bin ständig gestresst</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich kann nicht schlafen</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich esse zu viel</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich rauche / trinke zu viel</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich bin abhängig von … / süchtig nach …</li>
		</ul>
		<a class="button" href="kontakt.php">mehr erfahren</a>
	</section>
	
	<section class="spalte beratung">
		<h2><a href="kontakt.php"><i class="fas fa-users fa-lg"></i> Soziale Kontakte</a></h2>
        <br><img class="foto" src="img/herz_2.jpg" alt="Kontakte">
		<p> Probleme mit sozialen Kontakten</p>
		<ul class="fa-ul">
			<li><i class="fa-li fa fa-check-circle"></i>Ich traue mich nicht, Kontakt zu anderen aufzunehmen</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich fühle mich einsam</li>
			<li><i class="fa-li fa fa-check-circle"></i>Niemand mag mich</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich habe keine Freunde</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich habe keinen Partner</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich hab Liebeskummer</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich habe Konflikte mit meine Eltern</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich habe Konflikte mit meinen Kindern</li>
		</ul>
		<a class="button" href="kontakt.php">mehr erfahren</a>
	</section>	
	
	<section class="spalte beratung">
		<h2><a href="kontakt.php"><i class="fas fa-user-graduate fa-lg"></i> Studium und Beruf</a></h2>
        <br><img class="foto" src="img/beratung_9.jpg" alt="Studium-Beruf">
		<p>Probleme mit dem Studium oder im Job</p>
		<ul class="fa-ul">
			<li><i class="fa-li fa fa-check-circle"></i>Ich weiß nicht, ob ich das richtige studiere</li>
			<li><i class="fa-li fa fa-check-circle"></i>Mein Studium stagniert</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich habe Prüfungsangst</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich bin Studienversager/Studienabbrecher und was nun?</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich bin nicht gut genug</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich werde gemobbt</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich hab Konflikte mit meinen Kollegen</li>
			<li><i class="fa-li fa fa-check-circle"></i>Mein Job überfordert mich</li>
			<li><i class="fa-li fa fa-check-circle"></i>Meine berufliche Entwicklung stagniert</li>
			<li><i class="fa-li fa fa-check-circle"></i>Soll ich beruflich nochmal neu anfangen?</li>
		</ul>	
		<a class="button" href="kontakt.php">mehr erfahren</a>
	</section>	
	
	<section class="spalte beratung">
		<h2><a href="kontakt.php"><i class="fas fa-user-injured fa-lg"></i> Schwierige Ereignisse</a></h2>
        <br><img class="foto" src="img/weg_1b.jpg" alt="Ereignisse">
		<p>Schwierige Lebensereignisse, Kriesen</p>
		<ul class="fa-ul">
			<li><i class="fa-li fa fa-check-circle"></i>Ich muss schwierige Entscheidungen treffen. Wer hilft mir dabei?</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich bin krank und komme damit nicht klar</li>
			<li><i class="fa-li fa fa-check-circle"></i>Wie geht es nach meiner Krankheit weiter?</li>
			<li><i class="fa-li fa fa-check-circle"></i>Mein Leben hat sich total verändert, ich komme nicht mehr zurecht</li>
			<li><i class="fa-li fa fa-check-circle"></i>Mein Leben gerät aus den Fugen</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich habe keine Lebensperspektive</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich will mein Leben eigentlich nicht mehr</li>
		</ul>
		<a class="button" href="kontakt.php">mehr erfahren</a>
	</section>	
		
		
	<footer>
		<p><a id=impressum href="impressum.php">Impressum</a>    
		<a id="copyright" href="http://gdt.de/">© 2021 gdt.de</a><br></p>
	</footer>
	

    <nav id="navigation">
		<ul class="nav nav-pills nav-stacked">
			<li><a href="index.php" tabindex="1"><i class="fas fa-home fa-fw"></i> Start</a></li>
			<li><a aria-current="page"><i class="fas fa-user fa-fw"></i> Ich</a>
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