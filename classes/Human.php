<?php

namespace classes;

abstract class Human
{
    public $name, $surname, $id;

    function __construct($name, $surname, $id){
        $this->name = $name;
        $this->surname = $surname;
        $this->id = $id;
    }

    function render(){
    echo "Name: {$this->name} <br> Surname: {$this->surname} <br> Id: {$this->id}";
    }
}