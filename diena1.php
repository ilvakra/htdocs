 <meta http-equiv="refresh" content="5; URL=localhost:8888">



<?php

error_reporting(-1);
ini_set('display_errors', 'On');

try{

}
catch(Exception $e){
	print($e);
}


$myArray3 = [
	'vards' => 'Joe', 
	'uzvards' => 'Doe', 
	'phone' => '123456789', 
	'hobiji' => [
		'sleposana', 
		'snowbords', 
		'ritenbrauksana'
	],
	'epasti' => [
		'example@email.com',
		'example2@email.com'
	] 
];
foreach ($myArray3 as $key => $value) {
	if( !is_array($value) ){
		print($key . " vertiba ir ". $value . "; \n");
	}
	else {
		print($key . " vertiba ir ");
		// print_r($value);
		// echo('Te sākas hobiju printēšana: ');
		foreach ($value as $key2 => $value2) {
			print($value2 . "; \n");
		}	
	}

// echo('<h1>'. $value . '</h1>;');

}

$flag = 5;


// if(){}

// if(){}elseif(){}

// if(){}elseif(){}elseif(){}elseif(){}elseif(){}

// =""==""=="" else{}



if($flag >= 5){
	echo('yay');
}
elseif ($flag <= 4 ) {
	echo('yay2');
}
else
{
	echo('NaNN???');
}

echo(' ');
switch ($flag) {
	case 1:
		echo('1. ātrums');		
		break;
	case 5:
		echo('5. ātrums');		
		break;
	case 6:
		echo('super ātrums');		
		break;
	default:
		echo('nav ātrums VAI arī dīvains ātrums');
		break;
}



// print_r( 1 +  (int) "1" );




?>