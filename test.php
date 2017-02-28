<?php

class Mammals
{
    public $numberOfLegs = 4;
    
    public function eat(string $what) : string
    {
        return 'I am eating ' . $what . '!';
    }
}

class Dogs extends Mammals
{
    public function eat(string $what): string
    {
        return 'I like eating ' . $what . '!';
    }

    public function getLegs()
    {
        return $this->numberOfLegs;
    }
}

function feed(Mammals $mammal, string $what)
{
    $mammal->numberOfLegs = 100;
    echo $mammal->eat($what);
}

$mammal = new Mammals();
$fido = new Dogs();

feed($fido, 'dog food');
echo "<br />";
feed($mammal, 'meat');
echo "<br />";
echo 'A dog has ' . $fido->getLegs() . ' legs.';
echo "<br />";