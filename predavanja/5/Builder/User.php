<?php

namespace Amplitudo\Patterns\Builder;

class User
{
    public $firstName;
    public $lastName;
    public $age;
    public $gender;
    public $eyeColor;
    public $hairColor;
    public $wage;

    public function toString()
    {
        $variables = get_object_vars($this);
        $variables = array_keys($variables);
        $output = '';

        foreach ($variables as $variable) {
            $output .= ' ' . $this->{$variable};
        }

        return $output;
    }
}

 












