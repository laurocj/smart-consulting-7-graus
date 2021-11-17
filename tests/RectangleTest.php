<?php

declare(strict_types=1);

use Geometry\Rectangle;
use Geometry\Shape;
use Geometry\Util\SequenceMicrotime;
use PHPUnit\Framework\TestCase;

final class RectangleTest extends TestCase
{
    private $sequenceGenerator;

    protected function setUp(): void
    {
        $this->sequenceGenerator = new SequenceMicrotime();
    }

    public function testTheDefinitionOfTheConstant(): void
    {
        $rectangle = new Rectangle($this->sequenceGenerator, 20, 15);

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
        $rectangle = new Rectangle($this->sequenceGenerator, 10, 15);

        $this->assertEquals(
            150,
            $rectangle->calculateArea()
        );
    }
}
