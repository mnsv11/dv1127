<?php

echo "<h1>Array funktioner</h1>";
//skapa array1
$A1 = Array(	
	'hej',	
	'fotboll',	
	'zebra',	
	'dator',	
	'skola',	
	);

//skapa array2
$A2 = Array(	
	'gå',	
	'ligga',	
	'springa',	
	'tak',	
	'lampa',	
	);

//skriver ut array1
echo "<hr /><h4>Array1</h4>";
for($i=0; $i<5; $i++) {
	
echo $A1[$i] . "<br />";
}

//skriver ut array2
echo "<hr /><h4>Array2</h4>";
for($i=0; $i<5; $i++) {

echo $A2[$i] . "<br />";
}


//slår ihop 2 arrayer
$A3 = array_merge((array)$A1, (array)$A2);


//skriver ut array 3
echo "<hr /><br /><h4>Array3</h4> <br />";
for($i=0; $i<10; $i++) {

echo $A3[$i] . "<br />";
}


//slumpa och skriver ut
shuffle($A3);

echo "<hr /><br /><h4>Array3 slumpad</h4> <br />";
for($i=0; $i<10; $i++) {

echo $A3[$i] . "<br />";
}


//sortera och skriver ut
sort($A3);
echo "<hr /><br /><h4>Array3 sorterad minst till störst</h4> <br />";
for($i=0; $i<10; $i++) {

echo $A3[$i] . "<br />";
}

rsort($A3);
echo "<br /><h4>Array3 sorterad störst till minst</h4> <br />";
for($i=0; $i<10; $i++) {

echo $A3[$i] . "<br />";
}

//sök och skriver ut

echo "<hr /><br /><h4>Söker Array3</h4> <br />";
$search = array_search('gå', $A3); 

echo $A3[$search] . "<br />";




//array meny
echo "<hr /><br /><h4>Array meny</h4> <br />";

$menu = array(
	"Hem" => "?p=hem",
	"Tjänster" => "?p=service",
	"Verkstad" => "?p=shop",
	"Kontakt" => "?p=contact",
	);
echo "<nav>";



//meny1
foreach($menu as $key=>$val) {

	echo "<a href = '{$val}' >{$key}</a>\n";
}
echo"</nav><br />";




//meny2 2d
$menu = array(
	'home' => array ('text' => 'home', 'href'=>'?p=home', 'title'=>'Go home'),
	'service' => array ('text' => 'service', 'href'=>'?p=service', 'title'=>'Service'),
	"Verkstad" => array ('text' => 'shop', 'href'=>'?p=shop', 'title'=>'Go shop'),
	);
echo "<nav>";
foreach($menu as $key=>$val) {

	echo " <a href = '{$val['href']}' title='{$val['title']}'>{$val['text']}</a>\n";
}
echo"</nav><br />";

//meny3 2d
function HTMLmeny($menu){
	$html= null;
	foreach($menu as $key=>$val) {

	$html .= " <a href = '{$val['href']}' title='{$val['title']}'>{$val['text']}</a>\n";
	}
	return "\n<nav>\n$html</nav>\n";
}

echo HTMLmeny($menu);


//hämta meny från klass
require_once("klass.php");
echo "<h4>meny klass</h4>";
$menyKlass = new meny();
echo $menyKlass->HTMLmeny($menu);//utskriftmetod 1

echo meny::HTMLmeny($menu);//utskriftmetod 2








echo "<br /><br /><hr />" ;
?>
