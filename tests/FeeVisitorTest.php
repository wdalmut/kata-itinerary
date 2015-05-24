<?php
namespace Walter;

class FeeVisitorTest extends \PHPUnit_Framework_TestCase
{
    public function testSimplePrice()
    {
        $flight = new Flight();
        $flight->setPrice(100.00);

        $visitor = new FeeVisitor();
        $visitor->visit($flight);

        $this->assertEquals(10, $visitor->getFee());
    }

    public function testVisitHotel()
    {
        $hotel = new Hotel();
        $hotel->setPrice(100.00);

        $visitor = new FeeVisitor();
        $visitor->visit($hotel);

        $this->assertEquals(4, $visitor->getFee());
    }

    public function testVisitMixedItinerary()
    {
        $flight = new Flight();
        $flight->setPrice(100.00);

        $hotel = new Hotel();
        $hotel->setPrice(100.00);

        $visitor = new FeeVisitor();

        $itinerary = new Itinerary();
        $itinerary->add($flight);
        $itinerary->add($hotel);

        $itinerary->accept($visitor);

        $this->assertEquals(14, $visitor->getFee());
    }
}
