<?php
namespace Walter;

use Prophecy\Argument;

class ItineraryTest extends \PHPUnit_Framework_TestCase
{
    public function testAcceptingVisitors()
    {
        $mock = $this->prophesize("Walter\\Visitor");
        $mock->visit(Argument::Any())->shouldBeCalled();

        $itinerary = new Itinerary();
        $itinerary->add("something");

        $itinerary->accept($mock->reveal());
    }
}
