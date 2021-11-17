<?php

namespace Geometry;

use Geometry\Util\ISequence;

class Shape
{

    const TYPE = 1;

    private $id;
    public $name;
    protected $width;
    protected $length;

    protected $sequenceGenerator;


    public function __construct(ISequence $sequenceGenerator, int $width, int $length, string $name = null)
    {
        $this->sequenceGenerator = $sequenceGenerator;
        $this->setId();
        $this->setName($name);
        $this->setWidth($width);
        $this->setLength($length);
    }

    /**
     * get id
     * @return int 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * set id
     * @param int $id
     * @return self
     */
    public function setId($id = null)
    {
        if (is_null($id)) {
            $id = $this->sequenceGenerator->nextId();
        }

        $this->id = $id;
        return $this;
    }

    /**
     * set name
     * @param string $name
     * @return self
     */
    public function setName(string $name = null)
    {
        if (is_null($name)) {
            $name = get_class($this);
        }

        $this->name = $name;

        return $this;
    }

    /**
     * set width
     * @param int $width
     * @return self
     */
    private function setWidth(int $width)
    {
        $this->width = $width;
    }

    /**
     * set length
     * @param int $length
     * @return self
     */
    private function setLength(int $length)
    {
        $this->length = $length;
    }

    /**
     * get the shape area
     * @return float
     */
    public function calculateArea()
    {
        return $this->width * $this->length;
    }

    /**
     * clone
     * @return self
     */
    public function clone()
    {
        return clone $this;
    }
}
