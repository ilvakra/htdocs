<?php


class Device{

	public $year;
	public $manufacturer;
	
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

}


$device = new Device();
$device->setYear(2017);
$device->setManufacturer("Siemens");
print($device->getFullInfo());


