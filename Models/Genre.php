<?php

class Genre
{
    private $name;

    // Costruttore
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}
