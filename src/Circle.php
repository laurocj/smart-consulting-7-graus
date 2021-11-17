<?php

namespace Geometry;

use Geometry\Util\ISequence;

class Circle extends Shape
{

    const TYPE = 3;

    protected $radius;

    public function __construct(ISequence $sequenceGenerator, int $radius)
    {
        $this->setRadius($radius);
        parent::__construct($sequenceGenerator, $radius, $radius);
    }

    private function setRadius(int $radius)
    {
        if ($radius == 0) {
            throw new \ArithmeticError("Radius cannot be zero", 1);
        }
        $this->radius = $radius;
    }

    /**
     * get the area
     * @return float
     */
    public function calculateArea()
    {
        $area = pi() * ($this->radius * $this->radius);

        return number_format($area, 2, '.', '');
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
