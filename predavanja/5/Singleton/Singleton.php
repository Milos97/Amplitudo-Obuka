<?php

namespace Amplitudo\Patterns\Singleton;

class Singleton
{
    /**
     * @var Singleton
     */
    protected static $instance;

    protected $number;

    private function __construct()
    {
        $this->number = rand(10, 1000);
    }

    public function getNumber()
    {
        return $this->number;
    }

    public static function getInstance(): Singleton
    {
        if (!Singleton::$instance) {
            Singleton::$instance = new Singleton();
        }

        return Singleton::$instance;
    }
}












