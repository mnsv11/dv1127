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
// Create and test the classes
//
//
require_once('incl/CDeck.php');
require_once('incl/CCardhand.php');
$deck = new CDeck();
$hand1 = new CCardHand();
$hand2 = new CCardHand();

$deck->InitAndShuffle();

$html .= "<h1>Att hantera en korthand</h1>";

$html .= "<h2>Plocka en hand med 5 kort.</h2>";
for($i=0; $i<5; $i++) {
	$card = $deck->DealFromTop();
	$card->FlipCard();
	$hand1->AddCard($card);
}
$html .= $hand1->GetCardsAsBox();

$html .= "<h2>Gör en ny hand och plocka 5 kort.</h2>";
for($i=0; $i<5; $i++) {
	$card = $deck->DealFromTop();
	$card->FlipCard();
	$hand2->AddCard($card);
}
$html .= $hand2->GetCardsAsBox();


// -------------------------------------------------------------------------------------------
//
// Create and print out the html-page
//
require_once('common.php');
$title         = "Korthand";

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
