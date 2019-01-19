<?php
 abstract class World{
	abstract protected function draw_map($country_name);
	abstract protected function draw_flag($country_name);

	public function show_info(){
		print "This is an abstract class for World";
	}
}

class Country extends World{
	protected function draw_map($country_name){
		print "Map of $country_name <br/>";
	}
	
	public function draw_flag($country_name){
		print "Flag of $country_name <br/>";
	}
}

$bangladesh = new Country();
$bangladesh->draw_flag("Bangladesh");
$bangladesh->show_info();
