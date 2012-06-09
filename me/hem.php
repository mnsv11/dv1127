<?php
$header = <<<EOD
<div>
<h1>Hem</h1>
<div/>
EOD;

require_once('common.php');
$title		= "Hem";

$html = <<< EOD
{$head}

	<title>{$title}</title>
	</head>

	<body>
	
	<div class="div">
	Min OOPHP
	</div>
		{$header}
				
		<div class="field2">
			
		<img class="pic" src="bilder/mc.jpg" alt ="mig p� mc" style='width:30%; float:right ; margin-top: 95px; padding-left:10px;' />
			
    		
		<h1>Om mig</h1>
			
		<p>Jag heter Mattias Svedklint och bor i J�mj� som ligger ca 1 mil utanf�r Karlskrona. 
		H�r bor jag i egen villa med min sambo Kamilla och 2 barn Simon och Joakim. 
		Jag har jobbat p� lite olika st�llen s� som Ericsson som blev Flextronics d�r jag 
		jobbade f�rst som telefonmont�r och sen som verkstadstekniker. 
		Efter det k�rde jag taxi ett par �r p� Zon-taxi. 
		Nu �r jag tj�nstledig fr�n ett f�retag som heter Svennes verktygsmekaniska d�r 
		jag har jobbat som CNC-operat�r i 5 �r. Jag har alltid dr�mt lite om att f� jobba 
		med det jag tycker �r intressant och kul, s� n�r jag tr�ttnade p� att st� framf�r 
		en maskin s� best�mde jag mig f�r att s�ka till h�gskola, och h�r �r jag nu.

		Mina interssen �r inte s� m�nga, f�rutom att umg�s med familjen s� brukar jag om 
		kv�llarna "n�r det finns lite tid �ver" Spela ett spel som heter Lord of the ring online, 
		det har jag spelat i ca 4 �r nu. Jag har h�llt p� med kampsport s� som Karate, 
		Judo och kickboxning i ca 15 �r, efter att har haft ett uppeh�ll i 8 �r s� har jag 
		b�rjat igen med n�got som heter Savate. �lska ocks� att kolla p� hockey, 
		ska f�rs�ka f� lite tid �ver f�r att g� och kolla p� n�r Karlskrona spelar, 
		i elitserien s� �r det Hv71 som g�ller och i Nhl �r det Detroit. </p>
			

		</div>

			{$footer}
	</body>
</html>
EOD;


header("Content-Type: application/xhtml+xml; charset={$charset}");
echo $html;
exit;
?>
