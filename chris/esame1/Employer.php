<?php

include 'User.php';

class Employer extends User{
    protected $salary;

    public function __construct(){

        $this->salary = 1000;

    }

    public function promotion() {
        $twenty_percent = $this->salary * 20 / 100;
        $this->salary = $this->salary + $twenty_percent;
    }

    public function getSalary() : int {
        return $this->salary;
    }
}

