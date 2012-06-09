<?php

// Error handling on/off
//
error_reporting(E_ALL | E_STRICT);
$debug = "";
$debugEnable = TRUE;  // TRUE to enable debugging, FALSE to not print out debug information


// -------------------------------------------------------------------------------------------
//
// Prepare the page content
//
$html = "";


// -------------------------------------------------------------------------------------------
//
// Create and test the CDeck-class
//
//
require_once('incl/CDeck.php');
$deck1 = new CDeck();

$html .= "<h1>Hur ser min kortlek ut?</h1>";

$html .= "<h2>Visa kort i en oblandad lek</h2><p><div style='float: left; background: #FFC7C7;'>";
while($card = $deck1->DealFromTop()) {
	$card->FlipCard();
	$html .= $card->GetCardAsBox();
}
// divClear used to clearing the float-left state in css.
$divClear = "<div style='height: 0; clear: both;'>&nbsp;</div>";
$html .= "</div>{$divClear}</p>";

$html .= "<h2>Initiera och blanda leken, plocka 5 kort.</h2><p><div style='float: left; background: #FFC7C7;'>";
$deck1->InitAndShuffle();
for($i=0; $i<5; $i++) {
	$card = $deck1->DealFromTop();
	$card->FlipCard();
	$html .= $card->GetCardAsBox();
}
// divClear used to clearing the float-left state in css.
$divClear = "<div style='height: 0; clear: both;'>&nbsp;</div>";
$html .= "</div>{$divClear}</p>";


// -------------------------------------------------------------------------------------------
//
// Create and print out the html-page
//
require_once('common.php');
$title         = "Kort";

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
