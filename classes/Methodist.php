<?php

namespace classes;

class Methodist extends Employee
{
    public function __construct($name, $surname, $id, $role)
    {
        parent::__construct($name, $surname, $id, $role);
        $this->role = 'Manager';
    }
}