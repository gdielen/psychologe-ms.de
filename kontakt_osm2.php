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

<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://osm.li/4eH" style="border: 1px solid black"></iframe><br/>
<small><a href="https://www.openstreetmap.org/#map=13/51.9584/7.6374">Größere Karte anzeigen</a></small>
</address>
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