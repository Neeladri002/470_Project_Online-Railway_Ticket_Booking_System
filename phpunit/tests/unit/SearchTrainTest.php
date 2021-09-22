<?php

class SearchTrainTest extends \PHPUnit\Framework\TestCase
{
    protected $user;
 
    public function testsearchTrain()
    {
        $this->user = new \App\Models\SearchTrain;
        $this->assertEquals( $this->user->searchTrain("15"),"Train Found");
    }
 
}