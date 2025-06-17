<?php

class Centaur
{
    private Human $human;
    
    private Horse $horse;

    public function __construct()
    {
        $this->human = new Human();
        $this->horse = new Horse();
    }

    public function walk(): string
    {
        return "Хожу я тоже на четырех ногах";
    }

    public function talk(): string
    {
        return $this->human->talk();
    }

    public function think(): string
    {
        return $this->human->think();
    }
    
    public function run(): string
    {
        return $this->horse->run();
    }

    public function eat(): string
    {
        return "Предпочитаю человеческую еду";
    }

    public function jump(): string
    {
        return $this->horse->jump();
    }
}