<?php


class Device{

	public $year;
	public $manufacturer;
	// ražotājs
	// gads

}


$device = new Device();
$device->setYear(2017);
$device->setManufacturer("Siemens");
print($device->getFullInfo());


