<meta http-equiv="refresh" content="5; URL=localhost:8888">

<?php




$i = 0;

while ($i < 10) {
	echo($i);
	$i++;
}

echo(" ");
$i = 0;

do {
	echo($i);
	$i++;
} while ($i < 10);

echo(" ");

for($i=0; $i<10; $i++){
	if($i%2 == 0){
		echo($i);
	}
}

echo(" ");

$integers = [
	4, 5, 6, 
	array(6.1,6.2,6.3,6.4)
];


foreach ($integers as  $value)  {
		if(is_array($value)){
			foreach ($value as $subvalue) {
				echo(
					" & subvalue: ".
					$subvalue .
					"; "
				);
			}
		}
		else {
			echo(
				" & value: ".
				$value .
				"; "
			);
		}
}

echo(" --  - -- - - - - \n");

for($i=0; $i < count($integers); $i++){
	if(!is_array($integers[$i]))
		echo($integers[$i]);
}

echo(" --  - -- - - - - \n");
$i = 0;
while($i<count($integers)){
	if(!is_array($integers[$i])){
		echo($integers[$i]);
	}
	$i++;	
}


?>
