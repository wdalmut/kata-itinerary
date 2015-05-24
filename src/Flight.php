<?php
namespace Walter;

class Flight
{
    private $price;
    private $departure;
    private $arrival;

    public function getArrival()
    {
        return $this->arrival;
    }

    public function setArrival($arrival)
    {
        $this->arrival = $arrival;
        return $this;
    }

    public function getDeparture()
    {
        return $this->departure;
    }

    public function setDeparture($departure)
    {
        $this->departure = $departure;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
}



