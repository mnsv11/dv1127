<?php
include('names.php');

// Error handling on/off
//
error_reporting(E_ALL | E_STRICT);
$debug = "";
$debugEnable = TRUE;  // TRUE to enable debugging, FALSE to not print out debug information

$uc =  new CUserController();

$user = "";
$pwd = "";
$sucsess ="";

$form = <<< EOD
<div>
    <form action='{$_SERVER['PHP_SELF']}' method='post'>
    <fieldset class="hidden">
    	User name <input type='text' name='user' value='{$user}' />
    	Password <input type='text' name='pwd' value='{$pwd}' />
    	<button name="Submit" type='submit' value="Submit">Login</button>
    	</fieldset>
    </form>
</div>

EOD;
if (isset($_POST['Submit'])){
	$check = $uc->Login($_POST['user'],$_POST['pwd'], $users);

	if($check == true)
	{
		$sucsess = "Du är inloggad";
	}
	else
	{
		$sucsess = "Fail";
	}

}
$title         = "Login";
$html = <<< EOD

<title>{$title}</title>
</head>

<body>
   <div>

   {$form}    
   <br />
   {$sucsess}
    </div>

</body>
</html>
EOD;


echo $html;
