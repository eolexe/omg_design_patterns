<?php
require_once 'Salon.php';

class SalonTest extends PHPUnit_Framework_TestCase
{
    public function test_provideService()
    {
        $expectedResult = "Salon service for Men: Haircut Styling Coloring ";

        $main = new Salon();
        $actualResult = $main->provideService();
        $this->assertEquals($expectedResult, $actualResult);
        var_dump($actualResult);
    }
}