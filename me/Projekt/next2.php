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
<center>
<div style='float:left;padding-left:50px;'>
Det b�rjar bl�sa upp till storm, v�gorna �kar och du tappar kontrollen �ver b�ten.
</div>
<img class="pic" src="boat2.png" alt ="mig p� mc" style='width:30%;float:right; margin-top: 95px;padding-right:60px;' />


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
