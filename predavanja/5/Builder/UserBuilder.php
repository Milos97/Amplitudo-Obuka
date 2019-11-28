<?php

namespace Amplitudo\Patterns\Builder;

class UserBuilder
{
    /**
     * @var User
     */
    protected $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function setFirstName($name): UserBuilder
    {
        $this->user->firstName = $name;
        return $this;
    }
 
    public function setLastName($name): UserBuilder
    {
        $this->user->lastName = $name;
        return $this;
    }

    public function setAgeName($age): UserBuilder
    {
        $this->user->age = $age < 0 ? 0 : $age;
        return $this;
    }

    public function male(): UserBuilder
    {
        $this->user->gender = 'm';
        return $this;
    }

    public function female(): UserBuilder
    {
        $this->user->gender = 'f';
        return $this;
    }

    public function setEyeColor($color): UserBuilder
    {
        $this->user->eyeColor = $color ?? 'brow';
        return $this;
    }

    public function setHairColor($color): UserBuilder
    {
        $this->user->hairColor = $color ?? 'brow';
        return $this;
    }

    public function wage($amout): UserBuilder
    {
        $this->user->wage = $amout * 100;
        return $this;
    }
    
    public function build(): User
    {
        return $this->user;
    }
}














