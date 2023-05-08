<?php
require_once __DIR__ . '/../Traits/Weightable.php';



class Animal
{
    use Weightable;
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}