<?php

namespace App\Models; 

class Login
{
    public $uname = array("mom", "rayhan","ahmed","sakib1","kamal","jack22");
    public $pass = array("123","23","1234");
    public $count=0;

    public function login($n, $p){
        foreach ($this->uname as $value) {
            if ($value == $n) {
                $this->count++;
          }
        }

        foreach ($this->pass as $value) {
            if ($value == $p) {
                $this->count++;
          }
        }
        
        if ($this->count == 2) {
            return "login successfull";
      }
      $this->count=0;
    }
}