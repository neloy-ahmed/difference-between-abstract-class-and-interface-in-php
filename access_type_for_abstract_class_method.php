<?php

abstract class World{
	abstract public function show_population($country_name);
	abstract protected function draw_map($country_name);
	
	//Fatal error: Abstract function World::draw_flag() cannot be declared private
	abstract private function draw_flag($country_name);

	public function show_info(){
		print "This is an abstract class for World";
	}
}