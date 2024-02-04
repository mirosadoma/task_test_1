<?php

namespace Task1\Models;

class Address
{
    protected $city;
    protected $street;
    protected $country;
    protected $nearest_point;
    protected $map;

    public function getCty()
    {
        return $this->city;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getNearestPoint()
    {
        return $this->nearest_point;
    }

    public function getMap()
    {
        return $this->map;
    }
    public function setCity($city)
    {
        return $this->city = $city;
    }

    public function setStreet($street)
    {
        return $this->street = $street;
    }

    public function setCountry($country)
    {
        return $this->country = $country;
    }

    public function setNearestPoint($nearest_point)
    {
        return $this->nearest_point = $nearest_point;
    }

    public function setMap($map)
    {
        return $this->map = $map;
    }

    public function create() {
        $address = new self();
        $address->setCity('cairo');
        $address->setStreet('el tahrir');
        $address->setCountry('egypt');
        return $address;
    }
}