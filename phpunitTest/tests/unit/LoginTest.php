<?php

class LoginTest extends \PHPUnit\Framework\TestCase
{
    protected $user;
    public function testLogin()
    {
        $this->user = new \App\Models\Login;
        $this->assertEquals( $this->user->login("admin", "123456"),"login successfull");
    }
}