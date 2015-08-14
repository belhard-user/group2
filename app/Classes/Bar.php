<?php

namespace App\Classes;

class Bar implements IFoo
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