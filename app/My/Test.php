<?php

namespace App\My;

class Test
{
    private $name;
    
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return strtoupper($this->name);
    }
}