<?php
/**
 * Created by PhpStorm.
 * User: zaratedev
 * Date: 26/06/18
 * Time: 02:04 PM
 */

class Circle implements ShapeInterface
{
    protected $radius;

    /**
     * Circle constructor.
     * @param $radius
     */
    public function __construct($radius)
    {
        $this->radius = $radius;
    }


    public function area()
    {
        return $this->radius * $this->radius * pi();
    }
}