<!DOCTYPE html>

<?php
	session_start();
	// Error Reporting zunächst komplett abschalten
	error_reporting(0);
	// include_once("include/debug.inc.php");
	date_default_timezone_set('Europe/Berlin');
	// echo "heutiges Datum: " . date("d.m.Y H:i:s");
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

<main id="main">
	<header>
		<a id="gdt" title="zurück zur Startseite!" href="index.php"><img src="img/gdt_2101.gif"  alt="psychologische Beratung"></a>
		<h2><a id="logo" title="zurück zur Startseite!" href="index.php">Psychologische Praxis<span> Münster</span> - <span class="akzent2">Guido&nbsp;Dielen</span></a></h2>
		<a id="navlink" title="zum Navigationsmenü" href="#navigation">☰</a>
	<section class="nospace">
	<p> <br> </p>
	<div align = "center">
		<svg width="710" height="510">
			<g>
			<g transform="translate(355,248) rotate(0,0,0)">
			<a xlink:href="onlineberatung.php">
			<text fill="#FFB300" stroke="none" font-family="Arial" font-size="54px" font-style="normal" font-weight="400" x="-163.8333" y="-24.18948" text-anchor="start" dominant-baseline="alphabetic">Online-Hilfe</text>
			</a>
			</g>
			<g transform="translate(202,238) rotate(-90,0,0)">
			<a xlink:href="hilfe.php">
			<text fill="#33AADD" stroke="none" font-family="Arial" font-size="54px" font-style="normal" font-weight="400" x="-156.149993" y="-24.18948" text-anchor="start" dominant-baseline="alphabetic">Psychologe</text>
			</a>
			</g>
			<g transform="translate(346,304) rotate(0,0,0)">
			<a xlink:href="hilfe.php">
			<text fill="#EE9033" stroke="none" font-family="Arial" font-size="54px" font-style="normal" font-weight="400" x="-63.9416656" y="-24.18948" text-anchor="start" dominant-baseline="alphabetic">Hilfe</text>
			</a>
			</g>
			<g transform="translate(413,192) rotate(0,0,0)">
			<a xlink:href="sex.php">
			<text fill="#3366BB" stroke="none" font-family="Arial" font-size="54px" font-style="normal" font-weight="400" x="-206" y="-24.18948" text-anchor="start" dominant-baseline="alphabetic">Sexualtherapie</text>
			</a>
			</g>
			<g transform="translate(368,136) rotate(0,0,0)">
			<a xlink:href="wir.php">
			<text fill="#33AADD" stroke="none" font-family="Arial" font-size="54px" font-style="normal" font-weight="400" x="-177.2166595" y="-24.18948" text-anchor="start" dominant-baseline="alphabetic">Paartherapie</text>
			</a>
			</g>
			<g transform="translate(297,348) rotate(-90,0,0)">
			<a xlink:href="hilfe.php">
			<text fill="#0088CC" stroke="none" font-family="Arial" font-size="54px" font-style="normal" font-weight="400" x="-120.7833328" y="-24.18948" text-anchor="start" dominant-baseline="alphabetic">Therapie</text>
			</a>
			</g>
			<g transform="translate(358,336) rotate(-90,0,0)">
			<a xlink:href="hilfe.php">
			<text fill="#0088CC" stroke="none" font-family="Arial" font-size="54px" font-style="normal" font-weight="400" x="-46.5583343" y="-24.18948" text-anchor="start" dominant-baseline="alphabetic">Rat</text>
			</a>
			</g>
			<g transform="translate(460,324) rotate(0,0,0)">
			<a xlink:href="ich.php">
			<text fill="#33AADD" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-109.9333343" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Unzufriedenheit</text>
			</a>
			</g>
			<g transform="translate(230,344) rotate(-90,0,0)">
			<a xlink:href="wir.php">
			<text fill="#FFB300" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-115.033332" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Außenbeziehung</text>
			</a>
			</g>
			<g transform="translate(374,412) rotate(-90,0,0)">
			<a xlink:href="wir.php">
			<text fill="#FFB300" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-94.1999969" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Partnerschaft</text>
			</a>
			</g>
			<g transform="translate(137,256) rotate(-90,0,0)">
			<a xlink:href="ich.php">
			<text fill="#EE9033" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-100.51667" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Prüfungsangst</text>
			</a>
			</g>
			<g transform="translate(514,268) rotate(0,0,0)">
			<a xlink:href="ich.php">
			<text fill="#33AADD" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-103.2583312" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Wertschätzung</text>
			</a>
			</g>
			<g transform="translate(406,408) rotate(-90,0,0)">
			<a xlink:href="ich.php">
			<text fill="#3399DD" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-92.233329" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Zufriedenheit</text>
			</a>
			</g>
			<g transform="translate(102,252) rotate(-90,0,0)">
			<a xlink:href="ich.php">
			<text fill="#0088CC" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-94.9083328" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Enttäuschung</text>
			</a>
			</g>
			<g transform="translate(438,400) rotate(-90,0,0)">
			<a xlink:href="ich.php">
			<text fill="#33AADD" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-77.0583343" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Depression</text>
			</a>
			</g>
			<g transform="translate(346,72) rotate(0,0,0)">
			<a xlink:href="ich.php">
			<text fill="#33AADD" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-77.066665" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Einsamkeit</text>
			</a>
			</g>
			<g transform="translate(326,40) rotate(0,0,0)">
			<a xlink:href="ich.php">
			<text fill="#3366BB" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-73.566665" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Selbstwert</text>
			</a>
			</g>
			<g transform="translate(588,236) rotate(0,0,0)">
			<a xlink:href="ich.php">
			<text fill="#0088CC" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-77.599998" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Wohlfühlen</text>
			</a>
			</g>
			<g transform="translate(506,356) rotate(0,0,0)">
			<a xlink:href="wir.php">
			<text fill="#EE9033" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-72.20833" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Beziehung</text>
			</a>
			</g>
			<g transform="translate(342,446) rotate(-90,0,0)">
			<a xlink:href="wir.php">
			<text fill="#0088CC" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-62.308334" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Konflikte</text>
			</a>
			</g>
			<g transform="translate(70,252) rotate(-90,0,0)">
			<a xlink:href="wir.php">
			<text fill="#3399DD" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-72.008331" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Scheidung</text>
			</a>
			</g>
			<g transform="translate(506,388) rotate(0,0,0)">
			<a xlink:href="ich.php">
			<text fill="#0088CC" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-72.47499" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Sehnsucht</text>
			</a>
			</g>
			<g transform="translate(490,296) rotate(0,0,0)">
			<a xlink:href="wir.php">
			<text fill="#3399DD" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-65.83333" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Trennung</text>
			</a>
			</g>
			<g transform="translate(498,420) rotate(0,0,0)">
			<a xlink:href="ich.php">
			<text fill="#33AADD" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-63.9416656" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Versagen</text>
			</a>
			</g>
			<g transform="translate(311,444) rotate(-90,0,0)">
			<a xlink:href="ich.php">
			<text fill="#FFB300" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-55.349998" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Burnout</text>
			</a>
			</g>
			<g transform="translate(207,72) rotate(0,0,0)">
			<a xlink:href="ich.php">
			<text fill="#3366BB" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-57.174999" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Freunde</text>
			</a>
			</g>
			<g transform="translate(480,72) rotate(0,0,0)">
			<a xlink:href="ich.php">
			<text fill="#EE9033" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-53.59999" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Grübeln</text>
			</a>
			</g>
			<g transform="translate(490,452) rotate(0,0,0)">
			<a xlink:href="wir.php">
			<text fill="#3366BB" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-55.2" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Untreue</text>
			</a>
			</g>
			<g transform="translate(137,100) rotate(-90,0,0)">
			<a xlink:href="ich.php">
			<text fill="#33AADD" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-49.658332" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Zweifel</text>
			</a>
			</g>
			<g transform="translate(450,40) rotate(0,0,0)">
			<a xlink:href="ich.php">
			<text fill="#3399DD" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-44.24166" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Krise</text>
			</a>
			</g>
			<g transform="translate(662,268) rotate(0,0,0)">
			<a xlink:href="ich.php">
			<text fill="#3366BB" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-42.625" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Schlaf</text>
			</a>
			</g>
			<g transform="translate(615,315) rotate(-90,0,0)">
			<a xlink:href="ich.php">
			<text fill="#0088CC" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-48.366664" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Sorgen</text>
			</a>
			</g>
			<g transform="translate(38,244) rotate(-90,0,0)">
			<a xlink:href="wir.php">
			<text fill="#33AADD" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-37.916667" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Streit</text>
			</a>
			</g>
			<g transform="translate(646,306) rotate(-90,0,0)">
			<a xlink:href="ich.php">
			<text fill="#0088CC" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-43.583332" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Stress</text>
			</a>
			</g>
			<g transform="translate(640,144) rotate(-90,0,0)">
			<a xlink:href="ich.php">
			<text fill="#33AADD" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-50.191665" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Unruhe</text>
			</a>
			</g>
			<g transform="translate(476,484) rotate(0,0,0)">
			<a xlink:href="ich.php">
			<text fill="#3399DD" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-39.591667" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Angst</text>
			</a>
			</g>
			<g transform="translate(564,124) rotate(0,0,0)">
			<a xlink:href="ich.php">
			<text fill="#3366BB" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-36.366664" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Glück</text>
			</a>
			</g>
			<g transform="translate(671,160) rotate(-90,0,0)">
			<a xlink:href="ich.php">
			<text fill="#FFB300" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-38.5916671" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Frust</text>
			</a>
			</g>
			<g transform="translate(172,440) rotate(0,0,0)">
			<a xlink:href="wir.php">
			<text fill="#0088CC" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-37.508335" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Ehe</text>
			</a>
			</g>
			<g transform="translate(210,40) rotate(0,0,0)">
			<a xlink:href="ich.php">
			<text fill="#FFb300" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-33.016666" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Ziele</text>
			</a>
			</g>
			<g transform="translate(52,164) rotate(0,0,0)">
			<a xlink:href="wir.php">
			<text fill="#FFB300" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-26.024999" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Liebe</text>
			</a>
			</g>
			<g transform="translate(137,389) rotate(-90,0,0)">
			<a xlink:href="ich.php">
			<text fill="#3399DD" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-25.1833324" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Uni</text>
			</a>
			</g>
			<g transform="translate(100,380) rotate(-90,0,0)">
			<a xlink:href="sex.php">
			<text fill="#33AADD" stroke="none" font-family="Arial" font-size="28px" font-style="normal" font-weight="400" x="-22.916666" y="-12.09474" text-anchor="start" dominant-baseline="alphabetic">Sex</text>
			</a>
			</g>
			</g>
		</svg>
		<p> </p>
		</div>
	</section>
    </header>
</main>
    	
    <footer>
   	<p><a id=impressum href="impressum.php">Impressum</a>    
		<a id="copyright" href="http://gdt.de/">© 2021 gdt.de</a><br></p>
	</footer>
    
    
	


</body>
</html>