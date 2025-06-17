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

    public function walk()
    {
        return "Хожу я тоже на четырех ногах";
    }

    public function talk()
    {
        return $this->human->talk();
    }

    public function think()
    {
        return $this->human->think();
    }
    
    public function run()
    {
        return $this->horse->run();
    }

    public function eat()
    {
        return "Предпочитаю человеческую еду";
    }

    public function jump()
    {
        return $this->horse->jump();
    }
}