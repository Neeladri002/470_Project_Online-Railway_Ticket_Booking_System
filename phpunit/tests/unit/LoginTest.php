<?php

class LoginTest extends \PHPUnit\Framework\TestCase
{
    protected $user;
    public function testLogin()
    {
        $this->user = new \App\Models\Login;
        $this->assertEquals( $this->user->login("rayhan", "123"),"login successfull");
    }
}