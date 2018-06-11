<?php

error_reporting(-1);
ini_set('display_errors', 'On');

class Device{

	public $year;
	public $manufacturer;
	public static $all_manufacturers;
	public $id;
	// protected $servername etc


	function __construct($id = null){
		print("Parent Construction!");

		$servername = "localhost";
		$username = "root";
		$password = "root";
		$db = "sveiksSQL";

		$conn = mysqli_connect($servername, $username, $password, $db);


		$sql = "SELECT * FROM `microphones` where id=$id";

		$result = $conn->query($sql);
		// var_dump($result);
		if($result->num_rows>0){
			// echo('Ir rezultāts! - - - - - ');

	   		while($row = $result->fetch_assoc()) 
	   		{

	   			// var_dump($row);
	   			$this->setYear($row['year']);
	   			$this->setManufacturer($row['manufacturer']);
	   		}
	        
	    
		}
		else{
			echo("Nav rezultāts");
		}

	}
	
	public function getYear(){
		return $this->year;
	}
	public function setYear($year){
		$this->year = $year;
	}

	public function getManufacturer(){
		return $this->manufacturer;
	}
	public function setManufacturer($manufacturer){
		$this->manufacturer = $manufacturer;
		
	}

	public function getFullInfo(){
		return ($this->manufacturer . " " . $this->year);
	}

	public static function getAllManufacturers(){
		
		//db?

		return ["Siemens", "Bosch", "Apple", "Audi"];
		// return array("Siemens", "Bosch", "Apple", "Audi");
	}

}

class Microphone extends Device{

	public $color;

	public function getFullInfo(){
		return ($this->manufacturer . " " . $this->year . " ( mikrofons! ) ");
	}
}


// $device = new Device();
// $device->setYear(2017);
// $device->setManufacturer("Siemens");
// print($device->getFullInfo());
// var_dump(Device::getAllManufacturers());
$mikrofons = new Microphone(3);
// $mikrofons->setYear(2016);
// $mikrofons->setManufacturer("Samsung");
print($mikrofons->getFullInfo());


