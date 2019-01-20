<?php 
namespace test;

use PHPUnit\Framework\TestCase;
use EuclideanDistance\Worker;

class WorkerTest extends TestCase
{
    public function setUp()
    {
        $this->worker = new Worker();
    }
    
    public function tearDown()
    {
        $this->worker = null;
    }

    /**
     * @test
     */
    public function calculates_distance_beteen_x_y_cordinates()
    {
        //Given
        $x1 = 32.9697;
        $y1 = -96.80322;
        $x2 = 29.46786;
        $y2 = -98.53506;

        $expectedResult = 3.8019654625189587;

        $actualResult = $this->worker->calculateDistance($x1, $y1, $x2, $y2);

        $this->assertEquals(
            $expectedResult,
            $actualResult
        );
    } 
}
