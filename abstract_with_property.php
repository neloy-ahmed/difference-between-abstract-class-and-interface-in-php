<?php

abstract class World{
	
	//Abstract class can contain variable
	public $var1 = 'hello ' . 'world';
	
	//Abstract class can also contain constant
	const b = 'i\'m a constant';
	
	abstract protected function draw_map($country_name);
	abstract public function draw_flag($country_name);

	public function show_info(){
		print "This is an abstract class for World";
	}
}