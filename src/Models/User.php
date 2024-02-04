<?php

namespace Task1\Models;

class User
{
    protected $name;
    protected $address;
    protected $age;
    protected $gender;
    protected $image;

    
    public function __construct(Address $address = null){
        $this->setAddress($address);
    }

    public function getName()
    {
        return $this->name;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getGender()
    {
        return $this->gender;
    }
    public function getImage()
    {
        return $this->image;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }
    public function setAddress($address)
    {
        return $this->address = $address;
    }
    public function setAge($age)
    {
        return $this->age = $age;
    }
    public function setGender($gender)
    {
        return $this->gender = $gender;
    }
    public function setImage($image)
    {
        return $this->image = $image;
    }

    public function create() {
        $user = new self();
        $user->setName('ahmed mohamed');
        $user->setAddress($this->getAddress());
        return $user;
    }

    public function notify($message){
        /**
         * TODO
         * we need to add channel to send notification to user but not now
         */
    }
}