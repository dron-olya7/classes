<?php

namespace classes;

class Employee extends Human
{
    public $role;

    function __construct($name, $surname, $id)
    {
        parent::__construct($name, $surname, $id);
        $this->role = $role;
    }
}