<?php

namespace classes;

class Programmer extends Student
{
    public $role;

    public function __construct($name, $surname, $id, $role)
    {
        parent::__construct($name, $surname, $id, $role);
        $this->role = 'Programmer';
    }
}