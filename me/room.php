<?php

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
// Take care of GET variables, and validate them
//

// Get the id of the room
$idRoom = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if($idRoom === FALSE || $idRoom === NULL || $idRoom < 0) die("Felaktig _GET värde."); 

// Get the action-event if any
$actionEvent = isset($_GET['event']) ? $_GET['event'] : "";


// ----------------------------------------------------------------------------
//
// Load room info into room-object
//
require_once('incl/CRoom.php');
$room = new CRoom();
$room->ReadFromDatabase($idRoom);

// Perform the action-event, if any
$_SESSION['player']->PerformActionEvent($actionEvent);

// Keep track on current room and decrease health-meter when entering a new room
$_SESSION['player']->SetCurrentRoomAndDecreaseHealtMeter($idRoom);


// -------------------------------------------------------------------------------------------
//
// The content of the page
//
$html = <<<EOD

<div class='wrapper'>

<!-- 
 - Use table to format output, could (and should) use css and <div>,
 - but it is a bit more complex and I do not want to mix with that right now.
 - We deal with that in another course (dbowebb, intro).
 -->
<table>
<tr>
<td style='width: 500px;'>
<h1>Äventyrsspel</h1>
<h2>{$room->iTitle}</h2>
</td>
<td>
<p>
Hälsa: {$_SESSION['player']->iHealthMeter}
</p>
</td>
</tr>
</table>

<div class='gamearea'>
{$room->iGraphics}
</div> <!-- gamearea -->

<div class='description'>
<h4>Beskrivning:</h4>
<p class='description'>{$room->iDescription}</p>
</div> <!-- description -->

<div class='action'>
<h4>Riktningar:</h4>
<p class='action'>{$room->iConnections}</p>
<h4>Händelser:</h4>
<p class='action'>{$room->iActions}</p>
</div> <!-- actions -->

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
