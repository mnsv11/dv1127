<?php



//----------------------Header-----------------------------------------
$charset 	= "iso-8859-1";
$language	= "sv";
$debug 		= $debugEnable ? $debug : "";


$head = <<< EOD
<?xml version="1.0" encoding="{$charset}" ?> 
<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$language}" lang="{$language}">  
	<head>
	<link rel="SHORTCUT ICON" href="bilder/mcicon.jpg" type="image/x-icon"/>
	<link rel="stylesheet" href="style/sheet.css" title="General stylesheet" />
		<meta http-equiv="Content-Type" content="text/html; charset={$charset};" />
EOD;


$header = <<<EOD


<fieldset class="menuField">
<div class="menu">


	<div id='navMenu'>

	<ul style="border-bottom-width: 0px;">
	<li><a href='hem.php'>Hem</a>
	</li> <!-- End main LI -->


	
	
	<li><a href='redovisning.php'>Redovisning</a>
	</li> <!-- End main LI -->




	<li><a href='hangman.php'>Hangman</a>
	</li> <!-- End main LI -->


	

	<li><a href='dice.php'>Tärning</a>
	</li> <!-- End main LI -->


	

	<li><a href='pig.php'>Kasta gris</a>
	</li> <!-- End main LI -->


	
	
	<li><a href="#">Kort</a>
	<ul>
	<li><a style="width:137px;text-align: left;padding-left:12px;" href="card.php">Kort</a></li>
	<li><a style="width:137px;text-align: left;padding-left:12px;" href="deck.php">Kortlek</a></li>
	<li><a style="width:137px;text-align: left;padding-left:12px;" href="hand.php">Korthand</a></li>
	<li><a style="width:137px;text-align: left;padding-left:12px;" href="session.php">Kard Session</a></li> 
	<li><a class="radie" style="width:137px;text-align: left;padding-left:12px;" href="highlow.php">High kard Low kard</a></li>
	</ul> <!-- End Inner UL -->
	</li> <!-- End main LI -->


	

	<li><a href='sqlmain.php'>Sök</a>
	</li> <!-- End main LI -->


	

	<li><a href='adventure.php?id=1'>Äventyr</a>
	</li> <!-- End main LI -->


	

	<li><a href='source.php'>Källkod</a>
	</li> <!-- End main LI -->
	</ul> <!-- End main UL -->
	</div> <!-- End Nav -->


</div>
</fieldset>

EOD;




// -------------------------------------------------------------------------------------------
//
// Common footer
//
$footer = <<<EOD

EOD;
?>
