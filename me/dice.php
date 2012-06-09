<?php

// Error handling on/off
//
error_reporting(E_ALL | E_STRICT);
$debug = "";
$debugEnable = TRUE;  // TRUE to enable debugging, FALSE to not print out debug information


// -------------------------------------------------------------------------------------------
//
// Take care of GET variables, and validate them
//
//$antal    = (empty($_GET['antal'])    ? "" : $_GET['antal']);
$antal = filter_input(INPUT_GET, 'antal', FILTER_VALIDATE_INT);
if($antal === FALSE) header('Location: http://www.404errorpages.com/'); 


// -------------------------------------------------------------------------------------------
// 
// Create a form for managing input.
//
$form = <<< EOD
<div>
    <form action='{$_SERVER['PHP_SELF']}' method='get'>
    <fieldset class="hidden">
    	<input type='text' name='antal' value='{$antal}' />
    	<button type='submit'>Kasta</button>
    	</fieldset>
    </form>
    <a href='{$_SERVER['PHP_SELF']}'>Starta om</a>
</div>

EOD;


// -------------------------------------------------------------------------------------------
//
// Throw the dice
//
require_once("incl/CDiceSvg.php");
require_once("incl/CHistogram.php");

$histogram     = new CHistogram();
$dice         = new CDiceSvg();

$diceHtml = "<p>";

if($antal) {

    $dice->RollRepeatedly($antal);
    //$slag = $dice->iLastThrows;
    $slag = $dice->GetLastThrows();
    
    $serie    = $histogram->ShowValues($slag);
    $medel    = round($histogram->Average($slag), 1);
    $graf        = $histogram->PrintGraf($slag);
    
    // Show all dices as Svg
    foreach($slag as $key => $value) {
        $diceHtml .= $dice->GetSvg($value);
    }

    
    $diceHtml .= <<<EOD
Slagserien är: <br />
{$serie}

<br />
Medelvärdet av slagserien är: {$medel}
<br />

En graf över histogrammet:
<br />
{$graf}

EOD;
}

$diceHtml .= "</p>";



// -------------------------------------------------------------------------------------------
//
// The content of the page
//
$html = <<<EOD
<div>
	<h1>Min Tärning</h1>
	<p>
	Ange hur många kast du vill göra.
	</p>
	{$form}
</div>
{$diceHtml}
EOD;


// -------------------------------------------------------------------------------------------
//
// Create and print out the html-page
//
require_once('common.php');
$title         = "Tärning";


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
        {$html}
        <div style='font-size: small;'>
            {$debug}
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
