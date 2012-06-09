<?php



// -------------------------------------------------------------------------------------------
//
// Take care of GET variables
//
$reason    = (empty($_GET['reason']) ? "Ingen anledning presenterad." : $_GET['reason']);


// -------------------------------------------------------------------------------------------
//
// The content of the page
//
$html = <<<EOD

<div class='wrapper'>
<h1>�ventyrsspel</h1>
<h2>GAME OVER</h2>
<p>
Anledning: {$reason}
</p>
<p>
<a href="adventure.php">G� till startsidan</a> 
</p>
</div> <!-- wrapper -->

EOD;

// -------------------------------------------------------------------------------------------
//
// Create and print out the html-page
//
require_once('common.php');
$title         = "�ventyrsspel";


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
