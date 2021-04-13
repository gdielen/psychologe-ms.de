<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="gdt">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
	<title>gdt - Impressum & Kontakt</title>
</head>

<body>
	<header class="banner">
		<a id="gdt" title="zurück zur Startseite!" href="index.php"><img src="img/gdt_2101.gif"  alt="psychologische Beratung"></a>
		<h2><a id="logo" title="zurück zur Startseite!" href="index.php">Psychologische Praxis<span> </span><span class="akzentfarbe2">Guido&nbsp;Dielen</span></a></h2>
		<a id="navlink" title="zum Navigationsmenü" href="#navigation">☰</a>
	</header>

<main id="main">
	<header>
		<h1><span class="akzentfarbe2">Ihr Anliegen<span></h1>
		<p>Bitte nutzen Sie das folgende Formular, um uns einige Abgaben über sich und Ihre Anliegen zu machern. Wir antworten kurzfristig. 
		<br>Wenn Sie uns ein SEPA-Lastschriftmandat erteilen buchen wir erst nach dem jeweiligen Termin ab. Ansonsten erbitten wir Vorkasse bis 24h vor Termin.<p>
		<h2><span>Ihre Nachricht an uns:</span></h2>
	</header>

	<header>
		<h1><span class="akzentfarbe2">Ihr Anliegen<span></h1>
		<p>Bitte nutzen Sie das folgende Formular, um uns einige Abgaben über sich und Ihre Anliegen zu machern. Wir antworten kurzfristig. 
		<br>Wenn Sie uns ein SEPA-Lastschriftmandat erteilen buchen wir erst nach dem jeweiligen Termin ab. Ansonsten erbitten wir Vorkasse bis 24h vor Termin.<p>
		<h2><span>Ihre Nachricht an uns:</span></h2>
	</header>

	<article class="spalte Kontakt">
		<section class="spalte Kontaktdaten">
			<h2><i class="fa fa-user-edit fa-lg"></i> Pesönliche Angaben</h2>
			<form>
			<p> Bitte eintragen</p><br>
				<label for="vorname">Vorname* </label>						<input name="Vorname" placeholder="Vorname" id="vorname" required>
				<label for="nachmane">Nachname* </label>					<input name="Nachname" placeholder="Nachname" id="nachrname" required>
				<label for="strasse">Strasse & Nr.  </label>				<input name="Strasse" placeholder="Strasse Nr." id="strasse">
				<label for="plz">Postleitzahl</label>								<input name="PLZ" placeholder="00000" id="plz">
				<label for="ort">Wohnort* </label>								<input name="Ort" placeholder="Ort" id="ort">
				<label for="geboren">Geb.-Datum* </label>					<input name="geboren" placeholder="00.00.0000" id="geboren" required>
				<label for="beziehung">Beziehungs-Status </label>			<input name="beziehung" placeholder="(z.B.) mit Partner, in Trennung" id="partner">
				<label for="kinder">Kinder&nbsp;(eigene/fremde) </label>			<input name="kinder" placeholder="(z.B.) 2 eigene, 1 von Partner" id="kinder">
				<label for="beruf">Beruf&nbsp;(aktuell) </label>							<input name="beruf" placeholder="(z.B.) Erzieherin, derzeit arbeitssuchend" id="beruf">
				
			<p><strong>Erreichbarkeit</strong></p><br>
				<label for="telefon">Telefon* </label>						<input name="telefon" placeholder="+49 000 00000000" id="telefon" required>
				<label for="fax">Telefax </label>								<input name="FAX" placeholder="+49 000 00000000" id="fax">
				<label for="mobil">Mobil-Nr. </label>							<input name="mobil" placeholder="+49 000 00000000" id="mobil ">
				<label for="eMail">eMail-Adresse </label>							<input name="eMail" placeholder="(z.B.) muster@beispiel.de" id="eMail">
				<label for="erreichbar">am&nbsp;besten zu erreichen? </label>	<input name="erreichbar" placeholder="(z.B.) Mo-Fr 10-18, Sa 10-14" id="erreichbar">

			<p><strong>Anliegen</strong></p><br>
				<label for="anliegen">Anliegen (in Stichworten)* </label>	<textarea name="anliegen" placeholder=" " id="anliegen" type="text" required></textarea>
				<label for="termin">Terminwunsch </label>					<input name="termin" placeholder="(z.B.) mittwochs 10-12 Uhr" id="termin">
				<label for="modus">persönlich, Telefon, Mail, Video-Dialog</label>	<select name="modus" size="1" id="modus"> 	 	<option value=""></option> 	<option value="video">per Video-Dialog (derzeit empfohlen)</option> 	<option value="tel">per Telefon </option> 	<option value="mail">per Mail</option> 	<option value="face">persönlich (in der Praxis)</option>  </select>
				<label for="dringend">Dringlichkeit </label>				<input name="dringend" placeholder="" id="dringend">
				<label for="anmerkungen">Anmerkungen </label>				<input name="anmerkungen" placeholder="" id="anmerkungen">

			<p><strong>Bankverbindung</strong></p><br>
				<label for="inh">Kontoinhaber (wenn nicht selbst)</label>	<input name="inh" placeholder="Vor- und Nachname" id="inh">
				<label for="iban">IBAN&bsp;(Kontonr.) </label>								<input name="iban" placeholder="DE00 0000 0000 0000 0000 00" id="iban">
				<label for="bic">BIC&nbsp;(BLZ ) </label>								<input name="bic" placeholder="XXXXXXXXXXX" id="bic">
				<label for="bank">Geldinstitut </label>						<input name="bank" placeholder="Bank/Sparkasse Musterstadt" id="bank">
				<label for="sepa">Ich&nbsp;erteile SEPA Lastschriftmandat </label>	<select name="sepa" size="1" id="sepa"> 	<option value=""> </option> 	<option value="ja">ja</option> 	 	<option value="nein">nein</option></select>
				
			<p>(* Pflichtfeld) </p>
			<p> </p>
			<p> </p>
				<button type="submit">absenden</button>
			</form>
		</section>
	</article>

	<aside class="contact">    
		<h2><a href="kontakt.php"><i class="fas fa-envelope fa-fw"></i> Kontakt</a></h2>
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
		  <dd>0251) 2084 5332<br>(nach Absprache)</dd>   
		  <dt><i class="fas fa-mail-bulk"></i> eMail</dt>
		  <dd><a href="mailto:mail@psychologe-ms.de">mail@psychologe-ms.de</a></dd>

		  <dt><i class="fas fa-house-user"></i> Anschrift</dt>
		  <dd>Psychologische Praxis - Beratung, Therapie, Diagnostik, Gutachten<br/>
			Musterstraße 93<br/>
			48157 Münster
		  </dd>
		</address>
		<address>
		  <h3>&nbsp;<i class="fa fa-map-marker"></i> Anfahrt</h3>
		<dl class="grid">
		  <dt>Ihr Weg zu uns</dt>
		</dl>
		</address>

		<h3><a rel="nofollow" target="_blank" href="https://www.falk.de/routenplaner" style="color: rgb(138, 138, 138);">&nbsp;Navigationj (Falk Routenplaner )</a></h3>
			<form accept-charset="utf-8" target="_blank" method="get" action="https://www.falk.de/">
				<div class="falk-search-row first">
					<button type="button" class="falk-location-button" onclick="routePlannerWidget.location(this)" lang="de"></button>
					<input name="start" type="text" class="falk-input" placeholder="Start (Straße, PLZ Ort)" />
				</div>
				<div class="falk-search-row second">
					<div class="falk-destination">Praxis:</div>
					<input type="text" class="falk-input" placeholder="Ziel (Straße, PLZ Ort)" name="dest" value="Im Sundern 4, 48157 Münster" />
				</div>
				<div class="falk-submit-row">
					<div >
						<div class="falk-car active" style="border-color: rgb(138, 138, 138);" onclick="routePlannerWidget.changeType(this, 0)">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" width="20px" height="20px" style="fill: rgb(138, 138, 138); stroke: rgb(138, 138, 138);">
							<path d="M904.678 698.828h-20.044c-17.894 23.654-45.978 39.168-77.926 39.168s-60.032-15.514-77.926-39.168h-431.872c-17.868 23.654-45.978 39.168-77.926 39.168-40.832 0-75.75-25.01-90.47-60.494l-125.03-17.87 39.168-195.89h117.606l156.724-156.722h313.446l78.362 117.53 39.168 39.194 235.086 39.168 39.168 156.724-117.53 39.194zm-744.422-58.752c0 32.462 26.318 58.778 58.778 58.778s58.778-26.318 58.778-58.778c0-32.462-26.318-58.778-58.778-58.778s-58.778 26.318-58.778 58.778zm274.254-293.862h-78.362l-117.53 117.53h195.89v-117.53zm156.722 0h-117.53v117.53h195.89l-78.362-117.53zm215.5 235.084c-32.462 0-58.778 26.318-58.778 58.778s26.318 58.778 58.778 58.778c32.462 0 58.778-26.318 58.778-58.778-.026-32.462-26.342-58.778-58.778-58.778z"/>
							</svg>
						</div>
						<div class="falk-walk" style="border-color: rgb(138, 138, 138);" onclick="routePlannerWidget.changeType(this, 1)">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" width="20px" height="20px" style="fill: rgb(138, 138, 138); stroke: rgb(138, 138, 138);">
							<path d="M708.762 554.138l-117.53-78.362-39.168-39.194v117.53l117.53 117.556 39.168 195.89h-39.168l-78.362-156.724-117.53-78.362-39.168 117.53-117.53 117.53-39.168-39.168 78.362-117.53 39.168-117.53 39.168-195.89-78.362 39.168-39.168 117.53h-39.168l39.168-156.722 117.53-78.362h117.53l39.168 78.362 39.168 39.168 117.53 78.362-39.168 39.22zm-176.308-274.254c-32.462 0-58.778-26.318-58.778-58.778s26.318-58.778 58.778-58.778c32.462 0 58.778 26.318 58.778 58.778s-26.318 58.778-58.778 58.778z"/>
							</svg>
						</div>
						<div class="falk-bike" style="border-color: rgb(138, 138, 138);" onclick="routePlannerWidget.changeType(this, 2)">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" width="20px" height="20px" style="fill: rgb(138, 138, 138); stroke: rgb(138, 138, 138);">
							<path d="M786.254 814.822c-99.328 0-182.118-67.584-207.052-159.026-2.816.768-5.478 1.894-8.422 2.304-16.41 2.176-65.972-1.536-124.39-7.398-23.142 94.08-107.442 164.096-208.64 164.096-119.014 0-215.502-96.486-215.502-215.476 0-119.014 96.486-215.5 215.502-215.5 49.486 0 94.514 17.356 130.918 45.39l45.39-45.39v-39.168h-39.168v-39.194h156.724v39.194h-78.362v39.168h274.254v-117.53h-78.362v-39.168h117.53l-6.092 159.308c8.524-1.024 16.896-2.586 25.702-2.586 119.014 0 215.5 96.486 215.5 215.5-.026 118.99-96.512 215.476-215.526 215.476zm-548.506-391.808c-97.382 0-176.306 78.926-176.306 176.308 0 97.356 78.924 176.308 176.306 176.308 80.896 0 148.326-54.784 169.088-129.074-108.108-11.698-227.866-27.648-227.866-27.648l161.972-161.972c-29.056-21.094-64.512-33.92-103.194-33.92zm170.726 134.324c-5.504-22.426-15.18-43.086-28.338-61.21l-83.61 83.61 111.95-22.4zm-.64-88.91c18.304 23.758 31.95 51.098 39.092 81.23l45.49-9.088s54.194-21.966 91.802-13.876c15.182-42.19 42.598-78.362 78.668-103.654h-209.664l-45.39 45.39zm378.42-45.414c-6.99 0-13.644 1.28-20.428 2.048-3.686 9.42-17.51 50.022-.846 91.674 20.148 50.33 80.052 102.17 80.052 102.17h-39.168s-58.214-47.59-77.518-95.846c-14.106-35.25-8.626-70.502-4.25-88.218-51.994 19.686-91.75 63.078-106.88 117.146 18.406 30.514 13.774 61.518-3.712 82.254 16.206 80.64 87.374 141.39 172.774 141.39 97.382 0 176.308-78.95 176.308-176.308-.026-97.382-78.95-176.308-176.332-176.308z"/>
							</svg>
						</div>
						<div class="falk-transit" style="border-color: rgb(138, 138, 138);" onclick="routePlannerWidget.changeType(this, 3)">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" width="20px" height="20px" style="fill: rgb(138, 138, 138); stroke: rgb(138, 138, 138);">
							<path d="M199.45 971.546v-39.194h626.866v39.194h-626.866zm39.168-117.556h548.506v39.168h-548.506v-39.168zm509.338-39.168h-470.17v-39.168h470.144v39.168zm-39.194-78.36h-391.782c-43.29 0-78.362-35.072-78.362-78.362v-509.338c0-43.29 35.072-78.362 78.362-78.362h391.808c43.29 0 78.362 35.072 78.362 78.362v509.338c-.026 43.264-35.098 78.362-78.388 78.362zm-391.784-117.556c21.632 0 39.168-17.536 39.168-39.168s-17.536-39.168-39.168-39.168-39.168 17.536-39.168 39.168 17.536 39.168 39.168 39.168zm430.978-430.976c0-21.632-17.536-39.168-39.168-39.168h-391.808c-21.632 0-39.168 17.536-39.168 39.168v117.53c0 21.632 17.536 39.168 39.168 39.168h391.808c21.632 0 39.168-17.536 39.168-39.168v-117.53zm-39.194 352.64c-21.632 0-39.168 17.536-39.168 39.168s17.536 39.168 39.168 39.168 39.168-17.536 39.168-39.168-17.51-39.168-39.168-39.168z"/>
							</svg>
						</div>
					</div>
					<input type="hidden" name="rm" value="0" />
					<input type="hidden" name="widget" value="3000" />
					<button type="submit">Route erstellen</button>
						<div class="falk-clear">
						</div>
				</div>
			</form>
				<link rel="stylesheet" type="text/css" href="https://www.falk.de/css/build/app/routeplanner-widget.css" />
					<script type="text/javascript" src="https://www.falk.de/js/app/routeplanner-widget.js">
					</script>

	</aside>


    <nav id="navigation">
	  <ul class="nav nav-pills nav-stacked">
      	<li><a href="index.php" tabindex="1"><i class="fas fa-home fa-fw"></i> Start</a></li>
        <li><a href="beratung.php" tabindex="2"><i class="fas fa-user fa-fw"></i>Für mich</a>
        <li><a href="paare-sex.php" tabindex="3"><i class="fas fa-user-friends fa-fw"></i> Für uns</a>
        <li><a href="onlineberatung.php" tabindex="4"><i class="fas fa-laptop fa-fw"></i> Online-Beratung</a>
        <li><a href="gutachten.php" tabindex="5"><i class="fas fa-balance-scale fa-fw"></i> Gutachten</a>
        <li><a href="methoden.php" tabindex="6"><i class="fas fa-notes-medical fa-fw"></i> Methoden</a>
        <li><a href="praxis.php" tabindex="6"><i class="fas fa-briefcase-medical fa-fw"></i> Praxis</a>
        <li><a aria-current="page"><i class="fas fa-envelope fa-fw"></i> Kontakt</a></li>
      </ul>
	</nav>

</main>


	<footer>
		<p>&nbsp;
		<a id=impressum href="impressum.php">Impressum, Datenschutz</a>    
		<a id="copyright"href="http://gdt.de/">© 2021 by gdt.de</a>
		</p>
	</footer>
    
</body>
</html>