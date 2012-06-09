<html>
<head>
<title>If satser, antal tecken i sträng</title>
<meta charset="utf-8"> 

</head>


<body>

<?php

error_reporting (E_ALL);

$s1=1;
$s2=12;
$s3=123;
$s4=1234;
$s5=12345;

$s6 = $s1 . $s2 . $s3 . $s4 . $s5;

echo "variabel 's6' innehåller " . $s6;
echo "<br />";

$t1 =  strlen($s1);
$t2 =  strlen($s2);
$t3 =  strlen($s3);
$t4 =  strlen($s4);
$t5 =  strlen($s5);
$t6 =  strlen($s6);
$t15 = $t1 + $t2 + $t3 + $t4 + $t5;

echo $t6;
echo "<br />";
echo $t5;
echo "<br />";
echo $t4;
echo "<br />";
echo $t3;
echo "<br />";
echo $t2;
echo "<br />";
echo $t1;
echo "<br />";
echo " 't1-t5' innehåller totalt " . $t15 . " tecken<br />";


if($t15 == $t6)
{
	echo "'t6' och 't15' har samma värden<br />";
}
else
{
	echo "'t6' och 't15' har inte samma värden<br />";
}


echo ($t15 == $t6 ? "'t6' och 't15' har samma värden" :  "'t6' och 't15' har inte samma värden") . "<br />"; //variant på if-sats


?>

</body>
</html>
