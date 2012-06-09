<?php

// Error handling on/off
//
error_reporting(E_ALL | E_STRICT);
$debug = "";
$debugEnable = TRUE;  // TRUE to enable debugging, FALSE to not print out debug information



// Throw the dice
//
require_once("incl/CDiceSvgPig.php");
require_once("incl/CRandomPig.php");
$dice         = new CDiceSvg();
$roll         = new CDice();
$diceHtml = "<p>";

// Create a form for managing input.
//
$form = <<< EOD
<div>
    <form action='{$_SERVER['PHP_SELF']}' method='post'>
    <fieldset class="hidden">
        <button name="Submit1" type="submit" value="Submit">Kasta tärningen</button>
    	<button name="Submit" type="submit" value="Submit1">Visa poäng</button>
    	</fieldset>
    </form>
</div>


EOD;
session_start();

if(empty($_SESSION['views'])){
	$_SESSION['views']=0;
}

if (isset($_POST['Submit1'])){
	$sum = $roll->Roll();
	$diceHtml .= $dice->GetSvg($sum);

	 // store session data
	 

	 $_SESSION['views']= $_SESSION['views'] + $sum;

	 
	$fail ="";
	
	if($sum == 1){
		$fail = "Tyvärr, du förlorade";
		$_SESSION['views'] =0;
	}

}
else{
	$fail = "";
	session_destroy();
}
if (isset($_POST['Submit'])){
	$fail = "Du fick ";
	$fail .= $_SESSION['views'];
	$fail .= " Poäng";
	$_SESSION['views'] =0;
	
}

$diceHtml .= "</p>";


 
// -------------------------------------------------------------------------------------------
//
// The content of the page
//
$html = <<<EOD
<div>
<h1 style='padding-left:20px;'>Kasta gris</h1>
	
	{$form}
</div>
<div style='padding-left:30px;'>
{$diceHtml}
</div>
EOD;


// -------------------------------------------------------------------------------------------
//
// Create and print out the html-page
//
require_once('common.php');
$title         = "Gris";

;
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
        <div style='font-family:castellar;font-size:50px'>
        {$fail}
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
