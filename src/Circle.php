<?php

namespace Geometry;

use Geometry\Util\ISequence;

class Circle extends Shape {

    const TYPE = 3;

    protected $radius;

    public function __construct(ISequence $sequenceGenerator, $radius) {
        $this->radius = $radius;
        parent::__construct($sequenceGenerator, $radius, $radius);
    }

    /**
     * get the area
     * @return float
     */
    public function calculateArea()
    {
        $area = pi() * ($this->radius * $this->radius);
        
        return number_format($area,2,'.','');
    }

    /**
     * clone
     * @return self
     */
    public function clone()
    {
        $clone = clone $this;
        unset($clone->width);
        unset($clone->length);
        return $clone;
    }

}