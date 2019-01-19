
<?php
interface World
{
    public function draw_flag();
}

interface Animal
{
    public function sounds();
}


class Cat implements World, Animal
{	
	private $country_name = "Bangladesh";
	
    public function draw_flag()
    {
		print "Flag of {$this->country_name} <br/>";
    }

    public function sounds()
    {
		print "Cat of {$this->country_name} sounds mewooo!";
    }

    
}

$cat = new Cat();
$cat->sounds();
?>
