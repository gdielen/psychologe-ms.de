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
		<h1><span><i class="fa fa-user-friends fa-lg"></i> </span> Für uns: <span class="akzent2">Paartherapie<span></h1>	 
		<p>Paarberatung und -therapie</p>
		<h2><span>Partnerschaft aktiv gestalten</span></h2>	
	</header>
	
	<article>
		<section class="nospace">
		<h2><a href="kontakt.php"><i class="fa fa-user-friends fa-lg"></i> Typische Beratungsanlässe für Paare</a></h2>
		<br><img class="foto" src="img/paare-sex_3_lang.jpg" alt="Sexualberatung">
			<p><a href="praxis.php">Was bringt und wie funktioniert Paartherapie</a></p>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem nonummy nibh euismod tincidunt ut lacreet dolore magna aliguam erat volutpat. Ut wisis enim ad minim veniam, quis nostrud exerci tution ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis te feugifacilisi. Duis autem dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit au gue duis dolore te feugat nulla facilisi.</p>
			<p>Ut wisis enim ad minim veniam, quis nostrud exerci tution ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis te feugifacilisi. Duis autem dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit au gue duis dolore te feugat nulla facilisi.</p>
		</section>
	</article>



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
		</address>
	</section>
	
		<section class="spalte beratung">
		<p>Paar-Kommunikation</p>
			<ul class="fa-ul">
			<li><i class="fa-li fa fa-check-circle"></i>Wir reden nicht mehr miteinander</li>
			<li><i class="fa-li fa fa-check-circle"></i>Wie streiten nur noch</li>
			<li><i class="fa-li fa fa-check-circle"></i>Wir drehen uns im Kreis</li>
			<li><i class="fa-li fa fa-check-circle"></i>Mein Partner hat immer Recht</li>
			<li><i class="fa-li fa fa-check-circle"></i>Mein Partner will über mich bestimmen</li>
			<li><i class="fa-li fa fa-check-circle"></i>Mein Partner will, dass ich anders bin</li>
			<li><i class="fa-li fa fa-check-circle"></i>Mein Partner akzeptiert mich / meine Wünsche / meine Bedürfnisse nicht</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich wünsche mir eine Partnerschaft auf Augenhöhe</li>
			<li><i class="fa-li fa fa-check-circle"></i>Unser Geld reicht nie</li>
			<li><i class="fa-li fa fa-check-circle"></i>Mein Partner gibt viel zu viel Geld aus, mein Partner kauft zu viel </li>
			</ul>
			<a class="button" href="kontakt.php">Paartherapie anfragen</a>
		</section>
			
		<section class="spalte beratung">
		<p>Kinder, und Kinderwunsch</p>
			<ul class="fa-ul">		
			<li><i class="fa-li fa fa-check-circle"></i>Ich / wir wollen Kinder</li>
			<li><i class="fa-li fa fa-check-circle"></i>Mein Partner will Kinder, aber ich nicht</li>
			<li><i class="fa-li fa fa-check-circle"></i>Bei unseren Kindern läuft es nicht in der Schule</li>
			<li><i class="fa-li fa fa-check-circle"></i>Wir sind uns in der Erziehung nicht einig</li>
			<li><i class="fa-li fa fa-check-circle"></i>Mein Kind ist nicht von meinem Partner</li>
			<li><i class="fa-li fa fa-check-circle"></i>Wir kriegen Nachwuchs. Was macht das mit uns als Paar</li>
			<li><i class="fa-li fa fa-check-circle"></i>Seit wir Nachwuchs haben ist unsere Beziehung irgendwie ganz anders</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ohne Kind war unsere Beziehung besser.</li>
			<li><i class="fa-li fa fa-check-circle"></i>Unser Kind nimmt Drogen</li>
			<li><i class="fa-li fa fa-check-circle"></i>Die Kinder ziehen aus, und was mache ich?</li>
			</ul>
			<a class="button" href="kontakt.php">Paartherapie anfragen</a>
		</section>
			
		<section class="spalte beratung">
		<p>Richtiger oder falscher Partner, Außenbeziehungen</p>
			<ul class="fa-ul">		
			<li><i class="fa-li fa fa-check-circle"></i>Ich interessiere mich für jemand anderen</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich war untreu</li>
			<li><i class="fa-li fa fa-check-circle"></i>Und ist die Liebe verloren gegangen</li>
			<li><i class="fa-li fa fa-check-circle"></i>Unsere Beziehung ist langweilig geworden.</li>
			<li><i class="fa-li fa fa-check-circle"></i>Warum sind wir zusammen?</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich bin meinem Partner egal geworden</li>
			<li><i class="fa-li fa fa-check-circle"></i>Habe ich den richtigen Partner?</li>
			<li><i class="fa-li fa fa-check-circle"></i>Was will ich noch von unserer Beziehung</li>
			</ul>			
			<a class="button" href="kontakt.php">Paartherapie anfragen</a>
		</section>
			
		<section class="spalte beratung">
		<p>Partner mit Problemen</p>
			<ul class="fa-ul">
			<li><i class="fa-li fa fa-check-circle"></i>Mein Partner ist depressiv</li>
			<li><i class="fa-li fa fa-check-circle"></i>Mein Partner ist krank</li>
			<li><i class="fa-li fa fa-check-circle"></i>Mein Partner ist abhängig / süchtig</li>
			<li><i class="fa-li fa fa-check-circle"></i>Mein Partner hat jemand anderen</li>
			<li><i class="fa-li fa fa-check-circle"></i>Mein Partner will die Trennung/Scheidung</li>
			<li><i class="fa-li fa fa-check-circle"></i>Mein Partner ist gestorben</li>			
			</ul>				
			<a class="button" href="kontakt.php">Paartherapie anfragen</a>
		</section>
			
		<section class="spalte beratung">
		<p>Trennung und Scheidung</p>
			<ul class="fa-ul">
			<li><i class="fa-li fa fa-check-circle"></i>Mein Partner hat sich von mir getrennt</li>
			<li><i class="fa-li fa fa-check-circle"></i>Mein Partner akzeptiert die Kinder meines Ex nicht</li>
			<li><i class="fa-li fa fa-check-circle"></i>Mein Partner hat ständig Kontakt mit seinem/seiner Ex</li>
			<li><i class="fa-li fa fa-check-circle"></i>Mein Ex macht Stress</li>
			<li><i class="fa-li fa fa-check-circle"></i>Wir können uns über den Umgang mit den Kindern nicht einigen</li>
			<li><i class="fa-li fa fa-check-circle"></i>Wir können uns über den Umgang mit unserem, Kind nach der Trennung nicht einigen?</li>
			<li><i class="fa-li fa fa-check-circle"></i>Wo sollen unsere Kinder nach der Trennung leben?</li>
			<li><i class="fa-li fa fa-check-circle"></i>Wer bekommt das Sorgerecht?</li>
			<li><i class="fa-li fa fa-check-circle"></i>Wovon lebe/n ich/wir nach der Scheidung?</li>
			<li><i class="fa-li fa fa-check-circle"></i>Wir wollen uns trennen, aber fair. Wer hilft uns?</li>
			<li><i class="fa-li fa fa-check-circle"></i>Wir, sind kein Paar mehr, aber Eltern bleiben wir trotzdem</li>			
			</ul>
						
			<a class="button" href="kontakt.php">Paartherapie anfragen</a>
		</section>
		



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