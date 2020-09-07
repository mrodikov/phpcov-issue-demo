<?php

class ChickenTest extends \PHPUnit\Framework\TestCase
{

    public function testUnseasonedChickenRecipe()
    {
        $chicken = new Chicken();
        $this->assertSame('NOT_SO_YAMMY', $chicken->prepareWithoutSeasoning(), 'Unseasoned chicken should not be yammy');
    }

}