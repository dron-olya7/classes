<?php

namespace classes;

class Student extends Human
{
    public $role;

    public function __construct($name, $surname, $id, $role)
    {
        parent::__construct($name, $surname, $id);
        $this->id = 2;
        $this->role = $role;
    }

    function itsEmployee($role){
        $this->role = $role;
    }
}