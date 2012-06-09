<?php
// Error handling on/off
//
error_reporting(E_ALL | E_STRICT);
$debug = "";
$debugEnable = TRUE;  // TRUE to enable debugging, FALSE to not print out debug information



// Prepare the page content
//
$html = "";


// Showing foreach-loop
// http://php.net/manual/en/control-structures.foreach.php
//
require_once('incl/CCard.php');
$c1 = new CCard('H', 1, 1);
$c2 = new CCard('S', 13, 0);
$c3 = new CCard('S', 12, 1);
$c4 = new CCard('C', 6, 1);
$c5 = new CCard('D', 9, 1);
$c6 = new CCard('X', 2, 1);

$hand = Array($c1, $c2, $c3, $c4, $c5, $c6);

$html .= "<h1>Vilka kort har jag nu?</h1>";


// Show as id
$html .= "<h2>Som id</h2><p>";
foreach($hand as $card) {
	$html .= $card->GetCardAsId() . ", ";
}
$html .= "</p>";


// Show as text
$html .= "<h2>Som text</h2><p>";
foreach($hand as $card) {
	$html .= $card->GetCardAsText() . ", ";
}
$html .= "</p>";


// Show as box
$html .= "<h2>Som box</h2><p><div style='float: left; background: #FFC7C7;'>";
foreach($hand as $card) {
	$html .= $card->GetCardAsBox();
}
// divClear used to clearing the float-left state in css.
$divClear = "<div style='height: 0; clear: both;'>&nbsp;</div>";
$html .= "</div>{$divClear}</p>";


// Flip all and show as box
$html .= "<h2>Vänd korten och visa som box</h2><p><div style='float: left; background: #FFC7C7;'>";
foreach($hand as $card) {
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
