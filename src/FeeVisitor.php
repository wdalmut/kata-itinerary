<?php
namespace Walter;

class FeeVisitor implements Visitor
{
    private $fee;

    public function visit($element)
    {
        if ($element instanceOf Flight) {
            $this->visitFlight($element);
        } else if ($element instanceOf Hotel) {
            $this->visitHotel($element);
        }
    }

    private function visitFlight(Flight $flight)
    {
        $this->fee += $flight->getPrice() * 10 / 100;
    }

    private function visitHotel(Hotel $hotel)
    {
        $this->fee += $hotel->getPrice() * 4 / 100;
    }

    public function getFee()
    {
        return $this->fee;
    }
}
