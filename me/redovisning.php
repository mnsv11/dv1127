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
		<h3>Kmom01: Intro till PHP i webbmilj�, Kmom02/03: PHP programmeringens grunder   </h3>
		<p>Trots att jag hade en del php i f�rra  kursen s� gjorde jag f�rsta 
		momentet �nd�, lite som en repetition. Det var kul att b�rja g�ra en ny me sida nu
		n�r man har lite mer kunskap nu �n n�r jag b�rjade p� f�rra sidan.
		<br /><br />
		Efter lite stylende s� b�rjade jag p� kmom02/03, det mesta av det var bara till att
		f�lja instruktionen. Det f�rsta lite kluriga var och hitta det som fattades i felhanteringen,
		men efter att l�st php manualen n�gra g�nger s� gick det. F�r �vrigt var det bara att l�sa och f�lja
		anvisningarna och copy/paste.
		<br /><br />
		Tycker att sv�righetsgraden �kar lite v�l fort. Kmom01 var bra, fr�n att skriva ut p� sk�rmen, 
		g�ra n�gra variabler, str�ngar och if satser och avsluta med att g�ra en me sida var bra.
		Sen i kmom02/03 s� blev det f�r mig genast mycket sv�rare, jag tycker att man skulle g� igenom grunderna
		lite mer innan man b�rjar p� Hangman, skulle g�rna haft samma uppl�gg som i n�got annat programeringsspr�k
		som ex c++. B�rja fr�n start s� att man kan g�ra ett Hangman spel helt sj�lv till slut och inte copy/paste.
		<br /><br />
		Avslutningsvis s� den stora beh�llningen f�r mig var att g�ra en ny me sida med lite mer php kod �n innan.
		</p>
		<hr />
		<h3>Kmom04: T�rningsspel i PHP</h3>
		<p>Detta kursmoment var riktigt kul och intressant att g�ra, ju l�ngre av momentet 
		jag gjorde desto mer f�rstod jag och kodade mer sj�lv.
		Jag gjorde aldrig n�gon t�rnings kod i f�rra momentet s� jag fick b�rjade med att 
		l�gga till det p� me sidan och styla den lite. 
		Sedan forsatte jag med att labba lite med felhanteringen
		av inmatningen, �ndrade fr�n die till att skicka vidare den till en error sida ist�llet.
		Efter det s� f�ljde jag mer eller midre instruktionerna �nda ner till jag skulle g�ra 
		ett eget t�rningsspel, och det blev ett enkelt kasta gris. 
		<br /><br />
		Jag b�rjade med att analysera befintlig kod fr�n tidigare i momentet och 
		f�rs�kte g�ra som innan, kopiera det jag beh�ver och 
		redigera det men fick inte det att fungera riktigt bra. S� jag raderade allt 
		och b�rjade om fr�n b�rjan och f�rs�kte koda det mesta sj�lv, med lite tjuvkikande p� 
		befintlig kod s� gick det bra, l�rde mig mycket p� det.
		St�tte p� lite sm� problem under tiden. Viste inte riktgt hur det fungerade med knapparna
		s� som n�got skall utf�ras n�r n�gon trycker p� en knapp, men det l�ste sig efter lite s�kande p� 
		www.w3schools.com. Sen ville jag spara summan i en variabel och plussa p� efter hand men
		kom inte p� hur man g�r s� jag gjorde det vie en session, kanske �r s� man ska g�ra.
		Hade ocks� ett problem n�r jag skulle nolla summan n�r det blev en etta eller n�r n�gon 
		l�mnar sidan, men det l�ste sig med n�gra if satser. Avslutningsvis s� gjorde jag en egen 
		 klass d�r jag h�mtar ett random nummer.
		<br /><br />
		Sj�lva grafiken med t�rningarna kopierade jag rakt av, men redigerade f�rgerna lite d�r i,
		men n�r jag �ndrade f�rgen p� bakgrunden s� f�rsvann vissa prickar. Men det r�kte med att 
		�ndra p� ordningen p� raderna s� l�ste det sig.
		<br /><br />
		Har f�tt mycket beh�llning fr�n detta moment, speciellt fr�n att g�ra kasta gris. 
		Har f�tt en insikt i hur klasser fungera, lite b�ttre koll p� knappar och hur 
		session fungerar och endel andra sm� funktioner.</p>
		<hr />
		<h3>Kmom05: Spela kort i PHP</h3>
		<p>Detta var ett sv�rare moment,har lite sv�rt med klasser i php men jag f�rs�kte att 
		koda lite sj�lv men det gav jag upp ganska snabbt, det var lite f�r avancerat f�r mig s� jag fick
		anv�nda mos kod.
		<br /><br />
		Sessioner anv�nde jag lite i f�rra momentet n�r jag gjorde mitt kasta gris spel
		det var inte s� sv�rt att anv�nda, php manualen visade r�tt bra hur det fungerar.
		I och med att jag f�ljde instuktionerna och anv�nde mos kod s� finns
		det inte mycket att s�ga mer �n att det var enkelt att f�rst� och f�ja den.
		</p>
		<hr />
		<h3>Kmom06: Databaser, SQL och PHP</h3>
		<p>I det stora hela s� var detta moment en repetition fr�n f�rra kursen,
		s� inga stora nyheter. Jag skippade att intallera PHPMyAdmin (var f�r kr�ngligt) och g�ra �vnigarna
		men jag l�ste igenom det, och det fungerar i stort sett lika i alla sql program.
		Jag installerade dock MySQL Workbench och efter detta moment fick jag uppfattningen
		om att det passar mig b�ttre �n PHPMyAdmin.
		<br /><br />
		Detta momentet var lagom sv�rt f�r mig. Jag p�b�rjade v�ns�karen innan 
		jag ens viste att det var det vi skulle g�ra. P� f�rel�sningen 
		skulle vi g�ra n�gon s�k funktion med klasser som �vning om jag minns r�tt, 
		men jag skippade klasserna f�r jag tycker det �r lite sv�rt, s� 
		jag t�nkte att jag g�r en v�ns�kare utan klass funktion.
		<br /><br />
		Detta momentet kodade jag helt sj�lv med hj�lp av php manualen och mysql sidan.
		Jag st�tte bara p� tv� sm� problem, det f�rsta var med text rutan som 
		jag inte riktigt fattade hur den fungerade, men efter en liten f�rklaring 
		fr�n Rickard s� l�ste det sig. Och det andra var hur man d�ljde anv�ndarnamn och
		l�senord s� att det inte visas i k�llkoden, och det f�rklarade mos hur det fungerade
		f�r mig.
		<br /><br />
		Jag �r n�jd med slut resultatet och jag tycker att det fungerar fint.
		Jag l�rde mig inte s� mycket nytt men jag fick ett program till att 
		l�gga i verktygsl�dan.</p><hr />
		<h3>Kmom07: �ventyrsspel med PHP och databas</h3>
		<p>Detta momentet var b�de sv�rt klurigt och f�rvirrande, inget jag klarade av 
		sj�lv utan mos kod. I b�rjan var det inga st�rre sv�righeter, som att skapa 
		tabellerna och g�ra room sidan. Stylesheetet lade jag utanf�r redan fr�n b�rjan, 
		och tyv�rr s� var det inte s� mycket stylande denna g�ngen.
		<br /><br />
		Provade att labba lite med inkscape men tyckte inte att det passade mig s� jag 
		laddade ner Illustrator, jag har inte hunnit prova det s� mycket �n men jag vet
		att det �r ett bra program, vi f�r v�l se senare n�r det finns tid att labba lite mer.
		Efter som jag hard�lig fantasi (och �r lite lat ibland) s� anv�nde jag mos bilderna 
		ocks�.
		<br /><br />
		Det som jag fastnade mest vid var rumskopplingarna i sql-serven, fattade inte riktigt hur det 
		fungerade. Efter ca 2 timmar och massa funderande och labbande s� klickade det till.
		Jag fattade inte fr�n b�rjan att man skulle s�tta ett id f�r varje l�nk i rummen, f�rutom
		det s� var det inte n�gra direkt problem med sql funktionen.
		Jag gjorde v�l bara tv� �ndringar, jag la till att man kunde plocka svamp att �ta och
		d� minskar livet, och bytte grottbilden och redigerade texten till den.
		<br /><br />
		Inte f�r att jag gjorde mycket sj�lv f�rutom att f�lja instruktionen, men det 
		blev ett �ventyrsspel till slut.
		
		</p>
		<hr />
		<h3>Projekt</h3>
		<p>
		Jag har gjort ett �ventyrsspel och implementerat ett t�rningsspel och kortspel i det.
		Det �r ett litet spel om att man �r ute och seglar och det blir ov�der och man kommer vilse.
		<br /><br />
		Sj�lva spelet i sig var inte s� sv�rt att fixa efter som det var mest att anv�nda mos kod.
		Och implementeringen av dom andra spelen gick ocks� smidigt, inga st�rre problem, hade v�l tur.
		Det som tog tid och var lite sv�rt var att komma p� en historia och g�ra bilderna till den, 
		samt att l�gga till spelet s� att det fungerar i medes. Men efter mycket googlande och pysslande med
		Adobe photoshop och Illustrator s� fick jag ihop lite bilder.
		<br /><br />
		Hadde n�gra sm� problem n�r jag la till det i MGA. F�rst trodde jag att jag inte hade tillg�ng
		att l�gga till filerna, men det visade sig att jag var tvungen att skriva hela s�k v�gen och
		inte klicka mig fram. N�sta problem var att jag fick ett felmeddelande n�r jag la till en ny 
		canurls, men det var bara att namnet redan var upptaget, men det visade inte felmeddelandet.
		Sedan var det en del l�nk fel men det var bara att l�gga till ?p= innan canurl l�nken s� l�ste 
		det sig. Och sista problemet tog ett tag inna jag hittade felet, fick ett meddelande att jag var 
		tvungen att installera en insticksmodul, viste inte vad jag skulle g�ra och mos trodde
		det var n�got med att player inte var med i sessionen. Satt och kollade p� koden ett bra tag, 
		allt fungerade som det skulle f�rutom att bilderna inte visades, det var d� jag kom p� vad det
		kunde vara, Jag hade gl�mt att �ndra p� s�kv�gen p� bilderna i SQL serven.
		F�rutom dessa sm� fel s� var det inga st�rre problem att l�gga till spelet i MGA.
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
