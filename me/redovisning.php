<?php
$header = <<<EOD
<div>
<h1>redovisning</h1>
<div/>
EOD;

require_once('common.php');
$title		= "Redovisning";

$html = <<< EOD
{$head}
		
	<title>{$title}</title>
	</head>
	
	<body>
	<div class="div">
	Min OOPHP
	</div>
	
		{$header}
	
		<div class="field">
		<h1>Redovisning</h1>
		<h3>Kmom01: Intro till PHP i webbmiljö, Kmom02/03: PHP programmeringens grunder   </h3>
		<p>Trots att jag hade en del php i förra  kursen så gjorde jag första 
		momentet ändå, lite som en repetition. Det var kul att börja göra en ny me sida nu
		när man har lite mer kunskap nu än när jag började på förra sidan.
		<br /><br />
		Efter lite stylende så började jag på kmom02/03, det mesta av det var bara till att
		följa instruktionen. Det första lite kluriga var och hitta det som fattades i felhanteringen,
		men efter att läst php manualen några gånger så gick det. För övrigt var det bara att läsa och följa
		anvisningarna och copy/paste.
		<br /><br />
		Tycker att svårighetsgraden ökar lite väl fort. Kmom01 var bra, från att skriva ut på skärmen, 
		göra några variabler, strängar och if satser och avsluta med att göra en me sida var bra.
		Sen i kmom02/03 så blev det för mig genast mycket svårare, jag tycker att man skulle gå igenom grunderna
		lite mer innan man börjar på Hangman, skulle gärna haft samma upplägg som i något annat programeringsspråk
		som ex c++. Börja från start så att man kan göra ett Hangman spel helt själv till slut och inte copy/paste.
		<br /><br />
		Avslutningsvis så den stora behållningen för mig var att göra en ny me sida med lite mer php kod än innan.
		</p>
		<hr />
		<h3>Kmom04: Tärningsspel i PHP</h3>
		<p>Detta kursmoment var riktigt kul och intressant att göra, ju längre av momentet 
		jag gjorde desto mer förstod jag och kodade mer själv.
		Jag gjorde aldrig någon tärnings kod i förra momentet så jag fick började med att 
		lägga till det på me sidan och styla den lite. 
		Sedan forsatte jag med att labba lite med felhanteringen
		av inmatningen, ändrade från die till att skicka vidare den till en error sida istället.
		Efter det så följde jag mer eller midre instruktionerna ända ner till jag skulle göra 
		ett eget tärningsspel, och det blev ett enkelt kasta gris. 
		<br /><br />
		Jag började med att analysera befintlig kod från tidigare i momentet och 
		försökte göra som innan, kopiera det jag behöver och 
		redigera det men fick inte det att fungera riktigt bra. Så jag raderade allt 
		och började om från början och försökte koda det mesta själv, med lite tjuvkikande på 
		befintlig kod så gick det bra, lärde mig mycket på det.
		Stötte på lite små problem under tiden. Viste inte riktgt hur det fungerade med knapparna
		så som något skall utföras när någon trycker på en knapp, men det löste sig efter lite sökande på 
		www.w3schools.com. Sen ville jag spara summan i en variabel och plussa på efter hand men
		kom inte på hur man gör så jag gjorde det vie en session, kanske är så man ska göra.
		Hade också ett problem när jag skulle nolla summan när det blev en etta eller när någon 
		lämnar sidan, men det löste sig med några if satser. Avslutningsvis så gjorde jag en egen 
		 klass där jag hämtar ett random nummer.
		<br /><br />
		Själva grafiken med tärningarna kopierade jag rakt av, men redigerade färgerna lite där i,
		men när jag ändrade färgen på bakgrunden så försvann vissa prickar. Men det räkte med att 
		ändra på ordningen på raderna så löste det sig.
		<br /><br />
		Har fått mycket behållning från detta moment, speciellt från att göra kasta gris. 
		Har fått en insikt i hur klasser fungera, lite bättre koll på knappar och hur 
		session fungerar och endel andra små funktioner.</p>
		<hr />
		<h3>Kmom05: Spela kort i PHP</h3>
		<p>Detta var ett svårare moment,har lite svårt med klasser i php men jag försökte att 
		koda lite själv men det gav jag upp ganska snabbt, det var lite för avancerat för mig så jag fick
		använda mos kod.
		<br /><br />
		Sessioner använde jag lite i förra momentet när jag gjorde mitt kasta gris spel
		det var inte så svårt att använda, php manualen visade rätt bra hur det fungerar.
		I och med att jag följde instuktionerna och använde mos kod så finns
		det inte mycket att säga mer än att det var enkelt att förstå och föja den.
		</p>
		<hr />
		<h3>Kmom06: Databaser, SQL och PHP</h3>
		<p>I det stora hela så var detta moment en repetition från förra kursen,
		så inga stora nyheter. Jag skippade att intallera PHPMyAdmin (var för krångligt) och göra övnigarna
		men jag läste igenom det, och det fungerar i stort sett lika i alla sql program.
		Jag installerade dock MySQL Workbench och efter detta moment fick jag uppfattningen
		om att det passar mig bättre än PHPMyAdmin.
		<br /><br />
		Detta momentet var lagom svårt för mig. Jag påbörjade vänsökaren innan 
		jag ens viste att det var det vi skulle göra. På föreläsningen 
		skulle vi göra någon sök funktion med klasser som övning om jag minns rätt, 
		men jag skippade klasserna för jag tycker det är lite svårt, så 
		jag tänkte att jag gör en vänsökare utan klass funktion.
		<br /><br />
		Detta momentet kodade jag helt själv med hjälp av php manualen och mysql sidan.
		Jag stötte bara på två små problem, det första var med text rutan som 
		jag inte riktigt fattade hur den fungerade, men efter en liten förklaring 
		från Rickard så löste det sig. Och det andra var hur man döljde användarnamn och
		lösenord så att det inte visas i källkoden, och det förklarade mos hur det fungerade
		för mig.
		<br /><br />
		Jag är nöjd med slut resultatet och jag tycker att det fungerar fint.
		Jag lärde mig inte så mycket nytt men jag fick ett program till att 
		lägga i verktygslådan.</p><hr />
		<h3>Kmom07: Äventyrsspel med PHP och databas</h3>
		<p>Detta momentet var både svårt klurigt och förvirrande, inget jag klarade av 
		själv utan mos kod. I början var det inga större svårigheter, som att skapa 
		tabellerna och göra room sidan. Stylesheetet lade jag utanför redan från början, 
		och tyvärr så var det inte så mycket stylande denna gången.
		<br /><br />
		Provade att labba lite med inkscape men tyckte inte att det passade mig så jag 
		laddade ner Illustrator, jag har inte hunnit prova det så mycket än men jag vet
		att det är ett bra program, vi får väl se senare när det finns tid att labba lite mer.
		Efter som jag hardålig fantasi (och är lite lat ibland) så använde jag mos bilderna 
		också.
		<br /><br />
		Det som jag fastnade mest vid var rumskopplingarna i sql-serven, fattade inte riktigt hur det 
		fungerade. Efter ca 2 timmar och massa funderande och labbande så klickade det till.
		Jag fattade inte från början att man skulle sätta ett id för varje länk i rummen, förutom
		det så var det inte några direkt problem med sql funktionen.
		Jag gjorde väl bara två ändringar, jag la till att man kunde plocka svamp att äta och
		då minskar livet, och bytte grottbilden och redigerade texten till den.
		<br /><br />
		Inte för att jag gjorde mycket själv förutom att följa instruktionen, men det 
		blev ett äventyrsspel till slut.
		
		</p>
		<hr />
		<h3>Projekt</h3>
		<p>
		Jag har gjort ett äventyrsspel och implementerat ett tärningsspel och kortspel i det.
		Det är ett litet spel om att man är ute och seglar och det blir oväder och man kommer vilse.
		<br /><br />
		Själva spelet i sig var inte så svårt att fixa efter som det var mest att använda mos kod.
		Och implementeringen av dom andra spelen gick också smidigt, inga större problem, hade väl tur.
		Det som tog tid och var lite svårt var att komma på en historia och göra bilderna till den, 
		samt att lägga till spelet så att det fungerar i medes. Men efter mycket googlande och pysslande med
		Adobe photoshop och Illustrator så fick jag ihop lite bilder.
		<br /><br />
		Hadde några små problem när jag la till det i MGA. Först trodde jag att jag inte hade tillgång
		att lägga till filerna, men det visade sig att jag var tvungen att skriva hela sök vägen och
		inte klicka mig fram. Nästa problem var att jag fick ett felmeddelande när jag la till en ny 
		canurls, men det var bara att namnet redan var upptaget, men det visade inte felmeddelandet.
		Sedan var det en del länk fel men det var bara att lägga till ?p= innan canurl länken så löste 
		det sig. Och sista problemet tog ett tag inna jag hittade felet, fick ett meddelande att jag var 
		tvungen att installera en insticksmodul, viste inte vad jag skulle göra och mos trodde
		det var något med att player inte var med i sessionen. Satt och kollade på koden ett bra tag, 
		allt fungerade som det skulle förutom att bilderna inte visades, det var då jag kom på vad det
		kunde vara, Jag hade glömt att ändra på sökvägen på bilderna i SQL serven.
		Förutom dessa små fel så var det inga större problem att lägga till spelet i MGA.
		<br /><br />
		
		
		</p>
		</div>

			{$footer}
	</body>
</html>
EOD;


header("Content-Type: application/xhtml+xml; charset={$charset}");
echo $html;
exit;
?>
