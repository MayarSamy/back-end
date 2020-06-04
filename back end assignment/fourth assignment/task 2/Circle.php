<?php 

class Circle extends Shape
{
    const SHAPE_TYPE = 3;
    protected $radius;

    public function __construct($radius)
    {
        parent::__construct($this->length, $this->wigth);
        $this->radius = $radius;
    }

    public function area()
    {
       return (3.14 * ($this->radius * $this->radius)); 
    }

    public function getFullDescription()
    {
        return ("Circle<#" . $this->getId() . ">: " . $this->getName() . " - " . $this->radius);
    }

    public static function getTypeDescription()
    {
        return ("Type: " . Circle::SHAPE_TYPE);
    }
}


?>