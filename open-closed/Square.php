<?php

class Square implements ShapeInterface {

    public $width;
    public $height;

    /**
     * Square constructor.
     * @param $width
     * @param $height
     */
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }


    public function area()
    {
        return $this->width + $this->height;
    }
}