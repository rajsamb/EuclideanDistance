<?php 
namespace test;

use PHPUnit\Framework\TestCase;
use EuclideanDistance\Calculate\EuclideanDistance;

class EuclideanDistanceTest extends TestCase
{
    /**
     * @test
     */
    public function displays_hello_world_message()
    {
        $this->assertEquals(
            'Hello World',
            EuclideanDistance::sayHelloWorld()
        );
    } 
}
