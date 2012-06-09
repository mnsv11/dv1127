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
	<link rel="SHORTCUT ICON" href="../bilder/mcicon.jpg" type="image/x-icon"/>
	<link rel="stylesheet" href="../style/sheet.css" title="General stylesheet" />
		<meta http-equiv="Content-Type" content="text/html; charset={$charset};" />
EOD;


$header = <<<EOD


<fieldset class="menuField">
<div class="menu">

<a href='../hem.php'>Hem</a>
|
<a href='../redovisning.php'>Redovisning</a>
|
<a href='../hangman.php'>Hangman</a>
|
<a href='../dice.php'>Tärning</a>
|
<a href='../pig.php'>Kasta gris</a>
|
<a href='../kortVal.php'>Kort</a>
|
<a href='../sqlmain.php'>Sök</a>
|
<a href='../source.php'>Källkod</a>



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
