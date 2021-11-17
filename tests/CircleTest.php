<?php

declare(strict_types=1);

require_once './src/Circle.php';

use Geometry\Circle;
use PHPUnit\Framework\TestCase;

final class CircleTest extends TestCase
{
    public function testCalculateArea(): void
    {
        $circle = new Circle(20);

        $this->assertEquals(
            1256.64,
            $circle->calculateArea()
        );
    }

    public function testClone(): void
    {
        $circle = new Circle(20);
        $circleClone = $circle->clone();

        $this->assertInstanceOf(
            Circle::class,
            $circleClone
        );

        $this->assertNotSame(
            $circle,
            $circleClone
        );
    }
}
