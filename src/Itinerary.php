<?php
namespace Walter;

use Doctrine\Common\Collections\ArrayCollection;

class Itinerary extends ArrayCollection implements Visitable
{
    public function accept(Visitor $visitor)
    {
        foreach ($this as $element) {
            $visitor->visit($element);
        }
    }
}
