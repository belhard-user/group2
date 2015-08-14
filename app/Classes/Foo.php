<?php

namespace App\Classes;

class Foo implements IFoo
{
    public $name;

    public function __construct($name='John')
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}