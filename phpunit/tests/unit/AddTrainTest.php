<?php

class AddTrainTest extends \PHPUnit\Framework\TestCase
{
    protected $user;
    public function testaddTrain()
    {
        $this->user = new \App\Models\Add_Train;
        $this->assertEquals( $this->user->add_train("15","2021-09-06","700","Available","BRAC","UYU","08:10:00"),"added successfully");

    }
}