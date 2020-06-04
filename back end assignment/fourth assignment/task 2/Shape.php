<?php

class Shape
{
    const SHAPE_TYPE = 1;
    public $name;
    protected $length;
    protected $wigth;
    private $id;

    public function __construct($length, $wigth)
    {
        $this->length = $length;
        $this->wigth = $wigth;
        $this->id = uniqid();
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function area()
    {
        return ($this->length * $this->wigth);
    }

    public static function getTypeDescription()
    {
        return ("Type: " . Shape::SHAPE_TYPE);
    }

    public function getFullDescription()
    {
        return ("Shap<#" . $this->getId() . ">: " . $this->getName() . " - " . $this->length . "x" . $this->wigth);
    }
}

?>