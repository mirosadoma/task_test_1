<?php

namespace Task1\Models;

class Country
{
    protected $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function create() {
        $country = new self();
        $country->setName('egypt');
        return $country;
    }
}