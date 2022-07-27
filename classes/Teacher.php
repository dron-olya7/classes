<?php

namespace classes;

class Teacher extends Employee
{


    public function __construct($name, $surname, $id, $role)
   {
       parent::__construct($name, $surname, $id, $role);
       $this->role = 'Teacher';
   }
}