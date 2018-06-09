<?php


class Device{

	public $year;
	public $manufacturer;
	public static $all_manufacturers;
	
	public function getYear(){
		return $this->year;
	}
	public function setYear($year){
		$this->year = $year;
	}

	public function getManufacturer(){
		return $this->company;
	}
	public function setManufacturer($company){
		$this->company = $company;
	}

	public function getFullInfo(){
		return ($this->company . " " . $this->year);
	}

	public static function getAllManufacturers(){
		
		//db?

		return ["Siemens", "Bosch", "Apple", "Audi"];
		// return array("Siemens", "Bosch", "Apple", "Audi");
	}

}

class Microphone extends Device{
	public function getFullInfo(){
		return ($this->company . " " . $this->year . " ( mikrofons! ) ");
	}
}


// $device = new Device();
// $device->setYear(2017);
// $device->setManufacturer("Siemens");
// print($device->getFullInfo());
// var_dump(Device::getAllManufacturers());
$mikrofons = new Microphone();
$mikrofons->setYear(2016);
$mikrofons->setManufacturer("Samsung");
print($mikrofons->getFullInfo());


