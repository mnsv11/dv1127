<?php

// -------------------------------------------------------------------------------------------
//
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

// Include class definitions
require_once('incl/CHighCardLowCard.php');

// Load class definitions before calling session_start
session_start();


// -------------------------------------------------------------------------------------------
//
// Take care of GET variables
//
$doGame    = (empty($_GET['game']) ? FALSE : $_GET['game']);
$gameOver = FALSE;

switch($doGame) {
    case 'init': { // Destroy and then initiate the session
        //require('ISessionDestroy.php');
        //
        // Initiating a session and storing an object in the session variable
        //
        // http://php.net/manual/en/function.session-start.php
        // http://php.net/manual/en/function.session-regenerate-id.php
        //
        //session_start();          // Must call again if we just destroyed
                                     // the session.
        //session_regenerate_id();  // To avoid problems

        $_SESSION['game']   = new CHighCardLowCard();
        $_SESSION['game']->StartGame();

        $debug .= 'Game initiated.';
        $debug .= 'Current session id is: ' . session_id() . '<br />';
    }
    break;

    case 'high':
    case 'low':   { // Guess next card is high/low card
        if($_SESSION['game']->GuessAndPickCard($doGame) == FALSE) {
            $gameOver = TRUE;
        }

        $debug .= 'Made a guess. <br />';
    }
    break;

/*    
    case 'destroy': { // Only destroy the session
        require('ISessionDestroy.php');
        $debug .= 'Session destroyed.';
        $debug .= 'Current session id is: ' . session_id() . '<br />';
    }
    break;
*/
    
    default: 
    break;
}


// -------------------------------------------------------------------------------------------
//
// Play the CHighCardLowCard-class
//
//
$htmlGame = "";
if(isset($_SESSION['game'])) {

    $htmlGame .= $_SESSION['game']->ShowGameStatus();
    
    if($gameOver) {
        $points = $_SESSION['game']->GetPoints();
        $_SESSION['game']->StartGame();
        $htmlGame .= "<p>Game over. Du lyckades med {$points} kort.</p>";
        
        if($points >= 3) {
            $htmlGame .= "<p>GRATTIS, du har låst upp den hemliga passagen. ";
            $htmlGame .= "<a href='../room.php?id=13'>Gå vidare via den hemliga passagen!</a></p>";
        }
    } else {
        $htmlGame .= <<<EOD
<p>
<a href='highlowAdventure.php?game=high'>Nästa kort är högre...</a><br/>
<a href='highlowAdventure.php?game=low'>Nästa kort är lägre...</a>
</p>
EOD;
    }
}    

$debug .= 'Current session id is: ' . session_id() . '<br />';


// -------------------------------------------------------------------------------------------
//
// The content of the page
//
$html = <<<EOD

<div class='wrapper'>
<h1>Äventyrsspel</h1>
<h2>Spela High Card Low Card</h2>

<div class='gamearea'>
{$htmlGame}
</div> <!-- gamearea -->

<div class='description'>
<h4>Beskrivning:</h4>
<p class='description'>
Spela spelet HighLow, lyckas gissa rätt på 3 kort för att komma vidare i spelet.
</p>
</div> <!-- description -->

<div class='action'>
<h4>Riktningar:</h4>
<p class='action'>
<a href='../me/room.php?id=10'>Avsluta spelet och gå tillbaka till rummet</a>
</p>
<h4>Händelser:</h4>
<p class='action'>
<a href='highlowAdventure.php?game=init'>Starta ett nytt spel och försök igen</a><br/>
</p>
</div> <!-- actions -->

</div> <!-- wrapper -->

EOD;

// Create and print out the html-page
//
require_once('common.php');
$title 		= "High Card Low Card";
$debug = $debugEnable ? $debug : "";

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
