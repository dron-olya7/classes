<?php

namespace classes;

class Manager extends Employee
{
    public function __construct($name, $surname, $id, $role)
    {
        parent::__construct($name, $surname, $id, $role);
        $this->role = 'Methodist';
    }
}