<?php
// ===========================================================================================
//
// adventure.php
//
// Description: Start and overview of the adventure game.
//
//
// Author: Mikael Roos
//

// Load class definitions before calling session_start
require_once('incl/CPlayer.php');            
session_start();


// -------------------------------------------------------------------------------------------
//
// Error handling on/off
//
error_reporting(E_ALL | E_STRICT);
$debug = "";
$debugEnable = TRUE;  // TRUE to enable debugging, FALSE to not print out debug information


// -------------------------------------------------------------------------------------------
//
// Take care of GET variables
//
$doGame    = (empty($_GET['game']) ? FALSE : $_GET['game']);
$gameOver = FALSE;

switch($doGame) {
    case 'initsession': { // Destroy and then initiate the session
        require('incl/ISessionDestroy.php');
        //
        // Initiating a session and storing an object in the session variable
        //
        // http://php.net/manual/en/function.session-start.php
        // http://php.net/manual/en/function.session-regenerate-id.php
        //
        session_start();          // Must call again if we just destroyed
                                   // the session.
        session_regenerate_id();  // To avoid problems
        
        $debug .= "Session destroyed and re-created.";
    }
    break;

    case 'start':   {                         // Go to the first room

        if(!isset($_SESSION['player'])) {            // Init the session with a new player
            $_SESSION['player'] = new CPlayer();    // if not already done before.
        }
        
        //
        // Make a redirect to the first room
        // http://php.net/manual/en/function.header.php
        //
        header('Location: http://www.student.bth.se/~mnsv11/dv1127/me/room.php?id=1');
        exit;
    }
    break;
        
    default: 
    break;
}


// -------------------------------------------------------------------------------------------
//
// The content of the page
//
$html = <<<EOD

<div class='wrapper'>
<h1>Äventyrsspel</h1>
<p>
Välkommen att spela det magiska äventyrsspelet med Betty som är på promenad i skogen och 
letar efter lite äventyr.
</p>
<p>
<a href="{$_SERVER['PHP_SELF']}?game=start">Börja spela spelet</a> 
 | 
<a href="{$_SERVER['PHP_SELF']}?game=initsession">Förstör sessionen (börja om)</a>
</p>
</div> <!-- wrapper -->

EOD;


// -------------------------------------------------------------------------------------------
//
// Create and print out the html-page
//
require_once('common.php');
$title         = "Äventyrsspel";


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

		
		</div>

			{$footer}
	</body>
</html>
EOD;

header("Content-Type: application/xhtml+xml; charset={$charset}");
echo $html;
exit;

?>
