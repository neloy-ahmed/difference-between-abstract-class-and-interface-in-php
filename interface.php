<?php
interface World{
	public function draw_map($country_name);
	public function draw_flag($country_name);
	
	
}

class Bangladesh implements World{
	public function draw_map($country_name){
		print "Map of $country_name <br/>";
	}
	
	public function draw_flag($country_name){
		print "Flag of $country_name <br/>";
	}
}

?>
