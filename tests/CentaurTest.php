<?php
use PHPUnit\Framework\TestCase;

class CentaurTest extends TestCase
{

    private Centaur $centaur;

    protected function setUp(): void
    {
        $this->centaur = new Centaur();
    }
    public function testHumanActions()
    {
    
        $this->assertEquals("Хожу на двух ногах", $this->centaur->walk());
        $this->assertEquals("Говорю человеческим голосом", $this->centaur->talk());
        $this->assertEquals("Думаю и рассуждаю", $this->centaur->think());
    }
    
    public function testHorseActions()
    {
        $this->assertEquals("Бегу на четырех копытах", $this->centaur->run());
        $this->assertEquals("Ем траву и сено", $this->centaur->eat());
        $this->assertEquals("Перепрыгиваю препятствие", $this->centaur->jump());
    }
}