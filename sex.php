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
		<h1><span><i class="fa fa-venus-mars fa-lg"></i> </span> <span class="akzent2">Sexualtherapie<span></h1>	 
		<p>Wann ist Sexualberatung sinnvoll? Immer, wenn Sie mit ihrer Sexualität unzufrieden sind und daran gerne etwas ändern möchten, aber ohne Hilfe nicht wetierkommen.</p>
		<h2><span>Sexualität aktiv gestalten</span></h2>
	</header>
	
	<article>		
		<section class="nospace">
		<h2><a href="kontakt.php"><i class="fa fa-venus-mars fa-lg"></i> Beratungsthemen zur Sexualität</a></h2>
		<br><img class="foto" src="img/sex_7_lang.jpg" alt="Sexualberatung">
			<p><a href="praxis.php">Was bringt und wie funktioniert Sexualtherapie</a></p>
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
		<p>Kein Sex, keine Lust auf Sex, unterschiedliche Bedürfnisse</p>
			<ul class="fa-ul">
			<li><i class="fa-li fa fa-check-circle"></i>Ich hatte noch nie Sex</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich hatte noch nie einen Orgasmus</li>			
			<li><i class="fa-li fa fa-check-circle"></i>Ich habe keine Lust auf Sex</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich möchte mehr Sex</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich wünsche mir mehr Aufregung beim Sex</li>
			<li><i class="fa-li fa fa-check-circle"></i>Unser Sexualität ist unbefriedigend</li>
			<li><i class="fa-li fa fa-check-circle"></i>Wir haben keinen Sex mehr</li>
			<li><i class="fa-li fa fa-check-circle"></i>Mein Partner möchte Sex anders als ich</li>
			<li><i class="fa-li fa fa-check-circle"></i>Mein Partner möchte sexuelle Praktiken, die ich ablehne</li>
			</ul>
			<a class="button" href="kontakt.php">Sexualtherapie anfragen</a>
		</section>	
		
		<section class="spalte beratung">
		<p>Probleme mit dem eigenen oder dem Körper des Partners</p>
			<ul class="fa-ul">
			<li><i class="fa-li fa fa-check-circle"></i>Ich mag nicht nackt sein</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich mag meine Körper (teilweise) nicht</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich mag den Körper meines Partners (teilweise) nicht</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich mag meinen Partner nicht anfassen</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich finde Sexualität (insgesamt/teilweise) eklig</li>
			</ul>
			<a class="button" href="kontakt.php">Sexualtherapie anfragen</a>
		</section>
		
		<section class="spalte beratung">
		<p>Schwierigkeiten beim oder mit Sex, sexuelle Funktionsstörungen</p>
			<ul class="fa-ul">
			<li><i class="fa-li fa fa-check-circle"></i>Ich habe Schwierigkeiten bei der Sexualität</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich komme viel zu schnell</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich habe Erektionsprobleme</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich werde nicht feucht</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich kann keinen Orgasmus haben</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich verkrampfe beim Sex</li>
			</ul>
			<a class="button" href="kontakt.php">Sexualtherapie anfragen</a>
		</section>		
					
		<section class="spalte beratung">
		<p>Andere Sexualpartner</p>
			<ul class="fa-ul">
			<li><i class="fa-li fa fa-check-circle"></i>Ich (oder mein Partner) geht fremd</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich wünsche mir Sex mit jemand anderem</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich (oder mein Partner) möchte Sex zu dritt</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich (oder mein Partner) möchte Partnertausch (Swinger)</li>
			</ul>
			<a class="button" href="kontakt.php">Sexualtherapie anfragen</a>
		</section>
		
		<section class="spalte beratung">
		<p>Alter und Krankheit</p>
			<ul class="fa-ul">
			<li><i class="fa-li fa fa-check-circle"></i>Bin ich zu jung / zu alt für Sex?</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich werde älter. Was bedeutet das für meine / unsere Sexualität?</li>
			<li><i class="fa-li fa fa-check-circle"></i>Seit der Geburt unseres Kindes ist die Sexualität nicht mehr wie vorher</li>
			<li><i class="fa-li fa fa-check-circle"></i>Seit meiner Krankheit ist Sexualität schwierig geworden</li>
			</ul>
			<a class="button" href="kontakt.php">Sexualtherapie anfragen</a>
		</section>
		
		<section class="spalte beratung">
		<p>Sexuelle Orientierung, sexualisierte Gewalt</p>
			<ul class="fa-ul">
			<li><i class="fa-li fa fa-check-circle"></i>Ich habe Probleme mit meiner sexuellen Orientierung</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich habe spezielle sexuelle Präferenzen</li>
			<li><i class="fa-li fa fa-check-circle"></i>Mir sind Kinder lieber als sie mir lieb ist (ich bin pädophiliegefährtet)</li>
			<li><i class="fa-li fa fa-check-circle"></i>Ich wurde missbraucht</li>
			</ul>
			<a class="button" href="kontakt.php">Sexualtherapie anfragen</a>
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
			<li><a href="gutachten.php" tabindex="6"><i class="fas fa-balance-scale fa-fw"></i> Gutachten</a>
			<li><a href="vortraege.php" tabindex="5"><i class="fas fa-chalkboard-teacher fa-fw"></i> Vorträge</a>
			<li><a href="methoden.php" tabindex="7"><i class="fas fa-scroll fa-fw"></i> Methoden</a>
			<li><a href="praxis.php" tabindex="8"><i class="fas fa-briefcase-medical fa-fw"></i> Praxis</a>
			<li><a href="kontakt.php" tabindex="9"><i class="fas fa-envelope fa-fw"></i> Kontakt</a></li>
			<li><a href="team.php" tabindex="10"><i class="fas fa-user-lock fa-fw"></i></a></li>
		</ul>
	</nav>
	
</main>

    
</body>
</html>