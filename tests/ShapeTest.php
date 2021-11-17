<?php

declare(strict_types=1);

require_once './src/Shape.php';

use Geometry\Shape;
use PHPUnit\Framework\TestCase;

final class ShapeTest extends TestCase
{
    public function testUniqueId(): void
    {
        $shape1 = new Shape(20, 20);
        $shape2 = new Shape(20, 20);

        $this->assertNotEquals(
            $shape1->getId(),
            $shape2->getId()
        );
    }

    public function testHasAttribute(): void
    {
        $shape = new Shape(20, 20);

        $this->assertObjectHasAttribute(
            'id',
            $shape
        );

        $this->assertObjectHasAttribute(
            'name',
            $shape
        );

        $this->assertObjectHasAttribute(
            'width',
            $shape
        );

        $this->assertObjectHasAttribute(
            'length',
            $shape
        );
    }

    public function testCalculateArea(): void
    {
        $shape = new Shape(20, 20);

        $this->assertEquals(
            400,
            $shape->calculateArea()
        );
    }

    public function testClone(): void
    {
        $shape = new Shape(20, 20);
        $shapeClone = $shape->clone();

        $this->assertInstanceOf(
            Shape::class,
            $shapeClone
        );

        $this->assertNotSame(
            $shape,
            $shapeClone
        );
    }
}
