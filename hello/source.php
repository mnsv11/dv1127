<?php
// ===========================================================================================
//
// PListDirectory.php
//
// Description: An implementation of a PHP pagecontroller for a web-site.
// Shows a directory listning.
//
// Author: Mikael Roos
//

// -------------------------------------------------------------------------------------------
//
// Settings for this pagecontroller.
//

// Separator between directories and files, change between Unix/Windows
$SEPARATOR = '/'; 	// Unix, Linux, MacOS, Solaris
//$SEPARATOR = '\\'; 	// Windows 

// Show the content of files named config.php, except the rows containing DB_USER, DB_PASSWORD
//$HIDE_DB_USER_PASSWORD = FALSE; 
$HIDE_DB_USER_PASSWORD = TRUE; 

// Which directory to use as basedir, end with separator
$BASEDIR = '.' . $SEPARATOR;

// The link to this page, usefull to change when using this pagecontroller for other things,
// such as showing stylesheets in a separate directory, for example.
$HREF = 'source.php?';


// -------------------------------------------------------------------------------------------
//
// Page specific code
//

$html = <<<EOD
<h1>Visa k&auml;llkod</h1>
<p>
Nedanst&aring;ende filer finns i denna katalogen. Klicka p&aring; en fil f&ouml;r att visa dess inneh&aring;ll.
</p>
EOD;


// -------------------------------------------------------------------------------------------
//
// Verify the input variable _GET, no tampering with it
//
$currentdir	= isset($_GET['dir']) ? $_GET['dir'] : '';

$fullpath1 	= realpath($BASEDIR);
$fullpath2 	= realpath($BASEDIR . $currentdir);
$len = strlen($fullpath1);
if(	strncmp($fullpath1, $fullpath2, $len) !== 0 ||
	strcmp($currentdir, substr($fullpath2, $len+1)) !== 0 ) {
	die('Tampering with directory?');
}
$fullpath = $fullpath2;
$currpath = substr($fullpath2, $len+1);


// -------------------------------------------------------------------------------------------
//
// Show the name of the current directory
//
$start		= basename($fullpath1);
$dirname 	= basename($fullpath);
$html .= <<<EOD
<p>
<a href='{$HREF}dir='>{$start}</a>{$SEPARATOR}{$currpath}
</p>

EOD;


// -------------------------------------------------------------------------------------------
//
// Open and read a directory, show its content
//
$dir 	= $fullpath;
$curdir1 = empty($currpath) ? "" : "{$currpath}{$SEPARATOR}";
$curdir2 = empty($currpath) ? "" : "{$currpath}";

$list = Array();
if(is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
        	if($file != '.' && $file != '..' && $file != '.svn') {
        		$curfile = $fullpath . $SEPARATOR . $file;
        		if(is_dir($curfile)) {
          	  		$list[$file] = "<a href='{$HREF}dir={$curdir1}{$file}'>{$file}{$SEPARATOR}</a>";
          	  	} else if(is_file($curfile)) {
          	  	  $list[$file] = "<a href='{$HREF}dir={$curdir2}&amp;file={$file}'>{$file}</a>";
          	  	}
          	 }
        }
        closedir($dh);
    }
}

ksort($list);

$html .= '<p>';
foreach($list as $val => $key) {
	$html .= "{$key}<br />\n";
}
$html .= '</p>';


// -------------------------------------------------------------------------------------------
//
// Show the content of a file, if a file is set
//
$dir 	= $fullpath;
$file	= "";

if(isset($_GET['file'])) {
	$file = basename($_GET['file']);

	$content = htmlspecialchars(file_get_contents($dir . $SEPARATOR . $file, 'FILE_TEXT'));

	// Remove password and user from config.php, if enabled
	if($HIDE_DB_USER_PASSWORD == TRUE && $file == 'config.php') {

		$pattern[0] 	= '/(DB_PASSWORD|DB_USER)(.+)/';
		$replace[0] 	= '/* <em>\1,  is removed and hidden for security reasons </em> */ );';
		
		$content = preg_replace($pattern, $replace, $content);
	}
	
	$html .= <<<EOD
<fieldset>
<legend><a href='{$HREF}'>{$file}</a></legend>
<pre>
{$content}
</pre>
</fieldset>
EOD;
}


// -------------------------------------------------------------------------------------------
//
// Create and print out the html-page
//
require_once('common.php');

$html = <<< EOD
<?xml version="1.0" encoding="iso-8859-1" ?> 
<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv" lang="sv">  
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1;" />
		<title>Visa inneh&aring;ll i biblioteket och filer</title>
		<link rel="shortcut icon" href="favicon.ico" />
		<style type="text/css">
		</style>
	</head>

	<body>
		{$header}
			<div>
				{$html}
			</div>
		{$footer}
	</body>
</html>
EOD;


header("Content-Type: text/html; charset=iso-8859-1");
echo $html;
exit;

?>

