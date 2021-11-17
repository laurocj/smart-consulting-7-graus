<?php

declare(strict_types=1);

use Geometry\Circle;
use Geometry\Util\SequenceMicrotime;
use PHPUnit\Framework\TestCase;

final class CircleTest extends TestCase
{
    private $sequenceGenerator;

    protected function setUp(): void
    {
        $this->sequenceGenerator = new SequenceMicrotime();
    }
    
    public function testCalculateArea(): void
    {
        $circle = new Circle($this->sequenceGenerator, 20);

        $this->assertEquals(
            1256.64,
            $circle->calculateArea()
        );
    }

    public function testClone(): void
    {
        $circle = new Circle($this->sequenceGenerator, 20);
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
