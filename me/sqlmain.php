<?php
$header = <<<EOD
<div>
<h1>Hem</h1>
<div/>
EOD;

$form = <<< EOD
<div style='text-align:center;'>
    <form action='{$_SERVER['PHP_SELF']}' method='post'>
    <fieldset class="hidden">
    Namn <input type='text' name='namn' style='margin-right:15px;'/>
    	 Efternamn <input type='text' name='efternamn' />
        <button name="Submit1" type="submit" value="Submit">Sök</button>
    	</fieldset>
    </form>
</div>
EOD;
require_once('sql/connect.php');
require_once('common.php');
$title		= "Hem";
$namn = $_POST['namn'];
$efternamn = $_POST['efternamn'];

//ansluter till sql
$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db(DB_DATABASE) or die(mysql_error()); 


//väljer pga vilken ruta som är i fylld.
if(isset($namn) && isset($efternamn))
{
$sql="select * from Friends where name = ('$namn') and lastName = ('$efternamn')";
}
if(isset($namn) && empty($efternamn))
{
$sql="select * from Friends where name = ('$namn')";
}
if(empty($namn) && isset($efternamn))
{
$sql="select * from Friends where lastName = ('$efternamn')";
}

 //lägger rubrik i vaiabel
  $ds = 'Namn: ' . '<br />Efternamn: ' . '<br />Födelseår: ' . '<br />Adress: ' . '<br />Postnr: ' . '<br />Stad: ' . '<br />Telefon: ';


if (isset($_POST['Submit1'])){//när click på knapp
	
//get number of rows
$size = mysql_query("select * from Friends");
$num    =    mysql_num_rows($size);

//hämtar resultat från sql
 $result=mysql_query($sql);
 $row = mysql_fetch_array($result);
 

  //lägger resultat i variabel  
 $results = $row['name'] . '<br />' . $row['lastName'] . '<br />' . $row['birth'] . '<br />' . $row['address']
 . '<br />' . $row['postalNr'] . '<br />' . $row['city'] . '<br />' . $row['phone'];

}
 
mysql_close($link);//stänger sql

$html = <<< EOD
{$head}
		<title>{$title}</title>
	</head>
	<body>
	<div class="div">
		Min OOPHP
	</div>
	{$header}
	<div class="field">
		<div class="h1">Sök person</div>
		{$form}
		<fieldset class="searchField">
		<div class="fieldleft">
		{$ds}
		</div>
		<div class="fieldright">
		{$results}
		</div>
		</fieldset>
	</div>

			{$footer}
	</body>
</html>
EOD;


header("Content-Type: application/xhtml+xml; charset={$charset}");
echo $html;
exit;
?>
