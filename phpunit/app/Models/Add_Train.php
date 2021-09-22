<?php

namespace App\Models;

class AddTrain
{
    public $uname = array("15","2021-09-06","700","Available","BRAC","UYU","08:10:00");
    public $count=0;

    public function addtrain($a, $b, $c, $d, $e, $f, $g){
        $add_array=array();

        array_push($add_array,$a, $b, $c, $d, $e, $f, $g);
        for($i=0; $i<count($add_array); $i++)
        {
            for($j=0; $j<count($this->uname); $j++)
            {
                if($add_array[$i]==$this->uname[$j]){
                    $this->count++;
                }

            }
        }
        if($this->count==7){
            return "added successfully";
        }

    }

}