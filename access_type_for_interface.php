<?php
interface World{
	
	
	public function draw_map($country_name);
	
	//Fatal error: Access type for interface method World::draw_flag() must be omitted
	protected function draw_flag($country_name);
	
	
}