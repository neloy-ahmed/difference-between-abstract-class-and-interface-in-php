<?php
interface World{
	public function draw_map($country_name);
	public function draw_flag($country_name);
	
	//Fatal error: Interface function World::show_info() cannot contain body
	public function show_info(){
		print "This is an interface for World";
	}
}