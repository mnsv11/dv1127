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
		


<p>
<meta http-equiv="refresh" content="3; URL=next2.php" />
<center>
<div style='float:left;padding-left:50px;'>
Efter ett tag börjar vinden att öka.
</div>
<img class="pic" src="boat2.png" alt ="mig på mc" style='width:30%; margin-top: 95px; padding-right:350px;' />


</center>
</p>
		</div>

			{$footer}
	</body>
</html>
EOD;


header("Content-Type: application/xhtml+xml; charset={$charset}");
echo $html;
exit;
?>
