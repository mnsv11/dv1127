<?php
require_once('common.php');
// -------------------------------------------------------------------------------------------
//
// Error handling on/off
//
error_reporting(E_ALL | E_STRICT);
$debug = "";
$debugEnable = false;  // TRUE to enable debugging, FALSE to not print out debug information

// Remove NOTICE error message, define the variable before its used
$svgCode = "";




// -------------------------------------------------------------------------------------------
//
// Take care of GET variables
//
$char			= (empty($_GET['char'])			? "" : $_GET['char']);
//$word = (empty($_GET['word']) ? "" : $_GET['word']);
$word 		= (empty($_GET['word']) 		? rand(0, 9) : $_GET['word']);
$guessed 	= (empty($_GET['guessed'])	? "" : $_GET['guessed']);
$output 	= (empty($_GET['output'])	? "" : $_GET['output']);

$guessed .= $char;
$guessed = count_chars($guessed, 3);





// -------------------------------------------------------------------------------------------
//
// Create a wordlist and pick the word.
//
$words = Array(	
	'dum',	
	'xylofon',	
	'zebra',	
	'dator',	
	'fotboll',	
	'lampa',	
	'skola',	
	'mot',	
	'lack',	
	'flygplan',	
	);

$theWord = $words[$word];

$debug .= $theWord;

// -------------------------------------------------------------------------------------------
//
// Show the string and the chars that are correct, else _
//
$nrChars 			= strlen($theWord);
$currentWord 	= "";

for($i=0; $i<$nrChars; $i++) {
	
	if(stripos($guessed, $theWord[$i]) === FALSE) { 
		$currentWord .= '-';
	} else {
		$currentWord .= $theWord[$i];
	}
}


// -------------------------------------------------------------------------------------------
//
// Check state of game:
// count number of failed attempts
//
$charsGuessed = strlen(count_chars($guessed, 3));
$charsHit 		= strlen(count_chars((str_replace('-', '', $currentWord)), 3));
$failed = $charsGuessed - $charsHit;

$debug .= $failed . $charsGuessed . $charsHit;


// -------------------------------------------------------------------------------------------
//
// Check state of game:
// if all chars are right, then success!
//
$disableButton 		= "";
$gameOverMessage	= "";

if(strpos($currentWord, '-') === FALSE) {
	$disableButton 		= "disabled='disabled'";
	$gameOverMessage	= "Goesnubben, du räddade Mr. Hangman!<br/>Pröva igen!";
	$debug .= "yes";
}

$debug .= $currentWord;
$debug .= strpos($currentWord, "-");


// -------------------------------------------------------------------------------------------
//
// Check state of game:
// if failed nine times, then hanged, game over.
//
if($failed >= 9) {
	$disableButton 		= "disabled='disabled'";
	$gameOverMessage	= "Trist, du lyckades inte rädda Mr. Hangman...<br/>Försöka på nytt?";
}



// -------------------------------------------------------------------------------------------
//
// Create a form for managing input.
//
$form = <<< EOD

<form action='hangman.php' method='get'>

<p style='font-family: monospace; font-size: xx-large; text-transform: uppercase;'>
{$currentWord} ({$guessed})
</p>

<div>
<input type='hidden' name='word'    value='{$word}' />
<input type='hidden' name='guessed' value='{$guessed}' />
<input type='text'   name='char' tabindex='1' size='1' maxlength='1' />
<button type='submit' {$disableButton} tabindex='2' >Gissa</button>
<a href='{$_SERVER['PHP_SELF']}'>Starta om</a>
</div>

<p style='font-size: x-large; color: red'>
$gameOverMessage
</p>

</form>

EOD;


// -------------------------------------------------------------------------------------------
//
// Create html for drawing the hanging man.
//
require_once('incl/CHangmanSVG.php');
$hangman = new CHangmanSVG();
$svgCode .= $hangman->DrawPartsOfPicture($failed);

// -------------------------------------------------------------------------------------------
//
// Create and print out the html-page
//
require_once('common.php');
$title		= "Hänga Gubben";


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
		<h1>Hangman</h1>
		<p>Nu ska vi hänga någon.</p>
		
		
			<div style='float: left'>
			{$form}	
			</div>
			<div style='float: right '>
			{$svgCode}
			</div>
			
		</div>

			{$footer}
	</body>
</html>
EOD;


header("Content-Type: application/xhtml+xml; charset={$charset}");
echo $html;
exit;

?>
