<?php
$header = <<<EOD

EOD;

require_once('common.php');
$title		= "Hem";

$html = <<< EOD
{$head}

	<title>{$title}</title>
	</head>

	<body>
	
	<div class="div">
	Min OOPHP
	</div>
		{$header}
				
		<div class="field" style='background:lightblue;'>
		
<meta http-equiv="refresh" content="3; URL=next.php" />
<center>
<p>
<img class="pic" src="boat.png" alt ="mig på mc" style='width:30%; float:left ; margin-top: 95px; padding-left:10px;' />
Du är uten en vacker dag och seglar</p>
</center>
		</div>

			{$footer}
	</body>
</html>
EOD;


header("Content-Type: application/xhtml+xml; charset={$charset}");
echo $html;
exit;
?>
