<?php 

class Rectangle extends Shape
{
    const SHAPE_TYPE = 2;

    public static function getTypeDescription()
    {
        return ("Type: " . Rectangle::SHAPE_TYPE);
    }
}

?>