<?php
use PHPUnit\Framework\TestCase;

class CentaurTest extends TestCase
{

    private Centaur $centaur;
    private Human $human;
    private Horse $horse;

    protected function setUp(): void
    {
        $this->centaur = new Centaur();
        $this->human = new Human();
        $this->horse = new Horse();
    }
    public function testHumanActions()
    {
    
        $this->assertEquals("Хожу я тоже на четырех ногах", $this->centaur->walk());
        $this->assertEquals("Говорю человеческим голосом", $this->centaur->talk());
        $this->assertEquals("Думаю и рассуждаю", $this->centaur->think());

        // Centaur and human walk different way.
        $this->assertNotEquals($this->centaur->walk(), $this->human->walk());
    }
    
    public function testHorseActions()
    {
        $this->assertEquals("Бегу на четырех копытах", $this->centaur->run());
        $this->assertEquals("Предпочитаю человеческую еду", $this->centaur->eat());
        $this->assertEquals("Перепрыгиваю препятствие", $this->centaur->jump());

        // Centaur and horse est different food.
        $this->assertNotEquals($this->centaur->eat(), $this->horse->eat());
    }
}