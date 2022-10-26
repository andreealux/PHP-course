<?php

class Person
{
    public string $name;
    public int $age;
    private ?float $salary;

    public function __construct($n, $a, $s){
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    /**
     * @return float|null
     */
    public function getSalary(): ?float
    {
        return $this->salary;
    }

    /**
     * @param float|null $salary
     */
    public function setSalary(?float $salary): void
    {
        $this->salary = $salary;
    }

}