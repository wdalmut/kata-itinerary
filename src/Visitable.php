<?php
namespace Walter;

interface Visitable
{
    public function accept(Visitor $visitor);
}
