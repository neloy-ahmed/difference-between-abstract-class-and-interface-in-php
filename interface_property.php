<?php
interface World{
		
	public function draw_map($country_name);
	public function draw_flag($country_name);
	
	const b = 'Interface constant';
	
	//Fatal error: Interfaces may not include member variables
	public $var1 = 'hello ' . 'world';
	
	
}