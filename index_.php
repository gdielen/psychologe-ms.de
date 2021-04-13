<!DOCTYPE html>

<?php
	session_start();
	// Error Reporting zunächst komplett abschalten
	error_reporting(0);
	// include_once("include/debug.inc.php");
	date_default_timezone_set('Europe/Berlin');
	// echo "heutiges Datum; " . date("d.m.Y H;i;s");
?>

<html lang="de">
<head>
	<meta charset="utf-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
	<meta name="viewport" content="width=device-width, initial-scale=0.8">
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
		<h1><span><i class="fa fa-home fa-lg"></i> </span> Manchmal <span>braucht&nbsp;man&nbsp;einfach </span><span class="akzent2">Hilfe</span></h1>
		<p>Nicht immer läuft das Leben nach Plan; Wenn Sie mit Ihrem Leben, mit Ihrer Partnerschaft oder Sexualität, mit Ihrer beruflichen Entwicklung oder dem Studium unzufrieden sind, oder wenn es Ihnen einfach irgendwie schlecht geht, Sie Ängste haben, nicht schlafen können oder einfach nicht weiter wissen ...</p>
	</header>	
			
	<article>
		<section class="nospace">
			<p>Wir helfen</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bei <strong><a href = "ich.php">persönlichen Schwierigkeiten</strong></a></p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bei <strong><a href = "ich.php">sozialen Konflikten (Freunde, Familie, Kollegen, ...)</strong></a></p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bei <strong><a href = "paar.php">Problemen in der Partnerschaft</strong></a></p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bei <strong><a href = "sex.php">sexuellen Problemen</strong></a></p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bei <strong><a href = "ich.php">Unzufriedenheit in Beruf oder im Studium</strong></a></p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bei <strong><a href = "ich.php">schwierigen Entscheidungen, Lebenskriesen</strong></a></p>
		</section>
	</article>
	
	<section class="nospace">
		<p> </p>
		<img src="img/start_1.jpg" alt="Beratung">
	</section>
	
    
<!--
	<section class="spalte beratung">
		<h2><a href="ich.php"><i class="fa fa-user fa-lg"></i> Psychologische Hilfe</a></h2>
        <p>Hilfe in Krisen und schwierigen Situationen</p>
        <img src="img/beratung_1b.jpg" alt="Psychologische Hilfe">
		<p>Wenn Sie sich in schwierigen Lebensphasen befinden und das Rad nicht selber neu erfinden möchten oder wenn Sie alleine nicht mehr weiterkommen, z.B. bei;</p>
		<ul class="fa-ul">
			<li><i class="fa-li fa fa-check-circle"></i>aktuellen Probleme und Krisen</li>
			<li><i class="fa-li fa fa-check-circle"></i>psychischen Störungen</li>
			<li><i class="fa-li fa fa-check-circle"></i>Sorgen, Nöten, Ängsten</li>
			<li><i class="fa-li fa fa-check-circle"></i>Trauer und Tod</li>
			<li><i class="fa-li fa fa-check-circle"></i>Wunsch nach Veränderung</li>
			<li><i class="fa-li fa fa-check-circle"></i>beruflichen Schwierigkeiten</li>
			<li><i class="fa-li fa fa-check-circle"></i>Persönlichen Einschränkungen</li>
		</ul>
        <a class="button" href="ich.php">mehr erfahren</a>
	</section>
      
       
	<section class="spalte paar-sex">
		<h2><a href="wir.php"><i class="fa fa-user-friends fa-lg"></i> Partnerschaft, Sexualität</a></h2>
		<p>Hilfe für Paare und Familien</p>
        <img src="img/paare-sex_1.jpg" alt="Partnerschaft, Sexualität">
		<p>Wann ist Paartherapie angezeigt? Besser frühzeitig! Viele Paare kommen erst, wenn kaum noch etwas geht. Typische Anlässe für Paartherapie;</p>
		<ul class="fa-ul">
			<li><i class="fa-li fa fa-check-circle"></i>Kommunikationsprobleme, Streit</li>
			<li><i class="fa-li fa fa-check-circle"></i>Zweifel an der Beziehung, am Partner</li>
			<li><i class="fa-li fa fa-check-circle"></i>Sexualität</li>
			<li><i class="fa-li fa fa-check-circle"></i>Fremdgehen</li>
			<li><i class="fa-li fa fa-check-circle"></i>Trennung, Scheidung</li>
			<li><i class="fa-li fa fa-check-circle"></i>Veränderungen über die Zeit</li>
			<li><i class="fa-li fa fa-check-circle"></i>Krankheit, Alter</li>
		</ul>
        <a class="button" href="wir.php">mehr erfahren</a>
	</section>

      
	<section class="spalte online">
		<h2><a href="onlineberatung.php"><i class="fas fa-laptop fa-lg"></i> Online-Beratung</a></h2>
		<p>Hilfe per Telefon, Mail und Video-Dialog</p>        
        <img src="img/onlineberatung_6.jpg" alt="Online-Beratung">
		<p>Wenn persönliche Beratung nicht geht oder Sie lieber in vertrauter Umgebung bleiben wollen, ist Online-Beratung eine Alternative. Hierzu benötigen Sie lediglich einen PC, Laptop, Tablet oder Smartphone mit Internet-Anschluss (Software installieren nicht nötig).</p>
		<p>Online-Beratung ist grundsätzlich auf verschiedenen Wegen möglich;</p>
		<ul class="fa-ul">
			<li><i class="fa-li fa fa-check-circle"></i>Telefon</li>
			<li><i class="fa-li fa fa-check-circle"></i>eMail</li>
			<li><i class="fa-li fa fa-check-circle"></i>Video-Dialog</li>
		</ul>
        <a class="button" href="onlineberatung.php">mehr erfahren</a>
	</section>
    	
-->
    <footer>
 <!--   	<p>Psychologische Beratung, Paar-. und Sexualtherapie sind psychologische Fachdienste für jede/n, also für ‚ganz normale Menschen‘ mit alltäglichen Problemen und Nöten, ohne schwerwiegende psychische Störungen mit Krankheitswert – und somit keine Kassenleistungen der gesetzlichen Kassen. Sie ist daher meist zeitnah verfügbar, ohne vorausgehende Überweisung, Antragsstellung oder Begutachtung (und steht natürlich auch anschließend nicht in der Krankenakte).</p>
		<p>Wenn Sie an einer ernsten psychischen Störung leiden können wir Ihnen helfen, eine geeignete Psychotherapie bei einem approbierten Psychotherapeuten oder in einer Klinik als Kassenleistung zu bekommen. Wir sind ebenso für Sie da, wenn Sie die Wartezeit auf Ihre schon genehmigte oder beantragte Therapie überbrücken wollen oder Sie sich erstmal orientieren wollen, was Sie wirklich brauchen oder wenn Sie eine Psychotherapie nach HeilprG vorziehen.</p>
		<p>In dringenden Notfällen hilft Ihnen Tag und Nacht der Notruf unter <strong>112</strong> oder die Telefonseelsorge unter <strong>0800/1110111</strong> oder <strong>0800/1110222</strong>.</p>
-->		<p><a id=impressum href="impressum.php">Impressum</a>    
		<a id="copyright" href="http;//gdt.de/">© 2021 gdt.de</a><br></p>
	</footer>
    
    
    <nav id="navigation">
		<ul class="nav nav-pills nav-stacked">
			<li><a aria-current="page"><i class="fas fa-home fa-fw"></i> Start</a></li>
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