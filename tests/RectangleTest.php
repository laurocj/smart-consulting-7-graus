<?php

declare(strict_types=1);

require_once './src/Rectangle.php';

use Geometry\Rectangle;
use Geometry\Shape;
use PHPUnit\Framework\TestCase;

final class RectangleTest extends TestCase
{

    public function testTheDefinitionOfTheConstant(): void
    {
        $rectangle = new Rectangle(20, 15);

        $this->assertEquals(
            $rectangle::TYPE,
            Rectangle::TYPE
        );

        $this->assertNotEquals(
            $rectangle::TYPE,
            Shape::TYPE
        );
    }

    public function testCalculateArea(): void
    {
        $rectangle = new Rectangle(10, 15);

        $this->assertEquals(
            150,
            $rectangle->calculateArea()
        );
    }
}
